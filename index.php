<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>:: HOSTING &amp; DOMAIN ::</title>
	<meta name="viewport" content="width=device-width">
	<link rel="shortcut icon" href="images/favicon.png" />
	<link rel='stylesheet' id='config-css'  href='css/ts-config.css' type='text/css' media='all' />
	<link rel='stylesheet' id='mailchimp-checkbox-css'  href='css/checkbox.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome.min-css'  href='css/font-awesome.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='jquery.flipcountdown-css'  href='css/jquery.flipcountdown.css' type='text/css' media='all' />
	<link rel='stylesheet' id='jquery-ui-css'  href='css/jquery-ui.css' type='text/css' media='all' />
	<link rel='stylesheet' id='bootstrap.min-css'  href='css/bootstrap.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='owl.carousel-css'  href='css/owl.carousel.css' type='text/css' media='all' />
	<link rel='stylesheet' id='easy-responsive-tabs-css'  href='css/easy-responsive-tabs.css' type='text/css' media='all' />
	<link rel='stylesheet' id='jquery.circliful-css'  href='css/jquery.circliful.css' type='text/css' media='all' />
	<link rel='stylesheet' id='cubeportfolio.min-css'  href='css/cubeportfolio.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='megamenu-css'  href='css/megamenu.css' type='text/css' media='all' />
	<link rel='stylesheet' id='styles-css'  href='css/styles.css' type='text/css' media='all' />
	<link rel="stylesheet" id="custom-css" href="css/mobile.css" type="text/css" media="all" />
	<!--[if IE 8]><link rel="stylesheet" type="text/css" href="css/vc-ie8.css" media="screen"><![endif]-->
	<link rel='stylesheet'   href='css/layout.css' type='text/css' media='all' />
	<link rel='stylesheet' id='redux-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Roboto%3A300%2C500%2C400%2C100&#038;ver=1428634381' type='text/css' media='all' />
</head>

