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
					<div class="ls-s-1" style="position: absolute; top:230px; left: 50px; slidedirection : fade; slideoutdirection : fade; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 0; delayout : 0; showuntil : 0; font-size: 60px; font-family: 'Open Sans'; color: #1c5b6d; font-weight: 100;  white-space: nowrap;">{page1.1}</div>
					<div class="ls-s-1" style="position: absolute; top:300px; left: 650px;  slidedirection : top; durationin: 2500; delayin : 500; delayout : 0; showuntil : 0; font-size: 42px; font-family: 'Open Sans'; color: #1c5b6d; font-weight: 100; white-space: nowrap;">{page1.2}</div>
				</div>
				<div class="ls-layer" style="width: 1903px; height: 560px;">
					<img src="/img/{secondimage}" class="ls-bg">
					<div class="ls-s-1" style="position: absolute; font-family: 'Open Sans'; color: #FFF; font-weight: 100; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; white-space: nowrap; width: auto; height: auto; font-size: 36px; padding: 5px 15px; border-width: 0px; left: -281.5px; top: 146px;">{page2.1}</div>
					<div class="ls-s-1" style="position: absolute; top:280px; left: -110px;  slidedirection : top; durationin: 1500; delayin : 0; delayout : 0; showuntil : 0; font-size: 30px; font-family: 'Open Sans'; color: #FFF; font-weight: 100; white-space: nowrap;">{page2.2}</div>
				</div>
				<div class="ls-layer" style="display: none; visibility: visible; width: 1903px; height: 560px; left: 0px; right: auto; top: 0px; bottom: auto;">
					<img src="/img/{thirdimage}" class="ls-bg" style="padding: 0px; border-width: 0px; width: 1903px; height: 860px; margin-left: -951.5px; margin-top: -430px;">
					<div class="ls-s-1" style="position: absolute; font-family: 'Open Sans'; color: rgb(255, 255, 255); font-weight: 100; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; white-space: nowrap; width: auto; height: auto; font-size: 36px; padding: 5px 15px; border-width: 0px; left: 591.5px; top: 166px; background: rgba(0, 0, 0, 0.701961);">{page3.1}</div>
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
