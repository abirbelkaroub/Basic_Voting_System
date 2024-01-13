<?php
session_start();
include "connect.php";
$name = $_POST['user_name_login'];
$mobile = $_POST['mobile_login'];
$password = $_POST['password_login'];
$standard = $_POST['standard_login'];

$select_sql = "select * from `userdata` where name='$name' and mobile='$mobile' and password='$password' and standard='$standard' ";
$result = mysqli_query($connect, $select_sql);

if (mysqli_num_rows($result) > 0) {
    $candidate_sql      = "select id,name,image,votes from `userdata` where standard='candidate'";
    $candidate_result   = mysqli_query($connect, $candidate_sql);
    if (mysqli_num_rows($candidate_result) > 0) {
        $candidates = mysqli_fetch_all($candidate_result, MYSQLI_ASSOC);
        $_SESSION['candidates'] = $candidates;
    }
    $data = mysqli_fetch_array($result);
    $_SESSION['id'] = $data['id'];
    $_SESSION['status'] = $data['status'];
    $_SESSION['data'] = $data;
    echo '  <script>
        window.location="../partials/dashboard.php";
    alert("Welcome");
</script>
';
} else {
    echo '  <script>
    window.location="../";
    alert("Invalid Credentials");

</script>

';
}
