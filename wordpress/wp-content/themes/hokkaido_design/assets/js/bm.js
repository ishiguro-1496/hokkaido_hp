var animation = bodymovin.loadAnimation({
    container: document.getElementById('fv_animation'), 
    renderer: 'svg', // 描画形式
    loop: false, // trueにしたらループ。1回再生の場合はfalse
    autoplay: true, // 自動再生
    path: '/wp-content/themes/hokkaido_design/assets/json/fv.json' // jsonのパスを指定
    // name: "Hello World", // 今後のリファレンスとして名前を指定（オプション）
});
