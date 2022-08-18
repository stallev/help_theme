<?php get_header(); ?>

<main class="main">
  <section class="additional additional--404">
    <div class="container">
      <div class="additional__content">
        <div class="additional__inner">
          <h1 class="additional__title">
            Такой страницы не существует
          </h1>
          <div class="action__group action__group--additional">
            <a href="<?php echo get_home_url(); ?>" class="action">на главную</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<? get_footer(); ?>