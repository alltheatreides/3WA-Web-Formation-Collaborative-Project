'use strict';


document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.minislider1').addEventListener('click', zoomSlider);
    console.log("connexion js ok")
});

function zoomSlider() {
    let a = document.querySelector(".minislider1");
    //  let b = document.querySelector(".minislider2").style.display = none;
    //document.getElementById("noneminislider2").style.display = none;
    let b = document.querySelector(".minislider2");
    let c = document.querySelector(".minislider3");
    let d = document.querySelector(".minislider4");
    let e = document.querySelector(".minislider5");

    //  console.log(a);
    a.classList.remove("minislider1");
    b.classList.remove("minislider2");
    c.classList.remove("minislider3");
    d.classList.remove("minislider4");
    e.classList.remove("minislider5");


    ;
    
}