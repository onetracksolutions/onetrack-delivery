<?php include("includes/header-admin.inc.php"); ?>


<div class="container-fluid">
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-4 card-title">Add Driver Details</h1>
            </div>

            <hr>

            <div class="card-body">
                <form class="border border-light p-3" action="add_user.inc.php" method="POST">

                    <?php
                    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                        echo '<h6 class="bg-danger text-white">' . $_SESSION['status'] . '</h6>';
                        unset($_SESSION['status']);
                    }
                    ?>

                    <div class="form-row mb-4">
                        <div class="col">
                            <input type="text" name="first_name" class="form-control" placeholder="First name">
                        </div>

                        <div class="col">
                            <input type="text" name="last_name" class="form-control" placeholder="Last name">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="uid" class="form-control mb-4" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" class="form-control mb-4" placeholder="E-mail">
                    </div>

                    <div class="form-group">
                        <input type="password" name="pwd" class="form-control mb-4" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <input type="password" name="pwd-repeat" class="form-control" placeholder="Repeat Password">
                    </div>

                    <div class="form-group">
                        <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="Phone number">
                    </div>

                    <div class="form-group">
                        <select name="usertype" class="form-control">
                            <option value="" disabled selected hidden> User Type </option>
                            <option value="admin"> admin </option>
                            <option value="user"> user </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                        <button type="submit" name="add_user_btn" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include("includes/footer-admin.inc.php"); ?>