
<html class="no-js" lang="en-US" id="ls-global">
<head>
</head>
<body class="home page page-template-default">
	<div class="body-outer-wrapper ">
		<div class="body-wrapper">
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
												<div class="title-item-gimmick left" style="width: 316px;"></div>
												<h2 class="title-item-header">
													<span>Edit</span>
												</h2>
												<div class="title-item-gimmick right" style="width: 316px;"></div>
											</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
								<br/><br/><br/>
								<div class="container">
									<form action="/admin/post/{num}" method="post">
										{id}
										{name}
										{description}
										{category}
										{image}
										{image2}
										{image3}
										{submit}
										<br/>
									</form>
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
