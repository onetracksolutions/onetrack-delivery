<?php include("includes/header.inc.php"); ?>

<div class="container-fluid">
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3 text-lg-center">
                <img src="assets/images/login-logo.png" class="img-fluid" alt="Responsive image" />
                <h1 class="h1 mb-4 card-title">Register</h1>
                <p>Please fill in this form to create an account.</p>
            </div>
            <div class="card-body">
                <form class="text-center border border-light p-5" action="includes/register.inc.php" method="POST">
                    <?php
                    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                        echo '<h6 class="bg-danger text-white">' . $_SESSION['status'] . '</h6>';
                        unset($_SESSION['status']);
                    }
                    ?>

                    <hr>

                    <div class="form-row mb-4">
                        <div class="col">
                            <input type="text" name="firstname" class="form-control" placeholder="First name">
                        </div>

                        <div class="col">
                            <input type="text" name="lastname" class="form-control" placeholder="Last name">
                        </div>
                    </div>

                    <input type="text" name="username" id="" class="form-control mb-4" placeholder="Username">


                    <input type="password" name="passwd" id="" class="form-control mb-4" placeholder="Password" aria-describedby="helpBlock">

                    <input type="password" name="passwdrepeat" id="" class="form-control" placeholder="Repeat Password" aria-describedby="helpBlock">

                    <small id="passwordHelpBlock" class="form-text text-muted mb-4">
                        At least 8 characters and 1 digit
                    </small>

                    <input type="email" name="emailaddress" id="" class="form-control mb-4" placeholder="E-mail">


                    <div class="form-group">
                        <input type="text" name="streetaddress" class="form-control" id="inputAddress" placeholder="17 Worthington Avenue, Kingston 5">
                    </div>
                    <small id="addressHelpBlock" class="form-text text-muted mb-4">
                        Your full address
                    </small>
                    <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" id="" class="form-control" placeholder="Phone number" aria-describedby="phoneHelpBlock">
                    <small id="phoneHelpBlock" class="form-text text-muted mb-4">
                        Optional - for two step authentication <br>
                        Format: 876-666-3333
                    </small>

                    <input type="hidden" name="user_type" value="user">


                    <button type="submit" name="register_btn" class="btn btn-primary my-2">Register</button>

                    <div class="mt-4">
                        <p>Already have an account? <a href="index.php">Sign in</a>.</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>











<?php include("includes/footer-main.inc.php"); ?>
<?php include("includes/footer.inc.php"); ?>