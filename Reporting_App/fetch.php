<?php

include 'connect.php';
$saps = $_POST['seaps'];
$sd1 = $_POST['sead1'];
$sd2 = $_POST['sead2'];
$tod = 0;
$tad = 0;
$todu = 0;
$todin = 0;
$cc = 0;

echo '<table border = "1" cellspacing = "5" cellpadding = "2">
        <tr><br><h2> Records from classes that held are: </h2></br></tr>
        <tr>
            <td>Thrustlead</td>
            <td>Thrust Assistant</td>
            <td>Partner School</td>
            <td>Date</td>
            <td>Class</td>
            <td>Program</td>
            <td>Topic</td>
            <td>Behavioural Objectives</td>
            <td>Remarks</td>
            <td>TDD</td>
            <td>Attendance</td>
        </tr>';
foreach ($db->query ("select * FROM held WHERE Date BETWEEN '$sd1' and '$sd2'")as $row)
{
    if($row['PartnerSChool'] == $saps)
    {
        $tod = $row['Duration'] + $tod ;
        $todin = $tod/60;
        $tad = $row['Attendance'] + $tad;
               
        echo    
            '<tr>
                    <td>'. $row['ThrustLead'] .'</td>
                    <td>'. $row['ThrustAssistant'] .'</td>
                    <td>'. $row['PartnerSChool'] .'</td>
                    <td>'. $row['Date'] .'</td>
                    <td>'. $row['Class'] .'</td>
                    <td>'. $row['Program'] .'</td>
                    <td>'. $row['Topic'] .'</td>
                    <td>'. $row['BehaviouralObjective'] . '</td>
                    <td>'. $row['Remarks'] .'</td>
                    <td>'. $row['TDD'] . '</td>
                    <td>'. $row['Attendance'] .'</td>
            </tr>';
        
            
            }
            
}
echo '</table>';
   echo "<br> Total hours of above record is $todin </br>";
    echo "<br> total number of attendance $saps in the selected period is $tad </br>";


echo '<table border = "1" cellspacing = "5" cellpadding = "2">
    <tr><br><h2> Records from classes that did not hold are: </h2></br></tr>
    <tr>
            <td>Thrustlead</td>
            <td>Thrust Assistant</td>
            <td>Partner School</td>
            <td>Date</td>
            <td>Class</td>
            <td>Remark</td>';   
foreach ($db->query ("select * FROM unheld WHERE Date BETWEEN '$sd1' and '$sd2'")as $row)
{
    if($row['PartnerSchool'] == $saps)
    {
        $result = $db->query ("SELECT COUNT['ThrustLead'] FROM `unheld`");
        $cc = $result + ($cc+1);
        echo 
            '<tr>
                    <td>'. $row['ThrustLead'] .'</td>
                    <td>'. $row['ThrustAssistant'] .'</td>
                    <td>'. $row['PartnerSchool'] .'</td>
                    <td>'. $row['Date'] .'</td>
                    <td>'. $row['class'] .'</td>
                    <td>'. $row['reasons'] .'</td>
            </tr>';
    }

}
echo '</table>';
echo "<br> number of classes cancelled within this period for $saps is: $cc </br>";
echo '<button onClick = "window.print()">Print</print>';

?>

