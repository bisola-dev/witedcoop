  <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="dashboardad.php" class="logo">
						<img src="imgg/<?php echo $logoz;?>" width="40" height="40" alt="">
					</a>
                </div>
				<!-- /Logo -->
				
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				
				<!-- Header Title -->
                <div class="page-title-box">
					<h3><?php echo $cname; ?></h3>
                </div>
				<!-- /Header Title -->
				
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
<?php  $resup = mysqli_query($conn, "SELECT * FROM memberz WHERE msg > 0 AND dele = 0");
      $surel = mysqli_num_rows($resup);
   ?>
				<!-- Header Menu -->
				<ul class="nav user-menu">
				
				   
					<!-- Message Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-comment-o"></i> <span class="badge badge-pill"><?php echo 
							$surel; ?></span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Messages</span>
								 
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									

									
				<?php 
                      while ($row=mysqli_fetch_assoc($resup)) {
                            
                            $ideg =$row['id'];
                            $ideg2 = 'clinton'.$ideg;
                            $hid2 = md5($ideg2);
                            $onamesx =$row['onames'];
                            $snamex =$row['sname'];
                            $fullx = $snamex.' '.$onamesx;
                            $pixx =$row['pix'];
                            $deptx =$row['dept'];
                            $admes = 'adsup.php?id='.$ideg.'&hid='.$hid2;
    ?>

									<li class="notification-message">
										<a href="<?php echo $admes; ?>">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="memb/<?php echo $pixx;?>">
													</span>
												</div>
												<div class="list-body">
												  <span class="message-author"><?php echo $fullx;?> </span>
												 
													<div class="clearfix"></div>
													<span class="message-content"><?php echo $deptx;?></span>
												</div>
											</div>
										</a>
									</li>
				<?php } ?>
								
 
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="mesall.php">View all Messages</a>
							</div>
						</div>
					</li>
					<!-- /Message Notifications -->

					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="memb/def.png" alt="">
							<span class="status online"></span></span>
							<span>Admin</span>
						</a>
						<div class="dropdown-menu">
						 
							<a class="dropdown-item" href="logout.php">Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->
				
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						 <a class="dropdown-item" href="logout.php">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>