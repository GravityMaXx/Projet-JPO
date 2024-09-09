const container = document.querySelector("#slider")         //Sélection et récupération de la classe slider 
const items = document.querySelectorAll("img.slider-image"); // Sélection de toutes les images de la classe silder iamge
const nbSlide = items.length;                               // longueur du slide pour la boucle
const suivant = document.querySelector('.right');          // Sélection de la classe right 
const precedent = document.querySelector('.left');          // Sélection de la classe left
document.getElementById('arrived');                         // Selection de la classe arrived
let count = 0;                                              // initialisation du compteur à 0

function slideSuivante(){
    items[count].classList.remove('active'); // on enlève la classe active permettant l'affichage de l'image

    if(count < nbSlide - 1){  // si le compteur es plus petit que le nombre de slide
        count++;             // incrémenter le compteur (donc slide suivante)
    } else {
        count=0; // arrivé à la fin on réinitialise le compteur à 0
    }
    items[count].classList.add('active');  // ajouter la classe active a l'élément image suivant
    console.log(count); // afficher le nunéro de l'image dans la console navigateur
}
suivant.addEventListener('click', slideSuivante) // écouteur d'évenènement pour le clic sur le bouton pour passer a la slide suivante


function slidePrecedente(){
    items[count].classList.remove('active'); //  on retire la classe active permettant l'affichage de l'image

    if(count > 0){
        count--; // décrémentation du compteur
    } else {
        count = nbSlide - 1;
    }

    items[count].classList.add('active')
    console.log(count);
}
precedent.addEventListener('click', slidePrecedente)

function keyPress(e){ // fonction permettant le fonctionnement des slides avect les touches flèches
    console.log(e);
    
    if(e.keyCode === 37){  // si la touche activé est -> 
        slidePrecedente(); // éxécution de la fonction slidesuivante
    } else if(e.keyCode === 39){ // si la touches activé est <-
        slideSuivante(); // exécution de la fonction slideprécédente
    }
}
document.addEventListener('keydown', keyPress) // écouteur pour l'activation des touches
