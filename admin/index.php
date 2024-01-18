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
													<h6 class="m-b-5 text-white">Total Orders</h6>
													<h3 class="m-b-0 text-white">
													<?php
														$select=$conn->query("SELECT * FROM orders");
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
													<h6 class="m-b-5 text-white">Users / Sellers</h6>
													<h3 class="m-b-0 text-white">
													<?php
														$select=$conn->query("SELECT * FROM users");
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
													<h6 class="m-b-5 text-white"> Clients</h6>
													<h3 class="m-b-0 text-white">
													<?php
														$select=$conn->query("SELECT * FROM client");
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
													<h6 class="m-b-5 text-white"> Tot Quantity</h6>
													<h3 class="m-b-0 text-white">
													<?php
												$result = mysqli_query($conn, 'SELECT SUM(product_quantity) AS value_sum FROM stockin'); 
												$row = mysqli_fetch_assoc($result); 
												$sum = $row['value_sum'];
												echo $sum;    
													?>
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
										<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-green">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white">  Qty Orders</h6>
													<h3 class="m-b-0 text-white">
												<?php
												$result = mysqli_query($conn, 'SELECT SUM(quantity) AS value_sum FROM orders'); 
												$row = mysqli_fetch_assoc($result); 
												$sum = $row['value_sum'];
												echo $sum;    
													?>
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
											<h5>latest Ordered </h5>
										</div>
										<div class="card-body px-0 py-0">
											<div class="table-responsive">
												<div class="session-scroll" style="height:478px;position:relative;">
													<table class="table table-hover m-b-0">
													<thead>
												<tr>
													<th>#</th>
													<th>Product</th>
													<th>Seller </th>
													<th>CLient </th>
													<th>Product Quantity</th>
													<th>Ordered Time</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											<?php
												$quer=mysqli_query($conn,"SELECT * FROM orders ORDER BY timeordered DESC limit 10");
												while ($row=mysqli_fetch_array($quer)){
												?>
												<tr>
													<td><?php echo $row['order_id'] ; ?></td>
													<td><?php
                                                    $productid=$row['product_id'];
                                                    $quertwo=mysqli_query($conn,"SELECT * FROM product WHERE product_id=$productid");
                                                    $rowtwo=mysqli_fetch_array($quertwo);
                                                    echo  $rowtwo['product_name'] ;
                                                    ?></td>
													<td><?php
                                                    $userid=$row['user_id'];
                                                    $quertre=mysqli_query($conn,"SELECT * FROM users WHERE id=$userid");
                                                    $rowtre=mysqli_fetch_array($quertre);
                                                    echo  $rowtre['username'] ;
                                                    ?></td>
													<td><?php
                                                    $clientid=$row['client_id'];
                                                    $quertree=mysqli_query($conn,"SELECT * FROM client WHERE client_id=$clientid");
                                                    $rowtree=mysqli_fetch_array($quertree);
                                                    echo  $rowtree['client_name'] ;
                                                    ?></td>
													<td><?php echo $row['quantity'] ; ?> <?php echo $row['product_unit'] ; ?></td>
													<td><?php echo $row['timeordered'] ; ?></td>
													<td><a class="btn btn-primary"  href="orderdetail.php?orderid=<?php echo $row['order_id']; ?>"  id="red">View All</a></td>
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
