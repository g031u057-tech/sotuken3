<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>３．盛岡藩の藩米輸送と黒沢尻川岸 - 学習支援システム</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
        /* ▼▼▼ UI改善のためのCSSを追加 ▼▼▼ */
        /* 重要語句の強調 */
        .content-body p strong {
            color: #005a9c;
            font-weight: 600;
        }

        /* 本文のフォントサイズ調整 */
        .text-section p,
        .text-section ul {
            font-size: 1.1em;
            line-height: 1.8;
        }

        /* 画像とキャプションをグループ化 */
        .image-wrapper {
            margin: 10px auto; /* 中央揃え */
            width: 100%; /* カラム幅に合わせる */
        }
        .image-wrapper img {
            width: 100%;
            height: auto;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .image-wrapper figcaption {
            text-align: center;
            font-size: 0.9em;
            color: #555;
            margin-top: 5px;
        }
        /* ▲▲▲ CSSここまで ▲▲▲ */


        /* 画像を横並びにするためのコンテナ */
        .image-flex-container {
            display: flex;
            gap: 15px; /* 画像の間のスペース */
            align-items: flex-start; /* 画像の上端を揃える */
            justify-content: center; /* コンテナの中身を中央揃えにします */
            margin-top: 20px;
        }
        
        /* ▼▼▼ 画像サイズを 48% -> 25%（半分）に変更 ▼▼▼ */
        .image-item {
            width: 25%; 
            min-width: 0; 
        }
        /* ▲▲▲ 変更ここまで ▲▲▲ */

    </style>
    </head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>３．盛岡藩の藩米輸送と黒沢尻川岸</h1>
            
            <div class="text-section" style="text-align: center;">
                <h2>御蔵 (おくら)</h2>
                <p>
                   ● 集めた<strong>年貢米を保管</strong>しておくための蔵（倉庫）
                </p>
                <p>
                  ● <strong>約3万俵</strong>程度の米俵を収蔵する能力があったとされます
                </p>
            </div>

            <div class="image-flex-container">
                
                <div class="image-item">
                    <figure class="image-wrapper">
                        <img src="img/pwp5_11.jpg" alt="御蔵（模型）">
                        <figcaption>
                           御蔵（模型より） 
                        </figcaption>
                    </figure>
                </div>
                
                <div class="image-item">
                    <figure class="image-wrapper">
                        <img src="img/pwp5_12.jpg" alt="米俵">
                        <figcaption>
                            参考資料 米俵
                        </figcaption>
                    </figure>
                </div>

            </div>
            </main>
        
        <footer class="textbook-footer">
            <a href="jh-p04_12.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 13 -</span> <a href="jh-p04_14.php" class="page-nav-button">次のページへ →</a> </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $('#hamburger-btn').on('click', function() {
            $(this).toggleClass('active');
            $('.sidebar').toggleClass('show');
        });
    </script>
</body>
</html>