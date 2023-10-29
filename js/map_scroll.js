// Fonction pour vérifier la largeur de l'écran et empêcher le comportement par défaut des ancres sur les grands écrans.
function checkScreenSize() {
    const links = document.querySelectorAll('a[href^="#"]');

    if (window.innerWidth >= 769) { // Grand écran
        for (const link of links) {
            link.addEventListener('click', function (event) {
                event.preventDefault();
            });
        }
    }
}

// Vérifier la largeur de l'écran lors du chargement de la page et lorsque la fenêtre est redimensionnée.
window.addEventListener('load', checkScreenSize);
window.addEventListener('resize', checkScreenSize);

// Fonction de clignotement
function clignoterCellule(idCellule) {
    const cellule = document.getElementById(idCellule);
    let duree = 2000; // 2 secondes
    let interval = 200; // 200 millisecondes
    let couleurOriginale = cellule.style.backgroundColor;

    const clignotement = setInterval(function () {
        if (duree <= 0) {
            clearInterval(clignotement);
            cellule.style.backgroundColor = couleurOriginale; // Remettre la couleur d'origine à la fin.
        } else {
            cellule.style.backgroundColor = (cellule.style.backgroundColor === "yellow") ?
                couleurOriginale : "yellow";
            duree -= interval;
        }
    }, interval);
}