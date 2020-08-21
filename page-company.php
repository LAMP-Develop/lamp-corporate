<?php
/*
Template Name: 会社概要
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post();

global $post;
$slug = $post->post_name;
if (has_post_thumbnail()) {
    $thumbnail = 'style="background-image:url("'.get_the_post_thumbnail_url(get_the_ID(), 'full').'")';
} else {
    $thumbnail = '';
}
?>

<section id="sub-visual" <?php echo $thumbnail; ?>>
<span class="bg"></span>
<div class="container">
<div class="inner">
<h1><?php echo $slug; ?><span><?php the_title(); ?></span></h1>
</div>
</div>
</section>

<div>
<div class="container">
<ul class="local-menu">
<li><a href="#concept" target="_self">ビジョン <i class="fas fa-angle-down"></i></a></li>
<li><a href="#company-profile" target="_self">会社概要 <i class="fas fa-angle-down"></i></a></li>
<li><a href="#member" target="_self">経営メンバー <i class="fas fa-angle-down"></i></a></li>
<li><a href="#history" target="_self">沿革 <i class="fas fa-angle-down"></i></a></li>
</ul>
</div>
</div>


<section id="concept" class="vision concept sec">
<div class="wrap">
<h2>VISION</h2>
<div class="img-wrap">
<img src="<?php echo $wp_url; ?>/dist/images/bg_top_concept.png" alt="株式会社ランプのビジョン">
</div>
<span class="abs"></span>
<div class="txt-wrap">
<div class="inner">
<h3>世界中を灯す会社を創る。</h3>
<p>エジソンが電灯を世の中に普及させたことで、それまで真っ暗だった人々の生活に明かりが灯されました。
<br>私たちはそんな電灯のように世界中を明るく灯すような企業を目指しています。
</p>
</div>
</div>
</div>
</section>

<section id="company-profile" class="sec bg-secondary">
<div class="container">
<h2 class="ttl-h2">COMPANY PROFILE<span>会社概要</span></h2>
<div class="table-wrap bg-white">
<table>
<tbody>
<tr>
<th>社名</th>
<td>株式会社ランプ</td>
</tr>
<tr>
<th>所在地</th>
<td>
〒604-8136<br>
京都府京都市中京区三条通烏丸東入梅忠町24-1 加藤ビル2F<br>
<a href="https://www.google.co.jp/maps/place/%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BE%E3%83%A9%E3%83%B3%E3%83%97/@35.0080972,135.7002919,12z/data=!4m8!1m2!2m1!1z5qCq5byP5Lya56S-44Op44Oz44OX!3m4!1s0x60010883810d04b5:0x36021c8bc8d70a76!8m2!3d35.008528!4d135.760749" target="_blank" rel="noopener">GoogleMapを開く</a><br>
<div class="mb10">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13071.708712649783!2d135.760749!3d35.008528!3m2!1i1024!2i768!4f2!3m3!1m2!1s0x0%3A0x36021c8bc8d70a76!2z5qCq5byP5Lya56S-44Op44Oz44OX!5e0!3m2!1sja!2sjp!4v1571374911359!5m2!1sja!2sjp" allowfullscreen="" height="300"></iframe>
</div>
<p class="font-weight-bold">交通のご案内</p>
<ul>
<li>京都市営地下鉄 烏丸線烏丸御池駅 5番出口より徒歩2分</li>
<li>京都市営地下鉄 四条駅 徒歩9分</li>
<li>阪急 烏丸駅 徒歩8分</li>
</ul>
</td>
</tr>
<tr>
<th>TEL</th>
<td>075-600-2721<br>
<a href="<?php echo $home; ?>/contact/">お問い合わせはこちら&nbsp;&gt;</a></td>
</tr>
<tr>
<th>事業内容</th>
<td>WEBマーケティング事業
<br>訪日インバウンド事業
<br><a href="<?php echo $home; ?>/service/">サービス一覧&nbsp;&gt;</a></td>
</tr>
<tr>
<th>代表者</th>
<td>代表取締役　河野 匠</td>
</tr>
<tr>
<th>設立</th>
<td>2017年2月（創業2011年5月）</td>
</tr>
<tr>
<th>資本金</th>
<td>4,000,000円</td>
</tr>
<tr>
<th>従業員数</th>
<td>20名（アルバイト含む）</td>
</tr>
<tr>
<th>主な取引先(敬称略)</th>
<td>
<div class="row m-0">
<div class="col-md p-0">
京都府庁
<br>株式会社京進
<br>エムケイ株式会社
<br>株式会社近鉄・都ホテルズ
<br>株式会社関電アメニックス
<br>トビラシステムズ株式会社
<br>株式会社スマートバリュー
<br>株式会社小林洋行
<br>アイエーグループ株式会社
<br>日本ルナ株式会社
<br>株式会社ベイシス
</div>
<div class="col-md p-0">
株式会社エス・ティーホテルズ
<br>株式会社コスモスモア
<br>エムケイ石油株式会社
<br>GMOインターネット株式会社
<br>さくらインターネット株式会社
<br>株式会社読売エージェンシー
<br>株式会社テレビ愛知企画
<br>森の京都地域振興社
<br>株式会社黛
<br>株式会社高栄ホーム
<br>株式会社リノア
<br>その他 企業・一般社団法人など
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</section>

<section id="member" class="sec">
<div class="container">
<h2 class="ttl-h2">MEMBER<span>経営メンバー</span></h2>
<ul class="members">
<li>
<img src="<?php echo $wp_url; ?>/dist/images/kouno.png" alt="河野匠">
<h3><span>代表取締役 / 創業者</span>河野 匠<span>Takumi Kouno</span></h3>
<p>滋賀県出身。大学在学中にファッション通販サイトを立ち上げたことがきっかけで起業。そこで培ったWEBマーケティングのノウハウを事業とした株式会社ランプを創業し、これまで200社以上のWEBマーケティングを支援。京都府庁主催のセミナーや上場企業の社内研修にも講師として多数登壇。</p>
</li>
<li>
<img src="<?php echo $wp_url; ?>/dist/images/suzuki.png" alt="鈴木駿也">
<h3><span>執行役員 / 技術責任者</span>鈴木 駿也<span>Shunya Suzuki</span></h3>
<p>兵庫県出身。京都コンピューター学院在学中に、創業期であった株式会社ランプにインターンシップとして参画。卒業後もシステムエンジニアとして同社のプロダクト開発に従事。アプリケーションの開発、サイト制作、SEO対策など多岐に渡って担当。</p>
</li>
</ul>
</div>
</section>

<section id="history" class="sec">
<div class="container">
<h2 class="ttl-h2">HISTORY<span>沿革</span></h2>

<table class="history-tb">
<tbody>
<tr>
<th rowspan="2">2011年</th>
<td>7月</td>
<td>19歳で現役大学生であった河野（現:代表取締役）により創業</td>
</tr>
<tr>
<td>12月</td>
<td>海外ブランドを取り扱うファッション通販サイトを立ち上げ</td>
</tr>
<tr>
<th rowspan="2">2015年</th>
<td>1月</td>
<td>ノウハウを生かしてWEBマーケティング支援事業をスタート</td>
</tr>
<tr>
<td>9月</td>
<td>最年少（当時）で「注目の西日本ベンチャー50」に選出される</td>
</tr>
<tr>
<th>2016年</th>
<td>12月</td>
<td>京都のニッチな情報を世界中に配信する多言語メディアサイト「KyotoMasters」公開</td>
</tr>
<tr>
<th rowspan="2">2017年</th>
<td>2月</td>
<td>株式会社ランプ設立</td>
</tr>
<tr>
<td>2月</td>
<td>事業拡大に伴い2度目となるオフィス移転（京都市中京区）</td>
</tr>
<tr>
<th rowspan="2">2019年</th>
<td>5月</td>
<td>従業員の増加に伴い3度目となるオフィス移転（京都市中京区）</td>
</tr>
<tr>
<td>10月</td>
<td>アクセス解析ツール「KAGARI」リリース</td>
</tr>
</tbody>
</table>

</div>
</section>
<?php get_footer();
