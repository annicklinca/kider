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
							<!-- [ breadcrumb ] end -->
							<!-- [ Main Content ] start -->
							<div class="row">
								<div class="col-sm-12">
									<h5 class="mt-4">Appointment Requests </h5>
									<hr>
									<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Response</a>
										</li>
										<!-- <li class="nav-item">
											<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">All content</a>
										</li> -->
									</ul>
									<div class="tab-content" id="pills-tabContent">
										<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="table-responsive">
                                            <table id="zero_config" class="table  table-bordered no-wrap">
                                            <thead>
												<tr>
													<th>#</th>
													<th>Parent name</th>
													<th>Parent Email</th>
													<th>Preferred Date</th>
													<th>Preferred Time</th>
													<th>Message</th>
												</tr>
											</thead>
											<tbody>
											<?php
												$quer=mysqli_query($conn,"SELECT * FROM appointment");
												while ($row=mysqli_fetch_array($quer)){
												?>
												<tr>
													<td><?php echo $row['id'] ; ?></td>
													<td><?php echo $row['pname'] ; ?></td>
													<td><?php echo $row['pemail'] ; ?></td>
													<td><?php echo $row['date_meet'] ; ?></td>
													<td><?php echo $row['time_prefer'] ; ?></td>
													<td><?php echo $row['messages'] ; ?></td>
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