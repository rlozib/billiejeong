<?php
    include "../connect/connect.php";
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
        <h1><a href="main.html">php <em>class</em></a></h1>
        <nav>
            <h2 class="ir_so">메인 메뉴</h2>
            <ul>
                <li><a href="comment.html">댓글</a></li>
                <li><a href="join.html">회원가입</a></li>
                <li><a href="login.html">로그인</a></li>
                <li><a href="board.html">게시판</a></li>
                <li><a href="contact.html">문의하기</a></li>
            </ul>
        </nav>
        <div class="member">
            <strong class="ir_so">회원 정보 영역</strong>
            <a href="login.html">로그인</a>
            <a href="join.html">회원가입</a>
        </div>
    </header>
    <!-- //header -->

    <main id="main">
        <section id="mainContent">
            <h2 class="ir_so">메인 컨텐츠</h2>

            <article class="content-article">
                <h3>문의하기</h3>
                <p>스터디, 강의에 대한 궁금한 사항은 언제든지 문의주세요!</p>
                <section class="section-contact">
                    <h4 class="ir_so">문의하기 컨텐츠 작성</h4>
                    <div class="contact">
                        <form action="contactSave.php" name="contact" method="post">
                            <fieldset>
                                <legend class="ir_so">문의하기 작성 영역입니다.</legend>  
                                <div>
                                    <label for="contactFrom">FROM</label>
                                    <input type="text" name="contactFrom" id="contactFrom" class="title-text" placeholder="메일 주소를 입력해주세요!" >
                                </div>
                                <div>
                                    <label for="contactTo">TO</label>
                                    <input type="text" name="contactTo" id="contactTo" class="title-text" value="wjddmswl3712@naver.com" disabled>
                                </div>
                                <div>
                                    <label for="contactSubject">SUBJECT</label>
                                    <input type="text" name="contactSubject" id="contactSubject" class="title-text" placeholder="제목을 입력해주세요!" >
                                </div>
                                <div>
                                    <label for="contactContent">CONTENT</label>
                                    <textarea name="contactContent" id="contactContent" rows="13" placeholder="자세하고 구체적인 내용을 적어주세요!"></textarea>
                                </div>
                            </fieldset>
                            <button class="btn" type="submit" value="보내기">보내기</button>
                        </form>
                    </div>
                </section>
            </article>
        </section>
    </main>
    <!-- //main -->

    <footer id="footer">
        <div class="container">
            <section class="section_service">
                <h2 class="ir_so">바로가기 링크</h2>
                <div class="service">
                    <strong>페이지</strong>
                    <ul>
                        <li><a href="../pages/main.php">main.php</a></li>
                        <li><a href="../comment/comment.php">comment.php</a></li>
                        <li><a href="../contact/contact.php">contact.php</a></li>
                    </ul>
                </div>
                <div class="service">
                    <strong>로그인</strong>
                    <ul>
                        <li><a href="../login/join.php">join.php</a></li>
                        <li><a href="../login/joinSave.php">joinSave.php</a></li>
                        <li><a href="../login/login.php">login.php</a></li>
                    </ul>
                </div>
                <div class="service">
                    <strong>게시판</strong>
                    <ul>
                        <li><a href="../board/board.php">board.php</a></li>
                        <li><a href="../board/boardView.php">boardView.php</a></li>
                        <li><a href="../board/boardWrite.php">boardWrite.php</a></li>
                        <li><a href="../board/boardModify.php">boardModify.php</a></li>
                        <li><a href="../board/boardSearch.php">boardSearch.php</a></li>
                    </ul>
                </div>
                <div class="service">
                    <strong>SNS</strong>
                    <ul>
                        <li><a href="#">인플러언서</a></li>
                        <li><a href="#">인스타그램</a></li>
                        <li><a href="#">트위터</a></li>
                        <li><a href="#">페이스북</a></li>
                        <li><a href="#">블로그</a></li>
                    </ul>
                </div>
                <div class="service">
                    <strong>연락처</strong>
                    <ul>
                        <li><a href="#">연락하기</a></li>
                        <li><a href="#">스터디 신청</a></li>
                        <li><a href="#">국비 신청</a></li>
                        <li><a href="#">방명록</a></li>
                    </ul>
                </div>
            </section>
            <section class="section_info">
                <h2 class="ir_so">서비스 이용정도</h2>
                <address>&copy;billiejeong. All rights reserved.</address>
            </section>
        </div>
        <a href="#" class="link_top">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="ico_top">
                <g fill="none" fill-rule="evenodd">
                    <circle cx="25" cy="25" r="25" fill="black"></circle> 
                    <path stroke-width="1.5" class="stroke" stroke="white" d="M8.467 16.933L0 8.467 8.467 0M.085 8.467L19.918 8.534" transform="rotate(90 9.5 24)"></path>
                </g>
            </svg>
        </a>
    </footer>
    <!-- //footer -->
</body>
</html>