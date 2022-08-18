<?php
/********************* Удаление span в contact form 7 ********************/
add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    return $content;
});

 add_action( 'wp_footer', 'wpcf7_modal_mailsent_js_inline', 999 );
function wpcf7_modal_mailsent_js_inline() {
 ?>
 <style>
    .wpcf7 form.invalid .wpcf7-response-output {display: none !important;}
    .wpcf7 form.sent .wpcf7-response-output {display: none !important;}
    .wpcf7 form.unaccepted .wpcf7-response-output {display: none !important;}
    /*style button*/
    .swal-text{text-align: center;}
    .swal-button,
    .swal-button:focus,
    .swal-button:hover{box-shadow: none;border-radius: 0px;}
    .swal-button{background-color: #e7003d ;color: #fff;border: 1px #e7003d  solid;}
    .swal-button:not([disabled]):hover{background-color: transparent;color: #e7003d ;box-shadow: none;border: 1px #cea06c solid;}
    /*style check success form*/
    .swal-icon--success__ring {border: 4px solid hsla(98,55%,69%,.2);}
    .swal-icon--success__line {background-color: #a5dc86;}
</style>
  <script>
        // Срабатывает при успешной отправке формы.
        document.addEventListener('wpcf7mailsent', function (response) {
            // Запускает модальное окно.
            swal({
                title: "Спасибо!",
                text: response.detail.apiResponse.message,
                icon: "success",
                button: "Закрыть"
            });
            // jQuery('.white-popup')[0].reset(); /*очищает форму*/
            $('.mfp-close').trigger('click'); /*закрывает форму нажатием на кнопку закрытия с классом .dialogM__form-close*/
        }, false);
    </script>
  <?php
}
add_action( 'wp_footer', 'wpcf7_modal_invalid_js_inline', 999 );
function wpcf7_modal_invalid_js_inline() {
    ?>
    <script>
        // Срабатывает при ошибках валидации формы.
        document.addEventListener('wpcf7invalid', function (response) {
            // Запускает модальное окно.
            swal({
                title: "Ошибка!",
                text: response.detail.apiResponse.message,
                icon: "error",
                button: "Закрыть"
            });
            // jQuery('.white-popup')[0].reset(); /*очищает форму*/
            $('.mfp-close').trigger('click'); /*закрывает форму нажатием на кнопку закрытия с классом .dialogM__form-close*/
        }, false);
    </script>
    <?php
}