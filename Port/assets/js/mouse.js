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