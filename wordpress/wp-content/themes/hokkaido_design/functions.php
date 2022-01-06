<?php 

	header("Content-Type: text/html; charset=UTF-8");


	/*==== サムネ設定 ====*/

	function _setup() {
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size(320,320);
		add_image_size('s_thumbnail', 200, 150 ,true );
	 	add_image_size('m_thumbnail', 280, 168, true );
	 	add_image_size('l_thumbnail', 650, 400, true );
	}
	add_action( 'after_setup_theme', '_setup' );




	/*==== js設定 ====*/

	/*==== jquery ====*/

	if ( ! is_admin() ) {
		function wpqw_register_script() {
			wp_register_script( 'index', get_template_directory_uri() . '/assets/js/index.js', array( 'jquery' ), NULL, true);
		}
		function wpqw_add_script() {
			wpqw_register_script();
			wp_deregister_script( 'jquery' );
			wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' );
			wp_enqueue_script( 'index' );
		}
		add_action( 'wp_print_scripts', 'wpqw_add_script' );
	}

	/*==== GSAP ====*/

	function gsap_add_scripts() {
		wp_enqueue_script('gsap', '//cdn.jsdelivr.net/npm/gsap@3.7.0/dist/gsap.min.js' , '' , '' , true );
		wp_enqueue_script('gsap_scrolltrigger', '//cdn.jsdelivr.net/npm/gsap@3.7.0/dist/ScrollTrigger.min.js' , '' , '' , true );
		wp_enqueue_script('gsap_text', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/TextPlugin.min.js' , '' , '' , true );
		wp_enqueue_script('gsap_local', get_template_directory_uri() . '/assets/js/gsap.js' , '' , NULL , true );
	};
	add_action('wp_print_scripts', 'gsap_add_scripts');

	/*==== BodyMoving ====*/

	function bodymoving_add_scripts() {
		wp_enqueue_script('bodymoving', '//cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.4/lottie.min.js' , '' , '' , true );
		wp_enqueue_script('bodymoving_local', get_template_directory_uri() . '/assets/js/bm.js' , '' , NULL , true );
	};
	add_action('wp_print_scripts', 'bodymoving_add_scripts');





	/*==== カスタム投稿タイプ ====*/
	add_action( 'init', 'create_post_type' );
	function create_post_type() {
	    register_post_type( 'work', [ // 投稿タイプ名の定義
	        'labels' => [
	            'name'          => '制作実績', // 管理画面上で表示する投稿タイプ名
	            'singular_name' => 'work',    // カスタム投稿の識別名
	        ],
	        'public'        => true,  // 投稿タイプをpublicにするか
	        'has_archive'   => true, // アーカイブ機能ON/OFF
	        'menu_position' => 5,     // 管理画面上での配置場所
	        'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
	        'supports' => array( 'title', 'thumbnail','editor' )
	    ]);

	    register_post_type( 'voice', [ // 投稿タイプ名の定義
	        'labels' => [
	            'name'          => 'お客様の声', // 管理画面上で表示する投稿タイプ名
	            'singular_name' => 'voice',    // カスタム投稿の識別名
	        ],
	        'public'        => true,  // 投稿タイプをpublicにするか
	        'has_archive'   => true, // アーカイブ機能ON/OFF
	        'menu_position' => 5,     // 管理画面上での配置場所
	        'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
	        'supports' => array( 'title', 'thumbnail','editor' )
	    ]);
	}


	function add_post_category_archive( $wp_query ) {
	if ($wp_query->is_main_query() && $wp_query->is_category()) {
	$wp_query->set( 'post_type', array('post','article'));
	}
	}
	add_action( 'pre_get_posts', 'add_post_category_archive' , 10 , 1);



	/*==== 制作実績カスタムタクソノミー(カテゴリー)の追加 ====*/
	function custom_work_taxonomies() {
	 
		//タクソノミー1
		$labels = array(
			"name" => _x( "制作実績カテゴリー", "taxonomy general name" ),
			"singular_name" => _x( "制作実績カテゴリー", "taxonomy singular name" ),
		);
	 
		$args = array(
			"labels" => $labels,
			"public" => true,
			"hierarchical" => true,//true:カテゴリー・false:タグ
			"show_ui" => true,//管理画面のメニューへの表示の有無
			"show_in_menu" => true,
			"show_in_nav_menus" => true,//「外観」＞「メニュー」への表示の有無
			"query_var" => true,//wp_queryでの使用の可否
			"rewrite" => array( 'slug' => 'work_cat', 'with_front' => true, ),//パーマリンクの設定
			"show_admin_column" => false,//管理画面の投稿一覧への表示の有無
			"show_in_rest" => false,
			"rest_base" => "",
			"show_in_quick_edit" => false,//クイック編集への表示の可否
		);
		register_taxonomy( "work_cat", array( "work" ), $args );
	 
	}
	 
	add_action( 'init', 'custom_work_taxonomies' );


		/*==== お客様の声カスタムタクソノミー(カテゴリー)の追加 ====*/
	function custom_voice_taxonomies() {
	 
		//タクソノミー1
		$labels = array(
			"name" => _x( "お客様の声カテゴリー", "taxonomy general name" ),
			"singular_name" => _x( "お客様の声カテゴリー", "taxonomy singular name" ),
		);
	 
		$args = array(
			"labels" => $labels,
			"public" => true,
			"hierarchical" => true,//true:カテゴリー・false:タグ
			"show_ui" => true,//管理画面のメニューへの表示の有無
			"show_in_menu" => true,
			"show_in_nav_menus" => true,//「外観」＞「メニュー」への表示の有無
			"query_var" => true,//wp_queryでの使用の可否
			"rewrite" => array( 'slug' => 'voice_cat', 'with_front' => true, ),//パーマリンクの設定
			"show_admin_column" => false,//管理画面の投稿一覧への表示の有無
			"show_in_rest" => false,
			"rest_base" => "",
			"show_in_quick_edit" => false,//クイック編集への表示の可否
		);
		register_taxonomy( "voice_cat", array( "voice" ), $args );
	 
	}
	 
	add_action( 'init', 'custom_voice_taxonomies' );


	/*==== 制作実績のカスタムフィールド ====*/

	/*==== メタボックス追加 ====*/
	function add_work_fields() {
		add_meta_box( 
			'work_setting', 
			'制作実績用カスタムフィールド', 
			'insert_work_fields', 
			'work', 
			'normal');
	}
	add_action('admin_menu', 'add_work_fields');
	
	/*==== カスタムフィールドの入力エリア ====*/
	
	function insert_work_fields() {
		global $post;
		echo '外部URL： <input class="function-work-name" type="text" name="work_link" value="'.get_post_meta($post->ID, 'work_link', true).'" size="50" /><br>';

		echo 'snsアカウント名： <input class="function-work-name" type="text" name="sns_account" value="'.get_post_meta($post->ID, 'sns_account', true).'" size="50" /><br>';

		echo 'メディアクライアント名： <input class="function-work-name" type="text" name="media_account" value="'.get_post_meta($post->ID, 'media_account', true).'" size="50" /><br>';
	}
	 
	/*==== カスタムフィールドの値を保存 ====*/
	function save_work_fields( $post_id ) {
		if(!empty($_POST['work_link'])){ //題名が入力されている場合
			update_post_meta($post_id, 'work_link', $_POST['work_link'] ); //値を保存
		}else{ //題名未入力の場合
			delete_post_meta($post_id, 'work_link'); //値を削除
		}

		if(!empty($_POST['sns_account'])){ //題名が入力されている場合
			update_post_meta($post_id, 'sns_account', $_POST['sns_account'] ); //値を保存
		}else{ //題名未入力の場合
			delete_post_meta($post_id, 'sns_account'); //値を削除
		}

		if(!empty($_POST['media_account'])){ //題名が入力されている場合
			update_post_meta($post_id, 'media_account', $_POST['media_account'] ); //値を保存
		}else{ //題名未入力の場合
			delete_post_meta($post_id, 'media_account'); //値を削除
		}
	}
	add_action('save_post', 'save_work_fields');



	/*==== お客様の声用のカスタムフィールド ====*/

	/*==== メタボックス追加 ====*/
	function add_voice_fields() {
		add_meta_box( 
			'voice_setting', 
			'お客様の声用カスタムフィールド', 
			'insert_voice_fields', 
			'voice', 
			'normal');
	}
	add_action('admin_menu', 'add_voice_fields');


	function custom_metabox_edit_form_tag(){
	  echo ' enctype="multipart/form-data"';
	}
	//画像をアップする場合は、multipart/form-dataの設定が必要なので、post_edit_form_tagをフックしてformタグに追加
	add_action('post_edit_form_tag', 'custom_metabox_edit_form_tag');


	/*==== カスタムフィールドの入力エリア ====*/
	function insert_voice_fields() {
		global $post;

		$customer_icon = get_post_meta($post->ID,'customer_icon',true);

		// echo '利用者アイコン： <input class="function-voice-name" type="file" name="customer_icon" accept="image/*" value="'.get_post_meta($post->ID, 'customer_icon', true).'" size="50"  /><br>';

		echo '利用者アイコン： <input type="file" name="customer_icon" accept="image/*" /><br>';


		if(isset($customer_icon) && strlen($customer_icon) > 0){
        echo '<img style="width: 200px;display: block;margin: 1em;" src="'.wp_get_attachment_url($customer_icon).'">';
    	}


		echo '利用者名： <input class="function-voice-name" type="text" name="customer_name" value="'.get_post_meta($post->ID, 'customer_name', true).'" size="50" /><br>';

		echo '利用者URL： <input class="function-voice-name" type="text" name="customer_url" value="'.get_post_meta($post->ID, 'customer_url', true).'" size="50"  /><br>';

		echo '利用者カテゴリー： <input class="function-voice-name" type="text" name="customer_category" value="'.get_post_meta($post->ID, 'customer_category', true).'" size="50"  /><br>';

		echo 'タイトル： <input class="function-voice-name" type="text" name="voice_title" value="'.get_post_meta($post->ID, 'voice_title', true).'" size="80"  /><br>';

		echo '本文： <input class="function-voice-name" type="text" name="voice_contents" value="'.get_post_meta($post->ID, 'voice_contents', true).'" size="100"  /><br>';
	}

	


		/*==== カスタムフィールドの値を保存 ====*/
	function save_voice_fields( $post_id ) {
		if(!empty($_POST['customer_name'])){ 
			update_post_meta($post_id, 'customer_name', $_POST['customer_name'] );
		}else{ 
			delete_post_meta($post_id, 'customer_name');
		}
		if(!empty($_POST['customer_url'])){ 
			update_post_meta($post_id, 'customer_url', $_POST['customer_url'] );
		}else{ 
			delete_post_meta($post_id, 'customer_url');
		}
		if(!empty($_POST['customer_category'])){ 
			update_post_meta($post_id, 'customer_category', $_POST['customer_category'] );
		}else{ 
			delete_post_meta($post_id, 'customer_category');
		}
		if(!empty($_POST['voice_title'])){ 
			update_post_meta($post_id, 'voice_title', $_POST['voice_title'] );
		}else{ 
			delete_post_meta($post_id, 'voice_title');
		}
		if(!empty($_POST['voice_contents'])){ 
			update_post_meta($post_id, 'voice_contents', $_POST['voice_contents'] );
		}else{ 
			delete_post_meta($post_id, 'voice_contents');
		}

		if ( isset( $_FILES[ 'customer_icon' ] ) && $_FILES[ "customer_icon" ][ "size" ] !== 0 ) {
		$file_name = basename( $_FILES[ 'customer_icon' ][ 'name' ] );
		$file_name = trim( $file_name );
		$file_name = str_replace( " ", "-", $file_name );
		$wp_upload_dir = wp_upload_dir(); //現在のuploadディクレトリのパスとURLを入れた配列
		$upload_file = $_FILES[ 'customer_icon' ][ 'tmp_name' ];
		$upload_path = $wp_upload_dir[ 'path' ] . '/' . $file_name; //uploadsディレクトリ以下などに配置する場合は$wp_upload_dir['basedir']を利用する
		//画像ファイルをuploadディクレトリに移動させる
		move_uploaded_file( $upload_file, $upload_path );
		$file_type = $_FILES[ 'customer_icon' ][ 'type' ];
		//正規表現で拡張子なしのスラッグ名を生成
		$slug_name = preg_replace( '/\.[^.]+$/', '', basename( $upload_path ) );
		if ( file_exists( $upload_path ) ) {
		//保存に成功してファイルが存在する場合は、wp_postsテーブルなどに情報を追加
		$attachment = array(
		'guid' => $wp_upload_dir[ 'url' ] . '/' . basename( $file_name ),
		'post_mime_type' => $file_type,
		//'post_title' => $slug_name,
		'post_content' => '',
		'post_status' => 'inherit'
		);
		//添付ファイルを追加
		$attach_id = wp_insert_attachment( $attachment, $upload_path, $post_id );
		if ( !function_exists( 'wp_generate_attachment_metadata' ) ) {
		require_once( ABSPATH . "wp-admin" . '/includes/image.php' );
		}
		//添付ファイルのメタデータを生成し、wp_postsテーブルに情報を保存
		$attach_data = wp_generate_attachment_metadata( $attach_id, $upload_path );
		wp_update_attachment_metadata( $attach_id, $attach_data );
		//wp_postmetaテーブルに画像のattachment_id(wp_postsテーブルのレコードのID)を保存
		update_post_meta( $post_id, 'customer_icon', $attach_id );
		} else {
		//保存失敗
		echo '画像保存に失敗しました';
		exit;
		}
		}
	}
	add_action('save_post', 'save_voice_fields');



	/*==== 問い合わせ完了後のサンクスページ ====*/

	function add_thanks_page() {
	echo <<< EOD
	<script>
	document.addEventListener( 'wpcf7mailsent', function( event ) {
	location = '<?php echo home_url('/thanks/'); ?>';
	}, false );
	</script>
	EOD;
	}
	add_action( 'wp_footer', 'add_thanks_page' );



	/*==== archiveページの設定 ====*/


	function post_has_archive($args, $post_type)
	{
	    if ('post' == $post_type) {
	        $args['rewrite'] = true; 
	        $args['has_archive'] = 'blog'; 
	    }
	    return $args;
	}
	add_filter('register_post_type_args', 'post_has_archive', 10, 2);


	/*==== archiveページで記事を更新順にソート====*/

	function sort_post_asc($query) {
	  if (is_archive() ) {
	    $query->set( 'orderby', 'modified' );
	  }
	}
	add_action( 'pre_get_posts', 'sort_post_asc' );
	




	/*==== ページネーション設定 ====*/


	function the_pagination() {
	  global $wp_query;
	  $bignum = 999999999;
	  if ( $wp_query->max_num_pages <= 1 )
	    return;
	  echo '<nav class="pagination">';
	  echo paginate_links( array(
	    'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
	    'format'       => '',
	    'current'      => max( 1, get_query_var('paged') ),
	    'total'        => $wp_query->max_num_pages,
	    'prev_text'    => '&larr;',
	    'next_text'    => '&rarr;',
	    'type'         => 'list',
	    'end_size'     => 3,
	    'mid_size'     => 3
	  ) );
	  echo '</nav>';
	}




	/*==== カスタムタクソノミーごとのページネーション設定 ====*/









	/*==== 自動整形の無効化 ====*/


	remove_filter('the_content', 'wpautop');
	remove_filter( 'the_excerpt', 'wpautop' );


	/*==== h2から目次作成 ====*/

	// function my_add_content( $content ) {
	// 	if ( is_single() ) {
	// 		// 属性を持たないh2・h3要素を正規表現で表すパターン
	// 		$pattern = '/<h[2]>(.*?)<\/h[2]>/i';
	// 		// 本文の中から、すべてのh2・h3要素を検索
	// 		preg_match_all( $pattern, $content, $matches, PREG_SET_ORDER );
			
	//         // ページ内のh2・h3要素が3つ以上の場合に目次を出力
	// 		if( count( $matches ) > 3 ){ 
	// 			// 目次の出力に使用する変数
	// 			$toc = '<h2>目次</h2><ol>';
	// 			// 目次の階層の判断に使用する変数
	// 			$hierarchy = NULL;
	// 			// ループ回数を数える変数
	// 			$i = 0;
				
	//             // 本文内のh2・h3要素を上から順番にループで処理
	// 			foreach( $matches as $element ){ 
	// 				// ループ回数を1加算
	// 				$i++;
	// 				// h2・h3に指定するIDの属性値を作成
	// 				$id = 'chapter-' . $i;
	// 				// h2・h3タグにIDを追加
	// 				$chapter = preg_replace( '/<(.+?)>(.+?)<\/(.+?)>/',  '<$1 id ="' . $id . '">$2</$3>', $element[0] );
	// 				// ページ内のh2・h3要素を、IDが追加されているh2・h3要素に置換
	// 				$content = preg_replace( $pattern, $chapter, $content, 1);
					
	// 				// 現在のループで扱う要素を判断する条件分岐
	// 				if( strpos( $element[0], '<h2' ) === 0 ){ 
	// 					$level = 0;
	// 				}else{        
	// 					$level = 1;
	// 				}
					
	// 				//現在の状態を判断する条件分岐
	// 				if( $hierarchy === $level ){ // h2またはh3がそれぞれ連続する場合
	// 					$toc .= '</li>';
	// 				}elseif( $hierarchy < $level ){ // h2の次がh3となる場合
	// 					$toc .= '<ol>';               
	// 					$hierarchy = 1;
	// 				}elseif( $hierarchy > $level ){ // h3の次がh2となる場合
	// 					$toc .= '</li></ol></li>';               
	// 					$hierarchy = 0;
	// 				}elseif( $i == 1 ){ // ループ1回目の場合
	// 					$hierarchy = 0;
	// 				}
					
	// 				// 目次の項目で使用する要素を指定
	// 				$title = $element[1]; 
	// 				// 目次の項目を作成。※次のループで<li>の直下に<ol>タグを出力する場合ががあるので、ここでは<li>タグを閉じていません。
	// 				$toc .= '<li><a href="#' . $id . '">' . $title . '</a>';
	// 			}
				
	// 			// 目次の最後の項目をどの要素から作成したかによりタグの閉じ方を変更
	// 			if( $level == 0 ){
	// 				$toc .= '</li></ol>';
	// 			}elseif( $level == 1 ){
	// 				$toc .= '</li></ol></li></ol>';
	// 			}
				
	// 			// 本文に目次を追加
	// 			$content = ;
	// 		}
	// 	}
	// 	return $content;
	// }
	// add_filter( 'the_content', 'my_add_content' );


	

	/*==== GTM ====*/
	function add_gtm_head() {
		echo "<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-MSZNFQP');</script>
		<!-- End Google Tag Manager -->";
	  }
	  add_action('wp_head', 'add_gtm_head', 0);

	
	function add_gtm_body() {
		echo '<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MSZNFQP"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->';
	  }
	  
	  add_action('wp_body_open', 'add_gtm_body', 0);
	  

?>