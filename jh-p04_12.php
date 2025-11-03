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
        .text-section p {
            font-size: 1.1em;
            line-height: 1.8;
        }

        /* 画像とキャプションをグループ化 */
        .image-wrapper {
            margin: 20px auto;
            /* ▼▼▼ 画像サイズを 80% -> 70% に変更 ▼▼▼ */
            width: 70%;
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
    </style>
</head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>３．盛岡藩の藩米輸送と黒沢尻川岸</h1>
            
            <figure class="image-wrapper">
                <img src="img/pwp5_10.jpg" alt="黒沢尻川岸模型">
                <figcaption>
                    黒沢尻川岸模型（北上市立博物館に展示中）
                </figcaption>
            </figure>
            <div class="text-section" style="margin-top: 20px;">
                <p>
                    これは、当時の黒沢尻川岸の賑わいを復元した模型です。
                </p>
                <p>
                    川沿いに立ち並ぶ建物群が、ここが舟運の重要な<strong>拠点</strong>であったことを示しています。次のページから、模型にみられる主要な施設を見ていきましょう。
                </p>
            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p04_11.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 12 -</span> <a href="jh-p04_13.php" class="page-nav-button">次のページへ →</a> </footer>
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