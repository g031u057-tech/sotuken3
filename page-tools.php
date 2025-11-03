<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3. 簡易GISツール - 学習支援システム</title>
    <style>
        /* CSSはここに全て含まれています */
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

        /* ▼▼▼ ページ固有のCSS（page-gis.phpと統一） ▼▼▼ */
        .content-body h1 { 
            font-size: 1.8em; 
            border-bottom: 2px solid #005a9c;
            padding-bottom: 10px;
            margin-bottom: 25px;
        }
        .content-body h2 { 
            color: #333; 
            font-size: 1.5em;
            margin-top: 30px;
            margin-bottom: 20px;
            border-left: 5px solid #005a9c;
            padding-left: 10px;
        }
        .content-body p { 
            line-height: 1.8; 
            font-size: 1.1em; 
            margin-bottom: 1.5em;
        }
        
        /* 重要な単語を強調 */
        .content-body p strong, .content-body li strong {
            color: #005a9c; /* テーマカラー */
            font-weight: 600;
        }

        /* ツールカードのコンテナ */
        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* レスポンシブなグリッド */
            gap: 20px;
        }

        /* ツール紹介カード (旧 unit-card) */
        .tool-card {
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px 25px;
            box-shadow: 0 3px 6px rgba(0,0,0,0.05);
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }
        .tool-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 12px rgba(0,0,0,0.08);
        }
        
        .tool-card h3 {
            margin-top: 0;
            font-size: 1.3em;
            color: #222;
            padding-bottom: 10px;
            display: flex; 
            align-items: center;
        }
        .tool-card h3 span { /* アイコン */
            margin-right: 12px;
            font-size: 1.2em;
            line-height: 1;
        }
        
        .tool-card p {
            font-size: 1.0em; 
            line-height: 1.7;
            margin-bottom: 1em;
            color: #333;
        }
        
        .tool-card p strong {
            color: #444; /* カード内では色を少し抑える */
            font-weight: 600;
        }

        .tool-card a {
            font-size: 0.95em;
            color: #005a9c;
            text-decoration: none;
            font-weight: 600;
            word-break: break-all;
        }
        .tool-card a:hover {
            text-decoration: underline;
        }
        /* ▲▲▲ CSSここまで ▲▲▲ */

        .content-page-container.with-fixed-menu { margin-top: 0; padding-top: 70px; }
    </style>
</head>
<body>

    <?php include 'hs-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>3. 簡易GISツール</h1>
            <p>
                インターネット環境のもとで利用する簡易型のGISで、<strong>WebGIS</strong>とも呼ばれます。特別なソフトをインストールしなくても、Webブラウザ上で誰でも利用できるのが特徴です。
            </p>

            <h2>国が無償で提供するサイト（ツール）</h2>
            <div class="card-container">
                <div class="tool-card">
                    <h3><span>🗺️</span>地理院地図</h3>
                    <p>
                        <strong>提供：</strong>国土地理院<br>
                        デジタル地図に加えて、地理教育（土地の成り立ち）や防災教育（ハザードマップや震災遺構など）全般に役立つ多様な情報が提供されています。
                    </p>
                    <a href="https://maps.gsi.go.jp/" target="_blank" rel="noopener noreferrer">https://maps.gsi.go.jp/</a><br>
                </div>
                
                <div class="tool-card">
                    <h3><span>📊</span>RESAS（地域経済分析システム）</h3>
                    <p>
                        <strong>提供：</strong>内閣府<br>
                        地域経済に関する官民の様々なデータを、地図やグラフ等で分かりやすく「見える化」する統計GISです。
                    </p>
                    <a href="https://resas.go.jp/" target="_blank" rel="noopener noreferrer">https://resas.go.jp/</a><br>
                </div>
                
                <div class="tool-card">
                    <h3><span>📈</span>jSTAT MAP</h3>
                    <p>
                        <strong>提供：</strong>総務省<br>
                        国の統計データを地図上に表示し、分析することができる統計GISです。
                    </p>
                    <a href="https://jstatmap.e-stat.go.jp/" target="_blank" rel="noopener noreferrer">https://jstatmap.e-stat.go.jp/</a><br>
                </div>
            </div>

            <h2>県や市町村が提供する地域住民向けサイト</h2>
            <div class="card-container" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));"> <div class="tool-card">
                    <h3><span>📍</span>いわてデジタルマップ</h3>
                    <p>
                        <strong>提供：</strong>岩手県<br>
                        岩手県内の様々な情報を地図上で閲覧できるサイトです。
                    </p>
                    <a href="https://www.sonicweb-asp.jp/iwate" target="_blank" rel="noopener noreferrer">https://www.sonicweb-asp.jp/iwate</a><br>
                </div>
            </div>

        </main>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        // ハンバーガーメニューの処理
        $('#hamburger-btn').on('click', function() {
            $(this).toggleClass('active');
            $('.sidebar').toggleClass('show');
        });
    </script>
</body>
</html>