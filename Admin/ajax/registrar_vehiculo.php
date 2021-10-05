<?php
  if($_POST['click'] == '1'){
    $mysqli2=new mysqli("b7nvpy1vtadduxzlqosv-mysql.services.clever-cloud.com","ulcoechpsy7vemc6","poShw9zjQ6zjJHwl5bZ3","b7nvpy1vtadduxzlqosv");
    $mysqli2->query($query);
        echo json_encode(array('success' => 2));
}


?>