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
            margin: 20px auto; /* 上下余白 + autoで中央揃え */
            width: 60%; /* 画像サイズを調整 */
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
                <img src="img/pwp5_3.jpg" alt="復元した「天神丸」（開船）">
                <figcaption>
                    復元した「天神丸」（艜船）　昭和62年（1987）　撮影　佐々木享二氏
                </figcaption>
            </figure>
            <div class="text-section" style="margin-top: 20px;">
                <p>
                    この船は、黒沢尻から石巻までの米の輸送に使われた大型船「<strong>艜船（ひらたぶね）</strong>」を復元した「天神丸」です。
                </p>
                <p>
                  艜船は船底が平らで細長い形をしており、一度に <strong>350俵</strong> もの米俵を積むことができたといわれています。
                </p>
            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p04_03.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 4 -</span> <a href="jh-p04_05.php" class="page-nav-button">次のページへ →</a> </footer>
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