<?php
/*
Template Name: お問い合わせ
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post();
// if (get_the_permalink() == 'https://lamp.jp/contact-2/'):
?>
<section id="service-main" class="sec">
<div class="wrapper">
<h2>お問い合わせについて</h2>
<p>お問合せ内容の確認後、担当者よりご連絡させていただきます。
<br>各項目を入力していただき、入力が終わりましたら確認画面にお進みいただき送信ボタンをクリック下さい。</p>
</div>
</section>
<section class="sec">
<div class="wrapper">
<div class="form-wrap">
<ul class="current-view">
<li class="current"><span>Step01</span>項目の入力</li>
<li><span>Step02</span>入力内容の確認</li>
<li><span>Step03</span>送信完了</li>
</ul>
<?php the_content(); ?>
</div>
</div>
</section>
<?php // else: ?>
<!-- <script>
if (typeof MauticSDKLoaded == 'undefined') {
    var MauticSDKLoaded = true;
    var head            = document.getElementsByTagName('head')[0];
    var script          = document.createElement('script');
    script.type         = 'text/javascript';
    script.src          = 'https://tenzk.net/media/js/mautic-form.js?uid=8281348eaee5abe544377e8a30f6a3db9ed9bc41';
    script.onload       = function() {
        MauticSDK.onLoad();
    };
    head.appendChild(script);
    var MauticDomain = 'https://tenzk.net';
    var MauticLang   = {
        'submittingMessage': "お待ちください…"
    }
}
</script>

<section id="service-main" class="sec">
<div class="wrapper">
<h2>お問い合わせについて</h2>
<p>お問合せ内容の確認後、担当者よりご連絡させていただきます。
<br>各項目を入力していただき、入力が終わりましたら確認画面にお進み頂き
<br>送信ボタンをクリック下さい。</p>
<div class="btn">
<a href="<?php echo $home; ?>/contact-2/">業務提携はこちらから<i class="fas fa-long-arrow-alt-right"></i></a>
<a href="<?php echo $home; ?>/document-request/">資料請求はこちらから<i class="fas fa-long-arrow-alt-right"></i></a>
</div>
</div>
</section>
<section class="sec">
<div class="wrapper">
<div class="form-wrap">
<ul class="current-view half">
<li class="current"><span>Step01</span>項目の入力</li>
<li><span>Step02</span>送信完了</li>
</ul>
<div id="mauticform_wrapper_owenihewase" class="mauticform_wrapper">
<form autocomplete="false" role="form" method="post" action="https://tenzk.net/form/submit?formId=1&uid=8281348eaee5abe544377e8a30f6a3db9ed9bc41" id="mauticform_owenihewasefomu"  data-mautic-form="owenihewasefomu" enctype="multipart/form-data">
<div class="mauticform-error" id="mauticform_owenihewasefomu_error"></div>
<div class="mauticform-message" id="mauticform_owenihewasefomu_message"></div>
<div class="mauticform-innerform">


<div class="mauticform-page-wrapper mauticform-page-1" data-mautic-form-page="1">

<div id="mauticform_owenihewasefomu_xing1"  data-validate="xing1" data-validation-type="text" class="mauticform-row mauticform-text mauticform-field-1 mauticform-required">
<label id="mauticform_label_owenihewasefomu_xing1" for="mauticform_input_owenihewasefomu_xing1" class="mauticform-label">姓</label>
<input id="mauticform_input_owenihewasefomu_xing1" name="mauticform[xing1]" value="" class="mauticform-input" type="text" />
<span class="mauticform-errormsg" style="display: none;">入力必須項目です。</span>
</div>

<div id="mauticform_owenihewasefomu_ming"  data-validate="ming" data-validation-type="text" class="mauticform-row mauticform-text mauticform-field-2 mauticform-required">
<label id="mauticform_label_owenihewasefomu_ming" for="mauticform_input_owenihewasefomu_ming" class="mauticform-label">名</label>
<input id="mauticform_input_owenihewasefomu_ming" name="mauticform[ming]" value="" class="mauticform-input" type="text" />
<span class="mauticform-errormsg" style="display: none;">入力必須項目です。</span>
</div>

<div id="mauticform_owenihewasefomu_hui_she_ming"  class="mauticform-row mauticform-text mauticform-field-3">
<label id="mauticform_label_owenihewasefomu_hui_she_ming" for="mauticform_input_owenihewasefomu_hui_she_ming" class="mauticform-label">会社名</label>
<input id="mauticform_input_owenihewasefomu_hui_she_ming" name="mauticform[hui_she_ming]" value="" class="mauticform-input" type="text" />
<span class="mauticform-errormsg" style="display: none;"></span>
</div>

<div id="mauticform_owenihewasefomu_meruadoresu"  data-validate="meruadoresu" data-validation-type="email" class="mauticform-row mauticform-email mauticform-field-4 mauticform-required">
<label id="mauticform_label_owenihewasefomu_meruadoresu" for="mauticform_input_owenihewasefomu_meruadoresu" class="mauticform-label">メールアドレス</label>
<input id="mauticform_input_owenihewasefomu_meruadoresu" name="mauticform[meruadoresu]" value="" class="mauticform-input" type="email" />
<span class="mauticform-errormsg" style="display: none;">入力必須項目です。</span>
</div>

<div id="mauticform_owenihewasefomu_o_dian_hua_fan_hao"  class="mauticform-row mauticform-tel mauticform-field-5">
<label id="mauticform_label_owenihewasefomu_o_dian_hua_fan_hao" for="mauticform_input_owenihewasefomu_o_dian_hua_fan_hao" class="mauticform-label">お電話番号</label>
<input id="mauticform_input_owenihewasefomu_o_dian_hua_fan_hao" name="mauticform[o_dian_hua_fan_hao]" value="" class="mauticform-input" type="tel" />
<span class="mauticform-errormsg" style="display: none;"></span>
</div>

<div id="mauticform_owenihewasefomu_saitourl"  class="mauticform-row mauticform-url mauticform-field-6">
<label id="mauticform_label_owenihewasefomu_saitourl" for="mauticform_input_owenihewasefomu_saitourl" class="mauticform-label">サイトURL</label>
<input id="mauticform_input_owenihewasefomu_saitourl" name="mauticform[saitourl]" value="" class="mauticform-input" type="url" />
<span class="mauticform-errormsg" style="display: none;"></span>
</div>

<div id="mauticform_owenihewasefomu_o_weni_hewase_zhong_bie"  data-validate="o_weni_hewase_zhong_bie" data-validation-type="select" class="mauticform-row mauticform-select mauticform-field-7 mauticform-required">
<label id="mauticform_label_owenihewasefomu_o_weni_hewase_zhong_bie" for="mauticform_input_owenihewasefomu_o_weni_hewase_zhong_bie" class="mauticform-label">お問い合わせ種別</label>
<select id="mauticform_input_owenihewasefomu_o_weni_hewase_zhong_bie" name="mauticform[o_weni_hewase_zhong_bie]" value="" class="mauticform-selectbox">                    <option value="業務のご依頼">業務のご依頼</option>
  <option value="お見積りのご依頼">お見積りのご依頼</option>
  <option value="業務提携のご依頼">業務提携のご依頼</option>
</select>
<span class="mauticform-errormsg" style="display: none;">入力必須項目です。</span>
</div>

<div id="mauticform_owenihewasefomu_o_weni_hewase_nei_rong"  data-validate="o_weni_hewase_nei_rong" data-validation-type="textarea" class="mauticform-row mauticform-text mauticform-field-8 mauticform-required">
<label id="mauticform_label_owenihewasefomu_o_weni_hewase_nei_rong" for="mauticform_input_owenihewasefomu_o_weni_hewase_nei_rong" class="mauticform-label">お問い合わせ内容</label>
<textarea id="mauticform_input_owenihewasefomu_o_weni_hewase_nei_rong" name="mauticform[o_weni_hewase_nei_rong]" class="mauticform-textarea"></textarea>
<span class="mauticform-errormsg" style="display: none;">入力必須項目です。</span>
</div>

<div id="mauticform_owenihewasefomu_submit"  class="mauticform-row mauticform-button-wrapper mauticform-field-9 txt-c">
<button type="submit" name="mauticform[submit]" id="mauticform_input_owenihewasefomu_submit" name="mauticform[submit]" value="" class="mauticform-button btn btn-default" value="1">送信</button>
</div>
</div>
</div>

<input type="hidden" name="mauticform[formId]" id="mauticform_owenihewasefomu_id" value="1"/>
<input type="hidden" name="mauticform[return]" id="mauticform_owenihewasefomu_return" value=""/>
<input type="hidden" name="mauticform[formName]" id="mauticform_owenihewasefomu_name" value="owenihewasefomu"/>

</form>
</div>
</div>
</div>
</section> -->
<?php // endif; ?>
<?php get_footer();
