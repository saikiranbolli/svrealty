<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = 'leads.csv';

    $project = $_POST['project'] ?? '';
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $number  = $_POST['number'] ?? '';

    date_default_timezone_set("Asia/Kolkata");
    $timestamp = date('d-m-Y H:i:s');

    $data = [$timestamp, $project, $name, $email, $number];

    $fp = fopen($file, 'a');
    fputcsv($fp, $data);
    fclose($fp);

    echo "Success";
} else {
    echo "Invalid request";
}
?>