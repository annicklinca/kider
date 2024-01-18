<?php
include 'navbar.php';
?>
	<!-- [ Main Content ] start -->
	<div class="pcoded-main-container">
		<div class="pcoded-wrapper">
			<div class="pcoded-content">
				<div class="pcoded-inner-content">
					<div class="main-body">
						<div class="page-wrapper">
							<!-- [ breadcrumb ] start -->
							<div class="page-header">
								<div class="page-block">
									<div class="row align-items-center">
										<div class="col-md-12">
											<div class="page-header-title">
												<h5 class="m-b-10">Home</h5>
											</div>
											<ul class="breadcrumb">
												<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
												<li class="breadcrumb-item"><a href="#!">home</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- [ breadcrumb ] end -->
							<!-- [ Main Content ] start -->
							<div class="row">
								<div class="col-sm-12">
									<h5 class="mt-4">Home</h5>
									<hr>
									<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Add content</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">All content</a>
										</li>
									</ul>
									<div class="tab-content" id="pills-tabContent">
										<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
										   <form action="" method="POST" enctype="multipart/form-data">
												<div class="form-group row">
													<label class="col-sm-2 col-form-label">title</label>
													<div class="col-sm-10">
														<input type="text" name="title" class="form-control form-control-normal"
														placeholder="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-2 col-form-label"> Description</label>
													<div class="col-sm-10">                                                                                 
														<textarea name="description" id="editor1" rows="10" cols="80">
														</textarea>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-2 col-form-label">Photo</label>
													<div class="col-sm-10">
														<input type="file" name="image"
														class="form-control form-control-capitalize">
													</div>
												</div>
												
												<div class="form-group row">
													<div class="col-sm-12">
														<input type="submit" name="addservice" value="Add Service"
														class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
													</div>
												</div>
												
											</form>
										</div>
										<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
										<div class="table-responsive">
                                            <table id="zero_config" class="table  table-bordered no-wrap">
                                            <thead>
												<tr>
													<th>#</th>
													<th>Photo</th>
													<th>Title</th>
													
													<th>Description</th>
													<th>Delete</th>
													<th>Update</th>
												</tr>
											</thead>
											<tbody>
											<?php
												$quer=mysqli_query($conn,"SELECT * FROM home");
												while ($row=mysqli_fetch_array($quer)){
												?>
												<tr>
													<td><?php echo $row['id'] ; ?></td>
													<td><?php echo "<img style='width: 100px;' src='../images/".$row['photo']."'> "; ?></td>
													<td><?php echo $row['title'] ; ?></td>
													<td><?php echo $row['description'] ; ?></td>
													<td><a class="btn btn-danger"  href="delete.php?delservice=<?php echo $row['id']; ?> " onclick="return confirm('are you sure! you want to delete this Service content.')" id="red">Delete</a></td>
													<td><a class="btn btn-primary"  href="serviceupdate.php?updateservice=<?php echo $row['id']; ?>"  id="red">Update</a></td>
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
								
								<!-- [ tabs ] end -->
							</div>
							<!-- [ Main Content ] end -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- [ Main Content ] end -->

<?php
include 'footer.php';
?>