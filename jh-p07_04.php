<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>６．近年の研究 - 学習支援システム</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
        /* ▼▼▼ UI改善のためのCSSを追加 ▼▼▼ */
        /* 重要語句の強調 */
        .content-body p strong,
        .content-body li strong {
            color: #005a9c;
            font-weight: 600;
        }

        /* 本文のフォントサイズ調整 */
        .text-section p,
        .text-section ul {
            font-size: 1.1em;
            line-height: 1.8;
        }

        /* 問いかけのボックス */
        .question-box {
            font-size: 1.1em; 
            font-weight: bold; 
            text-align: center; 
            margin-top: 25px; 
            background: #eef; 
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #cce;
        }
        /* ▲▲▲ CSSここまで ▲▲▲ */
        
        /* 説明リストのスタイル */
        .explanation-list {
            list-style-type: none; /* 黒丸を消す */
            padding-left: 0;
            line-height: 1.8;
            margin-top: 25px; /* hrとの余白 */
        }
        .explanation-list li {
            padding: 12px 15px;
            background: #f9f9f9;
            border: 1px solid #eee; /* 枠線に変更 */
            border-radius: 4px; /* 角丸 */
            margin-bottom: 8px;
        }
    </style>
</head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>６．近年の研究</h1>
            
            <div class="text-section">
                <h2>近年の研究 ―新しい視点―</h2>
                <p style="margin-top: 15px;">
                    ● 米以外の物資や流域の文化などに着目した取り組み。
                </p>
                
                <div class="question-box">
                    【？】
                    黒沢尻河岸の<ruby>河岸問屋<rt>かしどんや</rt></ruby>の記録に着目して、<br>
                    盛岡藩商人の「<ruby>商荷物</ruby>（商品）」の流通をみた場合、<br>
                    流域間のつながりは稀薄だったといえるのだろうか？
                </div>
                <hr style="margin-top: 30px;">

                <h2 style="margin-top: 25px;">盛岡藩商人の商荷物の流通から １</h2>
                <ul class="explanation-list">
                    <li>
                        <strong>● 黒沢尻河岸の２軒の<ruby>河岸問屋<rt>かしどんや</rt></ruby></strong><br>
                        ・八重樫助九郎、阿部嘉兵衛
                    </li>
                    <li>
                        <strong>● <ruby>河岸問屋<rt>かしどんや</rt></ruby>の主な業務</strong><br>
                        ・荷物輸送にかかる手配。<br>
                        ・荷物を一時的に預かる倉庫業。<br>
                        ・他領移出入荷物の輸送許可申請。
                    </li>
                    <li>
                        <strong>● <ruby>河岸問屋<rt>かしどんや</rt></ruby>が扱っている移入荷物</strong><br>
                        ・古着、薬種、茶、砂糖など。
                    </li>
                </ul>
                </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p07_03.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 4 -</span> <a href="jh-p07_05.php" class="page-nav-button">次のページへ →</a>
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