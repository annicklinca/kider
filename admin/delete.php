<?php
include '../connection.php';

if (isset($_GET['delabout'])){
    $del_service=$_GET['delabout'];
    $del_quer=mysqli_query($conn,"DELETE FROM aboutus WHERE id='$del_service' ");  
    if ($del_quer) {
        echo '
        <script type="text/javascript">alert("about Deleted, Successfully!")</script>
        
        ';
        header("location:about.php");
    }
    else {
        echo '
        <script type="text/javascript">alert("about not Deleted,!")</script>
        
        ';
        header("location:about.php");
    }
}

if (isset($_GET['delclass'])){
    $del_service=$_GET['delservice'];
    $del_quer=mysqli_query($conn,"DELETE FROM classes WHERE id='$del_service' ");   
    if ($del_quer) {        
        ?>
        <script type="text/javascript">alert('Services Deleted, Successfully!')</script>
        <?php
        header("location:services.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete Service failed!')</script>
        <?php
        header("location:classes.php");
    }
}

if (isset($_GET['delproduct'])){
    $del_service=$_GET['delproduct'];
    $del_quer=mysqli_query($conn,"DELETE FROM product WHERE id='$del_service' ");   
    if ($del_quer) {        
        ?>
        <script type="text/javascript">alert('Product Deleted, Successfully!')</script>
        <?php
        header("location:product.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete Product failed!')</script>
        <?php
        header("location:product.php");
    }
}

if (isset($_GET['deltestimony'])){
    $del_service=$_GET['deltestimony'];
    $del_quer=mysqli_query($conn,"DELETE FROM testimonial WHERE id='$del_service' ");   
    if ($del_quer) {        
        ?>
        <script type="text/javascript">alert('Testimonial Deleted, Successfully!')</script>
        <?php
        header("location:testimonial.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete Testimonial failed!')</script>
        <?php
        header("location:testimonial.php");
    }
}

if (isset($_GET['deluser'])){
    $del_service=$_GET['deluser'];
    $del_quer=mysqli_query($conn,"DELETE FROM users WHERE id='$del_service' ");   
    if ($del_quer) {        
        ?>
        <script type="text/javascript">alert('seller Deleted, Successfully!')</script>
        <?php
        header("location:seller.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete seller failed!')</script>
        <?php
        header("location:seller.php");
    }
}

if (isset($_GET['delclient'])){
    $del_service=$_GET['delclient'];
    $del_quer=mysqli_query($conn,"DELETE FROM client WHERE client_id='$del_service' ");   
    if ($del_quer) {        
        ?>
        <script type="text/javascript">alert('client Deleted, Successfully!')</script>
        <?php
        header("location:client.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete client failed!')</script>
        <?php
        header("location:client.php");
    }
}

?>