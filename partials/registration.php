<?php include '../actions/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System -Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">
    <h1 class="text-info text-center p-3">Registration Account</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Register</h2>
        <div class="container text-center">
            <form action="../actions/register.php" method="post" enctype="multipart/form-data">
                <!-- name -->
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="text" name="user_name" placeholder="Enter Your User Name" require="require">
                </div>
                <!-- mobile -->
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="text" name="mobile" placeholder="Enter Your Phone Number" maxlength="10" minlength="10" require="require">
                </div>
                <!-- password -->
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="password" name="password" placeholder="Enter Your User Password" require="require">
                </div>
                <!-- Confirmation Password -->
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="password" name="password_confirmation" placeholder="Confirm Password" require="require">
                </div>
                <!-- Photo -->
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="file" name="image" accept="image/png, image/jpg, image/jpeg" require="require">
                </div>
                <!-- Standard -->
                <div class="mb-3">
                    <select name="standard" class="form-control w-50 m-auto">
                        <option value="candidate">Candidate</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <input type="submit" value="Register" class=" btn btn-dark my-4 m-auto" name="register">
                <p>Already have an account? <a href="../index.php" class="text-white">Login here</a></p>
            </form>
        </div>
    </div>
</body>

</html>