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
    <title>댓글</title>
    
    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/vars.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->
    
        <header id="header">
            <?php
                include "../include/header.php";
            ?>
        </header>
        <!-- //header -->

        <main id="contents">
            <section id="mainCont">
                <h2 class="ir_so">메인 컨텐츠</h2>
                <article class="content-article">
                    <!-- cardType01 -->
                    <section class="cardType">
                        <div class="cardType01">
                            <h2>지구하기 프로젝트</h2>
                            <p>지구를 구하고자 같이 참여하는 지구하기 프로젝트입니다.
                                함께 제로웨이스트 운동에 동참하여 지구를 구해요.</p>
                            <div class="card-wrap">
                                <div class="card">
                                    <a href="#">
                                        <img src="../assets/img/card01.jpg" alt="쓰레기 문제 관련 이미지입니다." class="card-img">
                                    <strong class="card-title">쓰레기 문제쓰레기 문제쓰레기 문제</strong>
                                    <span class="card-desc">쓰레기 문제로 죽어가는 지구를 구합니다. 지구하기 프로젝트입니다. 지구하기 프로젝트입니다 </span>
                                    <span class="card-keyword">
                                        <span>#지구</span>
                                        <span>#쓰레기 문제</span>
                                    </span>
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#">
                                        <img src="../assets/img/card02.jpg" alt="재활용 분리수거 관련 이미지입니다." class="card-img">
                                    <strong class="card-title">재활용 분리수거</strong>
                                    <span class="card-desc">올바른 재활용 방법을 알려 드리겠습니다. 다같이 함께 해요. 다같이 함께 해요.다같이 함께 해요.</span>
                                    <span class="card-keyword">
                                        <span>#지구</span>
                                        <span>#재활용 분리수거</span>
                                    </span>
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#">
                                        <img src="../assets/img/card03.jpg" alt="제로웨이스트 관련 이미지입니다." class="card-img">
                                    <strong class="card-title">제로웨이스트</strong>
                                    <span class="card-desc">장바구니, 텀블러 사용 등 우리가 할 수 있는 방법으로 지구를 지킵시다. 지구를 지킵시다. 지구를 지킵시다.</span>
                                    <span class="card-keyword">
                                        <span>#지구</span>
                                        <span>#제로웨이스트</span>
                                    </span>
                                    </a>
                                </div>
                            </div>
                        </div>           
                    </section>
                    <!-- //cardType01 -->
                </article>
                <article class="flow-article">
                    <h3 class="ir_so">나도 지구 구하기</h3>
                    <section id="comment" class="section-comment">
                        <h4>지구 구하기</h4>
                        <p>지구를 구하기 원하는 분들은 댓글로 참여 신청을 남겨주세요!</p>
                        <div class="comment-form">
                            <form action="commentSave.php" method="post" name="comment">
                                <fieldset>
                                    <legend class="ir_so">댓글 영역</legend>
                                    <div class="comment-wrap">
                                        <div>
                                            <label for="youName" class="ir_so">이름</label>
                                            <input type="text" name="youName" id="youName" class="input_write2" placeHolder="이름" autocomplete="off" maxlength="10" required>
                                        </div>
                                        <div>
                                            <label for="youText" class="ir_so">참여하기</label>
                                            <input type="text" name="youText" id="youText" class="input_write2 w100" placeHolder="댓글을 적어주세요" autocomplete="off" required>
                                        </div>
                                        <button class="btn_submit2" type="submit" value="참여하기">go</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="comment-list">
                            <?php
                                include "../connect/connect.php";

                                $sql = "SELECT * FROM myComment LIMIT 10";
                                $result = $connect -> query($sql);

								// echo "<pre>";
								// var_dump(mysqli_fetch_array($result));
								// echo "</pre>";

                                while( $info = mysqli_fetch_array($result) ){
							?>
								<div>
									<p><?=$info['youText']?></p>
									<div>
										<img src="http://billiejeong.dothome.co.kr/class/img/img05.jpg" alt="">
										<span><?=$info['youName']?></span>
										<span><?=date('Y-m-d H:i', $info['regTime'])?></span>
									</div>
								</div>
							<?php
                                }
                            ?>



                            <!-- <div>
                                <p>저 신청합니다!! 받아주세요! 저 신청합니다!! 받아주세요!</p>
                                <div>
                                    <img src="http://billiejeong.dothome.co.kr/class/img/img05.jpg" alt="">
                                    <span>정빌리</span>
                                    <span>2020-10-12</span>
                                </div>
                            </div> -->
                        
                        </div>
                    </section>
                </article>
            </section>
        </main>
        <!-- //content -->

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