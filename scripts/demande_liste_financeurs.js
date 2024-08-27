// Appelle le contrôleur récupérant la liste des financeurs d'un projet et affiche la liste
// Met à jour les informations reçues toutes les 10 secondes
// Paramètres : idProjet => l'id du projet en question




/**
 * Fonction appelant le contrôleur générant la liste des financeurs du projet
 */
function getListe(){

    fetch(`generer_liste_financeurs.php?id=${idProjet}`).then(res => {
        return res.json();
    }).then(rep => {
        // Execution des fonctions d'affichage
        afficheInfos(rep)
    }).catch(err => {
        console.log(err);
    });
}



/**
 * Fonction permettant d'afficher les informations de financement d'un projet
 * Paramètres : datas => la liste des financeurs sous un format JSON
 */
function afficheInfos(liste){
    // Recuperation du tableau ou s'affiche la liste des investisseurs
    let tab = document.getElementById("tableau");

    // A chaque fois que la fonction s'exécute le tableau se vide avant d'être re-rempli
    tab.innerHTML = ``
    // Pour chaque e
    liste.forEach(investisseur => {
        tab.innerHTML += `<tr>
                            <td>${investisseur.nom}</td>
                            <td>${investisseur.prenom}</td>
                            <td>${investisseur.email}</td>
                            <td>${investisseur.tel}</td>
                            <td>${investisseur.montant_promis}</td>
                        </tr>`
    });
}
// Execution à l'affichage
getListe()
// Execution toutes les 10 secondes
setInterval(getListe,10000)