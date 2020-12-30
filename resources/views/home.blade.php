<?php include_once 'include/header.php'; ?>
<style type="text/css">
.chart {
	margin: 40px 0 20px;
}

.blureffect .row.status_row,
.blureffect .chart,.blureffect .heading.mb-3.text-left.heading_nw,
.blureffect .row.fundamentals_row,
.blureffect .comment_box.d-flex.align-items-center,
.blureffect .bx_comment.mb-4
 {
	position: relative;
}
.blureffect .row.status_row::after {
	position: absolute;
	left: 0;
	right: 0;
	top: 5px;
	bottom: 0;
	background: #fff;
	content: "";
	width: 100%;
	height: 100%;
	opacity: 0.8;
	z-index: 999;
}
.blureffect .chart::after,
.blureffect .heading.mb-3.text-left.heading_nw:after,
.blureffect .row.fundamentals_row:after,
.blureffect .comment_box.d-flex.align-items-center:after,
.blureffect .bx_comment.mb-4:after
 {
	position: absolute;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	background: #fff;
	content: "";
	width: 100%;
	height: 100%;
	opacity: 0.8;
	z-index: 999;
}
</style>
<section class="ftco-section services-section bg-light" style="padding-top: 30px;padding-bottom: 30px;">
	<div class="container">
		<div class="row d-flex">
				
			<div class="col-md-3 align-self-stretch change_order">

				<?php // echo $this->session->userdata('user_id');

				if($this->session->userdata('user_id')) {  ?> 
					<div class="watchlist_div">
				<ul class="nav nav-tabs d-flex">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#Watchlist">Watchlist</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#Trending">Trending</a>
							</li>
							
						</ul>

						<div class="tab-content tab_settings">
							<div class="tab-pane container active" id="Watchlist">
								<div class="d-flex bx_trade justify-content-between">
									<div class="left_bx">
										<h3>Zom</h3>
										<p>Zomedica</p>
									</div>
									<div class="middle_bx">
										<p>|</p>
									</div>
									<div class="right_bx">
										<h5>0.1818</h5>
										<p class="bx_color_count">
                                         <i class="fa fa-arrow-up" aria-hidden="true"></i> 0.001 (3.54%)
										</p>
										
									</div>
								</div>

								<div class="d-flex bx_trade justify-content-between">
									<div class="left_bx">
										<h3>M</h3>
										<p>Macy's</p>
									</div>
									<div class="middle_bx">
										<p>|</p>
									</div>
									<div class="right_bx">
										<h5>0.1514</h5>
										<p class="bx_color_count">
                                         <i class="fa fa-arrow-up" aria-hidden="true"></i> 0.1 (2.64%)
										</p>
										
									</div>
								</div>

								<div class="d-flex bx_trade justify-content-between">
									<div class="left_bx">
										<h3>NRC</h3>
										<p>National</p>
									</div>
									<div class="middle_bx">
										<p>|</p>
									</div>
									<div class="right_bx">
										<h5>0.1818</h5>
										<p class="bx_color_count">
                                         <i class="fa fa-arrow-up" aria-hidden="true"></i> 0.011 (1.4%)
										</p>
										
									</div>
								</div>

								<div class="d-flex bx_trade justify-content-between">
									<div class="left_bx">
										<h3>NCP</h3>
										<p>Nuveen</p>
									</div>
									<div class="middle_bx">
										<p class="bx_color_count">|</p>
									</div>
									<div class="right_bx">
										<h5>0.12</h5>
										<p class="bx_color_count">
                                         <i class="fa fa-arrow-up" aria-hidden="true"></i> 0.001 (0.4%)
										</p>
										
									</div>
								</div>
							</div>
							<div class="tab-pane container fade" id="Trending">
								<div class="d-flex bx_trade justify-content-between">
									<div class="left_bx">
										<h3>Zom</h3>
										<p>Zomedica</p>
									</div>
									<div class="middle_bx">
										<p>|</p>
									</div>
									<div class="right_bx">
										<h5>0.1818</h5>
										<p class="bx_color_count">
                                         <i class="fa fa-arrow-up" aria-hidden="true"></i> 0.001 (3.54%)
										</p>
										
									</div>
								</div>

								<div class="d-flex bx_trade justify-content-between">
									<div class="left_bx">
										<h3>Zom</h3>
										<p>Zomedica</p>
									</div>
									<div class="middle_bx">
										<p>|</p>
									</div>
									<div class="right_bx">
										<h5>0.1818</h5>
										<p class="bx_color_count">
                                         <i class="fa fa-arrow-up" aria-hidden="true"></i> 0.001 (3.54%)
										</p>
										
									</div>
								</div>

								<div class="d-flex bx_trade justify-content-between">
									<div class="left_bx">
										<h3>Zom</h3>
										<p>Zomedica</p>
									</div>
									<div class="middle_bx">
										<p>|</p>
									</div>
									<div class="right_bx">
										<h5>0.1818</h5>
										<p class="bx_color_count">
                                         <i class="fa fa-arrow-up" aria-hidden="true"></i> 0.001 (3.54%)
										</p>
										
									</div>
								</div>

							</div>
						</div>
					</div>


				<?php } else { ?> 

					<div class="media block-6 services d-block text-left bx_color">
					<div class="media-body p-2 mt-2">
					    <?php  //echo 'yes'; print_r($_SESSION); ?>
						<h3 class="heading mb-3">Bevakninglista</h3>
						<p>Registrera dig på Intwit för att spara en bevakningslista för enkel åtkomst till dina favoriter</p>

						<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#login" >Bli medlem nu!</a>
					</div>
				</div>

				<?php } ?>

			</div>
			<?php 
				 if($this->session->userdata('user_id')) {

			       $dynamic_class= '';

			         }else
				   {
				   	 $dynamic_class= 'blureffect';
				   }

			       ?>



			<div class="col-md-9">
				<div class="main_div <?php echo $dynamic_class; ?>">
            <div class="row p-0">
            	<div class="col-md-9">
            		<div class="row justify-content-between align-items-center">
					<div class="col-md-9">
						<div class="new_div_left">
							<p>Tuscan Holdings Corp</p>
							<h2>THCB 11.98 <span><i class="fa fa-arrow-up" aria-hidden="true"></i> 0.63 (5.53%)</span></h2>
							<h5>NASDAQ <span>Updated Dec 3,2020 9:17 PM</span></h5> 
						</div>

						<div class="row status_row">
					<div class="col">
						<p class="m-0"><i class="fa fa-arrow-up" aria-hidden="true"></i> <strong>5.55%</strong></p>
						<p class="m-0">Price</p>
					</div>
					<div class="col">
						<p class="m-0"><i class="fa fa-arrow-up" aria-hidden="true"></i> <strong>0.21%</strong></p>
						<p class="m-0">Sentiment</p>
					</div>
					<div class="col">
						<p  class="m-0"><i class="fa fa-arrow-up" aria-hidden="true"></i> <strong>7.49%</strong></p>
						<p  class="m-0">Message Volume</p>
					</div>
				</div>
					</div>
					<div class="col-md-3 text-right">
						<div class="new_div_right">
							<p>0 <img src="<?php echo base_url(); ?>assets/site/images/users.png"></p>
							<a href="#" anim="ripple" class="nav-link btn btn-primary btn_bewaka">Bevaka</a> 
						</div>
					</div>
				</div>



				<div class="chart">
					<!-- <img src="images/chart.png"> -->

              <div id="chartContainer" style="height: 370px; width: 100%;"></div>

				</div>

				<h3 class="heading mb-3 text-left heading_nw">Fundamentals</h3>


				<div class="row fundamentals_row">
					<div class="col">
						<p>Prev Close</p>
						<p><strong>11.35</strong></p>
					</div>
					<div class="col">
						<p>Open</p>
						<p><strong>11.32</strong></p>
					</div>
					<div class="col">
						<p>Low</p>
						<p><strong>11.86</strong></p>
					</div>
					<div class="col">
						<p>High</p>
						<p><strong>12.40</strong></p>
					</div>
					<div class="col">
						<p>52 Wk High</p>
						<p><strong>13.75</strong></p>
					</div>
					<div class="col">
						<p>Mkt Cap</p>
						<p><strong>408.25m</strong></p>
					</div>
					<div class="col">
						<p>Volume</p>
						<p><strong>4.07m</strong></p>
					</div>
					<div class="col">
						<p>PE Ratio</p>
						<p><strong>---</strong></p>
					</div>

				</div>



			<!-- 	<div class="row mt-5 mb-5">
					<div class="col-md-8">
						<div class="d-flex align-items-center">
							<div class="heading_div">
								<i class="fa fa-sliders" aria-hidden="true"></i> Filter by:
							</div>
							<div class="div_drop">
								<div class="dropdown">
								  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    Orignal Posts
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item" href="#">Action</a>
								    <a class="dropdown-item" href="#">Another action</a>
								    <a class="dropdown-item" href="#">Something else here</a>
								  </div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="real_time text-right">
							<p>
								<i class="fa fa-play" aria-hidden="true"></i> Real-Time
							</p>
						</div>
					</div>
				</div> -->


				<div class="row">
					<div class="comment_box d-flex align-items-center">
						<div class="thumb_set">
						<input class="form-control" type="text" name="" placeholder="Write you comment here..">
						<div class="bull_bear">
							<a class="btn btn-clear">
								<i class="fa fa-thumbs-up thumbs-up text-success" aria-hidden="true"></i>
							</a>
							<a class="btn btn-clear">
								<i class="fa fa-thumbs-down thumbs-down text-danger" aria-hidden="true"></i>
							</a>
						</div>
					</div>
						<a class="btn btn-primary cmt_btn" anim="ripple">Send</a>
					</div>
				</div>


                <div class="bx_comment mb-4 mt-4" style="position: relative;">
				<div class="block-21 d-flex">
					<a class="blog-img mr-4" style="background-image:url(<?php echo base_url(); ?>assets/site/images/dummy.png)"></a>
					<div class="text">
						<h3 class="heading heading_msg">KVest_Financial</h3>
						<p><span class="tags">$THCB</span></p>
						<div class="d-flex" >

							<a href="#"><span class="icons_likes"><i class="fa fa-thumbs-up" aria-hidden="true"></i></span></a>
							<a href="#"><span class="icons_likes"><i class="fa fa-share" aria-hidden="true"></i></span></a>
							<a href="#"><span class="icons_likes"><i class="fa fa-refresh" aria-hidden="true"></i></span></a>
							<a href="#"><span class="icons_likes"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></span></a>

						</div>
					</div>
					<p class="time_hr">14m</p>
						<a href="#"><span class="icons_likes right_search"><i class="fa fa-search" aria-hidden="true"></i></span></a>
				</div>
			</div>



                <div class="bx_comment mb-4" style="position: relative;">
				<div class="block-21 d-flex">
					<a class="blog-img mr-4" style="background-image:url(<?php echo base_url(); ?>assets/site/images/person_1.jpg)"></a>
					<div class="text">
						<h3 class="heading heading_msg">KVest_Financial</h3>
						<p><span class="tags">$THCB</span> Adipisci vero culpa, eius nobis soluta.</p>
						<div class="d-flex" >
								<a href="#"><span class="icons_likes"><i class="fa fa-thumbs-up" aria-hidden="true"></i></span></a>
								<a href="#"><span class="icons_likes"><i class="fa fa-share" aria-hidden="true"></i></span></a>
								<a href="#"><span class="icons_likes"><i class="fa fa-refresh" aria-hidden="true"></i></span></a>
								<a href="#"><span class="icons_likes"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></span></a>

						</div>
					</div>
					<p class="time_hr">14m</p>
						<a href="#"><span class="icons_likes right_search"><i class="fa fa-search" aria-hidden="true"></i></span></a>
				</div>
			</div>





            	</div>
            	<div class="col-md-3"></div>
            </div>
        </div>


				



			</div>
		</div>
	</div>
