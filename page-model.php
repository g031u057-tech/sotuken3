<?php
/* ===== 全てのマーカー情報を、各テーブルの正しいカラム名で取得 ===== */
$landmarks = []; $tikei_pins = []; $suibu_pins = []; $tatemono_pins = []; $timei_pins = [];
try {
  $pdo  = new pdo('mysql:host=localhost;dbname=DB_g031t012;charset=utf8;','g031u057','vN4Pt$x2');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // 1. landmark: setstumei, lating, gazo を取得
  $stmt = $pdo->query("SELECT name, setstumei, lating, gazo from DB_g031t012.landmark");
  $landmarks = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // 2. tikei: gazoカラムは存在しない
  $stmt = $pdo->query("SELECT name, kubun, setsumei, latlng FROM DB_g031t012.tikei");
  $tikei_pins = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // 3. suibu: gazoカラムは存在しない
  $stmt = $pdo->query("SELECT name, kubun, setsumei, latlng FROM DB_g031t012.suibu");
  $suibu_pins = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // 4. tatemono: gazoカラムは存在しない
  $stmt = $pdo->query("SELECT name, kubun, setsumei, latlng FROM DB_g031t012.tatemono");
  $tatemono_pins = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // 5. timei: gazoカラムは存在しない
  $stmt = $pdo->query("SELECT name, kubun, setsumei, latlng FROM DB_g031t012.timei");
  $timei_pins = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo  "MySQL への接続、またはデータ取得に失敗しました。<br>(" . $e->getMessage() . ")";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2. GISで扱うデータモデルと分析手法 - 学習支援システム</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css"/>
    <style>
        /* ===== 基本設定 ===== */
        body, html { margin: 0; padding: 0; height: 100%; font-family: 'Helvetica Neue', Arial, 'Hirino Kaku Gothic ProN', 'Hiragino Sans', Meiryo, sans-serif; }
        /* ===== ハンバーガーメニューボタン ===== */
        #hamburger-btn { position: fixed; top: 15px; left: 15px; z-index: 1001; width: 40px; height: 40px; background: white; border: 1px solid #ccc; border-radius: 5px; cursor: pointer; padding: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.2); }
        #hamburger-btn span { display: block; width: 100%; height: 3px; background: #333; margin: 4px 0; transition: all 0.3s; }
        #hamburger-btn.active span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
        #hamburger-btn.active span:nth-child(2) { opacity: 0; }
        #hamburger-btn.active span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }
        /* ===== スライド式サイドバー ===== */
        .sidebar { position: fixed; top: 0; left: 0; height: 100%; width: 450px; background-color: #f4f4f9; z-index: 1000; transform: translateX(-100%); transition: transform 0.4s ease-in-out; box-shadow: 2px 0 10px rgba(0,0,0,0.1); border-right: 1px solid #ccc; }
        .sidebar.show { transform: translateX(0); }
        /* ===== 学習コンテンツパネル（サイドバーの中身）===== */
        .content-panel { padding: 20px; height: 100%; overflow-y: auto; }
        .content-panel header h1 { font-size: 1.5em; }
        .cp_navi .back-button { margin-bottom: 20px; text-align: center; }
        .content-panel .em { font-size: 0.9em; color: #555; border-bottom: 1px solid #ddd; padding-bottom: 15px; }
        .cp_navi ul { list-style-type: none; padding: 0; }
        .cp_navi li a { display: block; padding: 12px 15px; margin: 5px 0; background: #e0e0e0; color: #333; text-decoration: none; border-radius: 4px; }
        .cp_navi li a:hover { background: #c0c0c0; }
        /* ===== コンテンツページのスタイル ===== */
        .content-page-container { max-width: 1000px; margin: 20px auto; padding: 20px 40px; background: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
        .back-button { display: inline-block; padding: 8px 15px; background: #f0f0f0; color: #333; text-decoration: none; border-radius: 5px; margin-bottom: 15px; }
        .content-body h1 { font-size: 1.8em; border-bottom: 2px solid #005a9c; padding-bottom: 10px; margin-bottom: 25px; }
        .content-body h2 { color: #333; font-size: 1.5em; margin-top: 30px; margin-bottom: 15px; }
        .content-body p { line-height: 1.8; font-size: 1.1em; margin-bottom: 1.5em; }
        .content-body p strong, .content-body li strong { color: #005a9c; font-weight: 600; }
        .content-row { display: flex; flex-wrap: wrap; gap: 30px; margin-top: 20px; }
        .text-column { flex: 1; min-width: 300px; }
        .section-divider { border: 0; border-top: 1px solid #e0e0e0; margin: 35px 0; }
        .info-card { background: #f9f9f9; border: 1px solid #ddd; border-radius: 8px; padding: 20px 25px; height: 100%; box-sizing: border-box; box-shadow: 0 2px 5px rgba(0,0,0,0.04); }
        .info-card h3 { margin-top: 0; font-size: 1.3em; color: #222; border-bottom: 2px solid #e0e0e0; padding-bottom: 10px; display: flex; align-items: center; }
        .info-card h3 span { margin-right: 12px; font-size: 1.2em; line-height: 1; }
        .info-card p { font-size: 1.0em; line-height: 1.7; margin-bottom: 0; }
        .supplement { margin-top: 20px; padding: 20px 25px; background: #e6f3ff; border: 1px solid #b3d7ff; border-left: 5px solid #005a9c; border-radius: 5px; }
        .supplement p { font-size: 1.05em; line-height: 1.7; margin: 0; color: #222; }
        
        /* ▼▼▼ Map関連CSS ▼▼▼ */
        .interactive-map-section { margin-top: 25px; border-top: 2px solid #005a9c; padding-top: 20px; }
        .interactive-map-section h3 { font-size: 1.4em; margin-top: 0; }
        .interactive-map-section p { font-size: 1.05em; margin-bottom: 1em; }
        #map-model { width: 100%; height: 600px; border: 1px solid #ccc; border-radius: 5px; }
        .opacity-control { background: rgba(255, 255, 255, 0.8); padding: 10px; border-radius: 5px; box-shadow: 0 0 15px rgba(0,0,0,0.2); }
        .opacity-control h4 { margin-top: 0; margin-bottom: 5px; }
        .opacity-control label div { margin-bottom: 5px; }
        .leaflet-popup-content { margin: 13px 24px 13px 20px; }
        .popup-content, .popup-image { margin-bottom: 10px; }
        
        /* ▼▼▼ ボタンのホバー効果を削除 (色を #005a9c に統一) ▼▼▼ */
        .archive-button { 
            display: block; 
            padding: 8px; 
            background-color: #005a9c; /* 常にこの色 (テーマカラーの紺) */
            color: #ffffff; 
            text-align: center; 
            text-decoration: none; 
            border-radius: 5px; 
            font-size: 0.9em; 
            /* transition を削除 */
        }
        .archive-button:hover {
            background-color: #005a9c; /* ホバー時も同じ色 */
            color: #ffffff;
            text-decoration: none;
        }
        /* ▲▲▲ 変更ここまで ▲▲▲ */

        .content-page-container.with-fixed-menu { margin-top: 0; padding-top: 70px; }
    </style>
</head>
<body>
    
    <?php include 'hs-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>2. GISで扱うデータモデルと分析手法</h1>
            
            <h2>GISで扱うデータモデル</h2>
            <p>GISでは、地図上の情報を主に「ベクタデータ」と「ラスタデータ」という2種類の形式で扱います。下のインタラクティブ地図は、これらのデータモデルの良い例です。</p>

            <div class="content-row">
                <div class="text-column">
                    <div class="info-card">
                        <h3><span class="icon-vector">📈</span> ベクタデータ型</h3>
                        <p><strong>ベクタデータ</strong>は、特定の場所を<strong>「点」（ポイント）</strong>で示したり、道や川を<strong>「線」（ライン）</strong>で、特定の範囲を<strong>「面」（ポリゴン）</strong>で表現する形式です。下の地図に表示されている、舟運スポットを示す<strong>色付きのピン</strong>は、ベクタデータの中の「ポイントデータ」にあたります。</p>
                    </div>
                </div>

                <div class="text-column">
                    <div class="info-card">
                        <h3><span class="icon-raster">🖼️</span> ラスタデータ型</h3>
                        <p><strong>ラスタデータ</strong>は、航空写真や古地図のように、色のついた点（＝<strong>ピクセル</strong>）の集まりで地図全体を表現する形式です。下の地図で背景になっている<strong>「電子地形図」</strong>や、右上のスライダーで重ねることができる<strong>「空中写真」「古地図」</strong>がラスタデータにあたります。</p>
                    </div>
                </div>
            </div>

            <hr class="section-divider">

            <h2>GISの分析手法：オーバレイ</h2>
            <p>「<strong>オーバレイ</strong>」は、複数の地図<strong>レイヤー</strong>（データ層）を重ね合わせることで、新しい関係性を発見するGISの基本的な分析手法です。</p>
            
            <div class="supplement">
                <p><strong>舟運地図で見るオーバレイ</strong><br>
                下の地図は、まさにオーバレイ分析の一例です。
                背景のラスタデータ（現代地図）の上に、別のラスタデータ（古地図や航空写真）を重ね、さらにその上にベクタデータ（舟運スポットのピン）を重ねることで、「<strong>昔の舟運の拠点が、今の地理でどの場所にあたるのか</strong>」という新しい情報を視覚的に理解することができます。</p>
            </div>
            
            <div class="interactive-map-section">
                <h3>舟運アーカイブシステムGIS</h3>
                <p>下の地図を操作して、データモデルやオーバレイの具体例を確認してみましょう。</p>
                <div id="map-model"></div>
            </div>
        </main>
    </div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>

    <script>
        // ハンバーガーメニューの処理
        $('#hamburger-btn').on('click', function() { $(this).toggleClass('active'); $('.sidebar').toggleClass('show'); });

        // 地図とピンの表示処理
        var map = L.map('map-model').setView([39.2822, 141.1252], 15);
        var gsiLayer = L.tileLayer('https://cyberjapandata.gsi.go.jp/xyz/std/{z}/{x}/{y}.png', { attribution: '&copy; 国土地理院'});
        var photoLayer = L.tileLayer('https://cyberjapandata.gsi.go.jp/xyz/seamlessphoto/{z}/{x}/{y}.jpg', { attribution: '&copy; 国土地理院'});
        var kurosawaEzu1828 = L.imageOverlay('data/_5.png', [[39.2790, 141.1217], [39.2867, 141.1308]]);
        var heimentu1903 = L.imageOverlay('data/_3.png', [[39.2768, 141.1225], [39.2882, 141.1331]]);
        gsiLayer.addTo(map); photoLayer.addTo(map); kurosawaEzu1828.addTo(map); heimentu1903.addTo(map);
        photoLayer.setOpacity(0); kurosawaEzu1828.setOpacity(0); heimentu1903.setOpacity(0);
        const opacityControl = L.control({ position: 'topright' });
        opacityControl.onAdd = function (map) {
            const div = L.DomUtil.create('div', 'info legend opacity-control');
            div.innerHTML = `<h4>地図の切り替え・透過度調整</h4><label><div><input type="range" min="0" max="1" step="0.1" value="1" oninput="gsiLayer.setOpacity(this.value)"> 電子地形図(現代)</div></label><label><div><input type="range" min="0" max="1" step="0.1" value="0" oninput="photoLayer.setOpacity(this.value)"> 空中写真(現代)</div></label><label><div><input type="range" min="0" max="1" step="0.1" value="0" oninput="kurosawaEzu1828.setOpacity(this.value)"> 黒沢尻川岸絵図(1828年)</div></label><label><div><input type="range" min="0" max="1" step="0.1" value="0" oninput="heimentu1903.setOpacity(this.value)"> 北上川河川台帳平面図(1903年)</div></label>`;
            L.DomEvent.on(div, 'mousedown dblclick', L.DomEvent.stopPropagation);
            return div;
        };
        opacityControl.addTo(map);
        const landmarks = <?php echo json_encode($landmarks); ?>;
        const tikei_pins = <?php echo json_encode($tikei_pins); ?>;
        const suibu_pins = <?php echo json_encode($suibu_pins); ?>;
        const tatemono_pins = <?php echo json_encode($tatemono_pins); ?>;
        const timei_pins = <?php echo json_encode($timei_pins); ?>;
        const iconUrls = { red: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png', yellow: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-yellow.png', green: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png', blue: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png' };
        const shadowUrl = 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.0/images/marker-shadow.png';
        function createColoredIcon(color) { return new L.Icon({ iconUrl: iconUrls[color] || iconUrls.red, shadowUrl: shadowUrl, iconSize: [25, 41], iconAnchor: [12, 41], popupAnchor: [1, -34], shadowSize: [41, 41] }); }
        
        function createMarker(data, color) {
            const coords = data.latlng || data.lating; if (!coords) return;
            const latlngStr = coords.split(',');
            const lat = parseFloat(latlngStr[0]); const lng = parseFloat(latlngStr[1]);
            
            if (isNaN(lat) || isNaN(lng)) return; // 座標が無効なら何もしない

            const description = data.setsumei || data.setstumei || '';
            const archiveUrl = `https://abe-islab.jp/boat_transport/map/#16/${lat}/${lng}`;
            let popupContent = `<div class="popup-content"><b>${data.name}</b><br>${data.kubun || ''}<br>${description}</div>`;
            if (data.gazo) { popupContent += `<div class="popup-image"><a href="jpeg/${data.gazo}" data-lightbox="group-${color}"><img src="jpeg/${data.gazo}" width="180"></a></div>`; }
            
            popupContent += `<a href="${archiveUrl}" target="_blank" class="archive-button">舟運アーカイブで詳しく見る</a>`;
            
            L.marker([lat, lng], { icon: createColoredIcon(color) }).addTo(map).bindPopup(popupContent);
        }
        
        landmarks.forEach(pin => createMarker(pin, 'red'));
        tikei_pins.forEach(pin => createMarker(pin, 'red'));
        suibu_pins.forEach(pin => createMarker(pin, 'yellow'));
        tatemono_pins.forEach(pin => createMarker(pin, 'green'));
        timei_pins.forEach(pin => createMarker(pin, 'blue'));
    </script>
</body>
</html>