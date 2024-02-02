<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS for full calender -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />
        <!-- JS for jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- JS for full calender -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
        <!-- bootstrap css and js -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    </head>

    <body>

        <div id='calendar'></div>

        <script>
        $(document).ready(function() {
            display_events();
        }); //end document.ready block

        function display_events() {
            fetch('src/models/test-bus.json')
                .then(response => response.json())
                .then(data => {
                    const result = data;
                    const events = result.map(item => ({
                        title: `Bus ${item.id}`,
                        start: item['date-debut'],
                        end: item['date-fin'],
                        allDay: true,
                        display: 'none',
                    }));

                    const calendar = $('#calendar').fullCalendar({
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
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error fetching events');
                });
        }
        </script>
    </body>

</html>