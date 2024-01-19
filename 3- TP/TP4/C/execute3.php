<?php
include_once "../M/lib_functions.php";

$csv = "../CSV_Backups/csv_backup_02-11-2023T11-17-06.csv";

$colonne = getColumnsFromcsv ($csv, -1);

print_r ($colonne);


?>