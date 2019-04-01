<?php

    include('inc/header.php');
    
    if( !isset( $_SESSION['user_id'] ) || !isset( $_SESSION['logged_in'] ) ){
        //User not logged in. Redirect them back to the login.php page.
        header('Location: index.php');
        exit;
    }

?>
    
<div class="container">

    <div class="row">

        <div class="col-sm-12 col-md-12">

            <div class="card">
                <div class="card-header">
                    <h3>Person Information</h3>
                </div><!-- .card-header -->
                <div class="card-body">
                    <?php 
                        $stmt = $conn->prepare("SELECT last_name, first_name, middle_name, age, contact, email_address, address FROM person"); 
                        $stmt->execute();
                        $results = $stmt->fetchAll();
                    ?>
                    <?php foreach($results as $data) : ?>
                        <p><?php echo $data['last_name']; ?></p>
                    <?php endforeach; ?>
                </div><!-- .card-body -->
            </div><!-- .card -->

        </div><!-- .col-sm-12 .col-md-12 -->

    </div><!-- .row -->
</div><!-- .container -->

<?php include('inc/footer.php'); ?>