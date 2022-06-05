

$(function () {

    // var $disabledResults = $(".js-example-responsive2");
    // $disabledResults.select2();


    var calendarEl = document.getElementById('calendar');
    // var now = moment().format();
    // var hora = moment().format("HH:mm:ss");
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            center: 'dayGridMonth,listWeek' // buttons for switching between views
        },
        initialView: 'dayGridMonth',
        editable: true,
        droppable: true,
        // titleFormat: 'MMMM D, YYYY',
        dayMaxEvents: true,
        locale: 'pt-br',
        selectable: true,
        displayEventTime: false,
        events: {
            url: 'agendamento/all',
        },
       

        
        eventClick: function (info) {
            $('#addSchedule').modal({
                backdrop: 'static',
                keyboard: false,
            });
            calendar.render();
        }
    });
        calendar.render();
        
    });
