<footer>
	<div class="footer-container clearfix">
		<div class="main-col clearfix">
			<a href="#" class="logo"></a>
			<div class="social clearfix">
				<a href="#" class="twitter"></a>
				<a href="#" class="instagram"></a>
				<a href="#" class="facebook"></a>
			</div>
			<div class="clear"></div>
			<ul class="footer-list-left">
				<li><a href="#">About Us</a></li>
				<li><a href="#">Health Topics</a></li>
				<li><a href="#">Health News</a></li>
				<li><a href="#">FDA</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">Advertise With Us</a></li>
			</ul>
			<ul class="footer-list-right">
				<li><a href="#">Advertising Policy</a></li>
				<li><a href="#">Newsletters</a></li>
				<li><a href="#">Careers</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms of Use</a></li>
				<li><a href="#">Find an Online Doctor</a></li>
			</ul>
		</div>

		<div class="newsletter-col">
			<div class="newsletter-col_title">Get our wellness newsletter</div>
			<div class="newsletter-col_description">Fitness and nutrition tips, health news, and more.</div>
			<form action="">
				<input type="text" placeholder="Input your email">
				<input type="submit" value="SUBSCRIBE">
			</form>
			<div class="privacy">Your <a href="#">privacy</a> is important to us</div>
		</div>

		<div class="copyright-col">Copyright © 2005 - 2019 Healthcare Media. <br class="mobile_only">All rights reserved. <span class="mobile_not">Our content does not constitute a medical consultation. See a certified medical professional for diagnosis. Privacy Policy.</span></div>
	</div>
</footer>

<div class="overlay"></div>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>-sample/lib/slick/slick.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>-sample/js/script.js?ver=2"></script>
<?php

wp_footer(); // We need this for plugins.

genesis_markup(
	array(
		'close'   => '</body>',
		'context' => 'body',
	)
);

?>
</html>