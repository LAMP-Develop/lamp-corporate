jQuery(document).ready(function(H) {
  var y = ".post-php.post-type-cta #titlediv,.post-new-php.post-type-cta #titlediv";
  var D = ".post-php.post-type-cta #titlewrap,.post-new-php.post-type-cta #titlewrap";
  var E = ".post-php.post-type-cta #edit-slug-box,.post-new-php.post-type-cta #edit-slug-box";
  H(y).addClass("postbox");
  H(y).prepend('<h3 class="hndle">CTAタイトル（キャッチコピー）</h3>');
  H(D).before('<p class="inside"><small>CTAのタイトルを入力して下さい。ここに入力された内容がCTAのキャッチコピーとして表示されます。</small></p>');
  H(E).remove();
  if (H("#lamp_cta2:checked").val()) {
    H(".cmb_id_lamp_cta_select").css("display", "block");
    H(".cmb_id_lamp_cta_org_title").css("display", "none");
    H(".cmb_id_lamp_cta_org_image").css("display", "none");
    H(".cmb_id_lamp_cta_org_content").css("display", "none");
    H(".cmb_id_lamp_cta_org_button_text").css("display", "none");
    H(".cmb_id_lamp_cta_org_button_url").css("display", "none")
  } else {
    if (H("#lamp_cta3:checked").val()) {
      H(".cmb_id_lamp_cta_select").css("display", "none")
    } else {
      H(".cmb_id_lamp_cta_select").css("display", "none");
      H(".cmb_id_lamp_cta_org_title").css("display", "none");
      H(".cmb_id_lamp_cta_org_image").css("display", "none");
      H(".cmb_id_lamp_cta_org_content").css("display", "none");
      H(".cmb_id_lamp_cta_org_button_text").css("display", "none");
      H(".cmb_id_lamp_cta_org_button_url").css("display", "none");
      H("#lamp_cta1").attr("checked", "cheked")
    }
  }
  H("#lamp_cta1").click(function() {
    H("[name='lamp_cta']").removeAttr("checked");
    H(".cmb_id_lamp_cta_select").hide("fast");
    H(".cmb_id_lamp_cta_org_title").hide("fast");
    H(".cmb_id_lamp_cta_org_image").hide("fast");
    H(".cmb_id_lamp_cta_org_content").hide("fast");
    H(".cmb_id_lamp_cta_org_button_text").hide("fast");
    H(".cmb_id_lamp_cta_org_button_url").hide("fast");
    H(this).attr("checked", true)
  });
  H("#lamp_cta2").click(function() {
    H("[name='lamp_cta']").removeAttr("checked");
    H(".cmb_id_lamp_cta_select").show("fast");
    H(".cmb_id_lamp_cta_org_title").hide("fast");
    H(".cmb_id_lamp_cta_org_image").hide("fast");
    H(".cmb_id_lamp_cta_org_content").hide("fast");
    H(".cmb_id_lamp_cta_org_button_text").hide("fast");
    H(".cmb_id_lamp_cta_org_button_url").hide("fast");
    H(this).attr("checked", true)
  });
  H("#lamp_cta3").click(function() {
    H("[name='lamp_cta']").removeAttr("checked");
    H(".cmb_id_lamp_cta_select").hide("fast");
    H(".cmb_id_lamp_cta_org_title").show("fast");
    H(".cmb_id_lamp_cta_org_image").show("fast");
    H(".cmb_id_lamp_cta_org_content").show("fast");
    H(".cmb_id_lamp_cta_org_button_text").show("fast");
    H(".cmb_id_lamp_cta_org_button_url").show("fast");
    H(this).attr("checked", true)
  });
  H("#cta_metabox").hide("fast");
  H("#lamp_post_asset-hide").removeAttr("checked");
  H("#lamp_post_asset").hide("fast")
  H("[id=page_template]").change(function() {
    if (H("#page_template").val() == "default") {
      H("#cta_metabox-hide").attr("checked");
      H("#cta_metabox").show("fast")
    } else {
      H("#cta_metabox-hide").removeAttr("checked");
      H("#cta_metabox").hide("fast")
    }
  })
});