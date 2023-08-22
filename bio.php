<?php 

if(isset($_POST['submitBtn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];
}

?>

<h2>Name <?php if(isset($name)) {
    echo $name;
} ?></h2>
<h2>Email <?php if(isset($email)) {
    echo $email;
} ?></h2>
<h2>Age <?php if(isset($age)) {
    echo $age;
} ?></h2>
<h2>Password <?php if(isset($password)) {
    echo $password;
} ?></h2>