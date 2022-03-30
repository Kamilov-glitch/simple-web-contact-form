<?php

session_start();

$name = '';
$email = '';
$issue = '';
$description = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    if (
        isset($_POST['name']) &&
        isset($_POST['email']) &&
        isset($_POST['issue']) &&
        isset($_POST['description'])
    ) {
        $name = $_SESSION['name'] = $_POST['name'];
        $email = $_SESSION['email'] = $_POST['email'];
        $issue = ucfirst($_SESSION['issue'] = $_POST['issue']);
        $description = $_SESSION['description'] = $_POST['description'];
    }
?>
<div class="container">
    <div class="card-header">
        <h3>Your information: </h3>
    </div>
    <div class="card-body">
        <table class="table">
            <tbody>
                <tr>
                    <th>Name</th>
                    <td><?php echo $name?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $email ?></td>
                </tr>
                <tr>
                    <th>Issue</th>
                    <td><?php echo $issue ?></td>
                </tr>
                <tr>
                    <th>Descripiton</th>
                    <td><?php echo $description ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<?php    
echo "<br>";
echo "<button class='btn btn-success'><a href='edit.php'>Edit</a></button";
endif; ?>