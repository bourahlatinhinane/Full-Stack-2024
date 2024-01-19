<?php
// include path the the lib_functions file
include_once "../M/lib_functions.php";

session_start();

$placesList = array(
"PLACE_1",
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
//get the temprary path of the uploaded file
$pathFile = $_FILES['file']['tmp_name'];

$colonnes = getColumnsFromcsv ($pathFile, $_POST["col"]);
$_SESSION["colonnes"] = $colonnes;

//redirect to the displaye page
header("Location:../V/displayShuffleCSV.php");


?>