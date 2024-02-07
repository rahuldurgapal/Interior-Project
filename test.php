<?php
 
 include("models/UserModel.php");
 include("controllers/DatabaseController.php");

 $db = new DatabaseController();
 $con = $db->getConnection();
 $usermodel = new UserModel($con);

 $data = $usermodel->getData();

 
// echo "<pre>";
// print_r($data);
// echo "</pre>";

 for($i=0;$i<sizeof($data);$i++){
   
   $str = explode(" ",$data[$i]['date']);
  $date = DateTime::createFromFormat('Y-m-d',$str[0]);
  $newdate = $date->format('d/m/y');
  
  echo $newdate, "<br>";

 }

?>