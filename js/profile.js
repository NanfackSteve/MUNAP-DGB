// --------------- TOTAL PERSONNES AFFILIES

let parent = parseInt(document.getElementById('parent-number').textContent);
let conjoint = parseInt(document.getElementById('conjoint-number').textContent);
let child = parseInt(document.getElementById('child-number').textContent);
let sum = parent + conjoint + child;
if (isNaN(sum)) sum = 0;
document.getElementById('total').textContent = sum;

// --------------- TOTAL ALLOCATIONS 

let birth = parseInt(document.getElementById('alloc-birth').textContent);
let wedding = parseInt(document.getElementById('alloc-wedding').textContent);
let hospital = parseInt(document.getElementById('alloc-hospital').textContent);
let medal = parseInt(document.getElementById('alloc-medal').textContent);
let retirement = parseInt(document.getElementById('alloc-retirement').textContent);
let sum_allocation = birth + wedding + hospital + medal + retirement;
if (isNaN(sum_allocation)) sum_allocation = 0;
document.getElementById('total-allocation').textContent = sum_allocation;

// --------------- MODIFIER MOT DE PASSE

function changePwd(token, num_adhesion) {

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
        sendPostRequest(token, num_adhesion, password1.value);
    } else {
        password1.classList.add('error');
        password2.classList.add('error');

        if (!alertDiv) {
            alertDiv = document.createElement('div');
            alertDiv.classList.add('alert', 'alert-danger', 'd-flex', 'align-items-center', 'alert-dismissible',
                'fade', 'show');
            alertDiv.innerHTML = `
                        <div style="font-size: 0.76rem;">Mots de Passe Incorrects / Incorrect Passwords.</div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>`;
            modal.parentNode.insertBefore(alertDiv, modal);
        }
    }
}

function sendPostRequest(token, num_adhesion, new_pass) {

    fetch("./models/api.json").then(rep => rep.json()).then(data => {
        let api = data['link'] + "/api/resetpassword?password=" + new_pass + "&num_adhesion=" +
            num_adhesion;
        fetch(api, {
            method: 'GET',
            mode: 'no-cors',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Bearer ' + token
            }
        })
            .then(response => response.json())
            .then(data => {
                // Traitement de la réponse de l'API
                alert('Mot de passe Modifié')
                console.log(data);
            })
            .catch(error => {
                // Gestion des erreurs
                console.error('Erreur de la requête :', error);
            });

    })

}