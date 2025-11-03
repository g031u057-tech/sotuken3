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
        .image-item p {
            font-size: 1.05em;
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
            gap: 25px; /* 画像の間のスペース */
            align-items: flex-start; /* 画像の上端を揃える */
            justify-content: center; /* コンテナの中身を中央揃えにします */
            margin-top: 20px;
        }
        
        /* ▼▼▼ 画像サイズを 45% -> 25%（半分）に変更 ▼▼▼ */
        .image-item {
            width: 25%; 
            min-width: 0; 
        }
        /* ▲▲▲ 変更ここまで ▲▲▲ */

    </style>
    </head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>３．盛岡藩の藩米輸送と黒沢尻川岸</h1>
            
            <div class="image-flex-container">
                
                <div class="image-item">
                    <figure class="image-wrapper"> 
                        <img src="img/pwp5_8.jpg" alt="りくつ炉">
                        <figcaption>
                           りくつ炉<br>北上市立博物館に展示中
                        </figcaption>
                    </figure>
                </div>
                
                <div class="image-item">
                    <figure class="image-wrapper">
                        <img src="img/pwp5_7.jpg" alt="為御登穀川通手形">
                        <figcaption>
                            文化3年（1806）為御登穀川通手形<br>北上市立中央図書館所蔵
                        </figcaption>
                    </figure>
                    <p style="font-size: 1.0em; margin-top: 10px;">
                        「<strong>川通手形（かわどおりてがた）</strong>」は、盛岡藩の年貢米（御登穀）を運ぶ船であることを証明する「通行許可証」です。これを持っていないと、藩境の番所などを通過できませんでした。
                    </p>
                </div>

            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p04_08.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 9 -</span> <a href="jh-p04_10.php" class="page-nav-button">次のページへ →</a> </footer>
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