<?php
/*
text
textarea
rich_text
image
media_gallery
->set_max(3)
->set_width(30)
->set_width(50)
->set_default_value('Заказать')
Field::make( 'html', 'wmp_section_1')->set_html( '<p style="margin: 0;color:red;text-transform: uppercase; text-align:center;font-weight:bold;">Секция 1</p>' ),
wpautop()
*/
use Carbon_Fields\Container;
use Carbon_Fields\Field;

class Crb_All_Fields {
	public $container; 
	public function __construct( $type , $name ){ // работает при старте
		$this->container = $container = Container::make( $type , $name);
	}
	// Настройка сайта
	public function settings_common($tab_name = "Шапка, подвал"){
		$this->container
			->add_tab( $tab_name , array(
				Field::make( 'text',  'logo_text1', 'Лого текст1')->set_width(15),
				Field::make( 'text',  'logo_text2', 'Лого текст2')->set_width(15),
				Field::make( 'text',  'site_phone_1', 'Телефон 1')->set_width(15),
				Field::make( 'text',  'site_phone_1_view', 'Телефон 1 отображение')->set_width(15),
				Field::make( 'text',  'site_email', 'Email')->set_width(25),
				Field::make( 'text',  'site_viber-link', 'Viber ссылка')->set_width(25),
				Field::make( 'text',  'site_telegram-link', 'Telegram ссылка')->set_width(25),
				Field::make( 'text',  'site_whatsapp-link', 'Whatsapp ссылка')->set_width(25),
				Field::make( 'text',  'site_instagram-link', 'Instagram ссылка')->set_width(25),
				Field::make( 'text',  'firm_name', 'Название фирмы')->set_width(25),
				Field::make( 'text',  'page_name', 'Название главной страницы')->set_width(25),
				Field::make( 'text',  'page_name_descr', 'Регион перевозок')->set_width(25),
				Field::make( 'text',  'page_meta_descr_seo', 'Meta description для SEO')->set_width(25),
			));
		return;
	}
	public function theme_land_main($tab_name = "Главная страница", $field_name = 'land_main_'){
		$this->container
			->add_tab( $tab_name , array(
				Field::make( 'complex',  $field_name . 'complex' , 'Блоки на главной странице' )
					->setup_labels( array(
						'plural_name' => 'Записи',
						'singular_name' => 'Блок',
					))
					->set_layout( 'grid' )                    
					
					->add_fields( 'head-offer', 'Блок шапка ' ,array(
						Field::make( 'text', 'head-offer-title', 'Заголовок шапки' )->set_width(25),
						Field::make( 'image', 'head-offer-bg', 'Фоновое изображение шапки' )->set_width(25),
						Field::make( 'complex', 'head-offer_serv_lists', 'Список услуг' )
						->set_layout( 'tabbed-vertical' )
						->add_fields( array(
									Field::make( 'text', 'serv_name', 'Название услуги' )->set_width(25),
						) )->set_header_template($this->set_header_template('serv_name'))->set_max(10),
						
					) )
					->add_fields( 'transport', 'Блок о транспорте ' ,array(
						Field::make( 'complex', 'transport_list', 'Список транспортных средств' )
						->set_layout( 'tabbed-vertical' )
						->add_fields( array(
									Field::make( 'text', 'transport_title', 'Название транспортного средства' )->set_width(25),
									Field::make( 'complex', 'transport-photo-slider', 'Слайдер фото техники' )
									->set_layout( 'tabbed-vertical' )
									->add_fields( array(
												Field::make( 'image', 'transport-photo-item', 'Фото транспорта' )->set_width(25),
									) ),
									Field::make( 'complex', 'transport-model-char-list', 'Параметры транспорта' )
									->set_layout( 'tabbed-vertical' )
									->add_fields( array(
												Field::make( 'text', 'transport_model_char_name', 'Пункт характеристики' )->set_width(25),
												Field::make( 'text', 'transport_model_char__value', 'Значение параметра' )->set_width(25),
									) )->set_header_template($this->set_header_template('transport_model_char_name'))->set_max(20),
						) )->set_header_template($this->set_header_template('transport_title'))->set_max(6),
					) )
					->add_fields( 'adv', 'Блок Почему стоит выбрать нас ' ,array(
						Field::make( 'text', 'adv-goal', 'Описание цели' )->set_width(25),
						Field::make( 'text', 'adv_list_intr', 'Вводное' )->set_width(25),
						Field::make( 'image', 'adv_image', 'Боковая картинка' )->set_width(25),
						Field::make( 'complex', 'adv__descr', 'Список преимуществ' )
						->set_layout( 'tabbed-vertical' )
						->add_fields( array(
									Field::make( 'text', 'adv_name', 'Название преимущества' )->set_width(25),
						) )->set_header_template($this->set_header_template('adv_name'))->set_max(10),
						
					) )					
				));
			return;
	}
	public function theme_politic($tab_name = "Правила участия", $field_name = 'politic_'){
		$this->container
			->add_tab($tab_name , array(
				Field::make( 'rich_text', $field_name . 'text', 'Правила участия' ),
			) );
		return;
	}



   


