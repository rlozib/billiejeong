<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP class</title>

    <!-- SEO -->
    <meta name="author" content="billiejeong" />
    <meta name="description" content="PHP 포트폴리오 사이트입니다." />
    <meta name="keywords" content="PHP, 포트폴리오, 웹표준, 웹접근성, 사이트만들기, 포트폴리오, 웹스토리보이" />
    <meta name="robots" content="all" />

    <!-- 아이콘 -->
    <link rel="icon" href="img/icon_256.png" />
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="icon" type="image/png" sizes="256x256" href="../assets/img/icon_256.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/img/icon_192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/icon_32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/icon_16.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>
    <div id="skip">
        <a href="#main">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->
    <header id="header">
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->
    <main id="main">
        <section id="mainContent" class="gray">
            <h2 class="ir_so">메인 컨텐츠</h2>
            
            <article class="content-article">
                <div class="member-form">
                    <h3>문의하기</h3>
                    <p>메일이 잘 전송되었습니다. 조만간 연락드리겠습니다.</p>
                </div>
            </article>
        </section>
    </main>
    <!-- //main -->
    <footer id="footer">
        <?php
            include "../include/footer.php";
        ?>
    </footer>
    <!-- //footer -->
</body>
</html>