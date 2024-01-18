<?php
include 'navbar.php';
?>

<?php

 if (isset($_POST['addabout'])){
       
    $target="../images/".basename($_FILES['image']['name']);

    $image=$_FILES['image']['name'];
    
    $title=$_POST['title'];
    $description=$_POST['description'];

    if (move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        $sql=mysqli_query($conn,"INSERT INTO testimonial VALUES ('','$title','$image','$description')");
        if ($sql) {
            $successmessage .='Add Testimony Successfully';  
        }
        else {
            $errormessage .='Add Testimony failed!'.$conn->error;     
        }    
    }
    else{
        $errormessage .='Add Testimony failed! Try Again';
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
                                <h5 class="section-title">Testimonial</h5>
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
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="inputText3" class="col-form-label">Title</label>
                                                                <input  type="text" name="title" id="inputText3" class="form-control">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="inputText3" class="col-form-label">Choose photo</label>
                                                                <input  type="file"  name="image" id="inputText3" class="form-control">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="exampleFormControlTextarea1">Description</label>
                                                                <textarea name="description" id="editor1" class="form-control" >
                                                                    </textarea>
                                                            <br>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <input  type="submit" name="addabout" value="Add Testimony" class="btn btn-primary" style="width: 100%;">
                                                            </div>
                                                        </div>
                                                    </form>
                                    </div>
                                    <div class="tab-pane fade" id="profile-justify" role="tabpanel" aria-labelledby="profile-tab-justify">
                                    <div class="table-responsive">
                                                   <table id="zero_config" class="table  table-bordered no-wrap">
                                                     <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>photo</th>
                                                                    <th>Title</th>
                                                                    <th>Description</th>
                                                                    <th>Delete</th>
                                                                    <th>Update</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            
                                                    <?php
                                                        $quer=mysqli_query($conn,"SELECT * FROM testimonial");
                                                        while ($row=mysqli_fetch_array($quer)){
                                                        ?>    
                                                             
                                                        <tr>
                                                            <td><?php echo $row['id'] ; ?></td>
                                                            <td><?php echo "<img style='width: 100px;' src='../images/".$row['photo']."'> "; ?></td>
                                                            <td><?php echo $row['title'] ; ?></td>
                                                            <td><?php echo $row['description'] ; ?></td>
                                                            <td><a class="btn btn-danger"  href="delete.php?deltestimony=<?php echo $row['id']; ?> " onclick="return confirm('are you sure! you want to delete this abount content.')" id="red">Delete</a></td>
                                                            <td><a class="btn btn-primary"  href="testimonyupdate.php?updatetestimony=<?php echo $row['id']; ?>"  id="red">Update</a></td>
                                                        </tr>
                                                        <?php
                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
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
