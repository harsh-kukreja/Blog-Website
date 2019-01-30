<body class="bg-dark">

<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <div class="text-center mb-4">
                <h4>Forgot to Login?</h4>
                <p>Please provide your credentionals to proceed further</p>
            </div>
            <form action="../includes/process-login.php" method="post">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="username" class="form-control" name="username" required="required" autofocus="autofocus">
                        <label for="username">Enter email address</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="password" class="form-control" name="password" required="required" autofocus="autofocus">
                        <label for="password">Enter Passwod</label>
                    </div>
                </div>
                <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="register.html">Register an Account</a>
                <a class="d-block small" href="../index.php">Home Page</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>
