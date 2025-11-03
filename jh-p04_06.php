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
            /* ▼▼▼ 画像サイズを 80% -> 50% に変更 ▼▼▼ */
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
            
            <figure class="image-wrapper">
                <img src="img/pwp5_4.jpg" alt="盛岡藩の開船の構造図">
                <figcaption>
                    盛岡藩の艜船（ひらたぶね）
                </figcaption>
            </figure>
            <div class="text-section" style="margin-top: 20px; text-align: center;">
                <h2 style="font-size: 1.2em;">合計 <strong>350俵</strong> の積載量</h2>
                <p>
                    この図は、艜船の船内を区切った「ま」と、そこ
                    に積める米俵の数を示しています。
                </p>
           </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p04_05.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 6 -</span> <a href="jh-p04_07.php" class="page-nav-button">次のページへ →</a> </footer>
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