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
              <h1 class="page-title__text"><?php echo carbon_get_theme_option('site_name'); ?>
              </h1>
              <p class="page-title__description">
              <?= $c_item['head-offer-description']; ?>
              </p>
            </div>
            <div class="head__description">
              <ul class="head__description-list">
              <?php foreach ($c_item['head-offer_serv_lists'] as $c_subitem) { ?>
                <li class="head__description-item">
                &#8226;&nbsp;
                  <span class="head__description-text">
                    <?= $c_subitem['serv_name']; ?>
                  </span>
                </li>
              <?php } ?>
              </ul>
            </div>
          </div>
          
        </div>
      </section>
<?php } ?>
  
  <?php
    if($c_item['_type'] == "about-us"){
  ?>
  <section class="section">
    <div class="container">
      <div class="section-title">
        <h2 class="section-title__text">
          <?= $c_item['about_title']; ?>
        </h2>
      </div>
      <div class="about">
        <div class="about__text-info">
          <?php foreach ($c_item['about_list'] as $c_subitem) { ?>
            <p class="about__description-text">
              <?= $c_subitem['about_item']; ?>
            </p> 
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <?php }?>

  <?php
    if($c_item['_type'] == "what_we_do"){
  ?>
  <section class="section section--dark-bg ministry">
    <div class="container">
      <div class="section-title section-title--black-bg">
        <h2 class="section-title__text">
          <?= $c_item['what_we_do_title']; ?>
        </h2>
      </div>
      <div class="about">
        <div class="about__text-info">
          <?php foreach ($c_item['what_we_do_list'] as $c_subitem) { ?>
            <p class="about__description-text about__description-text--light-color">
              <?= $c_subitem['what_we_do_item']; ?>
            </p> 
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div class="section-title">
        <h2 class="section-title__text">?????? &nbsp;<span>???????????????? ???????????????????????????</span></h2>
      </div>
      <div class="about__video">
        <iframe class="about__video-iframe" src="https://www.youtube.com/embed/OiEmRT-Xp54" title="?????????????????? ???? ????????????  ??????????????  2022 || ???????????????? ??????????????????????" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </section>
  <section class="section section--dark-bg problems">
    <div class="container">
      <div class="section-title section-title--black-bg">
        <h2 class="section-title__text">?? ?????? &nbsp;<span>?????????? ??????????????????</span>&nbsp;???????????? ?????????????????</h2>
      </div>
      <div class="problems__list">
        <div class="problems__item-wrap">
          <div class="problems__item">
            <div class="problems__item-icon">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <path style="fill:#9ED368;" d="M0,256.006C0,397.402,114.606,512.004,255.996,512C397.394,512.004,512,397.402,512,256.006
                  C512.009,114.61,397.394,0,255.996,0C114.606,0,0,114.614,0,256.006z"/>
                <path style="fill:#8BC052;" d="M497.433,341.177c-0.394-0.395-236.689-236.689-236.977-236.969
                  c-2.497-2.419-6.447-2.413-8.925,0.013c-4.128,4.025-101.131,99.722-101.131,197.462c0,30.223,12.256,57.543,31.911,77.154
                  c0.487,0.507,0.991,0.992,1.488,1.488c0.487,0.506,124.505,124.506,124.998,124.997c0.319,0.332,0.647,0.653,0.975,0.975
                  C397.26,487.595,468.14,424.219,497.433,341.177z"/>
                <g>
                  <path style="fill:#F4F6F9;" d="M259.2,364.802c-35.291,0-64-28.709-64-64c0-3.534-2.866-6.4-6.4-6.4c-3.534,0-6.4,2.866-6.4,6.4
                    c0,42.347,34.453,76.8,76.8,76.8c3.534,0,6.4-2.866,6.4-6.4C265.6,367.668,262.734,364.802,259.2,364.802z"/>
                  <path style="fill:#F4F6F9;" d="M260.457,104.208c-2.497-2.419-6.447-2.413-8.925,0.013
                    c-4.129,4.025-101.132,99.722-101.132,197.462c0,59.506,47.372,107.919,105.6,107.919s105.6-48.413,105.6-107.919
                    C361.6,203.402,264.585,108.211,260.457,104.208z M256,396.802c-51.169,0-92.8-42.669-92.8-95.119
                    c0-80.769,73.728-163.634,92.813-183.725c19.09,20.01,92.787,102.512,92.787,183.725C348.8,354.133,307.169,396.802,256,396.802z"
                    />
                </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
              </svg>
            </div>
            <h3 class="problems__item-title">???????????????? ????????</h3>
            <p class="problems__item-description">
              ?? ???????????????????? ?????????????? ???????????????? ?????????????????? ?????????????????????????? ??????????????
            </p>
          </div>
        </div>              
        <div class="problems__item-wrap">
          <div class="problems__item">
            <div class="problems__item-icon">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 57.709 57.709" style="enable-background:new 0 0 57.709 57.709;" xml:space="preserve">
                <g>
                  <path d="M18.835,43.565c-0.391-0.391-1.023-0.391-1.414,0c-0.875,0.875-2.301,0.875-3.176,0c-1.654-1.656-4.35-1.656-6.004,0
                    c-0.391,0.391-0.391,1.023,0,1.414s1.023,0.391,1.414,0c0.875-0.875,2.301-0.875,3.176,0c0.828,0.827,1.915,1.241,3.002,1.241
                    s2.174-0.414,3.002-1.241C19.226,44.59,19.226,43.956,18.835,43.565z"/>
                  <path d="M15.775,38.859c0.849-0.85,2.325-0.85,3.175,0c0.827,0.828,1.915,1.241,3.002,1.241s2.175-0.413,3.002-1.241
                    c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0c-0.875,0.875-2.301,0.875-3.176,0c-0.802-0.803-1.867-1.244-3.001-1.244
                    c-1.135,0-2.2,0.441-3.002,1.244c-0.391,0.391-0.391,1.024,0,1.414C14.752,39.25,15.385,39.25,15.775,38.859z"/>
                  <path d="M21.895,32.74c0.875-0.875,2.301-0.875,3.176,0c0.827,0.828,1.915,1.241,3.002,1.241s2.175-0.413,3.002-1.241
                    c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0c-0.875,0.875-2.301,0.875-3.176,0c-1.654-1.656-4.35-1.656-6.004,0
                    c-0.391,0.391-0.391,1.023,0,1.414S21.504,33.131,21.895,32.74z"/>
                  <path d="M28.014,26.62c0.875-0.875,2.301-0.875,3.176,0c0.827,0.828,1.915,1.241,3.002,1.241s2.175-0.413,3.002-1.241
                    c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0c-0.875,0.875-2.301,0.875-3.176,0c-1.654-1.656-4.35-1.656-6.004,0
                    c-0.391,0.391-0.391,1.023,0,1.414S27.623,27.011,28.014,26.62z"/>
                  <path d="M34.134,20.501c0.875-0.875,2.301-0.875,3.176,0c0.803,0.803,1.868,1.244,3.002,1.244s2.199-0.441,3.001-1.244
                    c0.391-0.391,0.391-1.024,0-1.414c-0.391-0.391-1.023-0.391-1.414,0c-0.852,0.85-2.327,0.849-3.175,0
                    c-1.654-1.656-4.35-1.656-6.004,0c-0.391,0.391-0.391,1.023,0,1.414S33.743,20.892,34.134,20.501z"/>
                  <path d="M24.866,12.197c0.727-0.727,1.908-0.727,2.635,0c0.753,0.753,1.742,1.13,2.731,1.13s1.979-0.377,2.731-1.13
                    c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0c-0.727,0.727-1.908,0.727-2.635,0c-1.506-1.506-3.957-1.506-5.463,0
                    c-0.391,0.391-0.391,1.023,0,1.414S24.476,12.588,24.866,12.197z"/>
                  <path d="M18.847,19.397c0.753,0.753,1.742,1.129,2.731,1.129s1.979-0.376,2.731-1.129c0.391-0.39,0.391-1.023,0-1.414
                    s-1.023-0.391-1.414,0c-0.727,0.725-1.908,0.725-2.635,0c-1.506-1.506-3.957-1.506-5.463,0c-0.391,0.391-0.391,1.023,0,1.414
                    s1.023,0.391,1.414,0C16.938,18.672,18.119,18.67,18.847,19.397z"/>
                  <path d="M33.702,45.017c-0.726,0.727-1.907,0.727-2.635,0c-1.506-1.506-3.957-1.506-5.463,0c-0.391,0.39-0.391,1.023,0,1.414
                    s1.023,0.391,1.414,0c0.727-0.725,1.908-0.725,2.635,0c0.753,0.753,1.742,1.13,2.731,1.13s1.979-0.377,2.731-1.13
                    c0.391-0.391,0.391-1.023,0-1.414S34.093,44.626,33.702,45.017z"/>
                  <path d="M40.253,14.381c0.663-0.664,1.746-0.666,2.411,0c0.699,0.7,1.63,1.086,2.619,1.086s1.92-0.386,2.619-1.086
                    c0.391-0.391,0.391-1.024,0-1.414c-0.391-0.391-1.023-0.391-1.414,0c-0.645,0.645-1.766,0.645-2.41,0
                    c-1.443-1.441-3.792-1.443-5.239,0c-0.391,0.39-0.391,1.023,0,1.414S39.862,14.771,40.253,14.381z"/>
                  <path d="M57.146,20.97c-0.351-1.573-1.436-2.802-3.225-3.654c-0.879-0.715-2.266-0.518-4.414,0.652
                    c0.771-1.27,1.507-2.546,2.182-3.832c1.015-1.93,1.349-5.007,0.023-7.157c-0.629-1.02-1.91-2.227-4.326-2.185
                    c-2.574,0.047-5.449,1.66-8.167,3.594c0.103-0.189,0.209-0.379,0.309-0.569c0.844-1.605,1.119-4.17,0.013-5.965
                    C38.787,0.63,37.47,0.008,35.884,0c-3.206,0.058-6.934,3.025-9.928,5.41c-0.776,0.618-1.51,1.201-2.116,1.635
                    c-5.514,3.942-10.651,8.995-14.858,14.611c-0.451,0.604-1.095,1.36-1.84,2.236c-3.157,3.713-7.48,8.798-6.579,12.846
                    c0.351,1.573,1.435,2.802,3.225,3.654c0.346,0.281,0.767,0.425,1.281,0.425c0.586,0,1.301-0.197,2.156-0.58
                    c-2.33,3.311-4.06,6.811-3.393,9.808c0.42,1.884,1.731,3.357,3.9,4.382c0.3,0.241,0.771,0.475,1.472,0.475
                    c0.014,0,0.027,0,0.041-0.001c1.872-0.024,5.107-1.926,8.753-4.606c-0.691,1.607-0.851,3.904,0.168,5.558
                    c0.739,1.2,2,1.856,3.559,1.856c0.033,0,0.067-0.001,0.101-0.001c3.206-0.058,6.934-3.025,9.928-5.41
                    c0.776-0.618,1.51-1.201,2.116-1.635c5.512-3.94,10.649-8.993,14.858-14.611c0.451-0.604,1.095-1.36,1.84-2.236
                    C53.725,30.103,58.048,25.018,57.146,20.97z M10.81,35.658c-4.709,3.438-5.779,3.153-5.76,3.183l-0.128-0.128l-0.164-0.075
                    c-1.291-0.588-2.024-1.352-2.243-2.334c-0.551-2.475,2.003-6.088,4.44-9.074C6.921,27.523,7,27.827,7.226,28.052
                    c0.391,0.391,1.023,0.391,1.414,0c0.706-0.706,1.93-0.704,2.634,0c0.754,0.753,1.742,1.129,2.731,1.129s1.979-0.376,2.731-1.129
                    c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0c-0.726,0.726-1.907,0.728-2.635,0c-1.264-1.266-3.342-1.431-4.824-0.502
                    c0.275-0.327,0.546-0.646,0.802-0.947c0.767-0.901,1.429-1.681,1.918-2.333c4.084-5.455,9.071-10.359,14.42-14.184
                    c0.648-0.463,1.401-1.063,2.198-1.697c2.613-2.081,6.191-4.93,8.718-4.975c0.024-0.001,0.048-0.001,0.071-0.001
                    c0.869,0,1.475,0.297,1.849,0.904c0.672,1.09,0.481,2.917-0.079,3.985c-0.83,1.578-1.765,3.156-2.86,4.818
                    c-0.052,0.042-0.104,0.083-0.156,0.124c-0.118,0.094-0.234,0.186-0.347,0.275c-0.118,0.093-0.233,0.183-0.347,0.273
                    c-0.096,0.075-0.192,0.151-0.285,0.222c-0.154,0.12-0.303,0.234-0.45,0.345c-0.05,0.038-0.102,0.079-0.151,0.115
                    c-0.198,0.149-0.39,0.291-0.572,0.421c-6.814,4.872-13.165,11.117-18.366,18.062c-0.389,0.52-0.897,1.135-1.475,1.821
                    c-0.259,0.307-0.528,0.625-0.814,0.961c-0.332,0.39-0.676,0.797-1.024,1.21C10.877,35.579,10.845,35.616,10.81,35.658z
                    M8.988,52.871l-0.126-0.126L8.698,52.67c-1.673-0.763-2.626-1.764-2.915-3.06c-0.785-3.525,3.272-8.753,6.574-12.684
                    c0.338-0.403,0.669-0.794,0.99-1.17c0.037-0.044,0.077-0.09,0.113-0.133c0.947-1.114,1.766-2.076,2.367-2.879
                    c1.27-1.696,2.61-3.348,4.009-4.948c4.198-4.799,8.932-9.12,13.92-12.686c0.192-0.138,0.392-0.286,0.599-0.441
                    c0.076-0.057,0.156-0.119,0.233-0.178c0.129-0.099,0.259-0.197,0.395-0.303c0.112-0.087,0.228-0.178,0.343-0.269
                    c0.117-0.092,0.235-0.184,0.358-0.281c0.084-0.066,0.169-0.134,0.254-0.201c0.111-0.088,0.216-0.171,0.331-0.262l0.002-0.002
                    c0.068-0.054,0.133-0.105,0.201-0.16c3.266-2.601,7.737-6.161,10.951-6.219c1.254-0.03,2.063,0.382,2.589,1.234
                    c0.877,1.423,0.636,3.795-0.091,5.178c-1.419,2.699-3.069,5.366-4.915,7.991L45.003,21.2c-0.596,0.848-1.213,1.69-1.849,2.526
                    c-0.007,0.009-0.013,0.018-0.02,0.027c-0.605,0.794-1.229,1.581-1.868,2.362c-0.05,0.061-0.098,0.121-0.147,0.182
                    c-0.588,0.715-1.194,1.421-1.809,2.122c-0.098,0.112-0.192,0.225-0.291,0.336c-0.696,0.786-1.407,1.563-2.135,2.329
                    c-0.07,0.074-0.174,0.18-0.307,0.314c-0.012,0.012-0.029,0.029-0.042,0.042c-0.111,0.112-0.248,0.247-0.398,0.395
                    c-1.597,1.571-5.143,4.928-9.152,8.473c-2.213,1.955-4.306,3.737-6.22,5.292l-0.126,0.103l-0.001,0.002
                    C10.775,53.701,9.079,52.923,8.988,52.871z M51.552,29.477c-0.049-0.114-0.116-0.222-0.209-0.314c-0.391-0.391-1.023-0.391-1.414,0
                    c-0.705,0.705-1.93,0.705-2.635,0c-1.462-1.462-4.005-1.46-5.463,0c-0.391,0.391-0.391,1.024,0,1.414
                    c0.391,0.391,1.023,0.391,1.414,0c0.705-0.705,1.93-0.705,2.635,0c0.729,0.73,1.699,1.133,2.731,1.133
                    c0.46,0,0.904-0.092,1.324-0.246c-0.307,0.366-0.609,0.721-0.893,1.055c-0.767,0.901-1.429,1.681-1.918,2.333
                    c-4.087,5.456-9.073,10.36-14.42,14.184c-0.648,0.463-1.401,1.063-2.198,1.697c-2.613,2.081-6.191,4.93-8.718,4.975
                    c-0.936,0.029-1.536-0.28-1.921-0.904c-0.672-1.09-0.481-2.916,0.08-3.984c0.602-1.144,1.299-2.337,2.184-3.738
                    c2.164-1.76,4.348-3.641,6.383-5.451c1.57-1.256,3.106-2.578,4.594-3.956c0.025,0.033,0.038,0.072,0.068,0.102
                    c0.391,0.391,1.023,0.391,1.414,0c0.727-0.726,1.908-0.728,2.635,0c0.729,0.73,1.699,1.133,2.731,1.133
                    c1.031,0,2.001-0.402,2.731-1.133c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0c-0.705,0.705-1.93,0.705-2.635,0
                    c-0.833-0.832-1.951-1.187-3.041-1.1c0.642-0.646,1.277-1.296,1.895-1.96c0.394-0.387,0.691-0.685,0.841-0.844
                    c0.746-0.786,1.47-1.578,2.178-2.376c0.109-0.123,0.212-0.247,0.32-0.37c0.621-0.707,1.228-1.418,1.818-2.133
                    c0.059-0.071,0.115-0.143,0.173-0.214c0.647-0.789,1.275-1.583,1.885-2.382c0.002-0.003,0.005-0.006,0.007-0.009
                    c0.655-0.857,1.286-1.72,1.897-2.588l0.283-0.335c4.372-3.191,5.607-3.164,5.799-3.146l0.255,0.166
                    c1.291,0.588,2.024,1.352,2.243,2.334C55.685,23.608,53.711,26.715,51.552,29.477z"/>
                </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
              </svg>
            </div>
            <h3 class="problems__item-title">???????????????? ??????????????</h3>
            <p class="problems__item-description">
              ???????????? ???????? ?????????? ???????????????????? ???????????? ?????????????? ???????? ?? ??????????
            </p>
          </div>
        </div>              
        <div class="problems__item-wrap">
          <div class="problems__item">
            <div class="problems__item-icon">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 184 184" style="enable-background:new 0 0 184 184;" xml:space="preserve">
                <path d="M160.324,38.56h-3.574v-5.678c0-1.381-1.119-2.5-2.5-2.5h-14c-1.381,0-2.5,1.119-2.5,2.5v5.678h-12.417v-6.341
                c0-9.694-7.887-17.581-17.581-17.581H76.247c-9.694,0-17.581,7.887-17.581,17.581v6.341H46.25v-5.678c0-1.381-1.119-2.5-2.5-2.5h-14
                c-1.381,0-2.5,1.119-2.5,2.5v5.678h-3.574C10.6,38.56,0,49.16,0,62.236v83.45c0,13.076,10.6,23.676,23.676,23.676h136.648
                c13.076,0,23.676-10.6,23.676-23.676v-83.45C184,49.16,173.4,38.56,160.324,38.56z M68.666,32.219c0-4.18,3.401-7.581,7.581-7.581
                h31.505c4.18,0,7.581,3.401,7.581,7.581v6.341H68.666V32.219z M92,146.606c-23.552,0-42.645-19.093-42.645-42.645
                S68.448,61.316,92,61.316s42.645,19.093,42.645,42.645S115.552,146.606,92,146.606z M124.015,114.434
                c0,0.663-0.262,1.299-0.73,1.769c-0.469,0.469-1.104,0.733-1.767,0.734l-16.515,0.015v16.514c0,1.381-1.119,2.5-2.5,2.5H81.497
                c-1.381,0-2.5-1.119-2.5-2.5v-16.49l-16.49,0.015c-0.001,0-0.001,0-0.002,0c-0.662,0-1.297-0.263-1.766-0.73
                c-0.469-0.469-0.733-1.104-0.734-1.767l-0.019-21.005c-0.001-1.381,1.117-2.501,2.498-2.502l16.514-0.015V74.456
                c0-1.381,1.119-2.5,2.5-2.5h21.005c1.381,0,2.5,1.119,2.5,2.5v16.49l16.49-0.015c0.001,0,0.002,0,0.002,0
                c1.38,0,2.499,1.118,2.5,2.498L124.015,114.434z"/>
                <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
              </svg>
            </div>
            <h3 class="problems__item-title">??????????????????????</h3>
            <p class="problems__item-description">???????? ?? ???????????????????????? ?????????????????????????? ???? ?????????? ???????????????? ?????????????????????? ???? ?????? ?????????? ??????????????????</p>
          </div>
        </div>              
      </div>
    </div>
  </section>
  <?php
    }
  ?>

  <?php
    if($c_item['_type'] == "our_photos"){
  ?>
  <section class="section gallery">
    <div class="container">
      <div class="section-title section-title--black-bg">
        <h2 class="section-title__text">
          <?= $c_item['our_photos_title']; ?>
        </h2>
      </div>
      <div class="gallery__list">
        <?php foreach ($c_item['our_photos_gallery'] as $c_subitem) { ?>
          <a href="<?= wp_get_attachment_image_url($c_subitem, 'full'); ?>" class="gallery__item" data-lightbox="roadtrip">
            <img src="<?= wp_get_attachment_image_url($c_subitem, 'photo-preview-thumb'); ?>" class="gallery__item-image" alt="Image">
        </a>
        <?php } ?>
      </div>
    </div>
  </section>
  <section class="section section--dark-bg my-help" id="donate-block">
    <div class="container">
      <div class="section-title">
        <h2 class="section-title__text">?????? ?? ????????&nbsp;<span>?????????????</span></h2>
      </div>
      <div class="my-help__items-list">
        <div class="my-help__item">
          <p class="my-help__item-description">
            ???????????????? ?? ???????? ?????????????????????? ?? ???????????? ??????????
          </p>
        </div>
        <div class="my-help__item">
          <p class="my-help__item-description">
            ???????????????????? ??????????, ???????? ?????????? ?????????????????? ?????????? ?????? ?????????? ????????????????. ???? ???????????? ?????????????????? ?????????????? ?????????????????????????? ?????? ???????????????? ???????????????????? (?????? ?? ??????????, ????????????) ??????????????????????????
          </p>
        </div>              
        <div class="action__group action__group--center">
          <a href="" class="action action--russia">
            <span>????????????????????????</span>
            <span class="action__location-place">???? ????????????</span>
          </a>
          <a href="" class="action action--russia">
            <span>????????????????????????</span>
            <span class="action__location-place">???? ?????????????????? ??????????</span>
          </a>
        </div>
        <p class="my-help__notion">
          ?? ?????????? ?? ??????????????????, ???????????????????????? ?? ???????????????????? ?????????????? ????????????, ???? ???????????????????? ?????????????????? ?????????????? ?????? ?????????????????????????? ??????????????????????????.
        </p>
      </div>
    </div>
  </section>
  <section class="section section--no-bottom-pd answers">
    <div class="container">
      <div class="section-title">
        <h2 class="section-title__text">
          ?? ?????? ????????????????&nbsp;<span>???????????????</span>
        </h2>
      </div>
      <div class="answers__form-outer">
        <p class="answers__form-paragraph">
          ?????????????????? ?????????? ?? ???? ?????????????? ???? ??????
        </p>
        <form class="answers__form answers__form--bottom">
          <div class="answers__form-inner">
            <input type="text" class="input-field" placeholder="???????? ??????" name="person-name" required>
            <input type="tel" class="input-field input-field--phone" placeholder="?????? ?????????? ????????????????" name="person-phone" required>
            <p class="answers__form-paragraph answers__form-paragraph--no-pb">
              ?????????????? ???????????????????? ?????? ??????????:
            </p>
            <div class="answers__form-radio-list">
              <div class="answers__form-radio-item">
                <input type="radio" id="messengerChoice1" name="person-messenger" value="Telegram">
                <label for="messengerChoice1">Telegram</label>
              </div>
              <div class="answers__form-radio-item">
                <input type="radio" id="messengerChoice2" name="person-messenger" value="Viber">
                <label for="messengerChoice2">Viber</label>
              </div>
              <div class="answers__form-radio-item">
                <input type="radio" id="messengerChoice3" name="person-messenger" value="WhatsApp">
                <label for="messengerChoice3">WhatsApp</label>
              </div>
            </div>
            <input type="email" class="input-field" placeholder="?????? email, ??????????????????????????" name="person-email">
            <textarea cols="30" rows="6" class="answers__form-textarea-field" name="person-message" placeholder="?????????? ??????????????????" ></textarea>
            <div class="action__group action__group--answers">
              <button type="submit" class="action">
                ??????????????????
              </button>
            </div>
          </div>
        </form>
      </div>
    <div class="answers__contacts">
      <p class="answers__text-block">
        ?????? ???? ???? ???????????? ?????????????????? ???? ???????????? <a href="tel:+79284812180" class="answers__contact-item-value">+7 928 481-21-80</a>: ?????????????????? ???????????? ?????????????? ?????????? ??????????????????
      </p>
    </div>  
    </div>
  </section>
</main>
<?php } ?>  
<?php }} ?>