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
        .text-section p,
        .image-wrapper p { /* 画像ラッパー内のPタグも */
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
            <h1>３．盛岡藩の藩米輸送と黒沢尻川岸</h1>
            
            <div class="text-section" style="text-align: center;">
                <h2>御艜所 (おひらたどころ)</h2>
                <p>
                    ● 艜船（ひらたぶね）と小繰船（おぐりぶね）の運航を管理・指示する「<strong>船の役所</strong>」
                </p>
                <p>
                     ● 船頭や乗組員の手配、運賃の支払いなども行っていました。
                </p>
            </div>

            <figure class="image-wrapper">
                <img src="img/pwp5_13.jpg" alt="黒沢尻御開所御定目">
                
                <figcaption>
                    黒沢尻御艜所 御定目（おひらたどころ おさだめ） 安永7年（1778）<br>
                    岩手県立図書館蔵
                </figcaption>
                <p style="font-size: 1.0em; margin-top: 10px; text-align: left;">
                    これは「御艜所」の運営ルールブック（<strong>御定目</strong>）です。舟運が藩によって厳しく管理されていたことがわかります。
                </p>
            </figure>
            </main>
        
        <footer class="textbook-footer">
            <a href="jh-p04_13.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 14 -</span> <a href="jh-p04_15.php" class="page-nav-button">次のページへ →</a> </footer>
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