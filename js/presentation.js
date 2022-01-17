'use strict';    


        document.addEventListener('DOMContentLoaded', function(){
            document.querySelector('.minislider1').addEventListener('click', zoomSlider);
           console.log("connexion js ok")
       });
        function zoomSlider(){
  let a = document.querySelector(".minislider1");

           a.classList.remove(".minislider1"); 
        }
    