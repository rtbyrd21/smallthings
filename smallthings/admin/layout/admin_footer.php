<?php $date = date('Y-m-d H:i:s'); ?>
</div>
    <div id="footer"></div>  
  </body>

 <script>
    $(document).foundation();
  </script>
</html>
<?php if(isset($database)) {$database->close_connection();} ?>
