<?php
/* ===== 全てのマーカー情報を、各テーブルの正しいカラム名で取得 ===== */
// page-model.php と同様のデータベース接続とデータ取得処理を追加
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
  // エラーハンドリングは本番環境ではより詳細に行うべきです
  // echo  "MySQL への接続、またはデータ取得に失敗しました。<br>(" . $e->getMessage() . ")";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>舟運アーカイブシステム - 学習支援システム</title>
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css"/>
    
    <style>
        /* ▼▼▼ UI改善のためのCSSを追加 ▼▼▼ */
        /* 重要語句の強調 */
        .content-body p strong {
            color: #005a9c;
            font-weight: 600;
        }
        /* 本文のフォントサイズ調整 */
        .text-section p {
            font-size: 1.1em;
            line-height: 1.8;
        }
        /* ▲▲▲ CSSここまで ▲▲▲ */

        /* ▼▼▼ ボタン用のスタイル (ホバー効果削除) ▼▼▼ */
        .gis-tool-button { 
            display: block; 
            width: 80%; 
            margin: 30px auto; 
            padding: 20px; 
            font-size: 1.3em; 
            font-weight: bold; 
            text-align: center; 
            text-decoration: none; 
            color: #ffffff; 
            background-color: #005a9c; /* 常にこの色 */
            border: none; 
            border-radius: 8px; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
            /* transition を削除 */
        }
        .gis-tool-button:hover { 
            background-color: #005a9c; /* ホバー時も色を変えない */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
            cursor: pointer; 
        }
        /* ▲▲▲ 変更ここまで ▲▲▲ */

        
        /* GISマップ用のスタイル */
        #map-archive { width: 100%; height: 600px; border: 1px solid #ccc; border-radius: 5px; margin-top: 20px; }
        
        /* 地図上のテキストラベル用のCSS */
        .han-label { background: rgba(255, 255, 255, 0.8); border: 1px solid #555; border-radius: 5px; padding: 5px 10px; font-size: 1.1em; font-weight: bold; width: 150px; text-align: center; white-space: nowrap; box-shadow: 0 1px 3px rgba(0,0,0,0.3); }
        /* 矢印マーカー用のCSS */
        .arrow-label { background: rgba(255, 100, 100, 0.8); border: 1px solid #000; border-radius: 5px; font-size: 1.5em; font-weight: bold; text-align: center; box-shadow: 0 1px 3px rgba(0,0,0,0.3); width: 30px; height: 30px; line-height: 30px; padding: 0; }
        
        /* 透明度調整コントロールのスタイル */
        .opacity-control { background: rgba(255, 255, 255, 0.8); padding: 10px; border-radius: 5px; box-shadow: 0 0 15px rgba(0,0,0,0.2); }
        .opacity-control h4 { margin-top: 0; margin-bottom: 5px; }
        .opacity-control label div { margin-bottom: 5px; }
        
        /* ポップアップ用のスタイル */
        .leaflet-popup-content { margin: 13px 24px 13px 20px; }
        .popup-content, .popup-image { margin-bottom: 10px; }
        
        /* ▼▼▼ ポップアップ内ボタンのホバー効果を削除 ▼▼▼ */
        .archive-button { 
            display: block; 
            padding: 8px; 
            background-color: #0056b3; /* 常にこの色 */
            color: #ffffff; 
            text-align: center; 
            text-decoration: none; 
            border-radius: 5px; 
            font-size: 0.9em; 
        }
        .archive-button:hover { 
            background-color: #0056b3; /* ホバー時も色を変えない */
            color: #ffffff;
            text-decoration: none; 
        }
        /* ▲▲▲ 変更ここまで ▲▲▲ */
    </style>
</head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>舟運アーカイブシステム</h1>
            
            <div class="text-section">
                <p>
                    これまでの学習で、江戸時代の北上川舟運がどのように行われ、黒沢尻がどのような役割を果たしていたかを見てきましたね。ここでは、<strong>GIS（地理情報システム）</strong>という技術を使って、当時の様子を現代の地図と重ね合わせて見てみましょう。
                </p>
                <p style="margin-top: 15px;">
                    GISを使うと、<strong>昔の絵図や地図</strong>、舟運に関連する場所（ピンで表示）などを、<strong>現在の航空写真や地図</strong>の上に重ねて表示できます。下の地図では、右上のスライダーで各レイヤーの透明度を調整できます。昔の川岸や建物が今のどのあたりにあったのか、想像しながら見てみましょう。<strong>藩境（↕）</strong>も表示されています。
                </p>
            </div>
            <div id="map-archive"></div>

            <a href="https://abe-islab.jp/boat_transport/archive/index.html" class="gis-tool-button" target="_blank" rel="noopener noreferrer">
                舟運アーカイブシステムへ
            </a>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p07_07.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 1 -</span> 
            <a href="jh-top.php" class="page-nav-button">単元一覧へ戻る</a>
        </footer>
    </div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
    
    <script>
        // --- ハンバーガーメニューの処理 ---
        $('#hamburger-btn').on('click', function() { $(this).toggleClass('active'); $('.sidebar').toggleClass('show'); });
        
        // --- ここからGISマップの処理 ---
        var map = L.map('map-archive').setView([39.272, 141.125], 14); 
        // レイヤー定義
        var gsiLayer = L.tileLayer('https://cyberjapandata.gsi.go.jp/xyz/std/{z}/{x}/{y}.png', { attribution: '&copy; 国土地理院'});
        var photoLayer = L.tileLayer('https://cyberjapandata.gsi.go.jp/xyz/seamlessphoto/{z}/{x}/{y}.jpg', { attribution: '&copy; 国土地理院'});
        var kurosawaEzu1828 = L.imageOverlay('data/_5.png', [[39.2790, 141.1217], [39.2867, 141.1308]]); 
        var heimentu1903 = L.imageOverlay('data/_3.png', [[39.2768, 141.1225], [39.2882, 141.1331]]);
        // レイヤー追加と初期透明度
        gsiLayer.addTo(map); photoLayer.addTo(map); kurosawaEzu1828.addTo(map); heimentu1903.addTo(map);
        gsiLayer.setOpacity(0.3); photoLayer.setOpacity(1); kurosawaEzu1828.setOpacity(0); heimentu1903.setOpacity(0);
        // 透明度コントロール
        const opacityControl = L.control({ position: 'topright' });
        opacityControl.onAdd = function (map) {
            const div = L.DomUtil.create('div', 'info legend opacity-control');
            div.innerHTML = `<h4>地図の切り替え・透過度調整</h4><label><div><input type="range" min="0" max="1" step="0.1" value="0.3" oninput="gsiLayer.setOpacity(this.value)"> 電子地形図(現代)</div></label><label><div><input type="range" min="0" max="1" step="0.1" value="1" oninput="photoLayer.setOpacity(this.value)"> 空中写真(現代)</div></label><label><div><input type="range" min="0" max="1" step="0.1" value="0" oninput="kurosawaEzu1828.setOpacity(this.value)"> 黒沢尻川岸絵図(1828年)</div></label><label><div><input type="range" min="0" max="1" step="0.1" value="0" oninput="heimentu1903.setOpacity(this.value)"> 北上川河川台帳平面図(1903年)</div></label>`;
            L.DomEvent.on(div, 'mousedown dblclick', L.DomEvent.stopPropagation); return div;
        };
        opacityControl.addTo(map); 
        // 藩境マーカーと藩ラベル
        var arrowIcon = L.divIcon({ className: 'arrow-label', html: '↕', iconSize: [30, 30], iconAnchor: [15, 15] });
        L.marker([39.272, 141.125], { icon: arrowIcon }).addTo(map); 
        var moriokaLabelIcon = L.divIcon({ className: 'han-label', html: '盛岡藩（南部藩）', iconSize: [150, 30], iconAnchor: [75, 15] });
        L.marker([39.285, 141.125], { icon: moriokaLabelIcon }).addTo(map);
        var sendaiLabelIcon = L.divIcon({ className: 'han-label', html: '仙台藩（伊達藩）', iconSize: [150, 30], iconAnchor: [75, 15] });
        L.marker([39.26, 141.125], { icon: sendaiLabelIcon }).addTo(map);
        
        // --- ピン表示 (PHPからJSONで変数を受け取る) ---
        const landmarks = <?php echo json_encode($landmarks); ?>; 
        const tikei_pins = <?php echo json_encode($tikei_pins); ?>; 
        const suibu_pins = <?php echo json_encode($suibu_pins); ?>; 
        const tatemono_pins = <?php echo json_encode($tatemono_pins); ?>; 
        const timei_pins = <?php echo json_encode($timei_pins); ?>;
        
        // --- アイコン定義 ---
        const iconUrls = { 
            red: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png', 
            yellow: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-yellow.png', 
            green: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png', 
            blue: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png' 
        };
        const shadowUrl = 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.0/images/marker-shadow.png';
        
        function createColoredIcon(color) { 
            return new L.Icon({ 
                iconUrl: iconUrls[color] || iconUrls.red, 
                shadowUrl: shadowUrl, 
                iconSize: [25, 41], 
                iconAnchor: [12, 41], 
                popupAnchor: [1, -34], 
                shadowSize: [41, 41] 
            }); 
        }
        
        // --- マーカー作成関数 ---
        function createMarker(data, color) {
            const coords = data.latlng || data.lating; 
            if (!coords) return;
            
            const latlngStr = coords.split(','); 
            const lat = parseFloat(latlngStr[0]); 
            const lng = parseFloat(latlngStr[1]);
            
            if (isNaN(lat) || isNaN(lng)) return; // 座標が無効なら何もしない

            const description = data.setsumei || data.setstumei || '';
            const archiveUrl = `https://abe-islab.jp/boat_transport/map/#16/${lat}/${lng}`; 
            
            let popupContent = `<div class="popup-content"><b>${data.name}</b><br>${data.kubun || ''}<br>${description}</div>`;
            
            if (data.gazo) { 
                popupContent += `<div class="popup-image"><a href="jpeg/${data.gazo}" data-lightbox="group-${color}"><img src="jpeg/${data.gazo}" width="180"></a></div>`; 
            }
            
            popupContent += `<a href="${archiveUrl}" target="_blank" rel="noopener noreferrer" class="archive-button">舟運アーカイブで詳しく見る</a>`; 
            
            L.marker([lat, lng], { icon: createColoredIcon(color) }).addTo(map).bindPopup(popupContent);
        }
        
        // --- マーカーの実行 ---
        landmarks.forEach(pin => createMarker(pin, 'red')); 
        tikei_pins.forEach(pin => createMarker(pin, 'red')); 
        suibu_pins.forEach(pin => createMarker(pin, 'yellow')); 
        tatemono_pins.forEach(pin => createMarker(pin, 'green')); 
        timei_pins.forEach(pin => createMarker(pin, 'blue'));
    </script>
</body>
</html>