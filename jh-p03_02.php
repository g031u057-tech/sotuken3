<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>２．北上川舟運の始まり - 学習支援システム</title>
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
            font-size: 1.1em;
            line-height: 1.8;
        }

        /* 画像とキャプションをグループ化 */
        .image-wrapper {
            margin: 10px 0;
            width: 100%; /* コンテナ幅に合わせる */
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

        /* 画像を横並びにするためのコンテナ */
        .image-flex-container {
            display: flex;
            gap: 15px; /* 画像の間のスペース */
            align-items: flex-start; /* 画像の上端を揃える */
            justify-content: center; /* コンテナの中身を中央揃えにします */
        }
        
        /* 横並びにする各画像の"いれもの" (figureタグ) */
        .image-flex-container .image-wrapper {
            width: 45%; /* 2枚の画像を並べるため幅を調整 */
            min-width: 0; 
        }
    </style>
    </head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>２．北上川舟運の始まり</h1>
            
            <div class="content-row">
                <div class="text-column">
                    <h3>河口周辺の変遷</h3>
                    <p>
                        ●開削工事 元和9年（1623）～寛永3年（1626）
                    </p>
                    <p>
                        この工事により、北上川は<strong>石巻湾</strong>に直接注ぐようになり、安全な舟運が可能になりました。
                    </p>
                </div>

                <div class="map-column">
                    <div class="image-flex-container">
                        
                        <figure class="image-wrapper">
                            <img src="img/pwp4_2.jpg" alt="開削工事前">
                            <figcaption>開削工事前</figcaption>
                        </figure>
                        
                        <figure class="image-wrapper">
                            <img src="img/pwp4_3.jpg" alt="開削工事後">
                            <figcaption>開削工事後</figcaption>
                        </figure>

                    </div>
                    </div>
            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p03.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 2 -</span> <a href="jh-p03_03.php" class="page-nav-button">次のページへ →</a> </footer>
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