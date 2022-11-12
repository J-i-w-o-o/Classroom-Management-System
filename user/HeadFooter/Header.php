<?php
session_start();
$user       =   $_SESSION['user'];
$school_id  =   $_SESSION['school_id'];
$first_name =   $_SESSION['first_name'];
$last_name  =   $_SESSION['last_name'];
$age        =   $_SESSION['age'];
$address    =   $_SESSION['address'];
$role       =   $_SESSION['role'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../main-css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>