<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>６．近年の研究 - 学習支援システム</title>
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
            list-style-type: '●'; 
            padding-left: 2em;
        }
        .text-column ul ul { /* 入れ子のリスト */
            font-size: 0.9em;
            list-style-type: '・';
            padding-left: 1.5em;
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
            <h1>６．近年の研究</h1>
            
            <div class="content-row">
                <div class="text-column">
                    <h2>盛岡藩の場合（おさらい）</h2>
                    <ul>
                        <li>
                            <strong>黒沢尻川岸</strong>が<ruby>廻米<rt>かいまい</rt></ruby>の積出拠点。
                            <ul>
                                <li>小型船（<strong>小繰船</strong>）から大型船（<strong><ruby>艜<rt>ひらた</rt></ruby>船</strong>）に積み替える<strong>中継地</strong>。</li>
                                <li>→<strong>御<ruby>艜<rt>ひらた</rt></ruby>所</strong>、米蔵、造船所など公的施設が集中。</li>
                                <li>→船は藩所有、商人や船頭に預からせて運航。</li>
                            </ul>
                        </li>
                        <li style="margin-top: 15px;">
                            なおかつ黒沢尻河岸は他領往来荷物の玄関口。
                            <ul>
                                <li>→<strong><ruby>物留番所<rt>かわとめばんしょ</rt></ruby></strong>の設置。</li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="map-column">
                    <figure class="image-wrapper">
                        <img src="img/pwp5_9.jpg" alt="黒沢尻川岸絵図">
                        <figcaption>
                            「黒沢尻川岸絵図」文政11年（1828） 個人蔵
                        </figcaption>
                    </figure>
                    </div>
            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p07.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 2 -</span> <a href="jh-p07_03.php" class="page-nav-button">次のページへ →</a>
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