<?php
include "connect.php";

$name = $_POST['user_name'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$password_confirmation = $_POST['password_confirmation'];
$standard = $_POST['standard'];
$product_image_name = $_FILES['image']['name'];
$user_image_temp_name = $_FILES['image']['tmp_name'];

if ($password != $password_confirmation) {
    echo '
        <script>
            alert("Passwords don\'t match");
            window.location="../partials/registration.php";
        </script>
        ';
} else {
    move_uploaded_file($user_image_temp_name, "../uploads/$product_image_name");
    $sql = "insert into `userdata` (name,mobile,password,image,standard,status,votes) values ('$name','$mobile','$password','$password_confirmation','$standard',0,0)";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo '
        <script>
            alert("Registration successfull");
            window.location="../index.php";
        </script>
        ';
    }
}
