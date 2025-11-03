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
        .content-body p strong,
        .content-body li strong {
            color: #005a9c;
            font-weight: 600;
        }

        /* 本文のフォントサイズ調整 */
        .text-section p,
        .text-section ul {
            font-size: 1.1em;
            line-height: 1.8;
        }

        /* 画像とキャプションをグループ化 */
        .image-wrapper {
            margin: 20px auto;
            /* ▼▼▼ ご要望に基づき 80% -> 40%（半分）に変更 ▼▼▼ */
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
            
            <figure class="image-wrapper">
                <img src="img/pwp5_6.png" alt="北上川舟運行程図">
                <figcaption>
                    北上川舟運行程図
                </figcaption>
            </figure>
            
            <div class="text-section" style="margin-top: 20px;">
                <p>
                   この図は、盛岡から石巻までの舟運にかかる距離と日数を示しています。
                </p>
                <p>
                    舟運は、盛岡藩と仙台藩の二つの領地（藩境が黒沢尻の南にあった）をまたがる長い旅でした。
                </p>
                <ul>
                   <li><strong>盛岡藩領（盛岡〜黒沢尻）</strong>：距離 約52km</li>
                   <li><strong>仙台藩領（黒沢尻〜石巻）</strong>：距離 約148km</li>
                </ul>
                <p>
                    特に注目したいのは、行き（下航）と帰り（遡航）の日数の違いです。
                </p>
                <ul>
                    <li><strong>黒沢尻 → 石巻（下航・行き）</strong>：川を下るため <strong>3日</strong> </li>
                    <li><strong>石巻 → 黒沢尻（遡航・帰り）</strong>：川を上るため <strong>10日</strong></li>
                </ul>
                <p>
                    川の流れに逆らって上る「<strong>遡航（そこう）</strong>」は、流れの速い場所では岸から綱で船を引くなど、大変な時間と労力が必要でした。
                </p>
            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p04_07.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 8 -</span> <a href="jh-p04_09.php" class="page-nav-button">次のページへ →</a> </footer>
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