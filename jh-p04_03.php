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
        .content-body p strong,
        .content-body li strong {
            color: #005a9c;
            font-weight: 600;
        }

        /* 本文のフォントサイズ調整 */
        .text-column p,
        .text-column ul {
            font-size: 1.1em;
            line-height: 1.8;
        }

        /* 画像とキャプションをグループ化 */
        .image-wrapper {
            margin: 10px auto; /* autoで中央揃え */
            /* ▼▼▼ 画像サイズを 100% から 50%（半分）に変更 ▼▼▼ */
            width: 50%; 
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
        
        /* 2カラムのバランス調整 */
        .content-row {
            align-items: flex-start;
        }
        .text-column {
            flex: 1;
        }
        .map-column {
            flex: 1;
        }
        /* ▲▲▲ CSSここまで ▲▲▲ */
    </style>
</head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>３．盛岡藩の藩米輸送と黒沢尻川岸</h1>
            
            <div class="content-row">
                <div class="text-column">
                    <h3>効率的に輸送するために…</h3>
                    <p>
                        →<strong>黒沢尻川岸を中継地</strong>に！<br>
                        <b>地理的要因（大型船の航行）</b>
                    </p>
                    <br>
                    <p>
                        ＊ 盛岡⇔黒沢尻は小型船<br>
                        <strong>小繰船（おぐりぶね）</strong>
                    </p>
                    <br>
                    <p>
                        ＊ 黒沢尻⇔石巻は大型船<br>
                        <strong>艜　船（ひらたぶね）</strong>
                    </p>
                </div>

                <div class="map-column">
                    <figure class="image-wrapper">
                        <img src="img/pwp5_2.jpg" alt="黒沢尻周辺の航空写真">
                        <figcaption>黒沢尻周辺の地理</figcaption>
                    </figure>
                </div>
            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p04_02.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 3 -</span>
            <a href="jh-p04_04.php" class="page-nav-button">次のページへ →</a>
        </footer>
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