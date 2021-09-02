//Code view
document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre code').forEach((el) => {
        hljs.highlightElement(el);
    });
});


//Code tab menu

//js
const viewTitle = document.querySelectorAll(".view-title ul li");
const viewCont = document.querySelectorAll(".view-cont > div");

viewTitle.forEach((element, index) => {
    element.addEventListener("click", function(){
        
        viewTitle.forEach( el => {
            el.classList.remove("active");
        });
        element.classList.add("active");

        viewCont.forEach( el => {
            el.style.display = "none";
        })
        viewCont[index].style.display = "block";
    });
})

//jquery
// const viewTitle = $(".view-title ul li");     
// const viewCont = $(".view-cont > div"); 


// viewTitle.click(function(){
//     let target = $(this);
//     viewTitle.removeClass("active");
//     target.addClass("active");

//     let index = target.index();
//     viewCont.css("display","none");
//     viewCont.eq(index).css("display","block");
// });




//Modal
document.querySelector(".info button").addEventListener("click", function(){
    document.querySelector("#modal").classList.add("show");
    document.querySelector("#modal").classList.remove("hide");
});

document.querySelector(".modal-cont button").addEventListener("click", function(){
    document.querySelector("#modal").classList.add("hide");
});





// $(".info button").click(function(){
//     $("#modal").removeClass().addClass("show")
// });

// $(".modal-cont button").click(function(){
//     $("#modal").addClass("hide")							  
// });
