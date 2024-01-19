<?php
include_once "../M/lib_functions.php";

$csv = "../CSV_Backups/csv_backup_02-11-2023T11-17-06.csv";
$tableau = csvFileToArray ($csv);
print_r ($tableau);



?>