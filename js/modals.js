// Get the modal
let modal = document.getElementById("myModal");

// Get the button that opens the modal
let btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function () {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

//-----------------------------Panier-----------------------------
//----------------------------------------------------------------
// TODO florian doit mieux documenter son code

let modal2 = document.getElementById("myModal2");
let btn2 = document.getElementById("myBtn2");
let span2 = document.getElementsByClassName("close2")[0];

btn2.onclick = function () {
    modal2.style.display = "block";
}

span2.onclick = function () {
    modal2.style.display = "none";
}

// window.onclick = function (event) {
//     if (event.target == modal2) {
//         modal2.style.display = "none";
//     }
// }