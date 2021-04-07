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
 
				<!-- Header Menu -->
				<ul class="nav user-menu">
				
				   
					<!-- Message Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-comment-o"></i> <span class="badge badge-pill"><?php echo 
							$admsg1; ?></span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Messages</span>
								 
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									
                                   <li class="notification-message">
										<a href="mysup.php">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="memb/def.png">
													</span>
												</div>
												<div class="list-body">
												  <span class="message-author">Admin</span>
												 
													<div class="clearfix"></div>
													<span class="message-content"><?php echo $coopname;?></span>
												</div>
											</div>
										</a>
									</li>
				 
								</ul>
							</div>
							 
						</div>
					</li>
					<!-- /Message Notifications -->

					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="memb/<?php echo $pix1;?>" alt="">
							<span class="status online"></span></span>
							<span><?php echo $sname1; ?></span>
						</a>
						<div class="dropdown-menu">
							 
							<a class="dropdown-item" href="logout2.php">Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->
				
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="settings.html">Settings</a>
						<a class="dropdown-item" href="login.html">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>