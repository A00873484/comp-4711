<?php
/*
 * Menu navbar, just an unordered list
 */
?>
<div class="header-area-wrapper">
	<div class="header-wrapper boxed-style">
		<div class="header-container container">
			<div class="logo-wrapper">
				<h1>
					<a href="/">
						<img src="" alt="">
					</a>
				</h1>
			</div>
			<!-- Navigation -->
			<div class="gdl-navigation-wrapper">
				<div class="responsive-menu-wrapper">
					<select id="menu-main" class="menu dropdown-menu">
						<option value="" class="blank">– Main Menu –</option>
						<option value="/" selected="selected">Home</option>
					</select>
				</div>
				<div class="clear"></div>
				<div class="navigation-wrapper sliding-bar">
					<div class="gdl-current-menu" style="width: 70px; left: 812.453125px;"></div>
					<div class="main-superfish-wrapper" id="main-superfish-wrapper">
						<ul class="sf-menu sf-js-enabled">
							<li>
								<a href="/" class="sf-with-ul">
									Home
								</a>
							</li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
								<a href="/explore" class="sf-with-ul">
									Explore
								</a>
							</li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
								<a href="/filter" class="sf-with-ul">
									Filter
								</a>
							</li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
								<a href="/about" class="sf-with-ul">
									About
								</a>
							</li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
								<a href="/admin" class="sf-with-ul">
									Admin
								</a>
							</li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
								<a href="{login}" class="sf-with-ul">
									{loginName}
								</a>
							</li>
						</ul>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
		<!-- header container -->
	</div>
	<!-- header area -->
</div>
