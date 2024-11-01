const $btnSound = $(".btn-sound"),
	$themeMusic = $("#music")[0];

//오디오 설정
$bgm.on("click", function () {
	$(this).find("i").toggleClass("fa-volume-up fa-volume-off");
	$(this).toggleClass("is-playing");

	if ($(this).hasClass("is-playing")) {
		$themeSong.play();
	} else {
		$themeSong.pause();
	}
});

//가로모드
const contentWrap = $(".contentWrap");
const contentItem = $(".content__item");

let scrollTotalWidth = contentWrap.width();
$("body").height(scrollTotalWidth);

$(window).scroll(function () {
	let scrollTop = $(window).scrollTop();

	let nWidth = scrollTotalWidth - $(window).width();
	let nHeight = $("body").height() - $(window).height();

	let ratio = nWidth / nHeight;
	let goLeft = scrollTop * ratio;

	contentWrap.css("left", -goLeft);
});

//로딩
$(window).load(function () {
	$(".loading").fadeOut();
});

$(window).scroll(function () {
	//bottom 사라지게
	$(".bottom").addClass("end");
	$(".header .logo").addClass("up");
});

//스크롤 값 출력
var s = skrollr.init();
window.addEventListener("scroll", () => {
	let scrollTop = document.documentElement.scrollTop || window.scrollY || window.PageYOffset;
	document.querySelector(".scroll").innerHTML = scrollTop;
})

//svg
var blob1 = createBlob({
	element: document.querySelector(".blob"),
	numPoints: 10,
	centerX: 490,
	centerY: 450,
	minRadius: 300,
	maxRadius: 320,
	minDuration: 1,
	maxDuration: 2
});

var blob2 = createBlob({
	element: document.querySelector("#path1"),
	numPoints: 10,
	centerX: 480,
	centerY: 480,
	minRadius: 300,
	maxRadius: 320,
	minDuration: 1,
	maxDuration: 2
});
var blob3 = createBlob({
	element: document.querySelector("#path2"),
	numPoints: 10,
	centerX: 480,
	centerY: 480,
	minRadius: 300,
	maxRadius: 320,
	minDuration: 1,
	maxDuration: 2
});
var blob4 = createBlob({
	element: document.querySelector("#path3"),
	numPoints: 10,
	centerX: 480,
	centerY: 480,
	minRadius: 300,
	maxRadius: 320,
	minDuration: 1,
	maxDuration: 2
});
var blob5 = createBlob({
	element: document.querySelector("#path4"),
	numPoints: 10,
	centerX: 480,
	centerY: 480,
	minRadius: 300,
	maxRadius: 320,
	minDuration: 1,
	maxDuration: 2
});

function createBlob(options) {
	var points = [];
	var path = options.element;
	var slice = (Math.PI * 2) / options.numPoints;
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
	if (max == null) {
		max = min;
		min = 0;
	}
	if (min > max) {
		var tmp = min;
		min = max;
		max = tmp;
	}
	return min + (max - min) * Math.random();
}

//이미지 슬라이드 (section1 svg안에 이미지슬라이드)
const sliderWrap = $(".slider-wrap");
const sliderImg = $(".slider-img");
const slider = $(".cls-2");

let currentIndex = 0;
let sliderCount = slider.length;

setInterval(function () {
	let nextIndex = (currentIndex + 1) % sliderCount;

	slider.eq(currentIndex).fadeOut();
	slider.eq(nextIndex).fadeIn();

	currentIndex = nextIndex;
}, 3000);


//contact mouse hover
$('.sec16-text1 .t1 .button').hover(function () {
	$(this).css("height", "34vw");
	setTimeout(function () {
		$('#section16 .sec16-text1 .box').css("display", "block");
	}, 500);
	$('.sec16-text1').addClass("active");
	$('.sec16-text1 .t1 .txt').addClass("active");
}, function () {
	$(this).css("height", "5vw");
	$('#section16 .sec16-text1 .box').css("display", "none");
	$('.sec16-text1').removeClass("active");
	$('.sec16-text1 .t1 .txt').removeClass("active");
});

$('.sec16-text2 .t1 .button').hover(function () {
	$(this).css("height", "19vw");
	setTimeout(function () {
		$('#section16 .sec16-text2 .box').css("display", "block");
	}, 500);
	$('.sec16-text2').addClass("active");
	$('.sec16-text2 .t1 .txt').addClass("active");
}, function () {
	$(this).css("height", "5vw");
	$('#section16 .sec16-text2 .box').css("display", "none");
	$('.sec16-text2').removeClass("active");
	$('.sec16-text2 .t1 .txt').removeClass("active");
}); 