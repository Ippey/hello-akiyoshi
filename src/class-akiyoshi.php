<?php

/**
 * Class Akiyoshi
 */
class Akiyoshi extends Hello_Akiyoshi_Random_Speaker {

	/**
	 * @var string NickName
	 */
	protected $name = 'akiyoshi';

	/**
	 * apply original filter whoami method
	 * @return string
	 */
	public function whoami() {
		return (string) apply_filters( 'akiyoshi_name', parent::whoami() );
	}


	/**
	 * apply original filter say method.
	 * @return String
	 */
	public function say() {
		return (string) apply_filters( 'akiyoshi_say', parent::say() );
	}

	/**
	 * Dictionary of Mr.M's Quotations.
	 * @return String[]
	 */
	public function get_words() {
		$words = array(
			__('やきとりの名門 秋吉', 'hello-akiyoshi'),
			__('お持ち帰りは100本までです。', 'hello-akiyoshi'),
			__('まず注文は赤だしから！', 'hello-akiyoshi'),
			__('社長！', 'hello-akiyoshi'),
			__('お嬢ちゃん！', 'hello-akiyoshi'),
			__('いらっしゃい社長！', 'hello-akiyoshi'),
			__('焼き鳥は一回のご注文5本からです', 'hello-akiyoshi'),
			__('ご新規80名さんです！', 'hello-akiyoshi'),
			__('キャベツのお味は3種類からお選びください！', 'hello-akiyoshi'),
			__('秋吉のポテトはタレを味わうための棒', 'hello-akiyoshi'),
			__('おまえは今まで食った純けいの本数を覚えているのか', 'hello-akiyoshi'),
			__('お盆といえば秋吉', 'hello-akiyoshi'),
			__('からしにお付けしてお食べください', 'hello-akiyoshi'),
			__('発祥の地福井で喰ってみろ、うますぎ', 'hello-akiyoshi'),
			__('雪が降ってきたなぁ、こんな日は純けいを熱燗で逝きたいね。 ', 'hello-akiyoshi'),
			__('近所の持ち帰り専門店では、ミノは１人１０本しか売ってくれません（泣） ', 'hello-akiyoshi'),
		);
		$now = date("His");
		if ($now < 170000) {
			$words = array(
				__('やきとりの名門 秋吉', 'hello-akiyoshi'),
				__('とりだけに一石二鳥！', 'hello-akiyoshi'),
			);
		}

		return $words;
	}
}
