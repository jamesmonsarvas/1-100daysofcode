<?php
    include('inc/header.php');

    if( isset( $_SESSION['user_id'] ) || isset( $_SESSION['logged_in'] ) ) {
        //User not logged in. Redirect them back to the login.php page.
        header('Location: view_user.php');
        exit;
    }
?>
    
<div class="container">

    <div class="row">

        <div class="col-sm-12 col-md-12">

            <?php if( isset($_GET['success']) && $_GET['success'] == 'true' ) : ?>

                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> You can log in now.
                </div>

            <?php endif; ?>

            <form action="process/login_user.php" method="POST">

                <div class="card">
                    <div class="card-header">
                        <h3>Login</h3>
                    </div><!-- .card-header -->
                    <div class="card-body">

                        <div class="row">

                            <div class="col-sm-12 col-md-12">
                                <div class="formg-group">
                                    <label for="username">Username:</label>
                                    <input type="text" id="username" class="form-control" name="username" placeholder="Username">
                                </div><!-- .form-group -->

                                <div class="formg-group">
                                    <label for="password">Password:</label>
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                                </div><!-- .form-group -->
                            </div><!-- .col-sm-12 .col-md-12 -->

                        </div><!-- .row -->

                    </div><!-- .card-body -->
                    <div class="card-footer">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="login" value="Login">
                        </div><!-- .form-group -->
                    </div><!-- .card-footer -->
                </div><!-- .card -->

            </form>

        </div><!-- .col-sm-12 .col-md-12 -->

    </div><!-- .row -->
</div><!-- .container -->

<?php include('inc/footer.php'); ?>