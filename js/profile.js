// --------------- TOTAL PERSONNES AFFILIES

let parent = parseInt(document.getElementById('parent-number').textContent);
let conjoint = parseInt(document.getElementById('conjoint-number').textContent);
let child = parseInt(document.getElementById('child-number').textContent);
document.getElementById('total').textContent = parent + conjoint + child;

// --------------- MODIFIER MOT DE PASSE

function changePwd() {

    let modal = document.getElementById('modal-body');
    let password1 = document.getElementById('new-pass-1');
    let password2 = document.getElementById('new-pass-2');

    // Récupérer l'élément div d'alerte
    let alertDiv = document.querySelector('.alert');

    // Vérifier si les deux mots de passe sont identiques
    if (password1.value === password2.value) {
        password1.classList.remove('error');
        password2.classList.remove('error');
        if (alertDiv) {
            alertDiv.remove();
        }
        sendPostRequest();
    } else {
        password1.classList.add('error');
        password2.classList.add('error');

        if (!alertDiv) {
            alertDiv = document.createElement('div');
            alertDiv.classList.add('alert', 'alert-danger', 'd-flex', 'align-items-center', 'alert-dismissible', 'fade', 'show');
            alertDiv.innerHTML = `
                            <div style="font-size: 0.76rem;">Les mots de passe ne correspondent pas.</div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>`;
            modal.parentNode.insertBefore(alertDiv, modal);
        }
    }
}

function sendPostRequest() {

    let token = "votre_token";

    fetch('votre_url_api', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + token,
        },
        body: JSON.stringify({
            password: document.getElementById('floatingPass-1').value,
            // Ajoutez d'autres données à envoyer
        }),
    })
        .then(response => response.json())
        .then(data => {
            // Traitement de la réponse de l'API
            console.log(data);
        })
        .catch(error => {
            // Gestion des erreurs
            console.error('Erreur lors de la requête POST:', error);
        });
}