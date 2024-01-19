<?php

/*Inputs :
    $placesList -> tab to list all the places in the class; max size : 16
    $studentsList -> tab to list all students
    return an array [K,V] ex: [[PLACE_1] => "JEREMY", [PLACE_2] => "LORENA"]  
*/
function createStudentLocations(array $placesList, array $studentsList) : array{
    $studentsLocations = array();
    if (sizeof($placesList) == sizeof ($studentsList)) {
        $studentsLocations = array_combine($placesList, $studentsList);
        return $studentsLocations;
    }elseif (sizeof ($placesList) > sizeof ($studentsList)) {
        while (sizeof ($placesList) > sizeof ($studentsList)) {
            array_push ($studentsList, "");  
        }
        $studentsLocations = array_combine($placesList, $studentsList);
        return $studentsLocations;
    }elseif (sizeof ($placesList) < sizeof ($studentsList)) {
        while (sizeof ($placesList) < sizeof ($studentsList)) {
            array_pop ($studentsList);
        }
        $studentsLocations = array_combine($placesList, $studentsList);
        return $studentsLocations;
    }
}
/*
    $studentsLocations array [K,V] ex: [[PLACE_1] => "JEREMY", [PLACE_2] => "LORENA"]  
    return the same array shuffled; only values will be randomized 
*/ 
function shuffleLocations(array $studentsLocations) : array{
    //array_keys permet de retirer les clefs d'un tableau
    //aray_values permet d'aller chercher les valeur d'un tableau
    $keys = array_keys ($studentsLocations);
    $values = array_values ($studentsLocations);
    //shuffle permet de Mélanger les éléments d'un tableau
    shuffle ($values);
    //array_combine — Crée un tableau à partir de deux autres tableaux
    $studentsLocations = array_combine($keys, $values);
    return $studentsLocations;
}

/*
    save  $studentsLocations to CSV format.
    fileName to backup is : csv_backup_DDMMYYYY_HH:MM:SS.csv 
*/
function saveToCSVFile(array $studentsLocations):void{
    // Instantiate a DateTime with microseconds.
$d = date_create();
   // Output the date with microseconds.
$var = date_format($d, 'd-m-Y\TH-i-s');
$filename = "csv_backup_".$var.".csv";

$link = fopen("../CSV_Backups/".$filename,"w");

fputcsv($link, array("PLACE","PRENOM"), ";","\n");

foreach ($studentsLocations as $key => $value){
    fputcsv($link, array($key, $value), ";","\n");
}
fclose ($link);
}

/*
how to generate csv file from array
csv FileToArray(string $pathFile): Array[k,v];

*/

function csvFileToArray ($csv):array{
    
    $link = fopen($csv, "r");
    
    while (!feof($link)) {
        $array[]= fgetcsv ($link,100, ";");
    }
    fclose($link);
    return $array;
}

/*

function getColumnsFromcsv(String $pathFile, int $selectCol) : array{
    $file = fopen ($pathFile, "r");
    $nbLinesFile = count(file("$pathFile"));
    for ($i = 0; $i < $nbLinesFile-1; $i++) {
       $tabCSV[] = fgetcsv($file, 500, ";");
    }
    fclose($file);
   
    foreach ($tabCSV as $line) {
            $newTab[] = [$line[0], $line[$selectCol]];
    }
    return $newTab;
}
*/



function getColumnsFromcsv (string $csv, int $col):array{

    $link = fopen($csv, "r");  
    $nbLinesFile = count(file("$csv"));

    for ($i = 0; $i < $nbLinesFile; $i++) {
        $tabLines[] = fgetcsv($link, 500, ";");
     }
    fclose($link);

    foreach ($tabLines as $line) {
        if ($col == 0) {
            $newTab [] = [$line[0]];
        }
        elseif ($col > 0) {
            $newTab [] = [$line[0], $line[$col]];
        }
        elseif ($col < 0) {
            $newTab = $tabLines;
        }
    }
    return $newTab;
}

function isAlpha($str) { 
return preg_match('/^([a-zA-Z]*)$/',$str);
}

//Methode qui renvoie la liste des employés
function selectListsStudents() : array
{
    //driver vers la DB
    $bdd = new PDO('mysql:host=localhost;dbname=BDD_students;charset=utf8mb4', 'root', '');
    $stmt = $bdd->prepare("SELECT * FROM `students`; ");
    $stmt->execute();
    //rapatrie toutes les lignes de la table
    $listStudents = $stmt->fetchAll();
    return $listStudents;
}


        //methode qui ajoute une personne
        function insertStudents ($NAME, $FIRSTNAME, $GENDER) : void {       
            $bdd = new PDO('mysql:host=localhost;dbname=BDD_students;charset=utf8mb4', 'root', '');
            $sql = "INSERT INTO students (NAME, FIRSTNAME, GENDER) VALUES (?,?,?)";
            $stmt= $bdd->prepare($sql);
            $stmt->execute([$NAME, $FIRSTNAME, $GENDER]);
        
}

function deleteStudents ($idStudents) : void {       
    $bdd = new PDO('mysql:host=localhost;dbname=BDD_students;charset=utf8mb4', 'root', '');
    $sql = "DELETE FROM `students` WHERE ID = ?";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$idStudents]);
}

function updateStudents($newName ,$idModif ) {
    $bdd = new PDO('mysql:host=localhost;dbname=BDD_students;charset=utf8mb4', 'root', '');

    $sql = "UPDATE `students` SET `NAME` = ? WHERE `ID` = ?";
    $stmt = $bdd->prepare($sql);
    // Exécute la requête avec les paramètres
    $stmt->execute([$newName, $idModif]);
}



?>