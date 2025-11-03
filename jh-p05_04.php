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
        .text-column p {
            font-size: 1.1em;
            line-height: 1.8;
        }

        /* 画像とキャプションをグループ化 */
        .image-wrapper {
            margin: 10px 0; /* 上下の余白 */
            width: 100%; /* カラム幅いっぱいに */
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
        
        /* 2カラムのバランス調整 */
        .content-row {
            align-items: flex-start;
        }
        .text-column {
            flex: 1.2; /* テキスト側を広めに */
        }
        .map-column {
            flex: 0.8; /* 画像側を狭めに */
        }
        /* ▲▲▲ CSSここまで ▲▲▲ */
    </style>
</head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>４．川と生きる人々</h1>
            
            <div class="content-row">
                <div class="text-column">
                    <p style="font-weight: bold;">
                        ● あちこちに存在する浅瀬や渦巻、堆積する土砂
                    </p>
                    <br>
                    <p>
                        舟運は、船を引く労働だけでなく、川そのものにも危険が潜んでいました。
                    </p>
                    <p>
                        場所によっては川が浅くなっていたり（<strong>浅瀬</strong>）、渦を巻いていたりしました。また、大雨が降ると上流から土砂が運ばれて川底に<strong>堆積（たいせき）</strong>し、船が通れなくなってしまうこともありました。
                    </p>
                    <p>
                        そのため、船頭たちは常に川の様子に注意を払い、航路を維持する苦労がありました。
                    </p>
                </div>

                <div class="map-column">
                    
                    <figure class="image-wrapper">
                        <img src="img/pwp6_7.jpg" alt="現在の北上川">
                        <figcaption>
                            現在の北上川（展勝地周辺）
                        </figcaption>
                    </figure>

                    <figure class="image-wrapper" style="margin-top: 20px;">
                        <img src="img/pwp6_6.jpg" alt="北上川開之航路図">
                        <figcaption>
                            北上川開之航路図<br>
                            （岩手県立図書館蔵）<br>
                            川の浅瀬や難所が描かれている
                        </figcaption>
                    </figure>
                    </div>
            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p05_03.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 4 -</span>
            <a href="jh-p06.php" class="page-nav-button">次のページへ →</a> 
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