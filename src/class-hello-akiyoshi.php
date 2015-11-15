<?php

/**
 * Class Hello_Akiyoshi
 *
 * plugin core class.
 */
class Hello_Akiyoshi {

	/** @var Hello_Akiyoshi_Speaker */
	private $speaker;

	/**
	 * @param Hello_Akiyoshi_Speaker $speaker
	 */
	public function __construct( Hello_Akiyoshi_Speaker $speaker ) {

		$this->speaker = $speaker;

		add_action( 'admin_enqueue_scripts', array( $this, 'add_style' ) );
		add_action( 'admin_notices', array( $this, 'render' ) );

		$this->register_shortcode();
	}

	/**
	 * register shortcode [akiyoshi]
	 */
	private function register_shortcode() {
		$shortcode_tags = apply_filters( 'hello_akiyoshi_shortcode_name', 'akiyoshi' );
		add_shortcode( $shortcode_tags, array( $this->speaker, 'talk_message' ) );
	}

	/**
	 * show text in admin.
	 */
	public function render() {
		$chosen = $this->speaker->talk_message();
		$name   = $this->speaker->whoami();
		echo "<p class='hello-akiyoshi speaker-$name'>$chosen</p>";
	}

	/**
	 * add styles.
	 */
	public function add_style() {

		$x = is_rtl() ? 'left' : 'right';
		$style = "
        		.hello-akiyoshi {
            			float: $x;
        			padding-$x: 15px;
        			padding-top: 5px;
        			margin: 0;
        			font-size: 11px;
        		}
        		.hello-akiyoshi:before {
        			content: '\\01F3EE ';
        		}
        		";
        	
		wp_add_inline_style( 'wp-admin', apply_filters( 'hello_akiyoshi_style', $style ) );
	}
}
