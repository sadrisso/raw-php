<?php 

if(isset($_POST['submit_btn'])) {
    $img_name = $_FILES['upload_image']['name'];
    $tmp_name = $_FILES['upload_image']['tmp_name'];
    move_uploaded_file($tmp_name, 'upload2/'. $img_name);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <img src="upload2/<?php if(isset($img_name)){echo $img_name; } ?>" alt="">
    </div>
</body>
</html>









<!-- <?php 

if(isset($_POST['submit'])){
    $img_name = $_FILES['upload_img']['name'];
    $tmp_name = $_FILES['upload_img']['tmp_name'];
    move_uploaded_file($tmp_name, 'upload2/'. $img_name);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display img</title>
</head>
<body>
    <div>
        <img src="upload2/<?php if(isset($img_name)){echo $img_name; }?>" alt="">
    </div>
</body>
</html> -->