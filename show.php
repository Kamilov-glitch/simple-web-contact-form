<?php

session_start();

$name = '';
$email = '';
$issue = '';
$description = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        isset($_POST['name']) &&
        isset($_POST['email']) &&
        isset($_POST['issue']) &&
        isset($_POST['description'])
    ) {
        $name = $_SESSION['name'] = $_POST['name'];
        $email = $_SESSION['email'] = $_POST['email'];
        $issue = $_SESSION['issue'] = $_POST['issue'];
        $description = $_SESSION['description'] = $_POST['description'];
    }

    echo $name . "<br>";
    echo $email . "<br>";
    echo $issue . "<br>";
    echo $description . "<br>";
    echo "<button class='btn btn-success'><a href='edit.php'>Edit</a></button";
}