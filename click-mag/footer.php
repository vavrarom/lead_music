						<?php if(get_option('mvp_footer_leader')) { ?>
							<div id="mvp-foot-ad-wrap" class="left relative">
								<?php $foot_ad = get_option('mvp_footer_leader'); if ($foot_ad) { echo html_entity_decode($foot_ad); } ?>
							</div><!--mvp-foot-ad-wrap-->
						<?php } ?>
					</div><!--mvp-main-content-wrap-->
				</div><!--mvp-main-in-->
			</div><!--mvp-main-out-->
		</div><!--mvp-main-boxed-wrap-->
	</div><!--mvp-main-wrap-->
	<footer id="mvp-foot-wrap" class="left relative">
		<div id="mvp-foot-top-wrap" class="left relative">
			<div class="mvp-main-out relative">
				<div class="mvp-main-in">
					<div class="mvp-foot-in-wrap left relative">
						<ul class="mvp-foot-soc-list left relative">
							<?php if(get_option('mvp_facebook')) { ?>
								<li><a href="<?php echo esc_url(get_option('mvp_facebook')); ?>" target="_blank" class="fa fa-facebook-official fa-2"></a></li>
							<?php } ?>
							<?php if(get_option('mvp_twitter')) { ?>
								<li><a href="<?php echo esc_url(get_option('mvp_twitter')); ?>" target="_blank" class="fa fa-twitter fa-2"></a></li>
							<?php } ?>
							<?php if(get_option('mvp_pinterest')) { ?>
								<li><a href="<?php echo esc_url(get_option('mvp_pinterest')); ?>" target="_blank" class="fa fa-pinterest-p fa-2"></a></li>
							<?php } ?>
							<?php if(get_option('mvp_instagram')) { ?>
								<li><a href="<?php echo esc_url(get_option('mvp_instagram')); ?>" target="_blank" class="fa fa-instagram fa-2"></a></li>
							<?php } ?>
							<?php if(get_option('mvp_google')) { ?>
								<li><a href="<?php echo esc_url(get_option('mvp_google')); ?>" target="_blank" class="fa fa-google-plus fa-2"></a></li>
							<?php } ?>
							<?php if(get_option('mvp_youtube')) { ?>
								<li><a href="<?php echo esc_url(get_option('mvp_youtube')); ?>" target="_blank" class="fa fa-youtube-play fa-2"></a></li>
							<?php } ?>
							<?php if(get_option('mvp_linkedin')) { ?>
								<li><a href="<?php echo esc_url(get_option('mvp_linkedin')); ?>" target="_blank" class="fa fa-linkedin fa-2"></a></li>
							<?php } ?>
							<?php if(get_option('mvp_tumblr')) { ?>
								<li><a href="<?php echo esc_url(get_option('mvp_tumblr')); ?>" target="_blank" class="fa fa-tumblr fa-2"></a></li>
							<?php } ?>
						</ul>
						<div id="mvp-foot-nav" class="left relative">
							<?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
						</div><!--mvp-foot-nav-->
					</div><!--mvp-foot-in-wrap-->
				</div><!--mvp-main-in-->
			</div><!--mvp-main-out-->
		</div><!--mvp-foot-top-wrap-->
		<div id="mvp-foot-bot-wrap" class="left relative">
			<div class="mvp-main-out relative">
				<div class="mvp-main-in">
					<div class="mvp-foot-in-wrap left relative">
						<div id="mvp-foot-copy" class="left relative">
							<p><?php echo wp_kses_post(get_option('mvp_copyright')); ?></p>
						</div><!--mvp-foot-copy-->
					</div><!--mvp-foot-in-wrap-->
				</div><!--mvp-main-in-->
			</div><!--mvp-main-out-->
		</div><!--mvp-foot-bot-wrap-->
	</footer>
</div><!--mvp-site-->
<div class="mvp-fly-top back-to-top">
	<i class="fa fa-angle-up fa-3"></i>
	<span class="mvp-fly-top-text"><?php esc_html_e( 'To Top', 'click-mag' ); ?></span>
</div><!--mvp-fly-top-->
<div class="mvp-fly-fade mvp-fly-but-click">
</div><!--mvp-fly-fade-->
<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-105397156-1', 'auto');
  ga('send', 'pageview');

</script>
<script>
var footer = document.querySelector("#mvp-foot-top-wrap");
footer.style.cssText = "display: none !important";
  
var logoLead = document.querySelector("#mvp-logo-nav > a > img");
	logoLead.setAttribute("width", "250");
  	logoLead.setAttribute("height", "60");
  
var menuLogoLead = document.querySelector("#mvp-fly-logo > a > img");
  	menuLogoLead.setAttribute("width", "250");
  	menuLogoLead.setAttribute("height", "60");
	
	if (window.location.href.indexOf("administrator") > -1){
document.getElementById("mvp-author-page-top").style.cssText = "background-image: url(	https://www.lead-music.cz/wp-content/uploads/2018/04/d-toc-uvodka-web.jpg);background-repeat: no-repeat ;background-position: top center;background-size: cover;";
		document.querySelector("#mvp-author-top-right > h1").style.cssText = "text-shadow: 1px 1px 8px white";
	}
	

</script>
</body>
</html>