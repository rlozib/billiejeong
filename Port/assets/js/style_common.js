//스크롤이 됐을 때(스크롤값)
$(window).scroll(function(){
    let scrollTop = $(window).scrollTop();      //scrollTop() : 브라우저의 위치 값


    // info                                                //parseInt() : 문자열 정수로 변경
    $(".scroll span").text(parseInt(scrollTop));       //브라우저의 스크롤 값을 텍스트로 표시

    
})

//로딩 화면
gsap.set(".top_text h1 strong", {opacity:0})
gsap.set(".top_text h1 em", {opacity:0})
gsap.set(".hearts", {opacity:0})

//main animaition
setTimeout(()=>{
    let tl = gsap.timeline();
    tl.to(".top_text h1 strong", {opacity:1})
    tl.to(".top_text h1 em", {opacity:1})
    tl.to(".hearts", {opacity:1}, "+=1")
},2000);


//배너 애니메이션
var text = "I'm your billie jeong!";

for(var i in text) { 
    if(text[i] === " ") {
        $(".wavetext").append( $("<span>").html("&nbsp;") ); 
    } else {  
        $(".wavetext").append( $("<span>").text(text[i]) ); 
    }
}
function hearts() {
    $.each($(".particletext.hearts"), function(){
        var heartcount = ($(this).width()/50) *35;
        for(var i = 0; i <= heartcount; i++) {
            var size = ($.rnd(60, 320)/10);
            $(this).append('<span class="particle" style="top:' + $.rnd(20,80) + '%; left:' + $.rnd(0,95) + '%;width:' + size + 'px; height:' + size + 'px;animation-delay: ' + ($.rnd(0,30)/10) + 's;"></span>');
        }
    });
}
jQuery.rnd = function(m,n) {
    m = parseInt(m);
    n = parseInt(n);
    return Math.floor( Math.random() * (n - m + 1) ) + m;
}

hearts();


//사진 원 효과
//아메바 정의
const blob = createBlob({
    element: document.querySelector('.blob'),
    numPoints: 10,  //아메바 점 개수
    centerX: 490,   //중심점
    centerY: 490,
    minRadius: 360, //테두리 굴곡
    maxRadius: 420,
    minDuration: 1, //지속 시간
    maxDuration: 2
})
function createBlob(options) {
var points = [];
var path = options.element;
var slice = (Math.PI * 2) / options.numPoints;  //파이 * 2 / 점 개수
var startAngle = random(Math.PI * 2);
var tl = new TimelineMax({
    onUpdate: update
});
for (var i = 0; i < options.numPoints; i++) {
    var angle = startAngle + i * slice;
    var duration = random(options.minDuration, options.maxDuration);
    var point = {
        x: options.centerX + Math.cos(angle) * options.minRadius,
        y: options.centerY + Math.sin(angle) * options.minRadius
    };
    var tween = TweenMax.to(point, duration, {
        x: options.centerX + Math.cos(angle) * options.maxRadius,
        y: options.centerY + Math.sin(angle) * options.maxRadius,
        repeat: -1,
        yoyo: true,
        ease: Sine.easeInOut
    });
    tl.add(tween, -random(duration));
    points.push(point);
}
options.tl = tl;
options.points = points;
function update() {
    path.setAttribute("d", cardinal(points, true, 1));
}
return options;
}
function cardinal(data, closed, tension) {
if (data.length < 1) return "M0 0";
if (tension == null) tension = 1;
var size = data.length - (closed ? 0 : 1);
var path = "M" + data[0].x + " " + data[0].y + " C";
for (var i = 0; i < size; i++) {
    var p0, p1, p2, p3;
    if (closed) {
        p0 = data[(i - 1 + size) % size];
        p1 = data[i];
        p2 = data[(i + 1) % size];
        p3 = data[(i + 2) % size];
    } else {
        p0 = i == 0 ? data[0] : data[i - 1];
        p1 = data[i];
        p2 = data[i + 1];
        p3 = i == size - 1 ? p2 : data[i + 2];
    }
    var x1 = p1.x + (p2.x - p0.x) / 6 * tension;
    var y1 = p1.y + (p2.y - p0.y) / 6 * tension;
    var x2 = p2.x - (p3.x - p1.x) / 6 * tension;
    var y2 = p2.y - (p3.y - p1.y) / 6 * tension;
    path += " " + x1 + " " + y1 + " " + x2 + " " + y2 + " " + p2.x + " " + p2.y;
}
return closed ? path + "z" : path;
}
function random(min, max) {
if (max == null) { max = min; min = 0; }
if (min > max) { var tmp = min; min = max; max = tmp; }
return min + (max - min) * Math.random();
}
//아메바
