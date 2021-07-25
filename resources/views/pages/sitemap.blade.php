@extends('layouts.appframe')

@section('body')
<!--  Body Start -->

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Sitemap</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Sitemap</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="mb-30">
					<div class="pb-20">
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-12">
								<div class="sitemap">
									<h5 class="h5">Languages</h5>
									<ul>
										<li><a href="index.html">Php</a></li>
										<li><a href="index2.html">Java</a></li>
										<li><a href="index2.html">Kotlin</a></li>
										<li><a href="index2.html">Javascript</a></li>
										<li><a href="index2.html">Ruby</a></li>
										<li><a href="index2.html">Go</a></li>
										<li><a href="index2.html">Swift</a></li>
										<li><a href="index2.html">TypeScript</a></li>
									</ul>
								</div>

								<div class="sitemap">
									<h5 class="h5">Invoice</h5>
									<ul>
										<li><a href="invoice.html">Invoice</a></li>
									</ul>
								</div>

							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">
								<div class="sitemap">
									<h5 class="h5">Databases</h5>
									<ul>
										<li><a href="basic-table.html">MySQL</a></li>
										<li><a href="datatable.html">Microsoft SQL Server</a></li>
										<li><a href="datatable.html">Oracle Database</a></li>
										<li><a href="datatable.html">PostgreSQL</a></li>
										<li><a href="datatable.html">MongoDB</a></li>
										<li><a href="datatable.html">MariaDB</a></li>
									</ul>
								</div>



							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">
								<div class="sitemap">
									<h5 class="h5">Software Engineering</h5>
									<ul>
										<li><a href="ui-buttons.html">Operating Systems</a></li>
										<li><a href="ui-cards.html">Artificial Intelligence</a></li>
										<li><a href="ui-cards-hover.html">Algorithms and data structures</a></li>
										<li><a href="ui-modals.html">Computer networks</a></li>
										<li><a href="ui-tabs.html">Embaded systems design</a></li>
										<li><a href="ui-tooltip-popover.html">The software Process</a></li>
										<li><a href="ui-sweet-alert.html">Information security</a></li>
										<li><a href="ui-notification.html">Web information systems</a></li>
										<li><a href="ui-timeline.html">Compilers and interpreters</a></li>
										<li><a href="ui-progressbar.html">Machine learning</a></li>
										<li><a href="ui-typography.html">Advanced security</a></li>
										<li><a href="ui-list-group.html">Data mining</a></li>
										<li><a href="ui-range-slider.html">OOP</a></li>
										<li><a href="ui-carousel.html">Version control</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">
								<div class="sitemap">
									<h5 class="h5">Operating Systems</h5>
									<ul>
										<li><a href="video-player.html">Windows</a></li>
										<li><a href="login.html">Linux</a></li>
										<li><a href="forgot-password.html">MacOS</a></li>
										<li><a href="reset-password.html">Ubuntu</a></li>
										<li><a href="403.html">Android</a></li>
										<li><a href="404.html">Unix</a></li>

									</ul>
								</div>

							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="sitemap">
									<h5 class="h5">Multi Level Sitemap</h5>
									<ul>
										<li><a href="#">Level 1</a></li>
										<li><a href="#">Level 1</a></li>
										<li class="child">
											<h5 class="h5">Level 2</h5>
											<ul>
												<li><a href="#">Level 2</a></li>
												<li><a href="#">Level 2</a></li>
												<li class="child">
													<h5 class="h5">Level 3</h5>
													<ul>
														<li><a href="#">Level 3</a></li>
														<li><a href="#">Level 3</a></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
    @endsection
