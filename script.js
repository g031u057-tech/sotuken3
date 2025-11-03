/* ===== 地図の初期化（index.php用）===== */
// このファイルが index.php 以外で読み込まれた時にエラーにならないよう、
// map要素が存在するかチェックしてから実行する
if (document.getElementById('map')) {
    var map = L.map('map', {
        zoomControl: true,
        maxZoom: 28,
        minZoom: 1,
    }).setView([39.2822, 141.1252], 15);

    var gsiLayer = L.tileLayer('https://cyberjapandata.gsi.go.jp/xyz/std/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://maps.gsi.go.jp/development/ichiran.html" target="_blank">国土地理院</a>'
    });
    gsiLayer.addTo(map);
}

/* ===== ハンバーガーメニューの処理 ===== */
// jQueryを使って、ボタンがクリックされたときの動作を定義
$('#hamburger-btn').on('click', function() {
    // ボタン自身に active クラスを付けたり消したりする
    $(this).toggleClass('active');
    // サイドバーに show クラスを付けたり消したりする
    $('.sidebar').toggleClass('show');
});