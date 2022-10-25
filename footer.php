<!-- Start Footer main area -->
<footer class="footer overflow-x-clip">
	<div class="footer__container">
		<h3 class="footer__title footer__title--light footer__title--peek-position footer__title--pseudo-elements">
			Glasses free life<br />
			<strong>Starts here</strong>
		</h3>

		<div class="footer__body">
			<div class="footer__link-wrapper">
				<h4>Laser eye surgery</h4>
				<ul class="footer__link-list">
					<li><a href="#">Relex Smile</a></li>
					<li><a href="#">Presbyond</a></li>
					<li><a href="#">LASIK</a></li>
					<li><a href="#">LASEK, PRK & PTK</a></li>
				</ul>
			</div>
			<div class="footer__link-wrapper">
				<h4>Eye treatments</h4>
				<ul class="footer__link-list">
					<li><a href="#">Cataract Surgery</a></li>
					<li><a href="#">Myopia Control clinic</a></li>
					<li><a href="#">ICL eye surgery</a></li>
					<li><a href="#">Eyelid Cysts Chalazion and Styes</a></li>
					<li><a href="#">Paediatric Eye Care</a></li>
					<li><a href="#">Glaucoma Care</a></li>
				</ul>
			</div>
			<div class="footer__link-wrapper">
				<h4>Why choose us?</h4>
				<ul class="footer__link-list">
					<li><a href="#">Affordable high-quality vision correction</a></li>
					<li><a href="#">5 star technology and treatment</a></li>
					<li><a href="#">Conveniently located in North Londonurgery</a></li>
					<li><a href="#">Top visual outcomes</a></li>
					<li><a href="#">Care Quality Commission</a></li>
				</ul>
			</div>
			<div class="footer__link-wrapper">
				<h4>Contact details</h4>
				<ul class="footer__link-list">
					<li class="footer__list">
						<?php getSVG('assets/images/icons/icon-main-blue.svg'); ?><span>Info@my-iclinic.co.uk</span></li>
					<li class="footer__list"><?php getSVG('assets/images/icons/icon-phone-blue.svg'); ?><span>(+44)0208
							445 8877</span></li>
					<li class="footer__list"><?php getSVG('assets/images/icons/icon-location-blue.svg'); ?><span>960 High
							Rd, London N12
							9RY</span></li>
				</ul>
			</div>
		</div>

		<div class="footer__social">
			<?php getSVG('assets/images/icons/icon-twitter-outline-svg.svg'); ?>
			<?php getSVG('assets/images/icons/icon-facebook-outline.svg'); ?>
			<?php getSVG('assets/images/icons/icon-instagram-outline.svg'); ?>
		</div>

		<div class="footer__contact-button">
			<button class="button">
				Send us a message
				<?php getSVG('assets/images/icons/icon-arrow-right.svg'); ?>
			</button>
		</div>

		<div class="footer-bottom">
			<div class="footer-bottom__logo">
				<img src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/logos/logo-iclinic-footer.png'; ?>" />
				<h4>Quality approved Clinic</h4>
			</div>

			<ul class="footer-bottom__links">
				<li>
					<a href="#">Privacy Policy</a>
				</li>
				<li>
					<a href="#">Terms and condition</a>
				</li>
				<li>
					<a href="#">Cookies Policy</a>
				</li>
			</ul>

			<span class="footer-bottom__copyright">
				Copy Right © My-Clinic 2022 | All Right Reserved
			</span>
		</div>
	</div>

	<div class="bottom-menu">
		<ul class="bottom-menu__list">
			<li>
				<a href="#">
					<?php getSVG('assets/images/icons/icon-calendar-outline.svg'); ?>
				</a>
			</li>
			<li>
				<a href="#">
					<?php getSVG('assets/images/icons/icon-telephone-outline.svg'); ?>
				</a>
			</li>
			<li>
				<a href="#">
					<?php getSVG('assets/images/icons/icon-chat-outline-blue-bg.svg'); ?>
				</a>
			</li>
			<li>
				<a href="#">
					<?php getSVG('assets/images/icons/icon-letter-aa.svg'); ?>
				</a>
			</li>
			<li>
				<a href="#">
					<?php getSVG('assets/images/icons/icon-map-outline.svg'); ?>
				</a>
			</li>
		</ul>
	</div>
</footer>

<!-- JS File -->
<?php wp_footer(); ?>

<?php if (MY_ICLINIC_MODE === 'development') { ?>
<script id="__bs_script__">
//<![CDATA[
document.write("<script async src='http://HOST:4040/browser-sync/browser-sync-client.js?v=2.27.10'><\/script>".replace(
	"HOST", location.hostname));
//]]>
</script>
<?php } ?>

</body>

</html>