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
        
        /* 2カラムのバランス調整 */
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
                        ● 水上の安全は、舟運に
                        関わる人々の共通の願い
                    </p>
                    <br>
                    <p>
                        舟運は、川の流れに逆らって船を引く重労働や、浅瀬・渦巻きなどの危険が伴う仕事でした。
                    </p>
                    <p>
                        そのため、船頭や商人たちは水運の神様である「<strong>住吉神社（すみよしじんじゃ）</strong>」を祀ったり、航海の安全を願って「<strong>船絵馬（ふなえま）</strong>」を奉納したりしました。
                    </p>
                </div>

                <div class="text-column">
                    <figure class="image-wrapper" style="width: 25%; margin: 10px auto;">
                        <img src="img/pwp6_2.jpg" alt="住吉大明神幟">
                        <figcaption>
                            住吉大明神幟（のぼり） 文化13年（1816）<br>北上市立博物館蔵
                        </figcaption>
                    </figure>
                </div>

                <div class="text-column">
                    <figure class="image-wrapper">
                        <img src="img/pwp6.jpg" alt="住吉神社">
                        <figcaption>
                           舟運関係者が祀った住吉神社（北上市内）
                        </figcaption>
                    </figure>
                </div>
                </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p04_16.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 1 -</span>
            <a href="jh-p05_02.php" class="page-nav-button">次のページへ →</a>
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