<body>
	<?php include_once "src/chat.php" ?>
    <!--Wrapper-->
    <div id="wrapper">
	<!-- Start header -->
		<header>
			<div class="top-header">
				<div class="container">
					<div class="row">
						<div class="top-social col-sm-4">
							<div class="social-top">
								<ul class="social">
									  <li class="bounceIn animated"><a target="_blank" href="http://facebook.com"><i class="fa fa-facebook"></i></a></li>
									  <li class="bounceIn animated"><a target="_blank" href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>
									  <li class="bounceIn animated"><a target="_blank" href="#"><i class="fa fa-skype"></i></a></li>
								</ul>
							</div>                  
						</div>
						<div class="top-info col-sm-8 pull-right">
							<div id="flags_language_selector"></div >
							<ul>
								<li><a href="#"><i class="fa fa-envelope"></i>ventas@hostingydomain.com</a></li>
								<li><a href="#"><i class="fa fa-phone"></i>(+511) 226-5621 &nbsp; | &nbsp;Rpc 942 710 857 &nbsp; | &nbsp; Rpm *175316</a></li>
							</ul>
                                               
						</div>
					</div>
				</div>
			</div>
			<div class="main-header">
				<div class="container">
					<div class="logo">
						<h1><a href="index.php" class="ariva_logo"><img src="images/logo.png"  alt="Alaska - SEO WHMCS Hosting, Shop, Business Theme | An Awesome WordPress Hosting Theme"></a></h1>
					</div>
					<a href="#" class="mobile-navigation"><i class="fa fa-bars"></i></a>
					<div class="pull-right ts-mainmenu">
						<nav class="main-menu nav-menu">
							<ul id="menu-main-menu" class="menu-nav list-inline ts-response-simple ts-response-stack ts-effect-slide-top">
								<li class="menu-item">
									<a title="Pages" href="index.php" class="dropdown-toggle" >INICIO</a>
								</li>
								<li class="menu-item">
									<a title="Pages" href="hosting_mype.html" class="dropdown-toggle" >HOSTING MYPE</a>
								</li>
								<li class="menu-item">
									<a title="Shortcodes" href="hosting_empresarial.html"  class="dropdown-toggle" >HOSTING EMPRESARIAL</a>
								</li>
								<li class="menu-item">
									<a title="WHMCS" href="servidor_dedicado.html"  class="dropdown-toggle">SERVIDORES VIRTUALES</a>
								</li>
								<li  class="menu-item">
									<a title="Features" href="vps_hosting.html">VPS HOSTING</a>
								</li>
								<li class="menu-item">
									<a title="Blog" href="contratar.html">CONTRATAR</a>
								</li>	
							</ul>   
						</nav>
					</div>
				</div>        
			</div>
		</header> 

		<div id="container_full">	

			<div  class="ts-managed-dedicated">
				<div class="container">
					<div class="row">
						
					</div>
				</div>
			</div>
			
			<div  class="ts-home1-domain parallax-section">
				<div class="ts-overlay"></div>
				<div class="container">
					<div class="col-sm-12">
						<div class="ts-section-title  ts-home1-domain-title text-center" >
							<h3>Obtener el dominio de sus sueños</h3>
							<div class="ts-section-title title-light">
								<p>A partir de tan poco como US$ 9.99 por año!</p>
							</div>
						</div>
						<div  class="bg_parallax  ts-home1-block7">
							<div class="row">
									<div class="col-sm-12">
										<div id="content-whois">
											<form id="whois" action="" method="post" class="ts-search-whois">
												<div id="domain">										
													<div class="l1">
													<?php require_once getcwd()."/src/clases/verificarDominio.php"; ?>

														<span>www.</span>
														<input type="text" name="domain" class="input" />                                                                           
														<input name="Submit" type="submit" value="Search" class="input" onclick="iCheckDomain(); return false;" />	 
													</div>
													<div class="r">
														<p class="center">( Escribe el nombre de tu dominio )</p>
														<?php if (isset($_POST['domain']) and !empty($_POST['domain'])): ?>
															<?php $verificar = new verificarDominio($_POST['domain']); ?>
															<?php if ($verificar->isAvailable()): ?>
																<p class="center">
																	<b>El dominio esta disponible</b>
																</p>
															<?php else: ?>
																<p class="center">
																	<b>El dominio NO esta disponible</b>
																</p>
															<?php endif ?>
														<?php endif ?>
													</div> 
											   </div>   
											</form>						
										</div> 
									</div> 
							</div>
						</div>
                        <div  class="bg_parallax ">
										<div class="row">
											<div class="inner-row clearfix">
												<div class="col-sm-12 text-center   ">
													<div class="st-wrapper">
														<div class="ts-domain-price-box ">	
															<span class="domain-extension">.com</span>
															 a sólo<span class="domain-price">$9.99</span>					
														</div>
														<div class="ts-domain-price-box ">	
															<span class="domain-extension">.org</span>
															 a sólo<span class="domain-price">$9.99</span>					
														</div>
                                                        <div class="ts-domain-price-box " >	
															<span class="domain-extension">.pe</span>
															 a sólo<span class="domain-price">$45</span>					
														</div>
														<div class="ts-domain-price-box " >	
															<span class="domain-extension">.com.pe</span>
															 a sólo<span class="domain-price">$45</span>					
														</div>

													</div> 
												</div> 
											</div>
										</div>
									</div>
					</div> 
				</div>
			</div>
			<!-- End Search domain -->
			
            
			
			<div  class="ts-home1-hosting-platforms-title parallax-section">
            
				<div class="container">
					<div class="col-sm-12">
						<div class="ts-section-title  text-center" >
							<h3>¡Última Tecnología en Servidores Web!</h3>
							<p>Tenemos los mejores planes que mejor se adapte a sus diversas necesidades exigentes. </p>
						</div>
                        <br>
                        <div class="ts-pricingtable-5">
										<table>
												<tr class="section-info">
													<td class="ts-pricing-img"><figure><img alt="" src="images/homepage/girl14-216x460.png"></figure></td>
													<td>
														<div class="ts-pricing-item" >
															<span class="price-icon"><i class="fa fa-navicon"></i></span>
															<h3 class="price-title">Hosting Profesional</h3>
															<div class="price-unit-vat">
																<div class="price-unit">
																	<span class="price">$36</span>
																	<span class="unit"> / <span class="per-month">Anual</span></span>
																</div>	
															</div>
															<div class="desc">Hosting Profesional, dispone de gran capacidad de procesamiento en ambientes exclusivos, planes de web hosting Empresarial con cpanel y soporte en Perú.</div>
															<div class="section-feature visible-xs">
																<h3 class="title-feature">Linux Web Hosting includes</h3>

																<ul><li><label>Number of Websites</label>1</li></ul>
																<ul><li><label>Cloud hosting platform</label><i class="fa fa-check"></i></li></ul>
																<ul><li><label>Web Space 5000MB</label>3000MB</li></ul>
																<ul><li><label>Month ly Bandwidth</label>5000MB</li></ul>
																<ul><li><label>24×7 Fast Support</label><i class="fa fa-check"></i></li></ul>
																<ul><li><label>30 Day Money Back Guarantee </label><i class="fa fa-check"></i></li></ul>
																<h3 class="title-feature">Email Features</h3><ul></ul>
																<ul><li><label>400MB M ail Boxes</label>1000</li></ul>
																<ul><li><label>(POP3 &amp; IMAP)</label><i class="fa fa-check"></i></li></ul>
																<ul><li><label>Webmail</label>3000</li></ul>
																<ul><li><label>Autoresponders</label>5000</li></ul>
																<ul><li><label>Mailing Lists</label>Unlimited</li></ul>
																<ul><li><label>Email Forwarders</label>Unlimited</li></ul> 
																<h3 class="title-feature">Website Statistics</h3>
																
																<ul><li><label>Error &amp; Access/Referrer/Agent Logs</label><i class="fa fa-check"></i></li></ul>
																<ul><li><label>Google Sitemaps Generator</label><i class="fa fa-check"></i></li></ul>
																<ul><li><label>Webalizer Graphical Statistics</label><i class="fa fa-check"></i></li></ul>
																<ul><li><label>AWStats Graphical Statistics</label><i class="fa fa-check"></i></li></ul>
																<ul><li><label>Advanced Visitor Counters </label><i class="fa fa-close"></i></li></ul>
																<ul>
																	<li><label>Bandwidth Statistics</label><i class="fa fa-close"></i></li>
																</ul>						
															</div>
															<a href="#" class="ts-bt-pricing">RESERVAR</a>
														</div>
													</td>
													<td>
														<div class="ts-pricing-item" >
															<span class="price-icon"><i class="fa fa-bank"></i></span>
															<h3 class="price-title">Hosting Empresarial</h3>
															<div class="price-unit-vat">
																<div class="price-unit">
																	<span class="price">$49.</span>
																	<span class="unit">99 / <span class="per-month">Anual</span></span>
																</div>	
															</div>
															<div class="desc">Hosting Empresarial, dispone de gran capacidad de procesamiento en ambientes exclusivos, planes de web hosting Empresarial con cpanel y soporte en Perú.</div>
															<div class="section-feature visible-xs"> 
																<h3 class="title-feature">Linux Web Hosting includes</h3><ul></ul>
																<ul><li><label>Number of Websites</label>1</li></ul>
																<ul><li><label>Cloud hosting platform</label><i class="fa fa-check"></i></li></ul>
																<ul><li><label>Web Space 5000MB</label>Unlimited</li></ul>
																<ul><li><label>Month ly Bandwidth</label>Unlimited</li></ul>
																<ul><li><label>24×7 Fast Support</label><i class="fa fa-check"></i></li></ul>
																<ul><li><label>30 Day Money Back Guarantee </label><i class="fa fa-check"></i></li></ul>
																<h3 class="title-feature">Email Features</h3>
																
																<ul><li><label>400MB M ail Boxes</label>10000</li></ul>
																<ul><li><label>(POP3 &amp; IMAP)</label><i class="fa fa-check"></i></li></ul>
																<ul><li><label>Webmail</label>8000</li></ul><ul><li><label>Autoresponders</label>8000</li></ul>
																<ul><li><label>Mailing Lists</label>Unlimited</li></ul>
																<ul><li><label>Email Forwarders</label>Unlimited</li></ul> 
																<h3 class="title-feature">Website Statistics</h3>
																
																<ul><li><label>Error &amp; Access/Referrer/Agent Logs</label><i class="fa fa-check"></i></li></ul>
																<ul><li><label>Google Sitemaps Generator</label><i class="fa fa-check"></i></li></ul>
																<ul><li><label>Webalizer Graphical Statistics</label><i class="fa fa-check"></i></li></ul>
																<ul><li><label>AWStats Graphical Statistics</label><i class="fa fa-check"></i></li></ul>
																<ul><li><label>Advanced Visitor Counters </label><span class="ts-icon-close"><i class="fa fa-close"></i></span></li></ul>
																<ul><li><label>Bandwidth Statistics</label><span class="ts-icon-close"><i class="fa fa-close"></i></span></li></ul>
															</div>
															<a href="#" class="ts-bt-pricing">RESERVAR</a>
														</div>
													</td>			
													<td>
														<div class="ts-pricing-item" >
															<span class="price-icon"><i class="fa fa-bug"></i></span>
															<h3 class="price-title">Hosting Corporativo</h3>
															<div class="price-unit-vat">
																<div class="price-unit">
																	<span class="price">$89.</span>
																	<span class="unit">99 / <span class="per-month">Anual</span></span>
																</div>	
															</div>
															<div class="desc">Hosting Corporativo, dispone de gran capacidad de procesamiento en ambientes exclusivos, planes de web hosting Empresarial con cpanel y soporte en Perú.</div>
															<div class="section-feature visible-xs">
																<h3 class="title-feature">Linux Web Hosting includes</h3>
													
																<ul>
																	<li><label>Number of Websites</label>5</li>
																</ul>
																<ul>
																	<li><label>Cloud hosting platform</label><i class="fa fa-check"></i></li>
																</ul>
																<ul>
																	<li><label>Web Space 5000MB</label>Unlimited</li></ul><ul><li><label>Month ly Bandwidth</label>Unlimited</li>
																</ul>
																<ul>
																	<li><label>24×7 Fast Support</label><i class="fa fa-check"></i></li>
																</ul>
																<ul>
																	<li><label>30 Day Money Back Guarantee </label><i class="fa fa-check"></i></li>
																</ul> 
																<h3 class="title-feature">Email Features</h3>
																<ul>
																	<li><label>400MB M ail Boxes</label>10000</li>
																</ul>
																<ul>
																	<li><label>(POP3 &amp; IMAP)</label><i class="fa fa-check"></i></li>
																</ul>
																<ul>
																	<li><label>Webmail</label>Unlimited</li></ul>
																	<ul><li><label>Autoresponders</label>Unlimited</li>
																</ul>
																<ul>
																	<li><label>Mailing Lists</label>Unlimited</li></ul>
																	<ul><li><label>Email Forwarders</label>Unlimited</li>
																</ul> 
																<h3 class="title-feature">Website Statistics</h3><ul></ul>
																<ul>
																	<li><label>Error &amp; Access/Referrer/Agent Logs</label><i class="fa fa-check"></i></li>
																</ul>
																<ul>
																	<li><label>Google Sitemaps Generator</label><i class="fa fa-check"></i></li>
																</ul>
																<ul>
																	<li><label>Webalizer Graphical Statistics</label><i class="fa fa-check"></i></li>
																</ul>
																<ul>
																	<li><label>AWStats Graphical Statistics</label><i class="fa fa-check"></i></li>
																</ul>
																<ul>
																	<li><label>Advanced Visitor Counters </label><i class="fa fa-check"></i></li>
																</ul>
																<ul>
																	<li><label>Bandwidth Statistics</label><i class="fa fa-check"></i></li>
																</ul>
															</div>
															<a href="#" class="ts-bt-pricing">RESERVAR</a>
														</div>
													</td>
												</tr>
												<tr class="hidden-xs">
													<td colspan="4" class="title-feature">Linux Web Hosting incluye</td>
												</tr>
												<tr class="hidden-xs list-feature">
													<td><span class="inner-td ">Espacio en Disco</span></td>
													<td><span class="inner-td ">500MB</span></td><td><span class="inner-td ">1 GB</span></td>
													<td><span class="inner-td ">1500MB</span></td>
												</tr>
												<tr class="hidden-xs list-feature">
													<td><span class="inner-td ">Cpanel Español</span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
												</tr>
												<tr class="hidden-xs list-feature">
													<td><span class="inner-td ">Transferencia Mensual</span></td>
													<td><span class="inner-td ">6 GB</span></td><td><span class="inner-td ">10 GB</span></td>
													<td><span class="inner-td ">20 GB</span></td>
												</tr>
												<tr class="hidden-xs list-feature">
													<td><span class="inner-td ">Cuentas de Correo</span></td>
													<td><span class="inner-td ">7</span></td>
													<td><span class="inner-td ">15</span></td>
													<td><span class="inner-td ">30</span></td>
												</tr>
												<tr class="hidden-xs list-feature">
													<td><span class="inner-td ">Base de Datos MYSQL 5.x</span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
												</tr>
												<tr class="hidden-xs list-feature">
													<td><span class="inner-td ">Private CGI Bin</span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
												</tr> 
												
												<tr class="hidden-xs list-feature">
													<td><span class="inner-td ">Sub Dominios</span></td>
													<td><span class="inner-td ">2</span></td>
													<td><span class="inner-td ">4</span></td>
													<td><span class="inner-td ">7</span></td>
												</tr>
												<tr class="hidden-xs list-feature">
													<td><span class="inner-td ">(POP3 &amp; IMAP)</span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
												</tr>
												<tr class="hidden-xs list-feature">
													<td><span class="inner-td ">Webmail</span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
												</tr>
												<tr class="hidden-xs list-feature">
													<td><span class="inner-td ">Auto Responder, Php</span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
												</tr>
												<tr class="hidden-xs list-feature">
													<td><span class="inner-td ">Protección por Contraseñas</span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
												</tr>
												<tr class="hidden-xs list-feature"><td><span class="inner-td ">Estadísticas de Visitas Web</span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
													<td><span class="inner-td ts-icon-check"><i class="fa fa-check"></i></span></td>
												</tr> 

												<tr class="pricing-footer hidden-xs">
													<td></td>
													<td>
														
													</td>
												</tr>
										</table>
									</div>
					</div> 
				</div>
			</div>

			<!-- Start companies uses Cloud -->
			<div  class="ts-home1-companies-cloud parallax-section">
				<div class="container">
					<div class="col-sm-12">
						<div class="ts-client-list">
							<ul>
								<li class="client-item"><img width="215" height="95" src="images/client-3-215x95.png" class="attachment-client-work" alt="client-3" /></li>
								<li class="client-item"><img width="215" height="95" src="images/client-4-215x95.png" class="attachment-client-work" alt="client-4" /></li>
								<li class="client-item"><img width="215" height="95" src="images/client-5-215x95.png" class="attachment-client-work" alt="client-5" /></li>
								<li class="client-item"><img width="215" height="95" src="images/client-1-215x95.png" class="attachment-client-work" alt="client-1" /></li>
								<li class="client-item"><img width="215" height="95" src="images/client-2-215x95.png" class="attachment-client-work" alt="client-2" /></li>
							</ul>
						</div>
					</div> 
				</div>
			</div>
			<!-- End companies uses Cloud -->

			<!-- Start Lasted blog post -->
			<div class="ts-home1-lasted-blog">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
								<div class="ts-section-title  text-center">
									<h3>Confían en Nosotros</h3>
								</div>
								<div class="ts-blog-slide">
									<article class="">
											<a href="#"><img src="images/logos/log1.jpg" alt=""></figure></a>
									</article>
									<article class="">
										<a href="#"><figure><img src="images/logos/log2.jpg" alt=""></figure></a>
									</article>
									<article class="">
											<a href="#"><figure><img src="images/logos/log3.jpg" alt=""></figure></a>
									</article>
									<article class="">
											<a href="#"><figure><img src="images/logos/log4.jpg" alt=""></figure></a>
									</article>
									<article class="">
										<a href="#"><figure><img src="images/logos/log5.jpg" alt=""></figure></a>
									</article>
									<article class="">
											<a href="#"><img src="images/logos/log6.jpg" alt=""></figure></a>
									</article>
									<article class="">
										<a href="#"><figure><img src="images/logos/log7.jpg" alt=""></figure></a>
									</article>
									<article class="">
											<a href="#"><figure><img src="images/logos/log8.jpg" alt=""></figure></a>
									</article>
									<article class="">
											<a href="#"><figure><img src="images/logos/log9.jpg" alt=""></figure></a>
									</article>
									<article class="">
										<a href="#"><figure><img src="images/logos/log10.jpg" alt=""></figure></a>
									</article>
									<article class="">
										<a href="#"><figure><img src="images/logos/log11.jpg" alt=""></figure></a>
									</article>
									<article class="">
											<a href="#"><figure><img src="images/logos/log12.jpg" alt=""></figure></a>
									</article>
									<article class="">
											<a href="#"><figure><img src="images/logos/log13.jpg" alt=""></figure></a>
									</article>
									<article class="">
										<a href="#"><figure><img src="images/logos/log14.jpg" alt=""></figure></a>
									</article>
									<article class="">
											<a href="#"><figure><img src="images/logos/log15.jpg" alt=""></figure></a>
									</article>
									<article class="">
											<a href="#"><figure><img src="images/logos/log16.jpg" alt=""></figure></a>
									</article>
									<article class="">
										<a href="#"><figure><img src="images/logos/log17.jpg" alt=""></figure></a>
									</article>
									<article class="">
											<a href="#"><figure><img src="images/logos/log18.jpg" alt=""></figure></a>
									</article>
									<article class="">
										<a href="#"><figure><img src="images/logos/log19.jpg" alt=""></figure></a>
									</article>
								</div>
						</div> 
					</div>
				</div>
			</div>
		</div>
		<!-- End Lasted blog post -->

		<!-- End / content -->

		<!-- Start Bottom contact -->
		<div class="ts-section-top-footer">    
				<div class="ts-top-footer">
				</div>
		</div>
		<div class="ts-copy-right">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4">
						 <p> </p>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8">
						<div class="ts-menu-footer">
							<nav>
								 <ul>
									<li><a href="#">Nosotros</a></li>
									<li><a href="#">Planes Hosting</a></li>
									<li><a href="#">Dominios</a></li>
									<li><a href="#">Páginas web</a></li>
									<li><a href="#">Desarrollo Web</a></li>
									<li><a href="#">Posicionamiento Web</a></li>
								</ul>                    
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End / Page wrap -->
	<script type='text/javascript' src='js/jquery.js'></script>
	<script type='text/javascript' src='js/jquery-ui.js'></script>
	<script type='text/javascript' src='js/jquery-migrate.min.js'></script>
	<script type='text/javascript' src='js/jquery.themepunch.tools.min.js'></script>
	<script type='text/javascript' src='js/jquery.themepunch.revolution.min.js'></script> 
	<script type="text/javascript" src="js/slideshow-homepage.js"></script>
	<script type='text/javascript' src='js/loading.js'></script>	
	<script type='text/javascript' src='js/accordion.js'></script>	
	<script type='text/javascript' src='js/lasted-blog-slide.js'></script>	
	<script type='text/javascript' src='js/comment-reply.min.js'></script>
	<script type='text/javascript' src='js/jquery.form.min.js'></script>
	<script type='text/javascript' src='js/scripts.js'></script>
	<script type='text/javascript' src='js/jquery.blockUI.min.js'></script>
	<script type='text/javascript' src='js/retina.min.js'></script>
	<script type='text/javascript' src='js/bootstrap.min.js'></script>
	<script type='text/javascript' src='js/jquery.appear.min.js'></script>
	<script type='text/javascript' src='js/jquery.countTo.js'></script>
	<script type='text/javascript' src='js/jquery.countdown.js'></script>
	<script type='text/javascript' src='js/jquery.fitvids.js'></script>
	<script type='text/javascript' src='js/readmore.js'></script>
	<script type='text/javascript' src='js/subscribre.js'></script>
	<script type='text/javascript' src='js/jquery.validate.min.js'></script>
	<script type='text/javascript' src='js/jquery.owl.carousel.js'></script>
	<script type='text/javascript' src='js/easyResponsiveTabs.js?'></script>
	<script type='text/javascript' src='js/jquery.circliful.min.js'></script>
	<script type='text/javascript' src='js/jquery.sticky.js'></script>
	<script type='text/javascript' src='js/jquery.cubeportfolio.min.js'></script>
	<script type='text/javascript' src='js/portfolio.js'></script>
	<script type='text/javascript' src='js/chosen.jquery.min.js'></script>
	<script type='text/javascript' src='js/custom.js'></script>
	<script type='text/javascript' src='js/accordion.min.js'></script>


</body>
</html>