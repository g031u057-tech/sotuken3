<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>１．江戸時代の水運 - 学習支援システム</title>
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
        /* ▲▲▲ CSSここまで ▲▲▲ */

        /* 画像を横並びにするためのコンテナ */
        .image-flex-container {
            display: flex;
            gap: 15px; /* 画像の間のスペース */
            align-items: flex-start; /* 画像の上端を揃える */
            justify-content: center; /* コンテナの中身を中央揃えにします */
        }
        
        /* ▼▼▼ この image-wrapper の width を 45% から 25% に変更 ▼▼▼ */
        /* 横並びにする各画像の"いれもの" (figureタグ) */
        .image-flex-container .image-wrapper {
            /* ご要望の「今の半分のサイズ」に合わせて 45% -> 25% に縮小
             <figure>タグで囲んでいるため、キャプションはズレません
            */
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
            <h1>１．江戸時代の水運（東日本）</h1>
            
            <div class="image-flex-container" style="margin-top: 20px;">
                
                <figure class="image-wrapper">
                    <img src="img/pwp3.jpg" alt="江戸時代の水運（東日本）">
                    <figcaption>東日本の航路図 </figcaption>
                </figure>
                
                <figure class="image-wrapper">
                    <img src="img/pwp3_2.jpg" alt="東北地方の拡大図">
                    <figcaption>東北地方の拡大図</figcaption>
                </figure>

            </div>
            
            <div class="text-section" style="margin-top: 25px;">
                <p>
                   江戸時代、全国の物流は「<strong>西廻り航路</strong>」と「<strong>東廻り航路</strong>」の海のルートによって結ばれていました。
                </p>
                <p>
                   東北地方の港で集められた<strong>年貢米</strong>などの産物は、これらの航路を通り、江戸や大坂といった大消費地へ運ばれていきました。<strong>北上川舟運</strong>は、この全国的な物流ネットワークにつながる重要な「川の道」だったのです。
                </p>
            </div>
            
        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p02.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 2 -</span>
            <a href="jh-p03.php" class="page-nav-button">次のページへ →</a>
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