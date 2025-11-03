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
        .explanation-box p,
        .explanation-box ul {
            font-size: 1.0em; /* ボックス内は少しフォントを小さく */
            line-height: 1.8;
            margin: 10px 0;
        }
        
        /* 結論用のボックス (色分け) */
        .conclusion-box {
            background: #e6f3ff;
            border: 1px solid #b3d7ff;
            border-left: 5px solid #005a9c;
            padding: 15px 20px;
            margin-top: 20px;
            border-radius: 5px;
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
                <h2>盛岡藩商人の商荷物の流通から ３・４</h2>
                <p>
                    ● 幕末　慶応元年（1865）
                </p>

                <div class="explanation-box">
                    <p>
                        ・石巻湊の<strong>田倉儀兵衛</strong>が海上運賃と倉庫保管料の値上げを通知。
                    </p>
                    <p>
                        ・通知先は、黒沢尻河岸の<ruby>河岸問屋<rt>かしどんや</rt></ruby>２名
                    </p>
                    <p>
                        ・→これを受け、<ruby>河岸問屋<rt>かしどんや</rt></ruby>２名が盛岡藩領内の「<strong><ruby>仕入御店衆中<rt>しいれおたなしゅうちゅう</rt></ruby></strong>」（慶応2年の文書では「<strong><ruby>積合仲間<rt>つみあいなかま</rt></ruby></strong>」）に周知している。
                    </p>
                    <p>
                        ・「<ruby>仕入御店衆中<rt>しいれおたなしゅうちゅう</rt></ruby>」は、黒沢尻2名、花巻3名、郡山4名、盛岡27名、<strong>計36名</strong>。
                    </p>
                    <p style="font-weight: bold; color: #b00;">
                        → 特権商人仲間による一元化された荷物ではない。
                    </p>
                </div>

                <div class="conclusion-box">
                    <p style="font-size: 1.1em; font-weight: bold; text-align: center; margin-top: 0;">
                        【このことから分かること】
                    </p>
                    <ul>
                        <li>黒沢尻河岸の<ruby>河岸問屋<rt>かしどんや</rt></ruby>のもとへ石巻湊および海上輸送の情報がいち早く伝達。</li>
                        <li>黒沢尻河岸の<ruby>河岸問屋<rt>かしどんや</rt></ruby>は、その情報を流域の仲間に伝達する役割を担っていた。</li>
                        <li>石巻・盛岡間の「<ruby>積合仲間<rt>つみあいなかま</rt></ruby>」荷物の川船差配は黒沢尻河岸の<ruby>河岸問屋<rt>かしどんや</rt></ruby>が<strong>一元的に担っていた</strong>可能性が高い。</li>
                    </ul>
                </div>

            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p07_05.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 6 -</span> <a href="jh-p07_07.php" class="page-nav-button">次のページへ →</a>
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