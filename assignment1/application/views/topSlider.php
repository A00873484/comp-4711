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
		<div id="layerslider_1" class="ls-wp-container ls-container ls-packagetour" style="margin: 0px auto; visibility: visible; width: 100%; height: 560px;">
			<div class="ls-webkit-hack"></div>
			<div class="ls-inner" style="width: 1903px; height: 560px;">
				<div class="ls-layer" style="left: auto; right: 0px; top: 0px; bottom: auto; width: 1903px; height: 560px; display: none; visibility: visible;">
					<img src="/img/{firstimage}" class="ls-bg" style="padding: 0px; border-width: 0px; width: 1903px; height: 860px; margin-left: -951.5px; margin-top: -430px;">
				</div>
				<div class="ls-layer" style="width: 1903px; height: 560px;">
					<img src="/img/{secondimage}" class="ls-bg">
				</div>
				<div class="ls-layer" style="display: none; visibility: visible; width: 1903px; height: 560px; left: 0px; right: auto; top: 0px; bottom: auto;">
					<img src="/img/{thirdimage}" class="ls-bg" style="padding: 0px; border-width: 0px; width: 1903px; height: 860px; margin-left: -951.5px; margin-top: -430px;">
				</div>
				<div class="ls-circle-timer">
					<div class="ls-ct-left">
						<div class="ls-ct-rotate" style="transform: rotate(0deg);">
							<div class="ls-ct-hider">
								<div class="ls-ct-half"></div>
							</div>
						</div>
					</div>
					<div class="ls-ct-right">
						<div class="ls-ct-rotate" style="transform: rotate(0deg);">
							<div class="ls-ct-hider">
								<div class="ls-ct-half"></div>
							</div>
						</div>
					</div>
					<div class="ls-ct-center"></div>
				</div>
			</div>
			<div class="ls-loading-container" style="z-index: -1; display: none;">
				<div class="ls-loading-indicator"></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
