/*search*/
function opensearch(id){
    display = document.getElementById(id).style.display;

    if(display=='none'){
       document.getElementById(id).style.display='block';
    }else{
       document.getElementById(id).style.display='none';
    }
}

/*slide*/

var controls = document.querySelectorAll('.controls');
for(var i=0; i<controls.length; i++){
    controls[i].style.display = 'inline-block';
}

var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,30000);

function nextSlide(){
    goToSlide(currentSlide+1);
}

function previousSlide(){
    goToSlide(currentSlide-1);
}

function goToSlide(n){
    slides[currentSlide].className = 'slide';
    currentSlide = (n+slides.length)%slides.length;
    slides[currentSlide].className = 'slide showing';
}

var next = document.getElementById('next');
var previous = document.getElementById('previous');

next.onclick = function(){
    nextSlide();
};
previous.onclick = function(){
    previousSlide();
};


/*переход по страницам*/

function openFurnitureBlock(){
    
     document.getElementById('furnitureBlock').style.display='block';
     document.getElementById('home').style.display='none';
     document.getElementById('contactsBlock').style.display='none';
    
}

function openHome(){
    
     document.getElementById('furnitureBlock').style.display='none';
     document.getElementById('home').style.display='block';
     document.getElementById('contactsBlock').style.display='none';
    
}

function openContactsBlock(){
    
     document.getElementById('furnitureBlock').style.display='none';
     document.getElementById('home').style.display='none';
     document.getElementById('contactsBlock').style.display='block';
    
}

/*слайдер отзывы*/
/*поменять название классов и функций*/
var control = document.querySelectorAll('.controls');
for(var q=0; q<control.length; q++){
    control[q].style.display = 'inline-block';
}

var slide = document.querySelectorAll('#slidesTestimonials .slides');
var currentSlid = 0;
var slideInterval = setInterval(nextSlid,20000);

function nextSlid(){
    goSlide(currentSlid+1);
}

function goSlide(n){
    slide[currentSlid].className = 'slides';
    currentSlid = (n+slides.length)%slides.length;
    slide[currentSlid].className = 'slides showing';
}



