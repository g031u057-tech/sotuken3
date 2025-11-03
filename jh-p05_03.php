<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>４．川と生きる人々 - 学習支援システム</title>
    <link rel="stylesheet" href="style.css">
    
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
        .text-column hr {
            margin: 15px 0;
            border: 0;
            border-top: 1px solid #eee;
        }

        /* 画像とキャプションをグループ化 */
        .image-wrapper {
            margin: 10px auto;
            width: 100%; /* デフォルトはカラム幅いっぱい */
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
        
        /* 3カラムのバランス調整 */
        .content-row {
            align-items: flex-start;
            gap: 20px; /* カラム間の隙間 */
        }
        .text-column {
            flex: 1; /* 3カラムを均等に */
        }
        /* ▲▲▲ CSSここまで ▲▲▲ */
    </style>
</head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>４．川と生きる人々</h1>
            
            <div class="content-row">
                
                <div class="text-column">
                    <p style="font-weight: bold;">
                        ● たいへんな労働<br>（危険と隣合せ）
                    </p>
                    <hr>
                    <p style="font-size: 0.9em;">
                        <b>ひこ綱（上）</b><br>
                        <b>肩の部分（中）肩あて（下）</b><br>
                        北上市立博物館に展示中
                    </p>
                </div>

                <div class="text-column">
                    <figure class="image-wrapper">
                        <img src="img/pwp6_5.jpg" alt="復元した「天神丸」を引く人々">
                        <figcaption>
                            復元した「天神丸」を引く人々<br>
                            昭和62年（1987）<br>
                            『甦る開 復元建造報告書』より転載
                        </figcaption>
                    </figure>
                    </div>

                <div class="text-column">
                    <figure class="image-wrapper" style="width: 60%; margin: 10px auto;">
                        <img src="img/pwp6_4.jpg" alt="ひこ綱、肩の部分、肩あて">
                        <figcaption>
                            （上）ひこ綱<br>
                            （中）肩の部分<br>
                            （下）肩あて
                        </figcaption>
                    </figure>
                    </div>

            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p05_02.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 3 -</span>
            <a href="jh-p05_04.php" class="page-nav-button">次のページへ →</a>
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