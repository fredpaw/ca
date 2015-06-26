<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'avada-parent-stylesheet', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );

/** Register customized widgets **/
class FooterServiceLink1 extends WP_Widget {
	function FooterServiceLink1() {
		//Instantiate the parent object
		parent::__construct(false, 'Footer Service Link 1');
	}
	
	function widget($args, $instance) {
		//Widget output
		?>
		<div class="footer-contact">
			<a href="<?php bloginfo("url");?>/our-service/about-us/"><img src="<?php bloginfo("template_url"); ?>/assets/images/custom/guanyuwomen.svg"/></a><br>
			<p><a href="<?php bloginfo("url");?>/our-service/about-us/">关于我们</a></p>
		</div>
		<?php
	}
}

class FooterServiceLink2 extends WP_Widget {
	function FooterServiceLink2() {
		//Instantiate the parent object
		parent::__construct(false, 'Footer Service Link 2');
	}
	
	function widget($args, $instance) {
		//Widget output
		?>
		<div class="footer-contact">
			<a href="<?php bloginfo("url");?>/our-service/service-introduction/"><img src="<?php bloginfo("template_url"); ?>/assets/images/custom/fuwujieshao.svg"/></a><br>
			<p><a href="<?php bloginfo("url");?>/our-service/service-introduction/">服务介绍</a></p>
		</div>
		<?php
	}
}

class FooterServiceLink3 extends WP_Widget {
	function FooterServiceLink3() {
		//Instantiate the parent object
		parent::__construct(false, 'Footer Service Link 3');
	}
	
	function widget($args, $instance) {
		//Widget output
		?>
		<div class="footer-contact">
			<a href="<?php bloginfo("url");?>/our-service/consultant-team/"><img src="<?php bloginfo("template_url"); ?>/assets/images/custom/guwentuandui.svg"/></a><br>
			<p><a href="<?php bloginfo("url");?>/our-service/consultant-team/">顾问团队</a></p>
		</div>
		<?php
	}
}

class FooterServiceLink4 extends WP_Widget {
	function FooterServiceLink4() {
		//Instantiate the parent object
		parent::__construct(false, 'Footer Service Link 4');
	}
	
	function widget($args, $instance) {
		//Widget output
		?>
		<div class="footer-contact">
			<a href="<?php bloginfo("url");?>/our-service/contact-us/"><img src="<?php bloginfo("template_url"); ?>/assets/images/custom/lianxiwomen.svg"/></a><br>
			<p><a href="<?php bloginfo("url");?>/our-service/contact-us/">联系我们</a></p>
		</div>
		<?php
	}
}

class FooterMicroMsg extends WP_Widget {
	function FooterMicroMsg() {
		//Instantiate the parent object
		parent::__construct(false, 'Footer MicroMsg Code');
	}
	
	function widget($args, $instance) {
		//Widget output
		echo '<img src="'.get_bloginfo('template_url').'/assets/images/custom/footer-micromsg-code.png"/>';
	}
}

function myplugin_register_widgets() {
	register_widget('FooterServiceLink1');
	register_widget('FooterServiceLink2');
	register_widget('FooterServiceLink3');
	register_widget('FooterServiceLink4');
	register_widget('FooterMicroMsg');
}

add_action('widgets_init', 'myplugin_register_widgets');