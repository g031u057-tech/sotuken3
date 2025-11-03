<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1. 地理情報システムとは - 学習支援システム</title>
    <style>
        /* ===== 基本設定 ===== */
        body, html { margin: 0; padding: 0; height: 100%; font-family: 'Helvetica Neue', Arial, 'Hirino Kaku Gothic ProN', 'Hiragino Sans', Meiryo, sans-serif; }
        #hamburger-btn { position: fixed; top: 15px; left: 15px; z-index: 1001; width: 40px; height: 40px; background: white; border: 1px solid #ccc; border-radius: 5px; cursor: pointer; padding: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.2); }
        #hamburger-btn span { display: block; width: 100%; height: 3px; background: #333; margin: 4px 0; transition: all 0.3s; }
        #hamburger-btn.active span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
        #hamburger-btn.active span:nth-child(2) { opacity: 0; }
        #hamburger-btn.active span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }
        .sidebar { position: fixed; top: 0; left: 0; height: 100%; width: 450px; background-color: #f4f4f9; z-index: 1000; transform: translateX(-100%); transition: transform 0.4s ease-in-out; box-shadow: 2px 0 10px rgba(0,0,0,0.1); border-right: 1px solid #ccc; }
        .sidebar.show { transform: translateX(0); }
        .content-panel { padding: 20px; height: 100%; overflow-y: auto; }
        .content-panel header h1 { font-size: 1.5em; }
        .cp_navi .back-button { margin-bottom: 20px; text-align: center; }
        .content-panel .em { font-size: 0.9em; color: #555; border-bottom: 1px solid #ddd; padding-bottom: 15px; }
        .cp_navi ul { list-style-type: none; padding: 0; }
        .cp_navi li a { display: block; padding: 12px 15px; margin: 5px 0; background: #e0e0e0; color: #333; text-decoration: none; border-radius: 4px; }
        .cp_navi li a:hover { background: #c0c0c0; }
        .content-page-container { max-width: 1000px; margin: 20px auto; padding: 20px 40px; background: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
        .back-button { display: inline-block; padding: 8px 15px; background: #f0f0f0; color: #333; text-decoration: none; border-radius: 5px; margin-bottom: 15px; }
        
        /* ▼▼▼ ページ固有のCSS（ここから修正・追加） ▼▼▼ */
        .content-body h1 { 
            font-size: 1.8em; 
            border-bottom: 2px solid #005a9c;
            padding-bottom: 10px;
            margin-bottom: 25px;
        }
        .content-body h2 { 
            color: #333; 
            font-size: 1.5em;
            margin-bottom: 15px;
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

        /* 2カラムレイアウト */
        .content-row { 
            display: flex; 
            flex-wrap: wrap; /* スマホなどで折り返す */
            gap: 30px; /* カラム間の隙間 */
        }
        .text-column { 
            flex: 1; 
            min-width: 300px; /* 折り返す際の最小幅 */
        }

        /* G空間情報の説明ボックス */
        .example-box { 
            background: #f9f9f9; 
            border: 1px solid #ddd; 
            padding: 15px 15px 15px 20px; 
            margin-top: 15px; 
            border-radius: 5px; 
        }
        .example-box ol {
            padding-left: 25px;
            margin: 10px 0;
        }
        .example-box li {
            font-size: 1.05em;
            line-height: 1.7;
            margin-bottom: 8px;
        }

        /* 右側の画像 */
        .content-body figure { 
            margin: 0; 
            text-align: center; 
        }
        .content-body img { 
            max-width: 100%; 
            height: auto; 
            border: 1px solid #ccc; 
            border-radius: 4px;
        }
        .content-body figcaption { 
            font-size: 0.9em; 
            color: #666; 
            margin-top: 5px; 
        }

        /* 水平線 (セクションの区切り) */
        .section-divider {
            border: 0;
            border-top: 1px solid #e0e0e0;
            margin: 35px 0;
        }

        /* GIS / GNSS の定義カード */
        .info-card {
            background: #fdfdfd;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px 25px;
            height: 100%; /* 2カラムの高さを揃える */
            box-sizing: border-box; /* paddingを含めて高さを計算 */
            box-shadow: 0 2px 5px rgba(0,0,0,0.04);
        }
        .info-card h3 {
            margin-top: 0;
            font-size: 1.3em;
            color: #222;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 10px;
            display: flex; 
            align-items: center;
        }
        .info-card h3 span { /* アイコン */
            margin-right: 12px;
            font-size: 1.2em;
            line-height: 1;
        }
        .info-card p {
            font-size: 1.0em; 
            line-height: 1.7;
            margin-bottom: 0;
        }

        /* 補足 (supplement) のスタイル調整 */
        .supplement { 
            margin-top: 30px; 
            padding: 20px 25px;
            background: #e6f3ff; 
            border: 1px solid #b3d7ff;
            border-left: 5px solid #005a9c; 
            border-radius: 5px;
        }
        .supplement p {
            font-size: 1.05em;
            line-height: 1.7;
            margin: 0;
            color: #222;
        }
        /* ▲▲▲ CSSここまで ▲▲▲ */

        .content-page-container.with-fixed-menu { 
            margin-top: 0; 
            padding-top: 70px; 
        }
    </style>
</head>
<body>
    
    <?php include 'hs-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>1. 地理情報システムとは (GIS)</h1>

            <div class="content-row" style="align-items: flex-start;">
                
                <div class="text-column" style="flex: 1.2;"> <h2>G空間情報（地理空間情報）とは</h2>
                    <p>
                        2007年に「地理空間情報活用推進基本法」が成立し、<strong>G空間情報（地理空間情報）</strong>の活用が推進されています。G空間情報は、以下の2つの情報から構成されます。
                    </p>
                    <div class="example-box">
                        <ol>
                            <li>空間上の特定の地点又は区域の<strong>位置を示す情報（位置情報）</strong></li>
                            <li>上記の位置情報に<strong>関連付けられた、様々な情報</strong></li>
                        </ol>
                    </div>
                </div>

                <div class="text-column" style="flex: 0.8;"> <figure>
                        <img src="img/gis_g_space.png" alt="G空間情報とGISの関係を示した図">
                        <figcaption>出典：国土交通省「GISとは」</figcaption>
                    </figure>
                </div>
            </div>

            <hr class="section-divider">

            <h2>GISとGNSS</h2>
            <div class="content-row" style="margin-top: 20px;">
                
                <div class="text-column">
                    <div class="info-card">
                        <h3><span class="icon-gis">🗺️</span> 地理情報システム (GIS)</h3>
                        <p><strong>GIS</strong>は、G空間情報をコンピュータ上でデータベース化し、それを検索・分析・表示できるようにした仕組みです。様々な空間データを種類（レイヤー）毎に分けて記録し、これを基盤地図（背景図）に重ね合わせて、データの検索やデータ間の関連性分析を行います。</p>
                    </div>
                </div>

                <div class="text-column">
                    <div class="info-card">
                        <h3><span class="icon-gnss">🛰️</span> 衛星測位システム (GNSS)</h3>
                        <p><strong>GNSS</strong>は、GPSや日本の「みちびき」などがこれにあたります。人工衛星からの電波を利用して、現在位置を正確に知ることができます。これにより、精度の高い位置情報（G空間情報）の取得が可能になります。</p>
                    </div>
                </div>
            </div>
            
            <div class="supplement">
                <p><strong>GIS</strong>と<strong>GNSS</strong>の技術を組み合わせることで、G空間情報を高度に活用し、国土の整備・保全、防災、行政の効率化、新産業の創出など、安全で豊かな社会の実現に貢献することが期待されています。</p>
            </div>
        </main>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        /* ===== ハンバーガーメニューの処理 ===== */
        $('#hamburger-btn').on('click', function() {
            $(this).toggleClass('active');
            $('.sidebar').toggleClass('show');
        });
    </script>
</body>
</html>