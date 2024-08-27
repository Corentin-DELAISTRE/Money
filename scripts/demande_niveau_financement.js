// Appelle le contôleur générant le niveau de financement
// Utilisation de fonction pour afficher le niveau de financement

/**
 * Appel du contrôleur générant le niveau de financement
 * Execute la fonction d'affichage
 */
function getNiveauFinancement(){

    fetch(`generer_niveau_financement.php?id=${idProjet}`).then(res => {
        return res.json();
    }).then(rep => {
        // Execution des fonctions d'affichage
        afficheNiveauFinancement(rep)
    }).catch(err => {
        console.log(err);
    });

}

/**
 * Gere l'affichage du niveau de financement
 * Paramètres : datas => le niveau de financement sous format JSON
 */
function afficheNiveauFinancement(datas){

    // Recuperation du paragraphe affichant la valeur numérique du niveau de financement
    let p = document.getElementById("niveau")
    // A chaque executin de la fonction le paragraphe est vidé
    p.innerText =``
    // Affichage du niveau de financement dans le paragraphe
    p.innerText += `${datas[0]} %`

    // Recuperation des parties de la jauge étant un indicateur graphique du niveau de financement
    let promis = document.getElementById("promis") // La partie financée
    let restant = document.getElementById("restant") // La partie non financée

    // Ajustement des taille pour que la jauge soit représentative du niveau de financement
    // Sur la jauge de taille 100%, la largeur en % de la partie financé est égale au niveau de financement
    promis.style.width = `${datas[0]}%`
    restant.style.width = `calc(100% - ${datas[0]}%)`
    
}

// Execution à l'affichage
getNiveauFinancement()
// Execution toutes les 10 secondes
setInterval(getNiveauFinancement,10000)