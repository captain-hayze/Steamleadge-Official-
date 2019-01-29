<?php
  include 'connect.php';
  $thrustl = $_POST['thrustlead'];
  $thrusta = $_POST['thrustassistant'];
  $partskul = $_POST['partskul'];
  $date = $_POST['datey'];
  $class = $_POST['class'];
  $reas = $_POST['reasons'];

 $stmt = $db->prepare("INSERT INTO `unheld` (`ThrustLead`, `ThrustAssistant`, `PartnerSchool`, `Date`, `class`, `reasons`) 
 VALUES ('$thrustl', '$thrusta', '$partskul', '$date', '$class', '$reas')");
 $stmt -> execute();
 echo "Your report has been successfully submitted";
 echo "<script> location.href = 'navigate.html'</script>";
            die();

?>
