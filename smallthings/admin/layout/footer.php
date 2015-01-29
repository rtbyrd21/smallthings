<?php $date = date('Y-m-d H:i:s'); ?>
</div>
    <div id="footer"><?php echo $date ?> </div>  
  </body>
</html>
<?php if(isset($database)) {$database->close_connection();} ?>
