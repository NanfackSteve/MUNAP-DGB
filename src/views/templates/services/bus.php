<?php $title_page = $lang['services']['title-page']; ?>

<?php ob_start(); ?>

<!-- Prestations Start -->
<div class="container">

    <!-- Calendar Reservation Start -->
    <div class="row">
        <div class="col-sm-12 col-lg-12 p-4 pb-0">
            <span id="lang" style="display: none;"><?= $_SESSION['lang'] ?></span>
            <!-- Button Calendar modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#calendarModal">
                <i class="fa fa-calendar-day me-1"></i><?= $lang['services']['calendar-btn'] ?>
            </button>
            <!-- Modal -->
            <div class="modal fade" id="calendarModal" tabindex="-1" aria-labelledby="calendarModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Body -->
                        <div class="modal-body">
                            <div id='calendar'></div>
                            <div class="toast-container ">
                                <div id="busToast" class="toast fade text-white rounded border-0" role="alert"
                                    aria-live="assertive" aria-atomic="true">
                                    <div class="toast-body"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Modal -->

        </div> <!-- End Col -->
    </div>
    <!-- Calendar Reservation End -->

    <!-- Location Bus Start -->
    <div class="row mt-1 g-4 ">

        <!-- Classic Bus -->
        <div class="col-md-6 col-lg-4 px-4">
            <div class="card wow fadeInLeft shadow mb-5 bg-body rounded" data-wow-delay="0.5s">
                <img src="img/prestations/location-bus.jpg" class="card-img-top img-fluid " alt="...">
                <div class="card-body ">
                    <h5 class="card-title"><?= $lang['services']['bus-classic-title'] ?></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h6><?= $lang['services']['condition-title'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['bus-condition-1'] ?></li>
                            <li><?= $lang['services']['bus-condition-2'] ?></li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <h6><?= $lang['services']['bus-case-1'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['bus-classic-condition-2'] ?></li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <h6><?= $lang['services']['bus-case-2'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['bus-classic-condition-1'] ?></li>
                        </ul>
                    </li>

                    <li class="list-group-item">
                        <h6><?= $lang['services']['pieces-title'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['bus-piece-1'] ?></li>
                        </ul>
                    </li>
                </ul>
                <div class="card-body">
                    <a target="_blank" download="Formulaire_Bus.pdf" href="files/Formulaire_Bus.pdf"
                        class="card-link"><?= $lang['services']['download'] ?></a>
                </div>
            </div>
        </div>

        <!-- VIP Bus 1 -->
        <div class="col-md-6 col-lg-4 px-4">
            <div class="card wow fadeInUp shadow mb-5 bg-body rounded" data-wow-delay="0.7s">
                <img src="img/prestations/location-bus-vip.jpg" class="card-img-top img-fluid w-100" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $lang['services']['bus-vip-title'] ?></h5>
                    <p class="card-text"></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h6><?= $lang['services']['condition-title'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['bus-condition-1'] ?></li>
                            <li><?= $lang['services']['bus-condition-2'] ?></li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <h6><?= $lang['services']['bus-case-1'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['bus-vip-condition-2'] ?></li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <h6><?= $lang['services']['bus-case-2'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['bus-vip-condition-1'] ?></li>
                        </ul>
                    </li>
                    <li class="list-group-item pe-0">
                        <h6><?= $lang['services']['pieces-title'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['bus-piece-1'] ?></li>
                        </ul>
                    </li>
                </ul>
                <div class="card-body">
                    <a target="_blank" download="Formulaire_Bus.pdf" href="files/Formulaire_Bus.pdf"
                        class="card-link"><?= $lang['services']['download'] ?></a>
                </div>
            </div>
        </div>

        <!-- VIP Bus 2 -->
        <div class="col-md-6 col-lg-4 px-4">
            <div class="card wow fadeInRight shadow mb-5 bg-body rounded" data-wow-delay="0.5s">
                <img src="img/prestations/location-bus-vip-2.jpg" class="card-img-top img-fluid w-100 " alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $lang['services']['bus-vip-2-title'] ?></h5>
                    <p class="card-text"></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h6><?= $lang['services']['condition-title'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['bus-condition-1'] ?></li>
                            <li><?= $lang['services']['bus-condition-2'] ?></li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <h6><?= $lang['services']['bus-case-1'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['bus-vip-condition-2'] ?></li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <h6><?= $lang['services']['bus-case-2'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['bus-vip-condition-1'] ?></li>
                        </ul>
                    </li>
                    <li class="list-group-item pe-0">
                        <h6><?= $lang['services']['pieces-title'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['bus-piece-1'] ?></li>
                        </ul>
                    </li>
                </ul>
                <div class="card-body">
                    <a target="_blank" download="Formulaire_Bus.pdf" href="files/Formulaire_Bus.pdf"
                        class="card-link"><?= $lang['services']['download'] ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Location Bus End -->
</div>
<!-- Prestations End -->

<script>
let List_header = document.getElementsByClassName('nav-link');
for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
document.getElementById('services').setAttribute("class", "nav-link active");
</script>

<script>
$(document).ready(function() {
    display_events();
}); //end document.ready block

function display_events() {
    fetch("src/models/test-bus.json")
        .then(response => response.json())
        .then(data => {

            const langPage = document.getElementById('lang').textContent;

            // Choose Day Lang
            const days = langPage === 'fr' ? ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi',
                'Samedi'
            ] : ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            const daysShort = langPage === 'fr' ? ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'] : ['Sun', 'Mon',
                'Tue',
                'Wed', 'Thu', 'Fri', 'Sat'
            ];

            // Choose Months Lang
            const months = langPage === 'fr' ? ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet',
                'Août',
                'Septembre', 'Octobre', 'Novembre', 'Décembre'
            ] : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
                'September', 'October', 'November', 'December'
            ];
            const monthsShort = langPage === 'fr' ? ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août',
                'Sep', 'Oct',
                'Nov', 'Déc'
            ] : ['Jan', 'Feb', 'Mar', 'Apr', 'Maiy', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct',
                'Nov', 'Dec'
            ];

            // Choose ToDay btn
            const to_day_btn = langPage === 'fr' ? 'Aujourd\'hui' : 'To Day';

            // Define color event
            const state_bus_colors = {
                "Confirmé": '#ed7f10',
                "Réservé": '#ff0000'
            };

            const bus_pending_fr = 'non confirmé';
            const bus_pending_en = 'not-confirmed';
            const bus_reserve_fr = 'déjà réservé';
            const bus_reserve_en = 'yet reserved';


            // Add Description 
            const bus_list = data;
            bus_list.forEach(function(bus) {
                bus.state = langPage === 'fr' ? bus.statut_location == 'Réservé' ? bus_reserve_fr :
                    bus_pending_fr :
                    bus.statut_location == 'Réservé' ? bus_reserve_en : bus_pending_en;
            })

            // Add 1 day to end
            bus_list.forEach(function(bus) {
                var dateFinMoment = moment(bus['date_fin_location']).add(1, 'day');
                bus['date_fin_location'] = dateFinMoment.format('YYYY-MM-DD');
            });

            // Create Events List for Calendar
            const events = bus_list.map((item, index) => ({
                title: `${item.nom_vehicule}`,
                start: item['date_debut_location'],
                end: item['date_fin_location'],
                color: state_bus_colors[`${item.statut_location}`],
                groupId: `${item.statut_location}`,
                description: `${(item.motif).replace(/(Réservation)(.*)(pour)/, '')}`,
            }));

            // Create Calendar
            const calendar = $('#calendar').fullCalendar({
                locale: 'fr',
                buttonText: {
                    today: to_day_btn,
                    month: 'Mois',
                    week: 'Semaine',
                    day: 'Jour',
                },
                firstDay: 1,
                dayNames: days,
                dayNamesShort: daysShort,
                monthNames: months,
                monthNamesShort: monthsShort,
                defaultView: 'month',
                timeZone: 'local',
                editable: true,
                selectable: true,
                events: events,
                eventRender: function(event, element) {
                    element.bind('click', function() {
                        // Show toast Bootstrap
                        var toastEl = document.getElementById('busToast');
                        toastEl.style.backgroundColor = state_bus_colors[event.groupId];
                        var bsToast = new bootstrap.Toast(toastEl, {
                            autohide: true,
                            delay: 2500
                        });
                        var toastBody = toastEl.querySelector('.toast-body');
                        toastBody.innerHTML = '<b>' + event.title + ' ' + event.groupId +
                            ' pour ' +
                            event.description +
                            '<b>';
                        bsToast.show();

                    });
                }
            }); //end fullCalendar block
            // $('#calendar').fullCalendar('render');


        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error fetching events');
        });
}
</script>

<?php $content = ob_get_clean();

require_once('src/views/layouts/main.php') ?>