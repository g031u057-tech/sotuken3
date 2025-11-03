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
        .content-body p strong,
        .spec-item h3 strong,
        .spec-item p strong {
            color: #005a9c;
            font-weight: 600;
        }

        /* 本文のフォントサイズ調整 */
        .text-section p {
            font-size: 1.1em;
            line-height: 1.8;
        }
        /* ▲▲▲ CSSここまで ▲▲▲ */

        /* 2つの仕様を横並びにするためのコンテナ */
        .spec-container {
            display: flex;
            gap: 20px; /* カラム間の隙間 */
            margin-top: 20px;
        }
        /* 各仕様のカラム */
        .spec-item {
            flex: 1; /* 左右のカラム幅を均等に */
            background: #f9f9f9;
            border: 1px solid #ddd;
            padding: 15px 20px;
            border-radius: 5px;
        }
        .spec-item h3 {
            margin-top: 0;
            border-bottom: 2px solid #005a9c;
            padding-bottom: 5px;
        }
        .spec-item p {
            font-size: 1.05em;
            line-height: 1.8;
        }
    </style>
</head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>３．盛岡藩の藩米輸送と黒沢尻川岸</h1>
            
            <div class="text-section">
                <h2>艜船と小繰船</h2>
                <p>
                    両者ともに、船底が平らで細長い。<br>
                    →名称の由来とする説も…<strong>平田船</strong>
                </p>
            </div>

            <div class="spec-container">
                
                <div class="spec-item">
                    <h3>●<strong>艜船（ひらたぶね）</strong></h3>
                    <p>
                        全長　10間半（約19m）<br>
                        横幅　 2間2尺5寸（約4.4m）<br>
                        <strong>350俵積</strong><br>
                        船頭1人、乗組員4人
                    </p>
                </div>

                <div class="spec-item">
                    <h3>●<strong>小繰船（おぐりぶね）</strong></h3>
                    <p>
                        全長　8間半（約15.4m）<br>
                        横幅　約1間半（約2.7m）<br>
                        <strong>100俵積</strong><br>
                        船頭1人、乗組員3人
                    </p>
                    </div>

            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p04_04.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 5 -</span> <a href="jh-p04_06.php" class="page-nav-button">次のページへ →</a> </footer>
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