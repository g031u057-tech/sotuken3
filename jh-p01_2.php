<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>はじめに - 盛岡藩と仙台藩 - 学習支援システム</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    
    <style>
        /* ▼▼▼ UI改善のためのCSSを追加 ▼▼▼ */
        /* 重要語句の強調 */
        .content-body p strong {
            color: #005a9c;
            font-weight: 600;
        }

        /* 本文のフォントサイズ調整 */
        .text-column p {
            font-size: 1.1em;
            line-height: 1.8;
        }

        /* 2カラムのバランス調整 */
        .content-row {
            align-items: flex-start; /* 上端揃え */
        }
        .text-column {
            flex: 1;
        }
        .map-column {
            flex: 1;
        }
        /* ▲▲▲ CSSここまで ▲▲▲ */

        /* マップの大きさを指定 */
        #map-border {
            width: 100%;
            height: 500px; /* 地図の高さを指定 */
            border: 1px solid #ccc;
            border-radius: 4px; /* 角を丸める */
        }
        
        /* 地図上のテキストラベル用のCSS */
        .han-label {
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid #555;
            border-radius: 5px;
            padding: 5px 10px;
            font-size: 1.1em;
            font-weight: bold;
            width: 150px; /* ラベルの幅を固定 */
            text-align: center;
            white-space: nowrap; /* 折り返しを防ぐ */
            box-shadow: 0 1px 3px rgba(0,0,0,0.3);
        }

        /* 矢印マーカー用のCSS */
        .arrow-label {
            background: rgba(255, 100, 100, 0.8); 
            border: 1px solid #000;
            border-radius: 5px;
            font-size: 1.5em; 
            font-weight: bold;
            text-align: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.3);
            width: 30px; 
            height: 30px;
            line-height: 30px; 
            padding: 0; 
        }
    </style>
</head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>はじめに：盛岡藩と仙台藩の境</h1>
            <div class="content-row">
                <div class="text-column">
                    <h3>藩境の町、黒沢尻</h3>
                    <p>
                        江戸時代、<strong>黒沢尻（現在の北上市）</strong>は、北の「<strong>盛岡藩（南部藩）</strong>」と南の「<strong>仙台藩（伊達藩）</strong>」が接する、まさに「<strong>藩境</strong>」の町でした。
                    </p>
                    <p>
                        下の地図を見てみましょう。赤い「↕」マークが、当時の藩の境（藩境）を示しています。
                    </p>
                    <p>
                        この藩境があったため、黒沢尻は盛岡藩の南の玄関口として、物資の監視などを行う重要な拠点（<strong>物留番所</strong>）でもありました。
                    </p>
                </div>
                <div class="map-column">
                    <div id="map-border"></div>
                </div>
            </div>
        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p01.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 2 -</span>
            <a href="jh-p02.php" class="page-nav-button">次のページへ →</a>
        </footer>
    </div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        // ハンバーガーメニューの処理
        $('#hamburger-btn').on('click', function() {
            $(this).toggleClass('active');
            $('.sidebar').toggleClass('show');
        });

        // --- ここからGISマップの処理 ---

        // 1. 地図の初期化
        // ▼▼▼ ズームレベルを 14 から 13 に変更しました ▼▼▼
        var map = L.map('map-border').setView([39.275, 141.125], 13);

        // 2. 背景地図（空中写真）
        L.tileLayer('https://cyberjapandata.gsi.go.jp/xyz/seamlessphoto/{z}/{x}/{y}.jpg', {
            attribution: '&copy; 国土地理院'
        }).addTo(map);

        // 3. 藩境の「↕」マーカー
        var arrowIcon = L.divIcon({
            className: 'arrow-label', 
            html: '↕',
            iconSize: [30, 30], 
            iconAnchor: [15, 15]
        });
        L.marker([39.272, 141.125], { icon: arrowIcon }).addTo(map);


        // 4. テキストラベル (DivIcon)
        // 盛岡藩ラベル
        var moriokaLabelIcon = L.divIcon({
            className: 'han-label',
            html: '盛岡藩（南部藩）',
            iconSize: [150, 30], 
            iconAnchor: [75, 15]
        });
        L.marker([39.305, 141.125], { icon: moriokaLabelIcon }).addTo(map);

        // 仙台藩ラベル
        var sendaiLabelIcon = L.divIcon({
            className: 'han-label',
            html: '仙台藩（伊達藩）',
            iconSize: [150, 30],
            iconAnchor: [75, 15]
        });
        L.marker([39.25, 141.125], { icon: sendaiLabelIcon }).addTo(map);

    </script>
</body>
</html>