<?php

/**
 * Class Miyasan
 */
class Akiyoshi extends Hello_Akiyoshi_Random_Speaker {

	/**
	 * @var string NickName
	 */
	protected $name = 'Akiyoshi';

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
	 * Dictionary of Akiyoshi's comments.
	 * @return String[]
	 */
	public function get_words() {
		return array(
//			__('台風中継でおなじみの和歌山県串本町から来ました。','hello-akiyoshi'),
//			__('お客さんから不吉なメールが来た。見なかったことにしよう。。。','hello-akiyoshi'),
//			__('めんどくさい案件を全部断って楽な案件だけを求め続けてたらいつのまにか串本に住んでました。','hello-akiyoshi'),
//			__('え？まだMAMPで消耗してるの？','hello-akiyoshi'),
//			__('え？まだこれからもMAMPで消耗してるの？','hello-akiyoshi'),
//			__('Windowsはガン無視です 笑','hello-akiyoshi'),
//			__('sudoならインストールできた？ だめですよそんなのずっとsudoですることになりますよ？','hello-akiyoshi'),
//			__('sudoなんて邪道ですよ。そんなもんできたことになりません。','hello-akiyoshi'),
//			__('あのねみなさんね ブログに書いてあるコマンドとか実行しちゃうでしょ あれ大体間違ってますよ','hello-akiyoshi'),
//			__('みなさん自分が苦労したこと記事に書きたくなるでしょ？ 苦労したって事はそれはどっか間違ってんですよ','hello-akiyoshi'),
//			__('CMSのコアのソースを読むとか時間の無駄','hello-akiyoshi'),
//			__('お見積依頼ですか？','hello-akiyoshi'),
//			__('それプルリクください','hello-akiyoshi'),
//			__('プルリクお待ちしてます!','hello-akiyoshi'),
//			__('なぜそうなるかわかりますか？','hello-akiyoshi'),
//			__('整理できていない知識はないのと同じですよ','hello-akiyoshi'),
//			__('とりあえず何か公開しろ。話はそれからじゃっ！','hello-akiyoshi'),
//			__('オープンソースっぽくない奴はほんとダメ','hello-akiyoshi'),
//			__('すげー、熱烈に握手をもとめられたのでどうしたのかと思ったら、Contact Form 7の作者とまたもや間違えられました','hello-akiyoshi'),
//			__('高速が開通したんだって！大阪まで３時間切るかも！','hello-akiyoshi'),
//			__('つくるのはなんでも作りますｗ（岡本さんがｗ','hello-akiyoshi'),
//			__('仕事や！ 行ってこい！','hello-akiyoshi'),
//			__('まじに楽しいのになー。自分が使いたい物を大っぴらに作って放置しとくだけで世界がどれだけ広がるか。','hello-akiyoshi'),
//			__('自慢じゃないですが、1日で作りました。（自慢ですけど）','hello-akiyoshi'),
//			__('え？そんなんできたうちに入りませんよ。rootに変わるなんてうんこです。','hello-akiyoshi'),
//			__('MAMPなんてアンインストールしちゃえばいいんですよ。','hello-akiyoshi'),
//			__('世界は変化してるんです。半年前はそんなのありませんでした。','hello-akiyoshi'),
//			__('すぐにsudoしたら？って言うエンジニアは信用しちゃいけません。','hello-akiyoshi'),
//			__('串本の海？台風の後に犬の散歩してると、サメが打ち上げられたりしてますね。','hello-akiyoshi'),
//			__('こころが汚いみなさんには見えないと思うけど、今日の串本の星空はめっちゃきれい！','hello-akiyoshi'),
//			__('I\'m fake Takayuki','hello-akiyoshi'),
//			__('DMで質問をいただいても回答できないので、GitHubのIssueに書いていただけると助かります。','hello-akiyoshi'),
//			__('FTPなんてまだあるのか。。。','hello-akiyoshi'),
//			__('プルリクエストありがとうございます！','hello-akiyoshi'),
//			__('できてしまった。','hello-akiyoshi'),
//			__('もっとみんなでいろいろ作ってコードを見せびらかしあったりしたいなーと思うんですよね。','hello-akiyoshi'),
			__('お持ち帰りは100本からです！','hello-akiyoshi'),
		);
	}
}
