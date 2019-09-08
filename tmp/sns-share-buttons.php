<?php //シェアボタン
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */ ?>
<?php if ( is_sns_share_buttons_visible($option) ):
//var_dump($option) ?>
<div class="sns-share<?php echo get_additional_sns_share_button_classes($option); ?>">
  <?php if ( get_sns_bottom_share_message() && $option == SS_BOTTOM ): //シェアボタン用のメッセージを取得?>
    <div class="sns-share-message"><?php echo get_sns_bottom_share_message(); ?></div>
  <?php endif; ?>

  <div class="sns-share-buttons sns-buttons">
    <?php if ( is_twitter_share_button_visible($option) )://Twitterボタンを表示するか ?>
      <a href="<?php echo get_twitter_share_url(); ?>" class="share-button twitter-button twitter-share-button-sq" target="blank" rel="nofollow"><span class="social-icon icon-twitter"></span><span class="button-caption"><?php _e( 'Twitter', THEME_NAME ) ?></span><span class="share-count twitter-share-count"><?php echo get_twitter_count(); ?></span></a>
    <?php endif; ?>

    <?php if ( is_facebook_share_button_visible($option) )://Facebookボタンを表示するか ?>
      <a href="<?php echo get_facebook_share_url(); ?>" class="share-button facebook-button facebook-share-button-sq" target="blank" rel="nofollow"><span class="social-icon icon-facebook"></span><span class="button-caption"><?php _e( 'Facebook', THEME_NAME ) ?></span><span class="share-count facebook-share-count"><?php echo get_facebook_count(); ?></span></a>
    <?php endif; ?>

    <?php if ( is_hatebu_share_button_visible($option) )://はてなボタンを表示するか ?>
      <a href="<?php echo get_hatebu_share_url(); ?>" class="share-button hatebu-button hatena-bookmark-button hatebu-share-button-sq" data-hatena-bookmark-layout="simple" title="<?php echo esc_attr(get_the_title()); ?>" target="blank" rel="nofollow"><span class="social-icon icon-hatena"></span><span class="button-caption"><?php _e( 'はてブ', THEME_NAME ) ?></span><span class="share-count hatebu-share-count"><?php echo get_hatebu_count(); ?></span></a>
    <?php endif; ?>

    <?php if ( is_google_plus_share_button_visible($option) )://Google＋ボタンを表示するか ?>
      <a href="<?php echo get_google_plus_share_url(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="share-button google-plus-button google-plus-share-button-sq" target="blank" rel="nofollow"><span class="social-icon icon-googleplus"></span><span class="button-caption"><?php _e( 'Google+', THEME_NAME ) ?></span><span class="share-count googleplus-share-count"><?php echo get_google_plus_count(); ?></span></a>
    <?php endif; ?>

    <?php if ( is_pocket_share_button_visible($option) )://pocketボタンを表示するか ?>
      <a href="<?php echo get_pocket_share_url(); ?>" class="share-button pocket-button pocket-share-button-sq" target="blank" rel="nofollow"><span class="social-icon icon-pocket"></span><span class="button-caption"><?php _e( 'Pocket', THEME_NAME ) ?></span><span class="share-count pocket-share-count"><?php echo get_pocket_count(); ?></span></a>
    <?php endif; ?>

    <?php if ( is_line_at_share_button_visible($option) )://LINEボタンを表示するか ?>
      <a href="<?php echo get_line_share_url(); ?>" class="share-button line-button line-share-button-sq" target="_blank" rel="nofollow"><span class="social-icon icon-line"></span><span class="button-caption"><?php _e( 'LINE', THEME_NAME ) ?></span></a>
    <?php endif; ?>

    <?php if ( is_line_at_share_button_visible($option) )://LINEボタンを表示するかwhatsapp ?>
      <a href="<?php echo get_whatsapp_share_url(); ?>" class="share-button" id="whatsapp-button" target="_blank" rel="nofollow"><span class="social-icon fab fa-whatsapp"></span><span class="button-caption">WhatsApp</span></a>
    <?php endif; ?>

  </div><!-- /.sns-share-buttons -->

</div><!-- /.sns-share -->
<?php if ( function_exists( 'sharing_display' ) ) : sharing_display( '', true ); endif; ?>
<?php endif; ?>