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
        .text-section p {
            font-size: 1.1em;
            line-height: 1.8;
        }
        /* ▲▲▲ CSSここまで ▲▲▲ */


        /* 説明リストのスタイル */
        .explanation-list {
            list-style-type: none; /* 黒丸を消す */
            padding-left: 0;
            font-size: 1.1em;
            line-height: 1.8;
            margin-top: 20px; /* リストの上に余白 */
        }
        .explanation-list li {
            padding: 12px 15px;
            background: #f9f9f9;
            border: 1px solid #eee;
            border-radius: 4px; /* 角を丸める */
            margin-bottom: 8px; /* 各項目の間隔 */
        }
    </style>
</head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>３．盛岡藩の藩米輸送と黒沢尻川岸</h1>
            
            <div class="text-section">
                <h2>艜船と小繰船の運航体制は？</h2>
                <p>
                    17世紀後半からは、<strong>公設民営的な体制</strong>でした（幕末まで）。
                </p>

                <ul class="explanation-list">
                    <li>① 川船（小繰船、艜船）は<strong>藩の所有</strong></li>
                    <li>② 管理·補修までを含め、<strong>商人等が川船を預かる</strong></li>
                    <li>③ その船を民間の<strong>船頭</strong>や<strong>水主</strong>（乗組員）が操縦</li>
                    <li>④ 輸送運賃を藩が支払う</li>
                </ul>
            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p04_09.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 10 -</span> <a href="jh-p04_11.php" class="page-nav-button">次のページへ →</a> </footer>
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