<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>４．川と生きる人々 - 学習支援システム</title>
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
            /* ▼▼▼ 画像サイズを 40% -> 50% に変更 ▼▼▼ */
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
            <h1>４．川と生きる人々</h1>
            
            <figure class="image-wrapper">
                <img src="img/pwp6_3.jpg" alt="船絵馬">
                <figcaption>
                    鬼柳八幡神社蔵 船絵馬 文政9年（1826） 北上市指定文化財
                </figcaption>
            </figure>
            <div class="text-section" style="margin-top: 20px;">
                <p>
                    これは、現在の北上市鬼柳町にある鬼柳八幡神社に奉納された「<strong>船絵馬（ふなえま）</strong>」です。
                </p>
                <p>
                    舟運が危険な仕事であったため、船頭や商人たちは、無事に航海を終えられたことへの感謝や、これからの安全を願って、このような絵馬を神社に奉納しました。当時の船の様子が描かれており、貴重な資料となっています。
                </p>
            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p05.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 2 -</span> <a href="jh-p05_03.php" class="page-nav-button">次のページへ →</a> </footer>
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