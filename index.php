<?php include 'actions/connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Voting System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">
    <h1 class="text-info text-center p-3">Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Login</h2>
        <div class="container text-center">
            <form action="actions/login.php" method="post">
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="text" name="user_name_login" placeholder="Enter Your User Name" require="require">
                </div>
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="text" name="mobile_login" placeholder="Enter Your Phone Number" maxlength="10" minlength="10" require="require">
                </div>
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="password" name="password_login" placeholder="Enter Your User Password" require="require">
                </div>
                <div class="mb-3">
                    <select name="standard_login" class="form-control w-50 m-auto">
                        <option value="candidate">Candidate</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <input type="submit" value="Login" class=" btn btn-dark my-4 m-auto" name="login">
                <p>Don't have an account ? <a href="partials/registration.php" class="text-white"> Register here</a></p>
            </form>
        </div>
    </div>
</body>

</html>