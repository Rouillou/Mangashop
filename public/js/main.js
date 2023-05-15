let creer_un_compte = document.getElementById("creer_un_compte");

creer_un_compte.addEventListener("click", function() {
    let titre_f = document.getElementById("Titre_formulaire");
    titre_f.textContent = "Créer un compte";

    let texte_f = document.getElementById("texte_formulaire");
    texte_f.textContent = "Veuillez entrez les informations";

    let se_co_form = document.getElementById("se_connecter");
    se_co_form.style.display = "none";
    let creer_compte_form = document.getElementById("créer_un_compte");
    creer_compte_form.style.display = "block";
});

let se_connecter_boutton = document.getElementById("se_connecter_boutton");

se_connecter_boutton.addEventListener("click", function() {
    let titre_f = document.getElementById("Titre_formulaire");
    titre_f.textContent = "Se connecter";

    let texte_f = document.getElementById("texte_formulaire");
    texte_f.textContent = "Veuillez vous connectez";

    let se_co_form = document.getElementById("se_connecter");
    se_co_form.style.display = "block";
    let creer_compte_form = document.getElementById("créer_un_compte");
    creer_compte_form.style.display = "none";
});


