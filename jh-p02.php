<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>１．江戸時代の水運 - 学習支援システム</title>
    <link rel="stylesheet" href="style.css">

    <style>
        /* 重要語句の強調 */
        .content-body p strong {
            color: #005a9c;
            font-weight: 600;
        }
        
        /* 画像とキャプションをグループ化 */
        .image-wrapper {
            margin: 10px 0;
            width: 100%;
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

        /* 本文のフォントサイズ調整 */
        .text-column p {
            font-size: 1.1em;
            line-height: 1.8;
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
    </style>
    </head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>１．江戸時代の水運</h1>
            <div class="content-row">
                <div class="text-column">
                    <h3>物流の中心は「水運」</h3>
                    <p>
                        江戸時代、政治は<strong>幕藩体制</strong>で行われ、税の中心は<strong>年貢米</strong>でした。 各藩は、集めたお米を江戸などの大消費地へ運んでお金に換えることが、財政の基本でした。 そのため、重いお米を一度に大量に運べる船を使った「<strong>水運</strong>」が、物流の中心だったのです。
                    </p>
                    <p>
                        ●江戸時代の政治…幕藩体制
                    </p>
                    <p>
                        ●税の中心はお米（年貢米）
                    </p>
                    <p>
                        ●集めたお米を大消費地に輸送·換金（藩財政の基本）
                    </p>
                </div>
                <div class="map-column">
                    <figure class="image-wrapper">
                        <img src="img/pwp2.jpg" alt="北上川を行く調査船">
                        <figcaption>北上川</figcaption>
                    </figure>
                    </div>
            </div>
        </main>
        <footer class="textbook-footer">
            <a href="jh-p01_2.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 1 -</span>
            <a href="jh-p02_2.php" class="page-nav-button">次のページへ →</a>
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