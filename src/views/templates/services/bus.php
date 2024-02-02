<?php $title_page = $lang['services']['title-page']; ?>

<?php ob_start(); ?>

<!-- Prestations Start -->
<div class="container">

    <div class="row">
        <div class="col-sm-12 col-lg-12 p-4">
            <!-- Button Calendar modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#calendarModal">
                <i class="fa fa-eye me-1"></i><?= $lang['services']['calendar-btn'] ?>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="calendarModal" tabindex="-1" aria-labelledby="calendarModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="calendarModalLabel">
                                <?= $lang['services']['calendar-modal-title'] ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id='calendar'></div>
                        </div>
                        <div class="modal-footer" style="width: 100%; height: 100%; overflow: hidden;">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal"><?= $lang['services']['close'] ?></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="row mt-2 g-4 ">
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
            // console.log(data)

            const colors = ['#706e67d9', '#AB7442', '#eca80acf'];

            const result = data;
            const events = result.map((item, index) => ({
                title: `Bus ${item.id}`,
                start: item['date-debut'],
                end: item['date-fin'],
                color: colors[index],
                allDay: true,
                display: 'none',
            }));

            const calendar = $('#calendar').fullCalendar({
                locale: 'fr',
                buttonText: {
                    today: 'Aujourd\'hui',
                    month: 'Mois',
                    week: 'Semaine',
                    day: 'Jour',
                },
                dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
                dayNamesShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
                monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août',
                    'Septembre', 'Octobre', 'Novembre', 'Décembre'
                ],
                monthNamesShort: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct',
                    'Nov', 'Déc'
                ],
                defaultView: 'month',
                timeZone: 'local',
                editable: true,
                selectable: true,
                selectHelper: true,
                events: events,
                eventRender: function(event, element, view) {
                    element.bind('click', function() {
                        alert(event.title);
                    });
                }
            }); //end fullCalendar block
            $('#calendar').fullCalendar('render');


        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error fetching events');
        });
}
</script>

<?php $content = ob_get_clean();

require_once('src/views/layouts/main.php') ?>