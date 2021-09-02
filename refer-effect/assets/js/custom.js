//Code view
document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre code').forEach((el) => {
        hljs.highlightElement(el);
    });
});


//Modal
document.querySelector(".info button").addEventListener("click", function(){
    document.querySelector("#modal").classList.add("show");
    document.querySelector("#modal").classList.remove("hide");
});

document.querySelector(".modal-cont button").addEventListener("click", function(){
    document.querySelector("#modal").classList.add("hide");
});
