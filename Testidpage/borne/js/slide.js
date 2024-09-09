const container = document.querySelector("#slider")
const items = document.querySelectorAll("img.slider-image");
const nbSlide = items.length;
const suivant = document.querySelector('.right');
const precedent = document.querySelector('.left');
document.getElementById('arrived');
let count = 0;

function slideSuivante(){
    items[count].classList.remove('active');

    if(count < nbSlide - 1){
        count++;
    } else {
        count=0;
        document.getElementById('arrived').classList.remove('hidden');
        count=0;
        items.classList.remove('active');
    }
    items[count].classList.add('active');
    document.getElementById('arrived').classList.add('hidden');
    console.log(count);
}
suivant.addEventListener('click', slideSuivante)


function slidePrecedente(){
    items[count].classList.remove('active');

    if(count > 0){
        count--;
    } else {
        count = nbSlide - 1;
        document.getElementById('arrived').classList.remove('hidden');
        items.classList.remove('active');
        count = nbSlide;
    }

    items[count].classList.add('active');
    document.getElementById('arrived').classList.add('hidden');
    console.log(count);
}
precedent.addEventListener('click', slidePrecedente)

function keyPress(e){
    console.log(e);
    
    if(e.keyCode === 37){
        slidePrecedente();
    } else if(e.keyCode === 39){
        slideSuivante();
    }
}
document.addEventListener('keydown', keyPress)
