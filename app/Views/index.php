<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Simple Crud - Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="src/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="src/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="src/css/bootstrap.min.css" rel="stylesheet">

    <link href="src/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <form action="/login" method="post">
                    
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>LOGIN</h3>
                            </a>
                         
                        </div>

                        <div align='center'>
                        <div class="mb-3">
                        <?php if(session('invalid')): ?>
                            <span class="text-danger"><?= session('invalid') ?></span> 
                        <?php endif; ?>
                        </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="mb-3">
                            <?php if(session('validation')): ?>
                                <span class="text-danger"><?= session('validation')->getError('username') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="mb-3">
                            <?php if(session('validation')): ?>
                                <span class="text-danger"><?= session('validation')->getError('password') ?></span>
                            <?php endif; ?>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                        
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="src/lib/chart/chart.min.js"></script>
    <script src="src/lib/easing/easing.min.js"></script>
    <script src="src/lib/waypoints/waypoints.min.js"></script>
    <script src="src/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="src/lib/tempusdominus/js/moment.min.js"></script>
    <script src="src/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="src/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="src/js/main.js"></script>
</body>

</html>