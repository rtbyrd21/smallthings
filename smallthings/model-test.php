<?php
  require_once("inc/config.php");
  require_once("inc/products.php");

  echo "<pre>";
  var_dump(get_products_subset(17,24));