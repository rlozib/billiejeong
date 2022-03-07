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
    <title>PHP Class</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/vars.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
    </div>
    <!-- //skip -->

    <header id="header">
        <?php
        include "../include/header.php";
        ?>
    </header>
    <!-- //header -->

    <main id="main">
        <section id="mainContent">
            <h2 class="ir_so">메인 컨텐츠</h2>
            <article class="content-article">
                <!-- <?php
                        echo "<pre>";
                        var_dump($_SESSION);
                        echo "</pre>";
                        ?> -->
                <h3>billie's studying</h3>
                <p>빌리의 공부 흔적</p>
                <section class="section-card">
                    <h4 class="ir_so">카드 컨텐츠</h4>
                    <ul class="card-list">
                        <li>
                            <a href="#">
                                <img src="../assets/img/main1.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>Naver Influencer Center</strong>
                                <span>네이버 인플루언서 센터<br>안내 페이지를 구현</span>
                                <span class="keyword">
                                    <span>#중급</span><span>#무료</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/main2.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>Naver Influencer Center</strong>
                                <span>네이버 인플루언서 센터<br>혜택 페이지를 구현</span>
                                <span class="keyword">
                                    <span>#layout</span><span>#slide</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/main3.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>Naver Whale</strong>
                                <span>네이버 웨일 <br>페이지를 구현</span>
                                <span class="keyword">
                                    <span>#초보</span><span>#whale</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                    </ul>
                </section>
            </article>
            <article class="flow-article">
                <h3 class="ir_so">웹스토리보이 강의 설명</h3>
                <section class="section-intro container">
                    <h4 class="ir_so">강의 소개</h4>
                    <div class="youtube-intro">
                        <div>
                            <iframe src="https://www.youtube.com/embed/oq9WnhZY2aM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div>
                            <h5>Team Project</h5>
                            <p>Team Project를 하기 위해 영상 프로토타입을 촬영하여 공유합니다.
                            </p>
                            <div class="interview">
                                <div class="icon">
                                    <a href="https://www.youtube.com/watch?v=gGlVkOiYRus&list=PL4UVBBIc6giLLag20uIwHlHsG83q3PYa5" target="_blank">
                                        <img src="../assets/img/svg-pizza.svg" alt="정은지">
                                        <span>#eunji</span>
                                    </a>
                                </div>
                                <div class="icon">
                                    <a href="https://www.youtube.com/watch?v=gGlVkOiYRus&list=PL4UVBBIc6giLLag20uIwHlHsG83q3PYa5" target="_blank">
                                        <img src="../assets/img/svg-vanilla-cupcake.svg" alt="빌리정">
                                        <span>#billie</span>
                                    </a>
                                </div>
                                <div class="icon">
                                    <a href="https://www.youtube.com/watch?v=NWHIwQlptgM&list=PL4UVBBIc6giLLag20uIwHlHsG83q3PYa5&index=3" target="_blank">
                                        <img src="../assets/img/svg-pear.svg" alt="웹보이">
                                        <span>#genie</span>
                                    </a>
                                </div>
                                <div class="icon">
                                    <a href="https://www.youtube.com/watch?v=NWHIwQlptgM&list=PL4UVBBIc6giLLag20uIwHlHsG83q3PYa5&index=3" target="_blank">
                                        <img src="../assets/img/svg-cherries.svg" alt="정유진">
                                        <span>#jenny</span>
                                    </a>
                                </div>
                                <div class="icon">
                                    <a href="https://www.youtube.com/watch?v=NWHIwQlptgM&list=PL4UVBBIc6giLLag20uIwHlHsG83q3PYa5&index=3" target="_blank">
                                        <img src="../assets/img/svg-bread-egg.svg" alt="박영순">
                                        <span>#soon</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
            <article class="content-article content-sub">
                <h3>스크립트 이펙트</h3>
                <p>제이쿼리와 자바스크립트로 다양한 이펙트를 구현합니다</p>
                <section class="section-card">
                    <h4 class="ir_so">카드 컨텐츠</h4>
                    <ul class="card-list2">
                        <li>
                            <a href="#">
                                <img src="../assets/img/post01.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>마우스 이펙트 예제입니다.</strong>
                                <span class="keyword">
                                    <span>#초보</span><span>#mysql</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/post02.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>슬라이더 이펙트 예제입니다.</strong>
                                <span class="keyword">
                                    <span>#초보</span><span>#mysql</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/post03.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>메뉴 이펙트 예제입니다.</strong>
                                <span class="keyword">
                                    <span>#학원</span><span>#국비지원</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/post04.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>패럴럭스 이펙트 예제입니다.</strong>
                                <span class="keyword">
                                    <span>#퍼블리셔</span><span>#mysql</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/post02.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>이미지 슬라이더 예제입니다.</strong>
                                <span class="keyword">
                                    <span>#퍼블리셔</span><span>#mysql</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/post01.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>마우스 이펙트 예제입니다.</strong>
                                <span class="keyword">
                                    <span>#퍼블리셔</span><span>#mysql</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/post03.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>메뉴 이펙트 예제입니다.</strong>
                                <span class="keyword">
                                    <span>#퍼블리셔</span><span>#mysql</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/post04.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>패럴럭스 예제입니다.</strong>
                                <span class="keyword">
                                    <span>#퍼블리셔</span><span>#mysql</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                    </ul>
                </section>
            </article>
            <article class="flow-article content-sub">
                <h3>최신 소식</h3>
                <p>최신 소식을 바로 확인 할 수 있습니다.</p>
                <section class="section-news container">
                    <div class="news">
                        <h4>게시판 업데이트</h4>
                        <!-- <ul>
                                <li><a href="#">스크립트 강의 업데이트 예정입니다.</a><span>2021.02.02</span></li>
                                <li><a href="#">유튜브에 강의 업데이트할 예정입니다.</a><span>2021.02.02</span></li>
                                <li><a href="#">스터디 참여에 대해서 자세히 알려드립니다.</a><span>2021.02.02</span></li>
                                <li><a href="#">스터디 강의와 면접 잘 보는 법에 대해서 알려드릴께요~</a><span>2021.02.02</span></li>
                            </ul> -->
                        <?php
                        if (isset($_GET['page'])) {
                            $page = (int) $_GET['page'];
                        } else {
                            $page = 1;
                        }
                        $numView = 4;
                        $viewLimit = ($numView * $page) - $numView;
                        //board + member
                        $sql = "SELECT b.boardTitle, b.regTime FROM myMember m JOIN myBoard b ON (m.myMemberID = b.myMemberID) ORDER BY myBoardID DESC LIMIT {$viewLimit}, {$numView}";
                        $result = $connect->query($sql);
                        if ($result) {
                            $count = $result->num_rows;
                            if ($count > 0) {
                                for ($i = 1; $i <= $count; $i++) {
                                    $info = $result->fetch_array(MYSQLI_ASSOC);
                                    echo "<ul>";
                                    echo "<li><a href='boardView.php?boardID={$info['myBoardID']}'>" . $info['boardTitle'] . "</a><span>" . date('Y.m.d', $info['regTime']) . "</span></li>";
                                    echo "</ul>";
                                }
                            }
                            //     <li><a href="#">스크립트 강의 업데이트 예정입니다.</a><span>2021.02.02</span></li>
                        }
                        ?>
                        <a href="../board/board.php" title="더보기" class="more">더보기</a>
                    </div>
                    <div class="news">
                        <h4>댓글 업데이트</h4>
                        <?php
                        if (isset($_GET['page'])) {
                            $page = (int) $_GET['page'];
                        } else {
                            $page = 1;
                        }
                        $numView = 4;
                        $viewLimit = ($numView * $page) - $numView;
                        //board + member

                        $sql = "SELECT * FROM myComment LIMIT 4";
                        $result = $connect->query($sql);
                        if ($result) {
                            $count = $result->num_rows;
                            if ($count > 0) {
                                for ($i = 1; $i <= $count; $i++) {
                                    $info = $result->fetch_array(MYSQLI_ASSOC);
                                    echo "<ul>";
                                    echo "<li><a href='boardView.php?boardID={$info['myCommentID']}'>" . $info['youText'] . "</a><span>" . date('Y.m.d', $info['regTime']) . "</span></li>";
                                    echo "</ul>";
                                }
                            }
                        }
                        ?>
                        <!-- <ul>
                                <li><a href="#">감사합니다. 잘 보고 있어요^^</a><span>2021.02.02</span></li>
                            </ul> -->
                        <a href="../comment/comment.php" title="더보기" class="more">더보기</a>
                    </div>
                </section>
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
    </div>
    <!-- //wrap -->
</body>

</html>