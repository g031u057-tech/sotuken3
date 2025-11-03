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
            /* ▼▼▼ 画像サイズを 40% -> 50% に変更 ▼▼▼ */
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
        /* ▲▲▲ CSSここまで ▲▲▲ */
    </style>
</head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>６．近年の研究</h1>
            
            <div class="text-section">
                <h2 style="text-align: center;">これまでの研究（おさらい）</h2>
                <p style="margin-top: 20px;">
                    ● <strong><ruby>廻米<rt>かいまい</rt></ruby></strong>に関する研究がもっぱら → 米を運ぶ川の道
                </p>
                <p style="font-size: 1.0em; padding-left: 2em;">
                    （「盛岡藩家老席日記　雑書」をはじめ、廻米の記録が多く残る。）
                </p>
            </div>

            <figure class="image-wrapper">
                <img src="img/pwp5_13.jpg" alt="黒沢尻御艜所御定目">
                
                <figcaption>
                    「黒沢尻御<ruby>艜<rt>ひらた</rt></ruby>所御定目」安永7年（1778）<br>
                    岩手県立図書館蔵
                </figcaption>
            </figure>
            </main>
        
        <footer class="textbook-footer">
            <a href="jh-p06_03.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 1 -</span> <a href="jh-p07_02.php" class="page-nav-button">次のページへ →</a>
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