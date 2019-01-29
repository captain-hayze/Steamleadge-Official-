<?php
  include 'connect.php';
  $thrustl = $_POST['ThrustLh'];
  $thrusta = $_POST['ThrustAh'];
  $date = $_POST['Dateh'];
  $partskul = $_POST['School'];
  $class = $_POST['class'];
  $prog = $_POST['Program'];
  $dura = $_POST['dura'];
  $top = $_POST['topic'];
  $boj = $_POST['behoj'];
  $rema = $_POST['rema'];
  $athens = $_POST['attnum'];
  $attel = $_POST['Attendance'];
  $dd .= $_POST['Concent'];
  $dd .= $_POST['Contri'];
  $dd .= $_POST['compl'];
  $dd .= $_POST['eaa'];
  $dd .= $_POST['organ'];

 $stmt = $db->prepare("INSERT INTO `held` ( `ThrustLead`, `ThrustAssistant`, `Date`, `PartnerSChool`, `Class`, `Program`, `Duration`, `Topic`, `BehaviouralObjective`, `Remarks`, `Attendance`, `Attel`, `TDD`) 
 VALUES ('$thrustl', '$thrusta', '$date', '$partskul', '$class', '$prog', '$dura', '$top', '$boj', '$rema', '$athens', '$attel', '$dd')");
 $stmt -> execute();
 echo "Your report has been successfully submitted";
 echo "<script> location.href = 'navigate.html'</script>";
            die();

?>