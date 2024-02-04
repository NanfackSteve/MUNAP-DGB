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

function changePwd(token) {

    let modal = document.getElementById('modal-body');
    let oldPassword = document.getElementById('old-pass');
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
        sendPostRequest(token, oldPassword.value, password1.value, password2.value);
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

function showAlert(message, alert_tyle, icon) {
    // Créer un élément d'alerte Bootstrap
    var alertElement = document.createElement('div');
    alertElement.classList.add('alert', `${alert_tyle}`, 'fade', 'show', 'position-fixed', 'top-50', 'start-50', 'translate-middle');

    // Ajouter une icône de coche SVG à l'alerte
    var svgIcon = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svgIcon.setAttribute('width', '16');
    svgIcon.setAttribute('height', '16');
    svgIcon.setAttribute('fill', 'currentColor');
    svgIcon.classList.add('bi', 'bi-check-circle');
    svgIcon.innerHTML = '<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>';

    alertElement.innerHTML = `<div class="d-flex align-items-center">${svgIcon.outerHTML}<div class="ms-2">${message}</div></div>`;

    // Ajouter l'alerte à la page
    document.body.appendChild(alertElement);

    // Disparition automatique après 2 secondes
    setTimeout(function () {
        alertElement.classList.remove('show');
        setTimeout(function () {
            alertElement.remove();
        }, 300);
    }, 3500);


}

function sendPostRequest(token, old_password, new_pass, confirm_pass) {

    fetch("src/models/api.json").then(rep => rep.json()).then(data => {

        let api = data['link'] + "/api/changepassword?old_password=" + old_password + "&password=" +
            new_pass + "&password_confirmation=" + confirm_pass;

        fetch(api, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Bearer ' + token,
            }
        })
            .then(resp => resp.json())
            .then(changed_pwd => {

                document.getElementById('old-pass').value = "";
                document.getElementById('new-pass-1').value = "";
                document.getElementById('new-pass-2').value = "";
                const langPage = document.getElementById('lang').textContent;

                if (changed_pwd) {
                    const message = langPage === 'fr' ? 'Mot de passe Modifié !' : 'Modified Password !';
                    $('#pwdModal').modal('hide');

                    const icon = '<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>';
                    showAlert(message, 'alert-success', icon);
                } else {
                    const message = langPage === 'fr' ? 'Erreur ! Ancien mot de passe Incorrect. !!! ' : 'Error ! Incorrect Old Password !!!';
                    $('#pwdModal').modal('hide');

                    const icon = '<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>'
                    showAlert(message, 'alert-danger', icon);
                }
            }).catch(error => {
                document.getElementById('old-pass').value = "";
                document.getElementById('new-pass-1').value = "";
                document.getElementById('new-pass-2').value = "";

                const langPage = document.getElementById('lang').textContent;
                const message = langPage === 'fr' ? 'Une erreur est survenue. Ressayez plus tard !' : 'Error ! Try Later !';

                $('#pwdModal').modal('hide');
                const icon = '<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>'
                showAlert(message, 'alert-danger', icon);

                console.error('Erreur de la requête : ', error);
            });

    })

}