<?php 
    session_start();
    if(isset($_SESSION['username'])) {
        header("Location: /val-project/superadmin/superadmin.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header class="container">
        <nav>
            <div class="header__cont d-flex justify-content-between">
                <img src="https://via.placeholder.com/100" class="header__img" alt="logo ng valenzuela kunwari">
                <h1 class="h1 mt-3">Coucil Secretariat Records Station</h1>
            </div>
        </nav>
    </header>
    <main>
        <section class="container">
        <form action="login_process.php" method="POST" autocomplete="off">
            <div class="log-in_container">
                <div class="d-flex flex-column grid gap-2 text-center justify-content-center w-25 mb-2">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Username" class="form-control log-in_container__input" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="d-flex flex-column grid gap-2 text-center justify-content-center w-25 mb-2">
                    <label for="pass">Password</label>
                    <input type="password" name="password" placeholder="Password" class="log-in_container__input form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                    <button class="btn btn-danger">Log In</button>
            </div>
        </form>
        </section>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>