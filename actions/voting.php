<?php
session_start();
include "connect.php";
$userid = $_SESSION['id'];
$user_status =  $_SESSION['status'];
$votes = $_POST['candidatevotes'] + 1;
$candidateid = $_POST['candidateid'];


if ($user_status == 0) {
    $updatevotes = mysqli_query($connect, "update `userdata` set votes=$votes where id=$candidateid");
    $updatevotes = mysqli_query($connect, "update `userdata` set status=1 where id=$userid ");

    if ($updatevotes && $updatevotes) {
        $getcandidates = mysqli_query($connect, "select * from `userdata` where standard='candidate'");
        $candidates = mysqli_fetch_all($getcandidates, MYSQLI_ASSOC);
        $_SESSION['candidates'] = $candidates;
        $_SESSION['status'] = 1;
        echo '
    <script>
        alert("Votting successfully ");
        window.location="../partials/dashboard.php";
    </script>
';
    } else {
        echo '
        <script>
            alert("Technical erro !! Vote after sometime");
            window.location="../partials/dashboard.php";
        </script>
    ';
    }
} else {
    echo '
    <script>
        alert("You already voted dude!:D ");
        window.location="../partials/dashboard.php";
    </script>
';
}
