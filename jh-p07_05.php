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
            list-style-type: '・';
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
                    <h2>盛岡藩商人の商荷物の流通から ２</h2>
                    <p>
                        ● 江戸時代中期　延享4年（1747）、宝暦5年（1755）
                    </p>
                    <ul>
                        <li>
                            黒沢尻河岸の「<strong>商船<ruby>惣<rt>そう</rt></ruby>船頭</strong>」が運賃増額を要求。
                        </li>
                        <li>
                            要求先は、黒沢尻河岸の<ruby>河岸問屋<rt>かしどんや</rt></ruby>・八重樫と古着や小間物を扱う盛岡、郡山、黒沢尻の商人、計7名で構成された「<strong>問屋仲間</strong>」。
                        </li>
                        <li>
                            「商船<ruby>惣<rt>そう</rt></ruby>船頭」は、藩船の運賃増額が認められたことを引き合いに出している。
                        </li>
                    </ul>
                    <p style="font-weight: bold; margin-top: 15px;">
                        →「問屋仲間」が自分たちの裁量で運賃を決定できる。
                    </p>
                    <p style="font-weight: bold; color: #b00;">
                        →「藩の強力な統制」によらない流通体制。
                    </p>
                </div>

                <div class="map-column">
                    <figure class="image-wrapper" style="width: 80%; margin: 10px auto;">
                        <img src="img/pwp7.jpg" alt="本町検断沢藤家文書">
                        <figcaption>
                            河岸問屋の記録（本町検断沢藤家文書）<br>
                            北上市立中央図書館蔵
                        </figcaption>
                    </figure>
                    </div>
            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p07_04.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 5 -</span> <a href="jh-p07_06.php" class="page-nav-button">次のページへ →</a>
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