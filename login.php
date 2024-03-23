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
    <link rel="stylesheet" href="./styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<header class="container-fluid">
        <nav>
            <div class="row">
                <div class="col-md-2 p-3 custom-img ">
                    <img src="assets/Valenzuela_Seal.png" class="custom__image img-fluid mx-auto" alt="">
                    
                </div>
                <div class="col-md-10 p-3 custom-flex">
                    <span class="row__h1">Valenzuela 9th City Council</span>
                </div>
            </div>
        </nav>
    </header>
    <!-- Main log in FOrm -->

    <main>
        <section class="container">
            <div class="row justify-content-center"> 
                <div class="col-md-6">
                    <form action="login_process.php" method="POST" autocomplete="off">
                        <div class="card shadow mt-5 py-3 px-3">
                            <div class="card-body text-center">
                                <div class="form-group px-3">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" id="username" required>
                                </div>
                                <div class="form-group px-3">
                                    <label for="pass">Password</label>
                                    <input type="password" class="form-control" name="password" id="pass" required>
                                </div>
                                <button class="btn btn-danger mx-3 mt-3">Log in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>