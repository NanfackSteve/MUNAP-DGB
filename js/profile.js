// --------------- TOTAL PERSONNES AFFILIES

let parent = parseInt(document.getElementById('parent-number').textContent);
let conjoint = parseInt(document.getElementById('conjoint-number').textContent);
let child = parseInt(document.getElementById('child-number').textContent);
document.getElementById('total').textContent = parent + conjoint + child;

// ---------------- GESTION DYNAMIQUE DES MODALS

// Récupérez l'élément <p> où vous souhaitez ajouter la liste
let pParent = document.getElementById("pParent");
let pConjoint = document.getElementById("pConjoint");
let pChild = document.getElementById("pChild");

if (parent === 0) {
    pParent.setAttribute('class', 'allo-text text-center');
    pParent.textContent = "Aucun Parent affilié";
} else {
    // Créez une liste 
    var ulElement = document.createElement("ol");

    // Ajoutez n éléments de liste avec du texte
    for (var i = 1; i <= parent; i++) {
        var liElement = document.createElement("li");
        liElement.textContent = "Noms " + i;
        ulElement.appendChild(liElement);
    }

    // Ajoutez la liste à l'élément <p>
    pParent.appendChild(ulElement);
}

if (conjoint === 0) {
    pConjoint.setAttribute('class', 'allo-text text-center');
    pConjoint.textContent = "Aucun(e) Conjoint(e) affilié(e)";
} else {
    // Créez une liste  
    var ulElement = document.createElement("ol");

    // Ajoutez n éléments de liste avec du texte
    for (var i = 1; i <= conjoint; i++) {
        var liElement = document.createElement("li");
        liElement.textContent = "Noms " + i;
        ulElement.appendChild(liElement);
    }

    // Ajoutez la liste à l'élément <p>
    pConjoint.appendChild(ulElement);
}

if (child === 0) {
    pChild.setAttribute('class', 'allo-text text-center');
    pChild.textContent = "Aucun Enfant affilié";
} else {
    // Créez une liste  
    var ulElement = document.createElement("ol");

    // Ajoutez n éléments de liste avec du texte
    for (var i = 1; i <= child; i++) {
        var liElement = document.createElement("li");
        liElement.textContent = "Noms " + i;
        ulElement.appendChild(liElement);
    }

    // Ajoutez la liste à l'élément <p>
    pChild.appendChild(ulElement);
}