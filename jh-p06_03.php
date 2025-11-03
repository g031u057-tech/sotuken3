<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>５．古文書でみる諸相 - 学習支援システム</title>
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

        /* 画像とキャプションをグループ化 (基本) */
        .image-wrapper {
            margin: 0;
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

        /* 画像を横並びにするためのコンテナ */
        .image-flex-container {
            display: flex;
            gap: 15px; /* 画像の間のスペース */
            align-items: flex-start; /* 画像の上端を揃える */
            justify-content: center; /* コンテナの中身を中央揃えにします */
            margin-top: 25px; /* テキストとの余白 */
        }
        
        /* 横並びにする各画像の"いれもの" */
        .image-flex-container .image-wrapper {
            width: 32%; /* 3枚横並び */
            margin: 0; 
            min-width: 0; 
        }
        /* ▲▲▲ CSSここまで ▲▲▲ */
    </style>
</head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>５．古文書でみる諸相</h1>
            
            <div class="text-section" style="text-align: center;">
                <h2>井内石（いないいし）</h2>
                <p>
                    北上川舟運では、米だけでなく様々な物資が運ばれました。その一つが、石巻周辺（仙台藩領）で採掘される「<strong>井内石</strong>」（稲井石、仙台石とも呼ばれます）です。
                </p>
            </div>

            <div class="image-flex-container">
                <figure class="image-wrapper">
                    <img src="img/pwp7_5.jpg" alt="井内石（稲井石、仙台石とも）">
                    <figcaption>
                        井内石で作られた石碑
                    </figcaption>
                </figure>

                <figure class="image-wrapper">
                    <img src="img/pwp7_6.jpg" alt="井内石 接写1">
                    <figcaption>
                        井内石（接写）
                    </figcaption>
                </figure>
                
                <figure class="image-wrapper">
                    <img src="img/pwp7_7.jpg" alt="井内石 接写2">
                    <figcaption>
                        船着場の石材（復元模型の一部）
                    </figcaption>
                </figure>
            </div>
            </main>
        
        <footer class="textbook-footer">
            <a href="jh-p06_02.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 3 -</span> 
            <a href="jh-p07.php" class="page-nav-button">次のページへ →</a>
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