	// Helpful Functions
	public function condition_fields_checkbox($field_name){
		return Field::make('checkbox',  $field_name . 'perform_get_id' , 'Взять даннные с другой страницы');
	}
	public function condition_fields_select_pages($field_name){
		return Field::make("select", $field_name . 'get_id' , "Выберите страницу с которой нужно взять даные для этой секции.")
		//  return Field::make("select", 'get_id_' . $field_name_end , "Выберите страницу с которой нужно взять даные для этой секции (Если выбор определен в общих настроек -> 'Общие страницы и привязаные к ним страницы', то изменения не применятся)")
							->add_options($this->query_typePost_page())
							->set_conditional_logic($this->condition_to_show($field_name));
	}
	private function condition_to_hide($field_name){
		return array(
				'relation' => 'AND', // Optional, defaults to "AND"
				array(
					'field' => $field_name . 'perform_get_id',
					'value' => '', // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					'compare' => '=', // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				)
			);
	}
	private function condition_to_show($field_name){
		return array(
				'relation' => 'AND', // Optional, defaults to "AND"
				array(
					'field' => $field_name . 'perform_get_id',
					'value' => '1', // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					'compare' => '=', // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				)
			);
	}
	private function set_header_template($name){
		return '<% if (' . $name . ') { %>
					 <%- ' . $name . ' %>
				<% } %>';
	}
	private function query_typePost_page(){
		$query = new WP_Query( array(
			'post_per_page'=> -1,
			'post_type'=>'page',
		) );
		$query_result = array();
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();

				$id    = get_the_ID();
				$title = get_the_title();

				$query_result[$id] = $title;

			}
			wp_reset_postdata();
		}
		return $query_result;
	}
	private function query_list_ofTypPosts(){
		$query = array(
			'no' => 'Не показывать',
			'construction' => 'Строительство',
			'repair' => 'Ремонт помещений'
		);
		return $query;
	}

}

class Crb_All_Fields_Page extends Crb_All_Fields{
	public function __construct( $type , $name , $template){
		$this->container = $container = Container::make( $type , $name)->show_on_template($template);
	}
}

class Crb_All_Fields_Post extends Crb_All_Fields{
	public function __construct( $type , $name , $type_post){
		$this->container = $container = Container::make( $type , $name)->where( 'post_type', '=', $type_post );
//        $this->container = $container = Container::make( $type , $name)->show_on_post_type($type_post);
	}
}
class Crb_All_Fields_Post_And_Hide_Template extends Crb_All_Fields{
	public function __construct( $type , $name , $type_post, $hide_temp_path){
		$this->container = $container = Container::make( $type , $name)->show_on_post_type($type_post)->hide_on_template($hide_temp_path);
	}
}
class Crb_All_Fields_Taxonomy extends Crb_All_Fields{
	public function __construct( $type , $name , $taxonomy){
		$this->container = $container = Container::make( $type , $name)->where( 'term_taxonomy', '=', $taxonomy);
	}
}

