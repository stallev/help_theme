<?php ?>
<main class="main">
<?php 
  $land_main_complex = carbon_get_the_post_meta('land_main_complex', $type = null);
  if(!empty($land_main_complex) ){
      foreach ($land_main_complex as $c_item) {
          if($c_item['_type'] == "head-offer"){
              ?> 
		
      <section class="head head--main" style="background-image: url(<?= wp_get_attachment_image_url($c_item['head-offer-bg'], 'full'); ?>);">
          <div class="container">
          <div class="main__inner">
            <div class="page-title">
              <h1 class="page-title__text">
                <?php echo carbon_get_theme_option('page_name'); ?>
              </h1>
              <p class="page-title__description">
                <?php echo carbon_get_theme_option('page_name_descr'); ?>
              </p>
            </div>
            <div class="head__description">
              <ul class="head__description-list">
              <?php foreach ($c_item['head-offer_serv_lists'] as $c_subitem) { ?>
                <li class="head__description-item">
                  &#10004;&nbsp;
                  <span class="head__description-text">
                    <?= $c_subitem['serv_name']; ?>
                  </span>
                </li>
              <?php } ?>
              </ul>
            </div>
            <div class="action__group">
              <a href="" class="action call-form">Заказать онлайн</a>
            </div>
          </div>
          
        </div>
      </section>
<?php } ?>
  
  <?php
    if($c_item['_type'] == "transport"){
  ?>
  <section class="section section--no-bottom-pd">
    <div class="container">
      <div class="section-title">
        <h2 class="section-title__text">Наш&nbsp;<span>транспорт</span></h2>
      </div>
      <div class="cars-list">
      <?php foreach ($c_item['transport_list'] as $c_subitem) { ?>
        <article class="car">
          <div class="swiper-container car__photo-wrap">
            <div class="swiper-wrapper">
            <?php foreach ($c_subitem['transport-photo-slider'] as $c_subitem1) { ?>
              <img src="<?= wp_get_attachment_image_url($c_subitem1['transport-photo-item'], 'full'); ?>" loading="lazy" alt="<?= $c_subitem['transport_title']; ?>" class="car__image swiper-slide">
            <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>                
          <div class="car__info">
            <h3 class="car__title"><?= $c_subitem['transport_title']; ?></h3>
            <div class="car__params">
            <?php foreach ($c_subitem['transport-model-char-list'] as $c_subitem1) { ?>
              <div class="car__params-item">
                <div class="car__param-name">
                  <?= $c_subitem1['transport_model_char_name']; ?>
                </div>
                <div class="car__param-value">
                  <?= $c_subitem1['transport_model_char__value']; ?>
                </div>
              </div>
            <?php } ?>           
            </div>
            <span class="action car__order-btn order-transport">
              Заказать
            </span>
          </div>
        </article>
        <?php } ?>
      </div>
    </div>
  </section>
  <?php }?>

  <?php
    if($c_item['_type'] == "adv"){
  ?>
  <section class="section">
    <div class="container">
      <div class="section-title">
        <h2 class="section-title__text">Почему&nbsp;<span>стоит</span>&nbsp;нас выбрать?</h2>
      </div>
      <div class="about__content">
        <div class="about__text-info">
          <p class="about__description-text">
            <?= $c_item['adv-goal']; ?>
          </p>
          <p class="about__description-text">
            <?= $c_item['adv_list_intr']; ?>
          </p>
          <div class="about__adv-list">
          <?php foreach ($c_item['adv__descr'] as $c_subitem) { ?>
            <div class="about__adv-item">
              <span class="about__adv-item-icon">&#10004;</span>
              <p class="about__adv-item-text">
                <?= $c_subitem['adv_name']; ?>
              </p>
            </div>
          <?php } ?>
          </div>
        </div>
        <div class="about__main-img-wrap">
          <img src="<?= wp_get_attachment_image_url($c_item['adv_image'], 'full'); ?>" alt="image" class="about__main-img">
        </div>
      </div>
    </div>
  </section>
  <section class="section connect">
    <div class="container">
      <div class="section-title section-title--black-bg">
        <h2 class="section-title__text">
          как с нами связаться?
        </h2>
      </div>
      <div class="connect__list">
        <div class="connect__item">
          <div class="connect__item-icon connect__item-icon--form call-form">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
          </div>
          <div class="connect__item-info">
            <h3 class="connect__item-title order-online">Форма обратной связи</h3>
            <p class="connect__item-description">Наш менеджер перезвонит вам в течение 10 минут</p>
          </div>
        </div>
        <div class="connect__item">
          <a href="tel:<?php echo carbon_get_theme_option('site_phone_1'); ?>" class="connect__item-icon connect__item-icon--call">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z"/>
            </svg>
          </a>
          <div class="connect__item-info">
            <h3 class="connect__item-title">
              Наберите номер <?php echo carbon_get_theme_option('site_phone_1_view'); ?>
            </h3>
            <p class="connect__item-description">
              В любое время суток и мы Вам ответим
            </p>
          </div>
        </div>
        <div class="connect__item">
          <div class="connect__item-icon connect__item-icon--messengers">
            <div class="connect__item-messenger connect__item-messenger--viber"><a href="<?php echo carbon_get_theme_option('site_viber-link'); ?>" class="connect__item-messenger-link">
              <svg width="30" height="32" viewBox="0 0 38 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8373 0.981379C28.49 1.01969 32.3747 3.83969 33.3359 4.72667C36.528 7.49326 38.2944 13.6313 37.1039 23.3353C36.0535 31.9094 30.078 33.4285 28.0725 33.9384C27.8758 33.9884 27.7173 34.0287 27.6054 34.065C27.0632 34.2414 22.2893 35.4355 16.0822 34.9131C15.3972 35.7095 14.4882 36.7515 13.8299 37.4608C13.6315 37.6746 13.4457 37.8858 13.2682 38.0877C12.3725 39.1061 11.6856 39.8871 10.6372 39.5616C9.59873 39.24 9.65678 37.6628 9.65678 37.6628L9.66258 33.7672H9.65387C0.577986 31.2142 0.710918 21.7987 0.813664 16.7746C0.91641 11.7505 1.89046 7.69817 4.65938 4.92868C9.63356 0.366065 19.8373 0.981379 19.8373 0.981379ZM19.5788 3.61462C26.8981 3.64655 30.406 5.85065 31.2187 6.58903C33.9191 8.9011 35.2949 14.4337 34.2889 22.539C33.4126 29.6171 28.6644 30.7241 26.9493 31.124C26.759 31.1684 26.6061 31.204 26.4999 31.2382C26.0489 31.3856 21.8549 32.4264 16.5835 32.0822C16.5835 32.0822 12.6548 36.8219 11.4276 38.0542C11.2361 38.2452 11.0108 38.323 10.8605 38.2864C10.6515 38.2348 10.5935 37.9846 10.5935 37.6189C10.5969 37.0959 10.6271 31.1453 10.6271 31.1453C3.20757 29.084 3.37986 21.5241 3.47766 17.2327C3.48102 17.0852 3.48429 16.9415 3.48716 16.8021C3.57366 12.6063 4.36254 9.16813 6.70422 6.85605C10.9116 3.04517 19.5788 3.61462 19.5788 3.61462Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8815 13.4077C19.8957 13.1348 20.1285 12.9251 20.4014 12.9393C21.4121 12.9921 22.2537 13.298 22.8532 13.918C23.4505 14.5355 23.7429 15.3979 23.7943 16.4327C23.8078 16.7056 23.5975 16.9378 23.3246 16.9514C23.0517 16.9649 22.8195 16.7546 22.8059 16.4817C22.7621 15.5974 22.5195 14.9963 22.1419 14.6059C21.7667 14.2179 21.1936 13.9716 20.3498 13.9275C20.0769 13.9133 19.8673 13.6805 19.8815 13.4077Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.1402 10.7717C19.1601 10.4992 19.3972 10.2945 19.6698 10.3144C21.7258 10.4649 23.3813 11.1675 24.5872 12.4839C25.78 13.7872 26.347 15.4088 26.3058 17.3101C26.2999 17.5833 26.0737 17.8 25.8005 17.7941C25.5273 17.7882 25.3106 17.5619 25.3165 17.2887C25.3528 15.6144 24.8605 14.2482 23.8576 13.1523M19.1402 10.7717C19.1203 11.0443 19.325 11.2814 19.5975 11.3013L19.1402 10.7717ZM19.5975 11.3013C21.4597 11.4376 22.8577 12.061 23.8576 13.1523L19.5975 11.3013Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.277 8.26498C18.2789 7.99173 18.502 7.77176 18.7752 7.77367C21.6164 7.79345 24.0182 8.73935 25.9466 10.6192C27.8912 12.5149 28.8527 15.0957 28.877 18.3001C28.8791 18.5733 28.6593 18.7965 28.386 18.7986C28.1128 18.8007 27.8896 18.5809 27.8875 18.3076C27.8647 15.3071 26.9721 13.0009 25.2558 11.3278C23.5232 9.63881 21.3721 8.78133 18.7683 8.7632C18.4951 8.76129 18.2751 8.53824 18.277 8.26498Z" fill="white"/>
                <path d="M20.4729 23.0108C20.4729 23.0108 21.1608 23.0688 21.5312 22.6126L22.2533 21.7041C22.6016 21.2537 23.4421 20.9663 24.2652 21.4249C24.8821 21.7767 25.4809 22.1591 26.0595 22.5708C26.6058 22.9725 27.7244 23.9059 27.7278 23.9059C28.2607 24.3558 28.3838 25.0164 28.021 25.7129C28.021 25.717 28.0181 25.724 28.0181 25.7275C27.6185 26.4202 27.1112 27.0448 26.5152 27.578C26.5082 27.5815 26.5082 27.585 26.5019 27.5885C25.9841 28.0211 25.4754 28.2671 24.9758 28.3263C24.9022 28.3392 24.8274 28.3438 24.7529 28.3402C24.5325 28.3423 24.3134 28.3086 24.1039 28.2404L24.0876 28.2166C23.3179 27.9995 22.0327 27.4561 19.8925 26.2754C18.6539 25.6002 17.4748 24.8213 16.3677 23.9471C15.8129 23.5092 15.2835 23.0398 14.7824 22.5412L14.6222 22.381C14.6042 22.3635 14.5868 22.3455 14.5688 22.3276C14.0702 21.8264 13.6008 21.2971 13.1629 20.7422C12.2888 19.6353 11.5099 18.4564 10.8346 17.2181C9.65385 15.0773 9.11052 13.7933 8.89342 13.0224L8.86962 13.0061C8.80156 12.7966 8.76804 12.5774 8.77035 12.3571C8.76629 12.2826 8.77077 12.2078 8.7837 12.1342C8.84601 11.6354 9.09233 11.1263 9.52266 10.607C9.52614 10.6006 9.52963 10.6006 9.53311 10.5936C10.0662 9.99764 10.6909 9.49051 11.3837 9.09132C11.3872 9.09132 11.3941 9.08784 11.3982 9.08784C12.0948 8.72504 12.7554 8.8481 13.2047 9.37808C13.2082 9.38157 14.1398 10.5002 14.5398 11.0464C14.9515 11.6256 15.3339 12.225 15.6857 12.8424C16.1443 13.665 15.8569 14.5073 15.4065 14.8544L14.498 15.5765C14.0394 15.9469 14.0998 16.6347 14.0998 16.6347C14.0998 16.6347 15.4454 21.7273 20.4729 23.0108Z" fill="white"/>
              </svg>
            </a></div>
            <div class="connect__item-messenger connect__item-messenger--telegram"><a href="<?php echo carbon_get_theme_option('site_telegram-link'); ?>" class="connect__item-messenger-link">
              <svg width="36" height="30" viewBox="0 0 39 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.5834 21.4945L14.9556 30.3244C15.8538 30.3244 16.2428 29.9386 16.7093 29.4753L20.9204 25.4509L29.6462 31.8409C31.2465 32.7327 32.374 32.2631 32.8057 30.3687L38.5333 3.53105L38.5349 3.52947C39.0425 1.16386 37.6794 0.238804 36.1202 0.819137L2.45354 13.7082C0.155859 14.6001 0.190648 15.8809 2.06295 16.4612L10.6702 19.1384L30.663 6.62879C31.6039 6.00577 32.4594 6.35049 31.7557 6.97351L15.5834 21.4945Z" fill="white"/>
              </svg>
            </a></div>
            <div class="connect__item-messenger connect__item-messenger--whatsapp"><a href="<a href="<?php echo carbon_get_theme_option('site_whatsapp-link'); ?>" class="connect__item-messenger-link">
              <svg width="30" height="30" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.957275 36.276L3.43528 27.475C1.84178 24.7679 1.00279 21.6877 1.00279 18.5236C1.00279 8.78109 8.9289 0.85498 18.6714 0.85498C28.4139 0.85498 36.3399 8.78109 36.3399 18.5236C36.3399 28.2661 28.4139 36.1922 18.6714 36.1922C15.6357 36.1922 12.6632 35.4152 10.0335 33.9397L0.957275 36.276ZM10.4975 30.7253L11.0384 31.0555C13.3311 32.4552 15.9706 33.195 18.6714 33.195C26.7613 33.195 33.3427 26.6135 33.3427 18.5236C33.3427 10.4338 26.7613 3.85216 18.6714 3.85216C10.5816 3.85216 3.99997 10.4338 3.99997 18.5236C3.99997 21.3424 4.80111 24.0797 6.31657 26.4396L6.68079 27.0067L5.25379 32.0751L10.4975 30.7253Z" fill="white"/>
                <path d="M13.7081 10.3002L12.5616 10.2377C12.2015 10.2181 11.8483 10.3384 11.5761 10.5749C11.0203 11.0575 10.1316 11.9906 9.85861 13.2066C9.45155 15.0197 10.0806 17.2398 11.7088 19.46C13.3369 21.6801 16.371 25.2323 21.7363 26.7494C23.4653 27.2383 24.8253 26.9087 25.8747 26.2375C26.7058 25.7059 27.2787 24.8526 27.4852 23.8879L27.6682 23.0329C27.7264 22.7612 27.5884 22.4855 27.336 22.3691L23.4613 20.5831C23.2097 20.4672 22.9115 20.5405 22.7423 20.7597L21.2212 22.7317C21.1063 22.8806 20.9096 22.9397 20.732 22.8773C19.6903 22.5112 16.2009 21.0498 14.2862 17.3617C14.2032 17.2017 14.2238 17.0076 14.3416 16.8712L15.7954 15.1894C15.9439 15.0177 15.9814 14.7762 15.8922 14.5676L14.222 10.66C14.133 10.452 13.9338 10.3126 13.7081 10.3002Z" fill="white"/>
              </svg>
            </a></div>
            <div class="connect__item-messenger connect__item-messenger--instagram"><a href="<?php echo carbon_get_theme_option('site_instagram-link'); ?>" class="connect__item-messenger-link">
              <svg width="30" height="30" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
                <path d="M15.929 0H6.07A6.078 6.078 0 0 0 0 6.071v9.858A6.078 6.078 0 0 0 6.071 22h9.858A6.078 6.078 0 0 0 22 15.929V6.07A6.078 6.078 0 0 0 15.929 0Zm4.12 15.929a4.124 4.124 0 0 1-4.12 4.12H6.07a4.124 4.124 0 0 1-4.119-4.12V6.07a4.124 4.124 0 0 1 4.12-4.119h9.857a4.124 4.124 0 0 1 4.12 4.12v9.857Z" fill="#fff"></path>
                <path d="M11.001 5.331a5.675 5.675 0 0 0-5.669 5.67 5.675 5.675 0 0 0 5.67 5.668A5.675 5.675 0 0 0 16.67 11 5.675 5.675 0 0 0 11 5.331Zm0 9.386A3.721 3.721 0 0 1 7.284 11a3.721 3.721 0 0 1 3.717-3.717A3.721 3.721 0 0 1 14.718 11a3.721 3.721 0 0 1-3.717 3.717ZM16.907 3.676c-.376 0-.746.152-1.011.419-.267.265-.42.635-.42 1.012s.153.746.42 1.013c.265.265.635.419 1.01.419.378 0 .746-.154 1.013-.42.267-.266.42-.636.42-1.012 0-.377-.153-.747-.42-1.012a1.438 1.438 0 0 0-1.012-.419Z" fill="#fff"></path>
              </svg>
            </a></div>
          </div>
          <div class="connect__item-info">
            <h3 class="connect__item-title">Отправьте сообщение</h3>
            <p class="connect__item-description">
              Мы перезвоним вам
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section section--no-bottom-pd advantages">
    <div class="container">
      <div class="section-title">
        <h2 class="section-title__text">наши&nbsp;<span>преимущества</span></h2>
      </div>
      <div class="advantages__list">
        <div class="advantages__item-wrap">
          <div class="advantages__item">
            <div class="advantages__item-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-hourglass" viewBox="0 0 16 16">
                <path d="M2 1.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1-.5-.5zm2.5.5v1a3.5 3.5 0 0 0 1.989 3.158c.533.256 1.011.791 1.011 1.491v.702c0 .7-.478 1.235-1.011 1.491A3.5 3.5 0 0 0 4.5 13v1h7v-1a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351v-.702c0-.7.478-1.235 1.011-1.491A3.5 3.5 0 0 0 11.5 3V2h-7z"/>
              </svg>
            </div>
            <h3 class="advantages__item-title">24/7 режим работы</h3>
            <p class="advantages__item-description">
              Мы работаем 24/7 без праздников и выходных
            </p>
          </div>
        </div>              
        <div class="advantages__item-wrap">
          <div class="advantages__item">
            <div class="advantages__item-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
              </svg>
            </div>
            <h3 class="advantages__item-title">любая форма оплаты</h3>
            <p class="advantages__item-description">
              Принимаем как наличный, так и безналичный расчет
            </p>
          </div>
        </div>              
        <div class="advantages__item-wrap">
          <div class="advantages__item">
            <div class="advantages__item-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
              </svg>
            </div>
            <h3 class="advantages__item-title">опытные водители</h3>
            <p class="advantages__item-description">У нас работают водители со стажем от 3 лет</p>
          </div>
        </div>              
      </div>
    </div>
  </section>
  <section class="section  section--no-bottom-pd answers">
    <div class="container">
      <div class="section-title">
        <h2 class="section-title__text">
          РАССЧИТАТЬ&nbsp;<span>СТОИМОСТЬ</span>&nbsp;АРЕНДЫ
        </h2>
      </div>
      <div class="answers__form-outer">
        <p class="answers__form-paragraph">
          Чтобы рассчитать стоимость аренды автобуса, заполните форму ниже:
        </p>
        <form class="answers__form answers__form--bottom">
          <div class="answers__form-inner">
            <input type="text" class="answers__form-text-field" placeholder="Ваше имя" name="person-name" required>
            <input type="tel" class="answers__form-text-field phone-field" placeholder="Ваш номер телефона" name="person-phone" required>
            <textarea name="" id="" cols="30" rows="6" class="answers__form-textarea-field" name="person-message" placeholder="Текст сообщения" ></textarea>
            <div class="action__group action__group--answers">
              <button type="submit" class="action">
                рассчитать
              </button>
            </div>
          </div>
        </form>
      </div>
    <div class="answers__contacts">
      <div class="answers__contact-item">
        <span class="answers__contact-item-name">Телефон:&nbsp;</span>
        <a href="tel:<?php echo carbon_get_theme_option('site_phone_1'); ?>" class="answers__contact-item-value"><?php echo carbon_get_theme_option('site_phone_1_view'); ?></a>
      </div>
      <div class="answers__contact-item">
        <span class="answers__contact-item-name">Email:&nbsp;</span>
        <a href="mailto:<?php echo carbon_get_theme_option('site_email'); ?>" class="answers__contact-item-value"><?php echo carbon_get_theme_option('site_email'); ?></a>
      </div>
      <div class="answers__contact-item">
        <span class="answers__contact-item-name"><?php echo carbon_get_theme_option('firm_name'); ?></span>
      </div>
    </div>  
    </div>
  </section> 
</main>
<?php } ?>  
<?php }} ?>