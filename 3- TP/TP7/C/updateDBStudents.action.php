<?php
include_once "../M/lib_functions.php";
session_start();

$idModif = $_POST[ "idModif" ];
$newName = $_POST[ "newName" ];
updateStudents($newName,$idModif,);
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

$listStudents = selectListsStudents();


for ($i=0; $i < count($listStudents); $i++) { 
    $studentsList[$i]=$listStudents[$i][1];
}



$_SESSION ["studentsList"]= $studentsList;


$studentsLocations = createStudentLocations($placesList,$studentsList);


$studentsLocations = shuffleLocations($studentsLocations);

$_SESSION["studentsToDisplay"]=$studentsLocations;


header("Location:../V/displayShuffle.php");


?>