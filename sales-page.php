<?php
/*
Template Name: Sales Page
*/
?>
<?php get_header(); ?>
<div class="content-wrap">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="page-wrap fullwidth">
		<div class="price-tables">
			<div class="price-table">
				<h4>Silver Package</h4>
				<div class="whitespace">
					<div class="price">
						<strong>$</strong><em class="exact_price">50</em><sup>00</sup><em class="time">mo</em>
					</div>
					<p class="value">$6500 Value</p>
					<p><strong>$500 Setup Fee</strong></p>
					<ul>
						<li>Get a short video about your business.</li>
						<li>Video syndicated to KoniTV</li>
						<li>Get your own channel on KoniTV</li>
					</ul>
					<button>Buy Now</button>
				</div>
			</div>
			<div class="price-table">
				<h4>Gold Package</h4>
				<div class="whitespace">
					<div class="price">
						<strong>$</strong><em class="exact_price">100</em><sup>00</sup><em class="time">mo</em>
					</div>
					<p class="value">$10,000 Value</p>
					<p><strong>$500 Setup Fee</strong></p>
					<ul>
						<li>Get a short video about your business.</li>
						<li>Video syndicated to KoniTV and associated networks</li>
						<li>Syndicated video content related to your business</li>
						<li>Get your own online TV Station</li>
					</ul>
					<button>Buy Now</button>
				</div>
			</div>
			<div class="price-table">
				<h4>Partner Package</h4>
				<div class="whitespace">
					<div class="price">
						<p class="partnership">Become a partner today!</p>
					</div>
					<p class="value">$50,000 Value</p>
					<p><strong>No Setup Fee</strong></p>
					<ul>
						<li>Get a short video about your business.</li>
						<li>We produce a half hour TV segment to be syndicated to your own online TV Station</li>
						<li>Videos syndicated to KoniTV and associated networks</li>
						<li>Syndicated video content related to your business</li>
					</ul>
					<button>Contact Today</button>
				</div>
			</div>
		</div>
		<em>Offer only valid in the greater San Diego area.</em>
	</div>
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>