</section>



<!--  <div class="container-fluid">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
                    <div class="table-responsive">
                        <table id="business_ratio" class="table table-condensed table-bordered table-striped table-hover table-charts">
                            <thead>
                                <tr>
                                    <th>Business ratio</th>
                                    <th class="text-center">Jan.</th>
                                    <th class="text-center">Feb.</th>
                                    <th class="text-center">Mar.</th>
                                    <th class="text-center">Apr.</th>
                                    <th class="text-center">May</th>
                                    <th class="text-center">June</th>
                                    <th class="text-center">July</th>
                                    <th class="text-center">Aug.</th>
                                    <th class="text-center">Sept.</th>
                                    <th class="text-center">Oct.</th>
                                    <th class="text-center">Nov.</th>
                                    <th class="text-center">Dec.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#modChart" data-source="65.1,59.47,80.00,81.11,56.67,55.45,40.88,20.45,40.98,80.66,88.34,61.01" data-target-source="50">
                                            <span class="glyphicon glyphicon-signal"></span> Example
                                        </a>
                                    </td>
                                    <td class="text-right">65.10</td>
                                    <td class="text-right">59.47</td>
                                    <td class="text-right">80.00</td>
                                    <td class="text-right">81.11</td>
                                    <td class="text-right">56.67</td>
                                    <td class="text-right">55.45</td>
                                    <td class="text-right">40.88</td>
                                    <td class="text-right">20.45</td>
                                    <td class="text-right">40.98</td>
                                    <td class="text-right">80.66</td>
                                    <td class="text-right">88.34</td>
                                    <td class="text-right">61.01</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#modChart" data-source="70,13,20,90,44,12,30,30,30,10,5,0" data-target-source="34">
                                            <span class="glyphicon glyphicon-signal"></span> Foobar
                                        </a>
                                    </td>
                                    <td class="text-right">70</td>
                                    <td class="text-right">13</td>
                                    <td class="text-right">20</td>
                                    <td class="text-right">90</td>
                                    <td class="text-right">44</td>
                                    <td class="text-right">12</td>
                                    <td class="text-right">30</td>
                                    <td class="text-right">30</td>
                                    <td class="text-right">30</td>
                                    <td class="text-right">10</td>
                                    <td class="text-right">5</td>
                                    <td class="text-right">0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="modChart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="exampleModalLabel">Linechart</h4>
                    </div>
                    <div class="modal-body">
                       <canvas id="canvas" width="568" height="300"></canvas> 
                    </div>
                </div>
            </div>
        </div> -->


<?php include_once 'include/footer.php'; ?>

