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