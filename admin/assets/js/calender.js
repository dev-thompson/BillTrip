  document.addEventListener('DOMContentLoaded', function() {
    var srcCalendarEl = document.getElementById('source-calendar');

    var srcCalendar = new FullCalendar.Calendar(srcCalendarEl, {
      editable: true,
      initialDate: '2025-07-20',
  
      eventLeave: function(info) {
        console.log('event left!', info.event);
      }
    });

    srcCalendar.render();
  });