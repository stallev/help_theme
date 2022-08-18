<?php ?>
<?php 
  $land_main_complex = carbon_get_the_post_meta('land_main_complex', $type = null);
  if(!empty($land_main_complex) ){
      foreach ($land_main_complex as $c_item) {
          if($c_item['_type'] == "head-offer"){
              ?> 
		<section class="own-head" style="background-image: url(<?= wp_get_attachment_image_url($c_item['head-offer-bg'], 'full'); ?>);">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="own-head-title">
							<h1><?= $c_item['head-offer-title']; ?></h1>
						</div>
						<div class="own-head-list">
							<ul>
							<?php foreach ($c_item['products_list'] as $c_subitem) { ?>
								<li>
									<div class="own-head-list-img">
										<img src="<?= wp_get_attachment_image_url($c_subitem['product_icon'], 'full'); ?>" alt="">
									</div>
									<div class="own-head-list-text">
										<p><?= $c_subitem['product_name']; ?></p>
									</div>
								</li>
								<?php } ?>	
							</ul>						
						</div>
						<div class="own-head-btn">
							<a href="#callback" data-effect="mfp-zoom-in" class="button-wr btn btn-lg hero-button">Заказать</a>
						</div>
					</div>
					<div class="col-sm-4">
					<?php  echo do_shortcode('[contact-form-7 id="116" title="Контактная форма в шапке"]');  ?>
					</div>
				</div>
			</div>
		</section>
<?php } ?>
		
	<?php
  if($c_item['_type'] == "our-services"){
      ?>
	<section class="servicies">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading">
						<h2><?= $c_item['services-title']; ?></h2>							
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
			<?php foreach ($c_item['services_lists'] as $c_subitem) { ?>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="service-item">  					
						<div class="col-sm-7">
							<div class="service-img-ind">
								<a href="#">
									<img src="<?= wp_get_attachment_image_url($c_subitem['img'], 'full'); ?>" alt="">	
								</a>						
							</div>
						</div>
						<div class="col-sm-5">
							<div class="service-item-head">
								<a href="#">
									<h3><?= $c_subitem['serv_name']; ?></h3>		
								</a>					
							</div>
						</div>						
						<div class="col-sm-12">  
							<div class="service-text">								
								<div class="btn-head">
									<a href="#beton" class="button-primary">Подробнее...</a>
									<a href="#callback" class="phone-btn button-wr" data-effect="mfp-zoom-in">Заказать</a>
								</div>
							</div>
						</div>												
					</div>
				</div>
			<?php }?>	
			</div>
		</div>

	</section>
	<?php }
	?>
	<?php
	if($c_item['_type'] == "where-is"){
      ?>
	  <section class="where-is">

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="custom-heading">
							<h2><?= $c_item['where-section-title']; ?></h2>							
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
				<?php foreach ($c_item['where-section-items-list'] as $c_subitem) { ?>
					<div class="col-lg-3 col-md-3 col-sm-4">
						<div class="where-is-item">
							<div class="where-is-img">
								<img src="<?= wp_get_attachment_image_url($c_subitem['where-img'], 'full'); ?>" alt="">
							</div>
							<div class="where-is-text">
								<p><?= $c_subitem['where-name']; ?></p>
							</div>
						</div>
					</div> 
					<?php }?>

				</div>
			</div>

		</section>
		<?php }
	?>

	<?php
	if($c_item['_type'] == "beton"){
      ?>
	  <section class="beton" id="beton">

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="custom-heading">
							<h2><?= $c_item['beton-section-title']; ?></h2>							
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">

					<div class="col-lg-6 col-md-6">
						<div class="beton-img">
							<img src="<?= wp_get_attachment_image_url($c_item['beton-section-image'], 'full'); ?>" alt="">
						</div>
					</div>

					<div class="col-lg-6 col-md-6">
						<div class="beton-text">
							<p><?= $c_item['beton-text-content']; ?></p>
							<table class="table table-striped">													
								<tbody>
								<?php foreach ($c_item['beton-section-items-list'] as $c_subitem) { ?>
									<tr>
										<th scope="row"><i class="fas fa-check"></i></th>
										<td>
										<?= $c_subitem['beton_name']; ?>
										</td>
									</tr>
									<?php }?>	
								</tbody>
							</table>
							
						</div>
					</div>

				</div>
			</div>

		</section>
		
		<section class="materials" style="background-image: url(<?= wp_get_attachment_image_url($c_item['beton-tech-bg'], 'full'); ?>);">

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="custom-heading">
							<h2><?= $c_item['beton-text-title']; ?></h2>							
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
				<?php foreach ($c_item['beton-tech-list'] as $c_subitem) { ?>
					<div class="col-sm-6">
						<div class="materials-item">
							<div class="materials-img">
								<img src="<?= wp_get_attachment_image_url($c_subitem['beton-tech-image'], 'full'); ?>" alt="">
							</div>
							<div class="materials-text">
								<p><?= $c_subitem['tech_beton_descr']; ?></p>
							</div>
						</div>
					</div>
					<?php }?>	
				</div>
			</div>

  	</section>
		<?php }
	?>
		<?php
			if($c_item['_type'] == "form-conditions-beton"){
      ?>
		<section class="form-make" id="form-make">
		
			<div class="container padding-top">
				<div class="row">
					<div class="col">

						<div class="form-box"> 
							<div class="form-box__content">
								<div class="form-box__form-wrap">
									<div class="form-box__form-title">
										<h3><?= $c_item['form-conditions-beton-strong']; ?></h3>
										<p><?= $c_item['form-conditions-beton-title-ordinary']; ?></p>
									</div>
									<div class="form-box__form-container">
									<?php  echo do_shortcode('[contact-form-7 id="72" title="Контактная форма после секции о бетонных полах"]');  ?>
										<div id="answer-form-one"></div>
									</div>
								</div>
							</div>
							<div class="form-box__bg">
								<div class="form-box__bg-img"><img src="<?= wp_get_attachment_image_url($c_item['form-conditions-beton-image'], 'full'); ?>"/></div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
		<?php } ?>

		<?php
			if($c_item['_type'] == "naliv"){
      ?>
			<section class="nalivnie" id="nalivnie">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="custom-heading">
								<h2><?= $c_item['naliv-section-title']; ?></h2>							
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row">

						<div class="col-lg-6 col-md-6">
							<div class="beton-img">
								<img src="<?= wp_get_attachment_image_url($c_item['naliv-section-image'], 'full'); ?>" alt="">
							</div>
						</div>

						<div class="col-lg-6 col-md-6">
							<div class="beton-text">
								<p><?= $c_item['naliv-text-content']; ?></p>
								<table class="table table-striped">													
									<tbody>
									<?php foreach ($c_item['naliv-section-items-list'] as $c_subitem) { ?>
										<tr>
											<th scope="row"><i class="fas fa-check"></i></th>
											<td><?= $c_subitem['naliv_name']; ?></td>
										</tr>
										<?php } ?>	
									</tbody>
								</table>
								
							</div>
						</div>

					</div>
				</div>

			</section>
		<?php } ?>

		<?php
			if($c_item['_type'] == "work-standarts"){
      ?>
			<section class="dop-edge" id="dop-edge">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="custom-heading">
								<h2><?= $c_item['work-standarts-title']; ?></h2>							
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row">
					<?php foreach ($c_item['work-standarts-items_list'] as $c_subitem) { ?>
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="unit_category"> 
								<div class="category_item_wrap">
									<div class="category_item">										
										<div class="category_media_wrap">
											<div class="category_media">
												<img src="<?= wp_get_attachment_image_url($c_subitem['work-standarts-icon'], 'full'); ?>" alt="">
											</div>
											<div class="category_media hover_image">
												<img src="<?= wp_get_attachment_image_url($c_subitem['work-standarts-icon-hover'], 'full'); ?>" alt="">
											</div>
										</div>
										<h6 class="category_title"><?= $c_subitem['work_standarts_name']; ?></h6>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
				</div>

			</section>
		<?php } ?>

		<?php
			if($c_item['_type'] == "form-conditions-naliv"){
      ?>
		<section class="form-make form-make-second" id="form-make" style="padding-top:0;">
		
			<div class="container padding-top">
				<div class="row">
					<div class="col">

						<div class="form-box"> 
							<div class="form-box__content">
								<div class="form-box__form-wrap">
									<div class="form-box__form-title">
										<h3><?= $c_item['form-conditions-naliv-strong']; ?></h3>
										<p><?= $c_item['form-conditions-naliv-title-ordinary']; ?></p>
									</div>
									<div class="form-box__form-container">
									<?php  echo do_shortcode('[contact-form-7 id="72" title="Контактная форма после секции о бетонных полах"]');  ?>
										<div id="answer-form-one"></div>
									</div>
								</div>
							</div>
							<div class="form-box__bg">
								<div class="form-box__bg-img"><img src="<?= wp_get_attachment_image_url($c_item['form-conditions-naliv-image'], 'full'); ?>"/></div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
		<?php } ?>

		<?php
			if($c_item['_type'] == "our-works"){
      ?>
			<section class="gallery-section" id="gallery-section">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="custom-heading">
								<h2><?= $c_item['our-works_title']; ?></h2>							
							</div>
						</div>
					</div>
				</div>

				<div class="container-fluid galeryBox">
					<div class="row d-flex justify-content-center" id="galeryBox-items">
					<?php foreach ($c_item['our-works-items_list'] as $c_subitem) { ?>
						<div class="galeryBox-item col-sm-6 col-md-4 col-lg-3 mb-4">
							<div class="galeryBox__box">
								<div class="galeryBox__img" style="background-image: url(<?= wp_get_attachment_image_url($c_subitem['our-works-items-image'], 'full'); ?>);"><a class="galeryBox__img-link" data-lightbox="image-1" href="<?= wp_get_attachment_image_url($c_subitem['our-works-items-image'], 'full'); ?>" data-title=""></a></div>
							</div>
						</div>
					<?php } ?>	
					</div>  
				</div>

			</section>

		<?php } ?>

		<?php
			if($c_item['_type'] == "proposals"){
      ?>
			<section class="offer" id="offer">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="custom-heading">
								<h2><?= $c_item['proposals_title']; ?></h2>							
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row">
					
						<div class="col-sm-6">
							<div class="offer-sec-item">
								<h4><?= $c_item['proposals_slogan']; ?></h4>
								<span>%</span>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="offer-btn">
								<a href="#callback" class="button-wr" data-effect="mfp-zoom-in">Заказать</a>
							</div>
						</div>

					</div>
				</div>

				<div class="container">
					<div class="row">
					<?php foreach ($c_item['proposals-items_list'] as $c_subitem) { ?>
						<div class="col-xs-6 col-sm-1-5 col-md-1-5 col-lg-1-5">
							<div class="offer-item">
								<div class="offer-img">
									<img src="<?= wp_get_attachment_image_url($c_subitem['proposals-item-image'], 'full'); ?>" alt="">
								</div>
								<div class="offer-text">
									<p><?= $c_subitem['proposals_item_name']; ?></p>
								</div>
							</div>
						</div>
					<?php } ?>
						
					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="custom-heading custom-heading-second">
								<h2><?= $c_item['proposals_about-company-title']; ?></h2>							
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="about-text">
								<p><?= $c_item['proposals_about-company-content']; ?></p>
							</div>
						</div>
					</div>
				</div>

			</section>
		<?php } ?>

<?php }} ?>