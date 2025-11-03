<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>５．古文書でみる諸相 - 学習支援システム</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
        /* 画像を横並びにするためのコンテナ */
        .image-flex-container {
            display: flex;
            gap: 10px; /* 画像の間のスペース */
            align-items: flex-start; /* 画像の上端を揃える */
            justify-content: center; /* コンテナの中身を中央揃えにします */
            margin-top: 20px;
        }
        
        /* 横並びにする各画像の"いれもの" */
        .image-item {
            /* 幅を40%に設定 */
            width: 40%; 
            min-width: 0; 
        }

        /* "いれもの"の中の画像 */
        .image-item img {
            width: 100%; /* "いれもの" の幅いっぱいに広げる */
            height: auto; 
            border: 1px solid #ccc;
        }
    </style>
    </head>
<body>
    
    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>５．古文書でみる諸相</h1>
            
            <div class="image-flex-container">
                
                <div class="image-item">
                    <img src="img/pwp7_6.jpg" alt="井内石 接写1">
                    <figcaption style="text-align: center; font-size: 0.9em;">
                        井内石（接写）
                    </figcaption>
                </div>
                
                <div class="image-item">
                    <img src="img/pwp7_7.jpg" alt="井内石 接写2">
                    <figcaption style="text-align: center; font-size: 0.9em;">
                        （復元模型の一部）
                    </figcaption>
                </div>

            </div>

        </main>
        
        <footer class="textbook-footer">
            <a href="jh-p06_03.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 4 -</span> <a href="jh-p07.php" class="page-nav-button">次のページへ →</a> </footer>
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