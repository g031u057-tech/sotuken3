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

        /* 画像とキャプションをグループ化 */
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
        .image-wrapper figcaption { /* 個別のキャプション */
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

        /* 横並びコンテナ内の画像ラッパー */
        .image-flex-container .image-wrapper {
            width: 32%; /* 3枚横並び */
            min-width: 0;
        }
        
        /* 横並びコンテナ全体の説明文 */
        .image-flex-caption {
            text-align: center;
            font-size: 0.9em;
            color: #555;
            margin-top: 10px;
        }
        /* ▲▲▲ CSSここまで ▲▲▲ */
    </style>
</head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>５．古文書でみる諸相</h1>
            
            <div class="text-section" style="margin-top: 15px;">
                <h2 style="text-align: center; margin-top: 0;">舟運の危険を伝える墓碑</h2>
                <p>
                    前の単元で見たように、舟運は常に危険と隣り合わせでした。
                </p>
                <p>
                    これらの写真は、日形村（ひかたむら）の北上川と「<strong>清五郎の墓碑</strong>」です。
                </p>
                <p>
                    この墓碑は水難事故の慰霊や、将来の安全を願って建てられたものとされています。当時の人々の川への祈りや恐れを今に伝えています。
                </p>
            </div>

            <div class="image-flex-container">
                <figure class="image-wrapper">
                    <img src="img/pwp7_4.jpg" alt="日形村の北上川">
                </figure>
                <figure class="image-wrapper">
                    <img src="img/pwp7_3.jpg" alt="清五郎の墓碑（広角）">
                </figure>
                <figure class="image-wrapper">
                    <img src="img/pwp7_2.jpg" alt="清五郎の墓碑（接写）">
                </figure>
            </div>
            
            <figcaption class="image-flex-caption">
                清五郎の墓碑と日形村の北上川
            </figcaption>
            </main>
        
        <footer class="textbook-footer">
            <a href="jh-p06.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 2 -</span> <a href="jh-p06_03.php" class="page-nav-button">次のページへ →</a> </footer>
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