<?php



function get_products_all() {
   

    require(ROOT_PATH . "inc/database.php");
    
    try {
        $results = $db->query("SELECT name, email, story FROM submitted");
    } catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $products = array_reverse($results->fetchAll(PDO::FETCH_ASSOC));    

    return $products;
}




?>