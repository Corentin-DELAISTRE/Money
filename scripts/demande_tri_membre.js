// Script servant à appeler le contrôleur générant la liste de membre trié selon les critères de recherche
// Utilise une fonction d'affichage pour faire apparaître la liste coté client

// Récuperation des critère de recherche
let inputTypeCompte = document.getElementById("typeCompte")
let inputCritere = document.getElementById("search")



// Recuperation de la partie du tableau html ou sera afficher la liste
let tableau = document.getElementById("tableau")


/**
 * Fonction appelant le contôleur triant les membres selon le critère et le type de compte
 */
function getListe(){

    let critere = inputCritere.value
    let typeCompte = inputTypeCompte.selectedOptions[0].value

    fetch(`trier_membres.php?typeCompte=${typeCompte}&critere=${critere}`).then(res => {
        return res.json();
    }).then(rep => {
        // Execution des fonctions d'affichage
        console.log(rep)
        afficheListe(rep)
    }).catch(err => {
        console.log(err);
    });

}

/**
 * Affiche la liste des membres dans le tableau HTML
 * @param {JSON} json un fichier JSON
 * Retourne : rien
 */
function afficheListe(json){
    tableau.innerHTML = ``

    json.forEach(membre => {
        tableau.innerHTML += `
                <tr>
                    <td>${membre[0].nom}</td>
                    <td>${membre[0].prenom}</td>
                    <td>${membre[0].email}</td>
                    <td>${membre[0].telephone}</td>
                    <td><a href="afficher_form_modif_membre.php?id=${membre[0].id}&typeCompte=${membre[0].type}"><div class="table-icon mlra"><img src=".././assets/icons/modifier.png" alt="" class="responsive-img"></div></a></td>
                    <td><a href="afficher_demande_conf_desactivation.php?id=${membre[0].id}&typeCompte=${membre[0].type}"><div class="table-icon mlra"><img src=".././assets/icons/desactiver.png" alt="" class="responsive-img"></div></a></td></td>
                </tr>`
    });
}



// Quand je selectionne un type de compte je trie ma recherche
inputTypeCompte.addEventListener("input",()=>{
    getListe();
})


// Quand je saisi plus de 3 caractères dans la barre de recherche, appelle le contôleur de tri
inputCritere.addEventListener("input",()=>{
    let nmbCaracSaisi = inputCritere.value.length
    if(nmbCaracSaisi >= 3){
        getListe()
    }
})
