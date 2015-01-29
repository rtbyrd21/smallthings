<?php



/*
 * Returns the full list of products. This function contains the full list of products,
 * and the other model functions first call this function.
 * @return   array           the full list of products
 */


function get_product_single($id) {

    require("database.php");

    try {
        $results = $db->prepare("SELECT name, story FROM stories WHERE id = ?");
        $results->bindParam(1,$id);
        $results->execute();
    } catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $product = $results->fetch(PDO::FETCH_ASSOC);

    return $product;
}

?>