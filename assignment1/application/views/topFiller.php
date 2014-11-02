<?php
/*
 * Menu navbar, just an unordered list
 */
?>

<div class="gdl-top-slider" style="min-height: 102px;">
	<div class="gdl-top-slider-wrapper full-slider">
		<script type="text/javascript">var lsjQuery = jQuery;</script>
		<script type="text/javascript">
		lsjQuery(document).ready(function() {
			if(typeof lsjQuery.fn.layerSlider == "undefined") {
				lsShowNotice('layerslider_1','jquery');
			} else if(typeof lsjQuery.transit == "undefined" || typeof lsjQuery.transit.modifiedForLayerSlider == "undefined") {
				lsShowNotice('layerslider_1', 'transit');
			} else {
				lsjQuery("#layerslider_1").layerSlider({
					width : '100%',
					height : '560px',
					responsive : true,
					responsiveUnder : 960,
					sublayerContainer : 960,
					autoStart : true,
					pauseOnHover : false,
					firstLayer : 1,
					animateFirstLayer : true,
					randomSlideshow : false,
					twoWaySlideshow : true,
					loops : 0,
					forceLoopNum : true,
					autoPlayVideos : true,
					autoPauseSlideshow : 'auto',
					youtubePreview : 'maxresdefault.jpg',
					keybNav : true,
					touchNav : true,
					skin : '',
					skinsPath : 'css/',
					globalBGColor : 'transparent',
					navPrevNext : true,
					navStartStop : true,
					navButtons : true,
					hoverPrevNext : true,
					hoverBottomNav : false,
					showBarTimer : false,
					showCircleTimer : true,
					thumbnailNavigation : 'disabled',
					tnWidth : 100,
					tnHeight : 60,
					tnContainerWidth : '60%',
					tnActiveOpacity : 35,
					tnInactiveOpacity : 100,
					imgPreload : true,
					yourLogo : false,
					yourLogoStyle : 'left: 10px; top: 10px;',
					yourLogoLink : false,
					yourLogoTarget : '_self',
					cbInit : function(element) { },
					cbStart : function(data) { },
					cbStop : function(data) { },
					cbPause : function(data) { },
					cbAnimStart : function(data) { },
					cbAnimStop : function(data) { },
					cbPrev : function(data) { },
					cbNext : function(data) { }
				});
			}
		});
		</script>
	</div>
</div>
