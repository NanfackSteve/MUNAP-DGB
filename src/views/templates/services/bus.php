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
            <div class="modal fade" id="calendarModal" tabindex="-1" aria-labelledby="calendarModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Body -->
                        <div class="modal-body">
                            <?php if (empty($bus_datas)) : ?>
                                <div class="alert alert-primary d-flex align-items-center mb-0" role="alert">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                    <div>
                                        <?= $lang['services']['bus_location']['calendar']['no_reservation'] ?>
                                        <small><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></small>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div id='calendar'></div>
                                <div class="toast-container ">
                                    <div id="busToast" class="toast fade text-white rounded border-0" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-body"></div>
                                    </div>
                                </div>
                            <?php endif; ?>
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
                    <a target="_blank" download="Formulaire_Bus.pdf" href="files/Formulaire_Bus.pdf" class="card-link"><?= $lang['services']['download'] ?></a>
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
                    <a target="_blank" download="Formulaire_Bus.pdf" href="files/Formulaire_Bus.pdf" class="card-link"><?= $lang['services']['download'] ?></a>
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
                    <a target="_blank" download="Formulaire_Bus.pdf" href="files/Formulaire_Bus.pdf" class="card-link"><?= $lang['services']['download'] ?></a>
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

        // *** Start Calendar Configuration

        // Choose Day Lang
        const days = JSON.parse('<?= json_encode($lang['services']['bus_location']['calendar']['days']) ?>');
        const daysShort = JSON.parse('<?= json_encode($lang['services']['bus_location']['calendar']['days_short']) ?>');

        // Choose Months Lang
        const months = JSON.parse('<?= json_encode($lang['services']['bus_location']['calendar']['months']) ?>');
        const monthsShort = JSON.parse('<?= json_encode($lang['services']['bus_location']['calendar']['months_short']) ?>');

        // Choose ToDay btn
        const to_day_btn = <?= json_encode($lang['services']['bus_location']['calendar']['to_day_btn']) ?>;

        // Define color event
        const state_bus_colors = {
            "Réservé": '#ed7f10',
            "Confirmé": '#ff0000'
        };

        // *** End Calendar Configuration

        // Check if bus_datas is empty
        const bus_list = JSON.parse('<?= json_encode($bus_datas) ?>');
        let events = [];

        // if empty !
        if (bus_list.length !== 0) {

            // Add 1 day to end
            bus_list.forEach(function(bus) {
                var dateFin = moment(bus['date_fin_location']).add(1, 'day');
                bus['date_fin_location'] = dateFin.format('YYYY-MM-DD');
            });

            // Create Events List for Calendar
            events = bus_list.map((item, index) => ({
                title: `${item.nom_vehicule}`,
                start: item['date_debut_location'],
                end: item['date_fin_location'],
                color: state_bus_colors[`${item.statut_location}`],
                groupId: `${item.statut_location}`,
                description: `${(item.motif).replace(/(.*)(pour)/, '')}`,
                // description: `${(item.motif).replace(/(Réservation)(.*)(pour)/, '')}`,
            }));
        }

        // Create Calendar
        const calendar = $('#calendar').fullCalendar({
            locale: 'fr',
            buttonText: {
                today: to_day_btn,
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
                        ' pour ' + event.description + '<b>';
                    bsToast.show();

                });
            }
        }); //end fullCalendar block
        // $('#calendar').fullCalendar('render');
    }
</script>

<?php $content = ob_get_clean();

require_once('src/views/layouts/main.php') ?>