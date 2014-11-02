<html class="no-js" lang="en-US" id="ls-global">
<head>

</head>
<body class="home page page-template-default">
	<div class="body-outer-wrapper ">
		<div class="body-wrapper">
			<div class="header-outer-wrapper full-slider">
				<div class="under-slider-wrapper">
					<div class="under-slider-container container">
						<div class="under-slider-inner-wrapper button-on">
							<h2 class="under-slider-title">Check out Japan!</h2>
							<div class="under-slider-caption">
								Never been outside North America? You're missing out.
							</div>
							<a href="/explore" class="under-slider-button gdl-button large">Explore</a>
						</div>
					</div>
				</div>
			</div>
			<!-- header outer wrapper -->
			<div class="content-outer-wrapper">
				<div class="page-full-wrapper">
					<div>
						<div class="page-wrapper single-page ">
							<div class="gdl-page-item">
								<div class="container">
									<div class="row">
										<div class="twelve columns mb0">
											<div class="gdl-page-content"></div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
								<div class="container">
									<div class="row">
										<div class="twelve columns">
											<div class="title-item-wrapper">
												<div class="title-item-gimmick left" style="width: 216px;"></div>
												<h2 class="title-item-header">
													<span>Explore exciting places in Japan!</span>
												</h2>
												<div class="title-item-gimmick right" style="width: 216px;"></div>
											</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
								<div class="container">
									<div class="row">
										<div class="twelve columns package-item-class package-item-class-1 mb35">
											<div class="package-item-holder">
												<div class="row">
													{options}
													<div class="four columns gdl-package-grid2">
														<div class="package-content-wrapper">
															<div class="package-thumbnail-outer-wrapper">
																<div class="package-media-wrapper gdl-image">
																	<a href="{href}">
																		<img src="/img/{image}" alt="">
																		<div class="package-ribbon-wrapper">
																			<div class="package-type normal-type">Learn More</div>
																			<div class="clear"></div>
																			<div class="package-type-gimmick"></div>
																			<div class="clear"></div>
																		</div>
																	</a>
																</div>
																<div class="package-title-wrapper">
																	<div class="package-title-overlay"></div>
																	<h2 class="package-title">
																		<a href="/{catagory}/{id}">{name}</a>
																	</h2>
																</div>
															</div>
															<div class="package-date"> <i class="icon-time"></i>
																11 Nov 2014 - 22 Nov 2014
															</div>
														</div>
													</div>
													{/options}
													<div class="clear"></div>
												</div>
											</div>
											<div class="clear"></div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
						<!-- page wrapper -->
					</div>
					<!-- post class -->
				</div>
				<!-- page-full-wrapper -->
			</div>
		</div>
		<!-- body wrapper -->
	</div>
	<!-- body outer wrapper -->
	<script type="text/javascript">
		var ATTR = {"enable":"enable","width":"80","height":"45"};
		var FLEX = {"animation":"fade","pauseOnHover":"enable","controlNav":"disable","directionNav":"enable","animationSpeed":"600","slideshowSpeed":"12000","pauseOnAction":"disable","thumbnail_width":"75","thumbnail_height":"50","controlsContainer":".flexslider"};
		jQuery(document).ready(function(){
			var getElementsByClassName=function(a,b,c){if(document.getElementsByClassName){getElementsByClassName=function(a,b,c){c=c||document;var d=c.getElementsByClassName(a),e=b?new RegExp("\\b"+b+"\\b","i"):null,f=[],g;for(var h=0,i=d.length;h<i;h+=1){g=d[h];if(!e||e.test(g.nodeName)){f.push(g)}}return f}}else if(document.evaluate){getElementsByClassName=function(a,b,c){b=b||"*";c=c||document;var d=a.split(" "),e="",f="http://www.w3.org/1999/xhtml",g=document.documentElement.namespaceURI===f?f:null,h=[],i,j;for(var k=0,l=d.length;k<l;k+=1){e+="[contains(concat(' ', @class, ' '), ' "+d[k]+" ')]"}try{i=document.evaluate(".//"+b+e,c,g,0,null)}catch(m){i=document.evaluate(".//"+b+e,c,null,0,null)}while(j=i.iterateNext()){h.push(j)}return h}}else{getElementsByClassName=function(a,b,c){b=b||"*";c=c||document;var d=a.split(" "),e=[],f=b==="*"&&c.all?c.all:c.getElementsByTagName(b),g,h=[],i;for(var j=0,k=d.length;j<k;j+=1){e.push(new RegExp("(^|\\s)"+d[j]+"(\\s|$)"))}for(var l=0,m=f.length;l<m;l+=1){g=f[l];i=false;for(var n=0,o=e.length;n<o;n+=1){i=e[n].test(g.className);if(!i){break}}if(i){h.push(g)}}return h}}return getElementsByClassName(a,b,c)},
			dropdowns = getElementsByClassName( 'dropdown-menu' );
			for ( i=0; i<dropdowns.length; i++ )
				dropdowns[i].onchange = function(){ if ( this.value != '' ) window.location.href = this.value; }
		});
	</script>
	<script type="text/javascript" defer src="js/superfish.js"></script>
	<script type="text/javascript" defer src="js/supersub.js"></script>
	<script type="text/javascript" defer src="js/hoverIntent.js"></script>
	<script type="text/javascript" defer src="js/jquery.easing.js"></script>
	<script type="text/javascript" defer src="js/jquery.fancybox.js"></script>
	<script type="text/javascript" defer src="js/jquery.fancybox-media.js"></script>
	<script type="text/javascript" defer src="js/jquery.fancybox-thumbs.js"></script>
	<script type="text/javascript" defer src="js/gdl-scripts.js"></script>
	<script type="text/javascript" defer src="js/jquery.ui.core.min.js"></script>
	<script type="text/javascript" defer src="js/jquery.cycle.js"></script>
	<script type="text/javascript" defer src="js/blog-carousel.js"></script>
	<script type="text/javascript" defer src="js/jquery.flexslider.js"></script>
</body>
</html>