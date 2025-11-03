<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>２．北上川舟運の始まり - 学習支援システム</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'jh-menu.php'; ?>

    <div class="content-page-container with-fixed-menu">
        <main class="content-body">
            <h1>２．北上川舟運の始まり</h1>
            <div class="content-row">
                <div class="text-column">
                    <h3>石巻湊と河口の整備</h3>
                    <p>
                        北上川舟運の発展には、仙台藩によるインフラ整備が欠かせませんでした。 より安全に米を輸送するため、河口周辺の工事が行われました。 また、新田開発によって北上川流域が豊かな穀倉地帯となったことも、舟運が盛んになる大きな理由でした。
                    </p>
                </div>
                <div class="map-column">
                     <img src="img/kawamura_magobee.jpg" alt="川村孫兵衛" style="width: 100%; border: 1px solid #ccc;">
                     <figcaption style="text-align: center; font-size: 0.9em;">工事を監督した川村孫兵衛の図</figcaption>
                </div>
            </div>
        </main>
        <footer class="textbook-footer">
            <a href="jh-p02.php" class="page-nav-button">← 前のページへ</a>
            <span class="page-number">- 3 -</span>
            <a href="jh-p03-02.php" class="page-nav-button">次のページへ →</a>
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