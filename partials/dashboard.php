<?php
include "../actions/connect.php";
session_start();
if (!isset($_SESSION['id'])) {
    header('location:../');
}
$data = $_SESSION['data'];
if ($_SESSION['status'] == 1) {
    $status = '<b class="text-success">Voted</b>';
} else {
    $status = '<b class="text-danger">Not Voted</b>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\device-width, initial-scale=1.0">
    <title>Voting System Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- css file -->
    <link rel="stylesheet" href="../style.css">
</head>


<body class="bg-secondary text-light">
    <div class="container my-5">
        <a href="../"><button class="btn btn-dark text-light px-3">Back</button></a>
        <a href="logout.php"><button class="btn btn-dark text-light px-3">Logout</button> </a>
        <h1 class="my-3">Voting System</h1>
        <div class="row my-5">
            <div class="col-md-7">
                <!-- Candidates -->
                <?php
                if (isset($_SESSION['candidates'])) {
                    $candidates = $_SESSION['candidates'];
                    for ($i = 0; $i < count($candidates); $i++) {
                ?>
                        <div class="row">
                            <div class="col-4">
                                <img src="../uploads/<?php echo $candidates[$i]['image']; ?>" alt="Image1">
                            </div>
                            <div class="col-8">
                                <strong class="text-dark h5">Candidate name :</strong> <?php echo $candidates[$i]['name']; ?> <br>
                                <strong class="text-dark h5">Votes : </strong><?php echo $candidates[$i]['votes']; ?><br>
                            </div>
                        </div>
                        <form action="../actions/voting.php" method="post">
                            <input type="hidden" name="candidatevotes" value="<?php echo $candidates[$i]['votes']; ?>">
                            <input type="hidden" name="candidateid" value="<?php echo $candidates[$i]['id']; ?>">

                            <?php
                            if ($_SESSION['status'] == 1) {
                            ?>
                                <button class="bg-success my-3 text-white px-3">Voted</button>
                            <?php } else {
                            ?>
                                <button class="bg-danger my-3 text-white px-3">Vote</button>

                            <?php
                            }
                            ?>
                        </form>
                        <hr>
                    <?php
                    }
                } else {
                    ?>
                    <div class="container">
                        <p>No Candidate to display</p>
                    </div>
                <?php
                }
                ?>

            </div>
            <div class="col-md-5">
                <!-- User Profile -->
                <img src="../uploads/<?php echo $data['image']; ?>" alt="User Image">
                <br><br>
                <strong class="text-dark h5">User name : </strong><?php echo $data['name']; ?><br><br>
                <strong class="text-dark h5">Mobile : </strong><?php echo $data['mobile']; ?><br><br>
                <strong class="text-dark h5">Status : </strong><?php echo $status; ?><br><br>
            </div>
        </div>
    </div>
</body>

</html>