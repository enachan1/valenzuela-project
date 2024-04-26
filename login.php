<?php 
    session_start();
    if(isset($_SESSION['username'])) {
        header("Location: /valenzuela-project/superadmin/superadmin.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In | Sangguniang Panglungsod</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="login_process.php" autocomplete="off" method="post">
    <main class="container-login">
        <div class="container-login-img">
            <img src="./assets/Valenzuela_Seal.png" alt="logo">
            <h1 class="login__h1 left__h1">Sanguniang Panglungsod</h1>
        </div>


        <div class="container-login-form">
            <h1 class="login__h1">Log In</h1>
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="email" placeholder="Enter username" name="username">
                <label for="email">Email</label>
            </div>

            <div class="form-floating mt-3 mb-3">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                <label for="pwd">Password</label>
            </div>
            <button class="btn btn-danger">Log In</button>
        </div>

    </main>
    </form>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>