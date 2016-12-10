<?php                                                                           
echo "Logging.";                                                               
$stdout = fopen('php://stdout', 'w');                                           
fputs($stdout, "this is debug message\n");                                      
?>
