//쿠키 설정
document.cookie = "crossCookie=bar; SameSite=None; Secure";

var s = skrollr.init();

window.addEventListener("scroll", () => {
    let scrollTop = Math.floor(window.pageYOffset || document.documentElement.scrollTop || window.scrollY);

    document.querySelector(".scroll").innerHTML = scrollTop;
})

//메뉴 이동
document.querySelectorAll(".menu ul li a").forEach(el => {
    el.addEventListener("click", e => {
        e.preventDefault();
        document.querySelector(el.getAttribute("href")).scrollIntoView({
            behavior: "smooth"
        })
    })
})

//메뉴 보이기
const Menu = $(".menu");
const MenuBg = $(".nav_bg");
const Ham = $(".ham");

Ham.click(function (e) {
    e.preventDefault();
    Menu.toggleClass("block");
    MenuBg.toggleClass("block");
});


//배경음악 설정
const $bgm = $(".bgm"),
    $themeSong = $("#theme-song")[0];


// audio 버튼을 클릭하면 꺼지고... 클릭하면 켜지고.. toggleClass / attr
$bgm.on("click", function () {
    $(this).find("i").toggleClass("fa-volume-up fa-volume-off");
    $(this).toggleClass("is-playing");

    if ($(this).hasClass("is-playing")) {
        $themeSong.play();
    } else {
        $themeSong.pause();
    }
});




//탭 버튼
const tabBtn = $(".tab-btn span");
const tabCont = $(".tab-cont");
const tabPhoto = $(".tab-photo");

tabBtn.click(function (e) {
    e.preventDefault();
    let target = $(this);

    tabBtn.removeClass("active");
    target.addClass("active");

    let index = target.index();

    tabCont.css("display", "none");
    tabCont.eq(index).css("display", "block");
    tabPhoto.css("display", "none");
    tabPhoto.eq(index).css("display", "block");
});

//사이트 코딩 마우스 효과
$(window).mousemove(function(e){
    gsap.to(".site .zoom-mouse", {duration: 0.4, left: e.clientX - 200, top: e.clientY - 0});
});

$(".site .textWrap h2").hover(function(){
    $(".site .zoom-mouse").addClass("active");
}, function(){
    $(".site .zoom-mouse").removeClass("active");
});


//사이트 전체 마우스 따라다니기
const cursor = $(".cursor");
const follower = $(".cursor-follower");

$(window).mousemove(function(e){
    gsap.to(cursor, {duration: 0.3, left:e.pageX - 5, top: e.pageY - 5});
    gsap.to(follower, {duration: 0.8, left:e.pageX - 15, top: e.pageY - 15});
});

$(".site").hover(function(){
    cursor.addClass("hide");
    follower.addClass("hide");
}, function(){
    cursor.removeClass("hide");
    follower.removeClass("hide");
});





