<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>はじめに - 学習支援システム</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
        /* 重要語句の強調 */
        .content-body p strong,
        .content-body ul strong {
            color: #005a9c; /* テーマカラー */
            font-weight: 600;
        }
        
        /* 画像とキャプションをグループ化 */
        .image-wrapper {
            margin: 10px 0;
            width: 100%; /* カラム幅に合わせる */
        }
        .image-wrapper img {
            width: 100%; /* 画像をカラム幅に合わせる */
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

        /* 本文のフォントサイズ調整 */
        .text-column p,
        .text-column ul {
            font-size: 1.1em;
            line-height: 1.8;
        }
        
        /* 2カラムのバランス調整 */
        .content-row {
            align-items: flex-start; /* 上端揃え */
        }
        .text-column {
            flex: 1.2; /* テキスト側を少し広めに */
        }
        .map-column {
            flex: 0.8; /* 画像側を少し狭めに */
        }
    </style>
    </head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>はじめに</h1>
            <div class="content-row">
                <div class="text-column">
                    <h3>北上川は東北一の大河</h3>
                    <p>
                        <strong>北上川</strong>は東北で最も大きな川で、その長さは249kmあり、日本全国でも5番目の長さを誇ります。
                    </p>
                    <ul style="list-style-type: none; padding-left: 0;">
                        <li>1位: 信濃川 (367km)</li>
                        <li>2位: 利根川 (322km)</li>
                        <li>3位: 石狩川 (268km)</li>
                        <li>4位: 天塩川 (256km)</li>
                        <li><strong>5位: 北上川 (249km)</strong></li>
                    </ul>
                     <p>
                        この川沿いにあった<strong>黒沢尻川岸</strong>は、<strong>盛岡藩</strong>で最大の<strong>川港</strong>でした。 この教材では、江戸時代の黒沢尻の様子をのぞいてみます。
                    </p>
                </div>
                <div class="map-column">
                    <figure class="image-wrapper">
                        <img src="img/pwp1.jpg" alt="陣ヶ丘から望む北上川">
                        <figcaption>陣ヶ丘（北上市立花）から北上川を望む</figcaption>
                    </figure>
                    </div>
            </div>
        </main>
        <footer class="textbook-footer">
            <span class="page-nav-button" style="opacity: 0.5; pointer-events: none;">← 前のページへ</span>
            <span class="page-number">- 1 -</span>
            <a href="jh-p01_2.php" class="page-nav-button">次のページへ →</a>
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