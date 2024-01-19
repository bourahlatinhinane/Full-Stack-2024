<?php
session_start();
$_SESSION["studentsToDisplay"]=null;
// include path the the lib_functions file
include_once "../M/lib_functions.php";

$placesList = array("PLACE_1",
"PLACE_2",
"PLACE_3",
"PLACE_4",
"PLACE_5",
"PLACE_6",
"PLACE_7",
"PLACE_8",
"PLACE_9",
"PLACE_10",
"PLACE_11",
"PLACE_12",
"PLACE_13",
"PLACE_14",
"PLACE_15",
"PLACE_16",);
// get the temprary path of the uploaded file
$pathFile = $_FILES['file']['tmp_name'];
//convert the CSV file to a PHP array
$newTab = csvFileToArray ($pathFile);
// extract the list of students from the CSV array
for ($i=0; $i < count($newTab)-1; $i++) { 
    $studentsList[$i]=$newTab[$i][0];
}
//store the list of students in the session 
$_SESSION ["studentsList"]= $studentsList;
//create student locations based on the defined places list
$studentsLocations = createStudentLocations($placesList,$studentsList);
//shuffle the students locations 
$studentsLocations = shuffleLocations($studentsLocations);
//store the shuffled students locations in the session
$_SESSION["studentsToDisplay"]=$studentsLocations;
//save the shuffled stedent locations to a new CSV file
saveToCSVFile($studentsLocations);

//redirect to the displaye page
header("Location:../V/displayShuffleCSV.php");

?>