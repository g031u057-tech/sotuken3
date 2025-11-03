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
            /* ▼▼▼ 縦長の画像のため 80% -> 40% に変更 ▼▼▼ */
            width: 40%;
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
                <h2><strong>艜船</strong>と<strong>小繰船</strong>はいつも就航していたのか？</h2>
                <p>
                    基本的には<br>
                    <strong>①雪解け水が出る頃～夏の渇水期前</strong><br>
                    <strong>②秋～雪が降る前</strong>
                </p>
            </div>

            <figure class="image-wrapper">
                <img src="img/pwp5_5.jpg" alt="春の北上川">
            </figure>
            </main>
        
        <footer class="textbook-footer">
            <a href="jh-p04_06.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 7 -</span> <a href="jh-p04_08.php" class="page-nav-button">次のページへ →</a> </footer>
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