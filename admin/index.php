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
												<h5>Home</h5>
											</div>
											<ul class="breadcrumb">
												<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#!">Analytics Dashboard</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- [ breadcrumb ] end -->
							<!-- [ Main Content ] start -->
							<div class="row">

								<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-blue">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white">Total Users</h6>
													<h3 class="m-b-0 text-white">
													<?php
														$select=$conn->query("SELECT * FROM user");
														$count=mysqli_num_rows($select);
														echo $count;     
													?>
													</h3>
												</div>
												<div class="col-auto">
												<a href="report.php">	<i class="fas fa-database text-c-blue f-18"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-green">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white">Appointment </h6>
													<h3 class="m-b-0 text-white">
													<?php
														$select=$conn->query("SELECT * FROM appointment");
														$count=mysqli_num_rows($select);
														echo $count;     
													?>
													</h3>
												</div>
												<div class="col-auto">
													<i class="fas fa-users text-c-blue f-18"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-yellow">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white"> Classes</h6>
													<h3 class="m-b-0 text-white">
													<?php
														$select=$conn->query("SELECT * FROM classes");
														$count=mysqli_num_rows($select);
														echo $count;     
													?>
													</h3>
												</div>
												<div class="col-auto">
													<i class="fas fa-users text-c-blue f-18"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
										<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-blue">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white"> Tot </h6>
													<h3 class="m-b-0 text-white">
													67
													<span style="font-size: 15px;">kg</span>
													</h3>
												</div>
												<div class="col-auto">
													<i class="fas fa-database text-c-blue f-18"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
										

								<!-- sessions-section start -->
								<div class="col-xl-12 col-md-12">
									<div class="card table-card">
										<div class="card-header">
											<h5>appointment requests </h5>
										</div>
										<div class="card-body px-0 py-0">
											<div class="table-responsive">
												<div class="session-scroll" style="height:478px;position:relative;">
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
								</div>
							</div>

							<!-- [ Main Content ] end -->
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
