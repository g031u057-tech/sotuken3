<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>２．北上川舟運の始まり - 学習支援システム</title>
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
            /* ▼▼▼ 画像サイズを 100% から 80% に変更 ▼▼▼ */
            width: 80%; 
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
            flex: 1.2;
        }
        .map-column {
            flex: 0.8;
        }
        /* ▲▲▲ CSSここまで ▲▲▲ */

    </style>
    </head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>２．北上川舟運の始まり</h1>
            
            <div class="content-row">
                <div class="text-column">
                    <h3>舟運は両藩の「生命線」</h3>
                    <p>
                        ●<strong>仙台藩</strong>にとっては<br>
                        →領内屈指の<strong>穀倉地帯</strong>からの安定輸送
                    </p>
                    <p>
                        ●<strong>盛岡藩</strong>にとっても<br>
                        →北上川流域が<strong>穀倉地帯</strong><br>
                        （<strong>生命線</strong>）
                    </p>
                </div>

                <div class="map-column">
                    <figure class="image-wrapper">
                        <img src="img/pwp4_4.jpg" alt="現在の河口周辺">
                        <figcaption>現在</figcaption>
                    </figure>
                </div>
            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p03_02.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 3 -</span> <a href="jh-p04.php" class="page-nav-button">次のページへ →</a>
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