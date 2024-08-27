// Script utilisé pour afficher la div de connexion quand on survole le lien pour se connecter

// Récuperation du lien à survoler
let lien = document.getElementById("connexion-link");
// REcuperation de la div à faire apparaître
let div = document.getElementById("connexion-div");

// Quand ma souris passe sur le lien je fais apparaître la div

lien.addEventListener("mouseenter",()=>{
    div.classList.remove("d-none");
})

// Quand ma souris n'est pas sur le lien je fais disparaître la div

div.addEventListener("mouseleave",()=>{
    div.classList.add("d-none");
})