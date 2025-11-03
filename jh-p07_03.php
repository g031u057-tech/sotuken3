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
            font-size: 1.05em; /* 説明文が多いため少し小さく */
            line-height: 1.8;
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
        
        /* 説明用の枠 */
        .explanation-box {
            background: #f4f4f4;
            border: 1px solid #ddd;
            padding: 15px 20px;
            margin-top: 10px;
            border-radius: 5px;
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
                    <h2>流域間のつながりに対する見解（これまでの見方）</h2>
                    
                    <div class="explanation-box">
                        <p>
                            ● <strong>北上川舟運</strong><br>
                            ・石巻湊の移入品は仙台城下の特権商人仲間「<strong>六仲間</strong>」の荷物。「六仲間」の手を経て領内各地に配給。<br>
                            ・「六仲間」は藩の強力な統制下にあった。<br>
                            → <strong>河口・石巻湊と流域間の経済的なつながりは稀薄。</strong><br>
                            ・盛岡藩商人の仕入荷物は、石巻商人が荷問屋的機能をもって仕入れた荷物ではない。<br>
                            → <strong>石巻湊からみた場合、流域社会は形成されなかった。</strong>
                        </p>
                    </div>

                </div>

                <div class="map-column">
                    <figure class="image-wrapper" style="width: 80%; margin: 10px auto;">
                        <img src="img/pwp3_2.jpg" alt="舟運図">
                        <figcaption>
                            北上川は盛岡藩と仙台藩（伊達藩）をまたがって流れていた
                        </figcaption>
                    </figure>
                    </div>
            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p07_02.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 3 -</span> <a href="jh-p07_04.php" class="page-nav-button">次のページへ →</a>
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