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
        .text-section ul {
            list-style-type: '・'; 
            padding-left: 2em;
        }

        /* 説明用の枠 */
        .explanation-box {
            background: #f4f4f4;
            border: 1px solid #ddd;
            padding: 15px 20px;
            margin-top: 15px;
            border-radius: 5px;
        }
        
        /* 結論用の枠 */
        .conclusion-box {
            background: #fff8e1;
            border: 2px solid #ffc107;
            padding: 20px;
            margin-top: 25px;
            border-radius: 5px;
            font-size: 1.15em;
            font-weight: bold;
            line-height: 1.8;
            text-align: center;
        }
        /* ▲▲▲ CSSここまで ▲▲▲ */
    </style>
</head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>６．近年の研究</h1>
            
            <div class="text-section">
                <h2>盛岡藩商人の商荷物の流通から ５</h2>
                
                <h3 style="font-size: 1.3em; text-align: center; border-bottom: 2px solid #005a9c; padding-bottom: 5px; margin-top: 20px;">
                    ● まとめ
                </h3>

                <div class="explanation-box" style="line-height: 1.8;">
                    <ul>
                        <li>
                            盛岡藩では、少なくても江戸時代中期には<strong><ruby>領主<rt>りょうしゅ</rt></ruby>統制によらない流通ネットワーク</strong>がみられる。
                        </li>
                        <li style="margin-top: 15px;">
                            幕末における盛岡藩の北上川流域では、<strong>商荷物に関する流域商人間の連携</strong>を意図的に強くもち、潤滑かつ合理的な供給を行っていたとみられる。
                        </li>
                    </ul>
                </div>

                <div class="conclusion-box">
                    <p style="margin: 0;">
                        → 盛岡藩領においては、<br>
                        経済的なつながりや流域としてのまとまりは<br>
                        <span style="color: #b00; font-size: 1.2em;">稀薄だったとはいえない</span>のでは？
                    </p>
                </div>
                
                <p style="font-size: 1.0em; text-align: center; margin-top: 25px;">
                    （このように、藩の記録だけでなく商人の記録に着目することで、<br>
                    これまでの見方とは異なる歴史の側面が見えてきました。）
                </p>

            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p07_06.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 7 -</span> <a href="jh-p08.php" class="page-nav-button">まとめへ →</a>
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