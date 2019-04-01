<?php
    include('inc/header.php');

    if( isset( $_SESSION['user_id'] ) || isset( $_SESSION['logged_in'] ) ){
        //User not logged in. Redirect them back to the login.php page.
        header('Location: view_user.php');
        exit;
    }
?>

<div class="container">

    <div class="row">

        <div class="col-sm-12 col-md-12">

            <form action="process/create_user.php" method="POST">

                <div class="card">
                    <div class="card-header">
                        <h3>Register</h3>
                    </div><!-- .card-header -->
                    <div class="card-body">
                        
                        <div class="row">
                        
                            <div class="col-sm-4 col-md-4">
                                <div class="formg-group">
                                    <label for="last-name">Last Name</label>
                                    <input type="text" id="last-name" class="form-control" name="last-name" placeholder="Last Name">
                                </div><!-- .form-group -->
                            </div><!-- .col-sm-4 .col-md-4 -->

                            <div class="col-sm-4 col-md-4">
                                <div class="formg-group">
                                    <label for="first-name">First Name</label>
                                    <input type="text" id="first-name" class="form-control" name="first-name" placeholder="First Name">
                                </div><!-- .form-group -->
                            </div><!-- .col-sm-4 .col-md-4 -->

                            <div class="col-sm-4 col-md-4">
                                <div class="formg-group">
                                    <label for="middle-name">Middle Name</label>
                                    <input type="text" id="middle-name" class="form-control" name="middle-name" placeholder="Middle Name">
                                </div><!-- .form-group -->
                            </div><!-- .col-sm-4 .col-md-4 -->

                        </div><!-- .row -->

                        <div class="row">
                        
                            <div class="col-sm-4 col-md-4">
                                <div class="formg-group">
                                    <label for="age">Age</label>
                                    <input type="text" id="age" class="form-control" name="age" placeholder="Age">
                                </div><!-- .form-group -->
                            </div><!-- .col-sm-4 .col-md-4 -->

                            <div class="col-sm-4 col-md-4">
                                <div class="formg-group">
                                    <label for="contact-no">Contact #</label>
                                    <input type="text" id="contact-no" class="form-control" name="contact-no" placeholder="Contact #">
                                </div><!-- .form-group -->
                            </div><!-- .col-sm-4 .col-md-4 -->

                            <div class="col-sm-4 col-md-4">
                                <div class="formg-group">
                                    <label for="email">Email Address</label>
                                    <input type="text" id="email" class="form-control" name="email" placeholder="Email Address">
                                </div><!-- .form-group -->
                            </div><!-- .col-sm-4 .col-md-4 -->

                        </div><!-- .row -->

                        <div class="row">

                            <div class="col-sm-12 col-md-12">
                                <div class="formg-group">
                                    <label for="address">Address</label>
                                    <input type="text" id="address" class="form-control" name="address" placeholder="Address">
                                </div><!-- .form-group -->
                            </div><!-- .col-sm-12 .col-md-12 -->

                        </div><!-- .row -->

                        <div class="row">

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                                </div><!-- .form-group -->
                            </div><!-- .col-sm-6 .col-md-6 -->

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                </div><!-- .form-group -->
                            </div><!-- .col-sm-6 .col-md-6 -->

                        </div><!-- .row -->

                    </div><!-- .card-body -->
                    <div class="card-footer">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="register" value="Register">
                        </div><!-- .form-group -->
                    </div><!-- .card-footer -->
                </div><!-- .card -->

            </form>

        </div><!-- .col-sm-12 .col-md-12 -->

    </div><!-- .row -->
</div><!-- .container -->

<?php include('inc/footer.php'); ?>