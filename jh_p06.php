<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>５．古文書でみる諸相 - 学習支援システム</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
        /* 画像とキャプションをまとめる "いれもの" のスタイル */
        .image-wrapper {
            /* 右カラムの幅の80%を使い、中央に配置 */
            width: 80%; 
            margin-left: auto;
            margin-right: auto;
        }
        .image-wrapper img {
            width: 100%; 
            height: auto;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>５．古文書でみる諸相</h1>
            
            <div class="content-row">
                <div class="text-column">
                    <h2>● 18世紀半ば以降（江戸中期以降）</h2>
                    <p style="font-size: 1.1em; margin-top: 20px;">
                        盛岡藩の藩有船
                    </p>
                    <ul style="font-size: 1.1em; list-style-type: '·'; padding-left: 2em;">
                        <li>開船 55艘</li>
                        <li>小繰船 39艘</li>
                    </ul>
                </div>

                <div class="map-column">
                    <div class="image-wrapper">
                        <img src="img/pwp7.jpg" alt="本町検断沢藤家文書">
                        <figcaption style="text-align: center; font-size: 0.9em;">
                            本町検断沢藤家文書<br>北上市立中央図書館蔵
                        </figcaption>
                    </div>
                </div>
            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p05_04.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 1 -</span> <a href="jh-p06_02.php" class="page-nav-button">次のページへ →</a> </footer>
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