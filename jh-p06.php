<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>５．古文書でみる諸相 - 学習支援システム</title>
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
        .text-column ul {
            list-style-type: '·'; 
            padding-left: 2em;
        }

        /* 画像とキャプションをグループ化 */
        .image-wrapper {
            margin: 10px auto;
            width: 100%; /* カラム幅いっぱいに */
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
            <h1>５．古文書でみる諸相</h1>
            
            <div class="content-row">
                <div class="text-column">
                    <h2>● 18世紀半ば以降（江戸中期以降）</h2>
                    <p style="margin-top: 20px;">
                        盛岡藩の藩有船
                    </p>
                    <ul>
                        <li><strong>艜船 55艘</strong></li>
                        <li><strong>小繰船 39艘</strong></li>
                    </ul>
                </div>

                <div class="map-column">
                    <figure class="image-wrapper" style="width: 80%; margin: 10px auto;">
                        <img src="img/pwp7.jpg" alt="本町検断沢藤家文書">
                        <figcaption>
                            本町検断沢藤家文書<br>北上市立中央図書館蔵
                        </figcaption>
                    </figure>
                    </div>
            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p05_04.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 1 -</span> <a href="jh-p06_02.php" class="page-nav-button">次のページへ →</a> </footer>
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