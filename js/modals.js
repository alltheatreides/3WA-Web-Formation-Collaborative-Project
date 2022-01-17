//------------------------Connexion----------------------------
//-------------------------------------------------------------


let modal = document.getElementById("myModal");
let btn = document.getElementById("myBtn");
let span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }    
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

//-----------------------------Panier-----------------------------
//----------------------------------------------------------------

let modal2 = document.getElementById("myModal2");
let btn2 = document.getElementById("myBtn2");
let span2 = document.getElementsByClassName("close2")[0];

btn2.onclick = function() {
    modal2.style.display = "block";
}

span2.onclick = function() {
    modal2.style.display = "none";
}

