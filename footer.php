	<div id="shopify-section-footer" class="shopify-section">
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 content-footer">
						<h4>Contact us</h4>
						<div class="rte footer-article"><p><b>Email :</b> &nbsp; &nbsp;info@auxanoroyale.com</p>
				          <p><b>Telephone :</b> +234 7014486000</p>
				          <p>Or better yet, come see us in person!</p>
				          <p><b>Visit Us :</b></p>
				          <p>We are located off Peter Odili Road,</p>
				          <p>TransAmadi Industrial Layout, Port Harcourt City, Rivers State, Nigeria.</p>
				          <p></p>
				          <p></p>
				          <p></p>
				        </div>
					</div>
				    <div class="col-md-4 col-sm-4 links-footer">
						<h4>Quick Links</h4>
						<ul>
						  	<li><a href="#">HOME</a></li>
						  	<li><a href="#">HAIR ACADEMY</a></li>
						  	<li><a href="#">HAIR</a></li>
						  	<li><a href="#">WIGS</a></li>
						  	<li><a href="#">SHOP</a></li>
						  	<li><a href="#">OFFERS</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Order Status</a></li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-4 mailing-list-footer">
						<h4>AUXANO ROYALE HAIR ACADEMY</h4>
		          		<div class="rte">
			          		<p>
			          			At Auxano Royale Hair Academy, we build your skill set for wealth.
			          			Our Alumuni often testify to the quality of unique coaching methods deployed in each practical and interactive session: Each one was able to make a variety of wig styles.
			          		</p>
		          		</div>
		  				<!-- 	<form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form">
					            <input type="hidden" name="form_type" value="customer" />
					            <input type="hidden" name="utf8" value="✓" />
								<input type="hidden" name="contact[tags]" value="newsletter">
							    <div id="newsletter-wrapper">
							      <input id="newsletter_text" type="email" value="" placeholder="Enter email" name="contact[email]" class="input-group-field email" aria-label="translation missing: en.general.newsletter_form.newsletter_email" autocorrect="off" autocapitalize="off">
							        <input id="newsletter_submit" type="submit" class="btn btn-default" name="subscribe" value="&#xf054;">
							    </div>
							</form> -->
		    		</div>
	    		</div>
				<div class="bottom-footer">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<!-- <p>
									<a href="/">Anne Elise Braids</a> | <a target="_blank" rel="nofollow" href="https://www.shopify.com?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered by Shopify</a> | <a href="http://www.wetheme.com" title="Designed by WeTheme">Designed by WeTheme</a>
								</p> -->
							</div>
							<div class="col-md-6">
								<div id="footer-payment-methods">
									<img src="//cdn.shopify.com/s/assets/global/payment_types/creditcards_paypal-dd71910a20fd73f78b4eed60e89331d4f4ceb38d55ef42e1e9935d78070ba3e2.svg" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class="design-brand">
                <p>All Rights Reserved | Auxano Royale Hair | Designed By:<a href="https://clemzcorp.com.ng" target="_blank"> ClemzCorp - Media Redefined!</a></p>
            </div>
		</footer>
	</div>

</div>
</div>

</div>
<script type="text/javascript" charset="utf-8">
//<![CDATA[
jQuery(function() {
  jQuery('nav a').each(function() {
    if (jQuery(this).attr('href')  ===  window.location.pathname) {
      jQuery(this).addClass('current');
    }
  });
});  
//]]>
</script>


<script type="text/javascript">
	window.addEventListener('load', function() {
		var show_popup = false;
		var pop_up_time = $('#pop-up-time').val();
		var popup_enabled = pop_up_time !== undefined;
		var has_popup_cookie = $.cookie('popup-cookie') === 'true';

		if (!popup_enabled) {
			// popup is disabled
			return;
		} else if (pop_up_time === '0') {
			// popup is shown every time
			show_popup = true;
		} else if (!has_popup_cookie) {
			// popup cookie is not set, show popup this time
			show_popup = true;
			$.cookie('popup-cookie', 'true', {expires: parseInt(pop_up_time)});
		}
		if (show_popup) {
			document.querySelector('#popup').classList.add('visible');
		}

		$('.popup--close-btn').on('click', function () {
			document.querySelector('#popup').classList.remove('visible');
		});
	});
</script>

<script>
    // Translations that will be used in javascript section handling
    window.theme = {
        strings: {
            addToCart: "Add to Cart",
            soldOut: "Sold Out",
            unavailable: "Unavailable",
            showMore: "translation missing: en.general.filters.show_more",
            showLess: "translation missing: en.general.filters.show_less"
        },
        moneyFormat: "\u003cspan class=mw-price\u003e${{amount}}\u003c\/span\u003e"
    };
</script>
</body>
</html>