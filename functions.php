<?php //子テーマ用関数

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//以下に子テーマ用の関数を書く

// テキストウィジェットでショートコードを使用する
add_filter('widget_text', 'do_shortcode');

//fb-like
add_filter( 'widget_text', function( $ret ) {
	$php_file = 'fb-like';

	if( strpos( $ret, '[' . $php_file . ']' ) !== false ) {
		add_shortcode( $php_file, function() use ( $php_file ) {
			get_template_part( $php_file );
		});

		ob_start();
		do_shortcode( '[' . $php_file . ']' );
		$ret = ob_get_clean();
	}

	return $ret;
}, 99 );

//WhatsAppのシェアURLを取得
if ( !function_exists( 'get_whatsapp_share_url' ) ):
function get_whatsapp_share_url(){
  return '//api.whatsapp.com/send?text='.urlencode( get_share_page_title() ).'&nbsp;'.urlencode( get_share_page_url() );
}
endif;