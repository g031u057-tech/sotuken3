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
            
            <h2 style="text-align: center; margin-top: 15px;">中継港としての黒沢尻川岸</h2>

            <figure class="image-wrapper">
                <img src="img/pwp5_9.jpg" alt="黒沢尻川岸絵図">
                <figcaption>
                    黒沢尻川岸絵図 文政11年（1828） 個人蔵
                </figcaption>
            </figure>
            <div class="text-section" style="margin-top: 20px;">
                <p>
                    この絵図は、文政11年（1828年）当時の黒沢尻川岸の様子を描いたものです。
                </p>
                <p>
                    黒沢尻は、小型船（<strong>小繰船</strong>）から大型船（<strong>艜船</strong>）へ米を積み替える「<strong>中継港</strong>」でした。
                </p>
                <p>
                   そのため、川沿いには米を保管する「<strong>御蔵（おくら）</strong>」、舟運を管理する「<strong>御艜所（おひらたどころ）</strong>」、船を修理する「<strong>御船繕所（おふねつくろいどころ）</strong>」などの公的な施設が集中していました。
                </p>
            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p04_10.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 11 -</span> <a href="jh-p04_12.php" class="page-nav-button">次のページへ →</a> </footer>
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