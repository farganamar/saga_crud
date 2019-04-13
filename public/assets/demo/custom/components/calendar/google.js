var CalendarGoogle = function() {

    return {
        //main function to initiate the module
        init: function() {
            var todayDate = moment().startOf('day');
            var YM = todayDate.format('YYYY-MM');
            var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
            var TODAY = todayDate.format('YYYY-MM-DD');
            var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

            console.log(YM+'-01');

            $('#m_calendar').fullCalendar({
                isRTL: mUtil.isRTL(),
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,listYear'
                },
                

                displayEventTime: true, // don't show the time column in list view

                // THIS KEY WON'T WORK IN PRODUCTION!!!
                // To make your own Google API key, follow the directions here:
                // http://fullcalendar.io/docs/google_calendar/
                googleCalendarApiKey: 'AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE',

                // US Holidays
                // events: 'en.usa#holiday@group.v.calendar.google.com',
                events:
                 [{
                        title: 'All Day Event',
                        start: '2019-02-01',
                        description: 'Lorem ipsum dolor sit incid idunt ut',
                        className: "m-fc-event--danger m-fc-event--solid-warning"
                    },
                    {
                        title: 'All Day Event',
                        start: '2019-02-01',
                        description: 'Lorem ipsum dolor sit incid idunt ut',
                        className: "m-fc-event--danger m-fc-event--solid-warning"
                    },
                    {
                        title: 'Reporting',
                        start: YM + '-14T13:30:00',
                        description: 'Lorem ipsum dolor incid idunt ut labore',
                        end: YM + '-14',
                        className: "m-fc-event--accent"
                    },
                    {
                        title: 'Company Trip',
                        start: YM + '-02',
                        description: 'Lorem ipsum dolor sit tempor incid',
                        end: YM + '-03',
                        className: "m-fc-event--primary"
                    },
                    {
                        title: 'ICT Expo 2017 - Product Release',
                        start: YM + '-03',
                        description: 'Lorem ipsum dolor sit tempor inci',
                        end: YM + '-05',
                        className: "m-fc-event--light m-fc-event--solid-primary"
                    },
                    {
                        title: 'Dinner',
                        start: YM + '-12',
                        description: 'Lorem ipsum dolor sit amet, conse ctetur',
                        end: YM + '-10'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: YM + '-09T16:00:00',
                        description: 'Lorem ipsum dolor sit ncididunt ut labore',
                        className: "m-fc-event--danger"
                    },
                    {
                        id: 1000,
                        title: 'Repeating Event',
                        description: 'Lorem ipsum dolor sit amet, labore',
                        start: YM + '-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: YESTERDAY,
                        end: TOMORROW,
                        description: 'Lorem ipsum dolor eius mod tempor labore',
                        className: "m-fc-event--accent"
                    },
                    {
                        title: 'Meeting',
                        start: TODAY + 'T10:30:00',
                        end: TODAY + 'T12:30:00',
                        description: 'Lorem ipsum dolor eiu idunt ut labore'
                    },
                    {
                        title: 'Lunch',
                        start: TODAY + 'T12:00:00',
                        className: "m-fc-event--info",
                        description: 'Lorem ipsum dolor sit amet, ut labore'
                    },
                    {
                        title: 'Meeting',
                        start: TODAY + 'T14:30:00',
                        className: "m-fc-event--warning",
                        description: 'Lorem ipsum conse ctetur adipi scing'
                    },
                    {
                        title: 'Happy Hour',
                        start: TODAY + 'T17:30:00',
                        className: "m-fc-event--metal",
                        description: 'Lorem ipsum dolor sit amet, conse ctetur'
                    },
                    {
                        title: 'Dinner',
                        start: TODAY + 'T20:00:00',
                        className: "m-fc-event--solid-focus m-fc-event--light",
                        description: 'Lorem ipsum dolor sit ctetur adipi scing'
                    },
                    {
                        title: 'Birthday Party',
                        start: TOMORROW + 'T07:00:00',
                        className: "m-fc-event--primary",
                        description: 'Lorem ipsum dolor sit amet, scing'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://mpmsr.com/',
                        start: YM + '-28',
                        className: "m-fc-event--solid-info m-fc-event--light",
                        description: 'Lorem ipsum dolor sit amet, labore'
                    }
                ],


                eventClick: function(event) {
                    // opens events in a popup window
                    window.open(event.url, 'gcalevent', 'width=700,height=600');
                    return false;
                },

                loading: function(bool) {
                    return;

                    /*
                    mApp.block(portlet.getSelf(), {
                        type: 'loader',
                        state: 'success',
                        message: 'Please wait...'
                    });
                    */
                },

                eventRender: function(event, element) {
                    if (!event.description) {
                        return;
                    }

                    if (element.hasClass('fc-day-grid-event')) {
                        element.data('content', event.description);
                        element.data('placement', 'top');
                        mApp.initPopover(element);
                    } else if (element.hasClass('fc-time-grid-event')) {
                        element.find('.fc-title').append('<div class="fc-description">' + event.description + '</div>');
                    } else if (element.find('.fc-list-item-title').lenght !== 0) {
                        element.find('.fc-list-item-title').append('<div class="fc-description">' + event.description + '</div>');
                    }
                }
            });
        }
    };
}();

jQuery(document).ready(function() {
    CalendarGoogle.init();
});
