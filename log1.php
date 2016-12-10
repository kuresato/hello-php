<html>
  <body>

    <form method="GET" action="log1.php">
      <input type="text" name="mes" size="40">
    </form>
    
    <pre style="background-color: #EEE">
<?php
echo "Logging.";                                                               
$stdout = fopen('php://stdout', 'w');                                           
fputs($stdout, "this is debug message $_GET['mes']);                                      
?>
    </pre>
  </body>
</html>
