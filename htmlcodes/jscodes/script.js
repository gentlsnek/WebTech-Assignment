'use strict'


const bookbtn = document.querySelector(".abook");

const bookform = document.querySelector(".book");

bookbtn.addEventListener('click', function(){
   if(bookform.classList.contains('hidden')){
    bookform.classList.remove('hidden');
   }
   else{
    bookform.classList.add('hidden');
   }
});