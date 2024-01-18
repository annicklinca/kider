<?php
include 'navbar.php';
?>

<?php

$seri_id=$_GET['updatetestimony'];

 if (isset($_POST['updatetestimony'])){
      
   $target="../images/".basename($_FILES['image']['name']);

   $image=$_FILES['image']['name'];
   
   $title=$_POST['title'];
   $description=$_POST['description'];
   $others=$_POST['others'];
    if($image==''){
       $sql=mysqli_query($conn,"UPDATE testimonial SET title='$title', description='$description' WHERE id=$seri_id;");
    }else{
   $sql=mysqli_query($conn,"UPDATE testimonial SET title='$title', description='$description', photo='$image' WHERE id=$seri_id;");
 }
   if ($sql) {
           
       if (move_uploaded_file($_FILES['image']['tmp_name'],$target)){    
           $successmessage .='update testimonial Successefully';  
       }
       else{    
        $successmessage .='update testimonial Successefully'; 
           }
   }
   else {
    $errormessage .='upload photo failed! failed';  
   }
   
}
    
?>

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                           <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                            <div class="section-block">
                                <h5 class="section-title">About Us</h5>
                            </div>
                            <div class="tab-regular">
                                <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab-justify" data-toggle="tab" href="#home-justify" role="tab" aria-controls="home" aria-selected="true">Add Content</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify" data-toggle="tab" href="#profile-justify" role="tab" aria-controls="profile" aria-selected="false">All content</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent7">
                                    <div class="tab-pane fade show active" id="home-justify" role="tabpanel" aria-labelledby="home-tab-justify">
                                       
                                       <form action="" method="POST" enctype="multipart/form-data">
                                                        
                                                        
                                                    <?php
                                                            if ( isset($successmessage)) {
                                                                echo '
                                                                                
                                                                    <div class="card-body">
                                                                    <ul class="list-group">
                                                                    <li class="list-group-item list-group-item-success">'.$successmessage.'</li>
                                                                    </ul>
                                                                    </div>
                                                                ';
                                                            }
                                                            ?>
                                                            <?php
                                                            if ( isset($errormessage)) {
                                                            echo '
                                                            <div class="card-body">
                                                            <ul class="list-group">
                                                            <li class="list-group-item list-group-item-success">'.$errormessage.'</li>
                                                            </ul>
                                                            </div>
                                                            ';
                                                            }
                                                            ?>
                                                                  
                                            <?php
                                                if (isset($_GET['updatetestimony'])) {
                                                    $recp_id=$_GET['updatetestimony'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM testimonial WHERE testimonial.id=$recp_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>        
                                                    <form action="" method="POST" enctype="multipart/form-data">
                                                   
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="inputText3" class="col-form-label">Title</label>
                                                                <input  type="text" name="title" value="<?php echo $row['title']; ?>" id="inputText3" class="form-control">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="inputText3" class="col-form-label">Choose photo</label>
                                                                <input  type="file"  name="image" value="<?php echo $row['image']; ?>" id="inputText3" class="form-control">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="exampleFormControlTextarea1">Description</label>
                                                               
                                                                <textarea name="description" class="form-control">
                                                                <?php echo $row['description']; ?>
                                                                    </textarea>
                                                            <br>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <input  type="submit" name="updatetestimony" value="Update content" class="btn btn-primary" style="width: 100%;">
                                                            </div>
                                                        </div>
                                                    </form>
                                                        <?php
                                                    } 
                                                }
                                                ?>
                                    </div>
                                    <div class="tab-pane fade" id="profile-justify" role="tabpanel" aria-labelledby="profile-tab-justify">
                                    <div class="table-responsive">
                                           
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        </div>
                </div>        
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

</body>

</html>
