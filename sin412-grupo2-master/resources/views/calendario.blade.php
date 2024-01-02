
@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <style>
        /* body {
            font: 20px &#39;
            work sans&#39;
            , sans-serif;
            color: #fff;
            background: #942222;
        }
        * {
            box-sizing: border-box;
            transition: all 0.1s ease-in;
        }
        .container {
            width: 90%;
            max-width: 700px;
            margin: 0 auto;
            text-align: center;
        }
        h1 {
            position: relative;
            background: #942222;
            margin-bottom: 1em;
            display: inline-block;
            padding: 0 10px;
        }
        @media (min-width: 700px) {
            .border:before {
                content: &#34;
                &#34;
                ;
                height: 3px;
                border-top: 1px solid #fff;
                border-bottom: 1px solid #fff;
                position: absolute;
                width: 200%;
                top: 50%;
                left: -50%;
                z-index: -1;
            }
        }
        .toggle-button-container {
            width: 50%;
            float: left;
        }
        button {
            display: inline-block;
            height: 38px;
            padding: 0 10px;
            color: #fff;
            text-align: center;
            font-size: 20px;
            font-weight: 600;
            line-height: 38px;
            text-transform: uppercase;
            text-decoration: none;
            white-space: nowrap;
            background-color: transparent;
            border-radius: 10px;
            border: 1px solid #bd3737;
            cursor: pointer;
        }
        button:hover {
            background: #bd3737;
        }
        button[disabled] {
            cursor: not-allowed;
            background: #a54f4f;
        }
        #button-container {
            max-width: 300px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
        }
        .toggle-timer {
            width: 50px;
            margin: 0 0.1em;
        }
        #session-length, #break-length {
            width: 40px;
            height: 40px;
            line-height: 37px;
            margin-bottom: 0.4em;
            display: inline-block;
            background: #fff;
            color: #942222;
            border: solid 1px #bd3737;
            border-radius: 50%;
        }
        header {
            margin-bottom: 0.4em;
        }
        #countdown {
            font-size: 4em;
            cursor: pointer;
            text-align: center;
        }
        #countdown-container {
            padding-top: 1em;
            display: inline-block;
            text-align: center;
            margin-bottom: 2em;
        }
        @media (min-width: 600px) {
            #countdown-container {
                width: 16em;
                height: 16em;
                padding-top: 5em;
                border-radius: 50%;
                border: 4px solid #bd3737;
            }
        }
        .break {
            background: #25857d;
            border-color: #98c3a1 !important;
        }
        .break button {
            border-color: #98c3a1;
        }
        .break button:hover {
            background: #98c3a1;
        }
        .break button[disabled] {
            cursor: not-allowed;
            background: #a8b3aa;
        } */
    /* .inputGroup {
        background-color: #fff;
        display: block;
        margin: 10px 0;
        position: relative;
    }
    .inputGroup label {
      padding: 12px 30px;
      width: 100%;
      display: block;
      text-align: left;
      color: #3C454C;
      cursor: pointer;
      position: relative;
      z-index: 2;
      transition: color 200ms ease-in;
      overflow: hidden;
    }
    .inputGroup label::before {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        content: '';
        background-color: #5562eb;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%) scale3d(1, 1, 1);
        transition: all 300ms cubic-bezier(0.4, 0.0, 0.2, 1);
        opacity: 0;
        z-index: -1;
    }

    .inputGroup label::after {
        width: 32px;
        height: 32px;
        content: '';
        border: 2px solid #D1D7DC;
        background-color: #fff;
        background-image: url("data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.414 11L4 12.414l5.414 5.414L20.828 6.414 19.414 5l-10 10z' fill='%23fff' fill-rule='nonzero'/%3E%3C/svg%3E ");
        background-repeat: no-repeat;
        background-position: 2px 3px;
        border-radius: 50%;
        z-index: 2;
        position: absolute;
        right: 30px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        transition: all 200ms ease-in;
    }


    .inputGroup input:checked ~ label {
      color: #fff;
    }

    .inputGroup input:checked ~ label::before {
        transform: translate(-50%, -50%) scale3d(56, 56, 1);
        opacity: 1;
      }

    .inputGroup input:checked ~ label::after {
        background-color: #54E0C7;
        border-color: #54E0C7;
      }

    .inputGroup input {
        width: 32px;
        height: 32px;
        order: 1;
        z-index: 2;
        position: absolute;
        right: 30px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        visibility: hidden;
    } */
        input[type="radio"] {
            position: absolute;
            opacity: 0;
            z-index: -1;
        }
        label {
            position: relative;
            margin-right: 1em;
            padding-left: 2em;
            padding-right: 1em;
            line-height: 2;
            cursor: pointer;
        }
        label::before {
            box-sizing: border-box;
            content: " ";
            position: absolute;
            top: 0.3em;
            left: 0;
            display: block;
            width: 1.4em;
            height: 1.4em;
            border: 2px solid red !important;
            border-radius: .25em;
            z-index: -1;
        }
        input[type="radio"] + label::before {
            border-radius: 1em;
        }

        input[type="radio"]:checked + label {
            padding-left: 1em;
            color: #8C1515;
        }
        input[type="radio"]:checked + label::before {
            top: 0;
            width: 100%;
            height: 2em;
            background: #8C1515 !important;
        }
        label,
            label::before {
            -webkit-transition: .25s all ease;
            -o-transition: .25s all ease;
            transition: .25s all ease;
        }
    </style>
@endsection

@section('content')
    <!-- <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <span style="font-size: 2.5rem; margin: 0; font-weight: 700; color: #591616;">Calendário</span>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    </div>
                </div>
                <div id='full_calendar_events'></div>        </div>
    </section> -->
    <!-- <div class="inputGroup">
                                                            <input id="radio1" name="radio" type="radio"/>
                                                            <label for="radio1">Yes</label>
                                                        </div> -->
    <div class="container">
        <h1 class="border">Pomodoro Timer</h1>
        <div class="container">
            <time style="display: none;" id="session-length"></time>
            <time style="display: none;" id="break-length"></time>

            <!-- <div class="toggle-button-container" id="sessionlength-container">
                <header>Session Length</header>
                <time id="session-length"></time>
                <div class="toggle-button-container__sub-container"></div>
                <button class="toggle-timer" type="button" id="decrease-session">-
                    <button class="toggle-timer" type="button" id="increase-session">+</button>
                </button>
            </div>
            <div class="toggle-button-container" id="breaklength-container">
                <header>Break Length</header>
                <time id="break-length"></time>
                <div class="toggle-button-container__sub-container">
                    <button class="toggle-timer" type="button" id="decrease-break">-</button>
                    <button class="toggle-timer" type="button" id="increase-break">+</button>
                </div>
            </div> -->
            <div id="countdown-container">
                <header id="type">work session</header>
                <time id="countdown"></time>
            </div>
            <div id="button-container">
                <button type="button" id="start-session">Start</button>
                <button type="button" id="stop-session">Stop</button>
                <button type="button" id="reset-session">Reset</button>
            </div>
            <br>
            <div class="group">
                <input type="radio" name="rb" id="rb1" />
                <label for="rb1">Tarefa 1</label>
                <input type="radio" name="rb" id="rb2" />
                <label for="rb2">Tarefa 2</label>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function () {
            var SITEURL = "{{ url('/') }}";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var calendar = $('#full_calendar_events').fullCalendar({
                editable: true,
                editable: true,
                events: SITEURL + "/calendar-event",
                displayEventTime: true,
                eventRender: function (event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                selectable: true,
                selectHelper: true,
                select: function (event_start, event_end, allDay) {
                    var event_name = prompt('Event Name:');
                    if (event_name) {
                        var event_start = $.fullCalendar.formatDate(event_start, "Y-MM-DD HH:mm:ss");
                        var event_end = $.fullCalendar.formatDate(event_end, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                            url: SITEURL + "/calendar-crud-ajax",
                            data: {
                                event_name: event_name,
                                event_start: event_start,
                                event_end: event_end,
                                type: 'create'
                            },
                            type: "POST",
                            success: function (data) {
                                displayMessage("Event created.");
                                calendar.fullCalendar('renderEvent', {
                                    id: data.id,
                                    title: event_name,
                                    start: event_start,
                                    end: event_end,
                                    allDay: allDay
                                }, true);
                                calendar.fullCalendar('unselect');
                            }
                        });
                    }
                },
                eventDrop: function (event, delta) {
                    var event_start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                    var event_end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                    $.ajax({
                        url: SITEURL + '/calendar-crud-ajax',
                        data: {
                            title: event.event_name,
                            start: event_start,
                            end: event_end,
                            id: event.id,
                            type: 'edit'
                        },
                        type: "POST",
                        success: function (response) {
                            displayMessage("Event updated");
                        }
                    });
                },
                eventClick: function (event) {
                    var eventDelete = confirm("Are you sure?");
                    if (eventDelete) {
                        $.ajax({
                            type: "POST",
                            url: SITEURL + '/calendar-crud-ajax',
                            data: {
                                id: event.id,
                                type: 'delete'
                            },
                            success: function (response) {
                                calendar.fullCalendar('removeEvents', event.id);
                                displayMessage("Event removed");
                            }
                        });
                    }
                }
            });
        });
        function displayMessage(message) {
            toastr.success(message, 'Event');
        }
        var pomodoro = {
            init: function() {

                this.domVariables();
                this.timerVariables();
                this.bindEvents();
                this.updateAllDisplays();
                this.requestNotification();
            },
            // Define notifications to be used by Pomodoro
            breakNotification: undefined,
            workNotification: undefined,
            domVariables: function() {

                // Toggle timer buttons
                this.toggleTimerBtns = document.getElementsByClassName( "toggle-timer" );
                // this.increaseSession = document.getElementById( "increase-session" );
                // this.decreaseSession = document.getElementById( "decrease-session" );
                // this.increaseBreak   = document.getElementById( "increase-break" );
                // this.decreaseBreak   = document.getElementById( "decrease-break" );

                // Timer display
                this.sessionLengthDisplay = document.getElementById( "session-length" );
                this.breakLengthDisplay   = document.getElementById( "break-length" );

                // Countdown
                this.countdownDisplay   = document.getElementById( "countdown" );
                this.typeDisplay        = document.getElementById( "type" );
                this.resetCountdownBtn  = document.getElementById( "reset-session" );
                this.stopCountdownBtn   = document.getElementById( "stop-session" );
                this.startCountdownBtn  = document.getElementById( "start-session" );
                this.countdownContainer = document.getElementById( "countdown-container" );
            },
            timerVariables: function() {

                // Initial Length values
                this.sessionLength =  28;
                this.breakLength   =  5;

                // Define the variable that includes the setinterval method
                // If the clock is counting down, the value will be true, and
                // the counter will be stopped on click.
                this.timeinterval = false;
                this.workSession = true;
                this.pausedTime = 0;
                this.timePaused = false;
                this.timeStopped = false;
                // Request permission
            },
            bindEvents: function() {

                // Bind increase/ decrease session length to buttons
                // this.increaseSession.onclick = pomodoro.incrSession;
                // this.decreaseSession.onclick = pomodoro.decrSession;
                // this.increaseBreak.onclick = pomodoro.incrBreak;
                // this.decreaseBreak.onclick = pomodoro.decrBreak;

                // Bind start date to #countdown and countdown buttons
                this.countdownDisplay.onclick  = pomodoro.startCountdown;
                this.resetCountdownBtn.onclick = pomodoro.resetCountdown;
                this.stopCountdownBtn.onclick  = pomodoro.stopCountdown;
                this.startCountdownBtn.onclick = pomodoro.startCountdown;

            },
            updateAllDisplays: function() {

                // Change HTML of displays to reflect current values
                pomodoro.sessionLengthDisplay.innerHTML = this.sessionLength;
                pomodoro.breakLengthDisplay.innerHTML   = this.breakLength;
                pomodoro.countdownDisplay.innerHTML     = this.sessionLength + ":00";

                pomodoro.resetVariables();

            },
            requestNotification: function() {

                if (!("Notification" in window)) {
                return console.log("This browser does not support desktop notification");
                }



            },
            // incrSession: function() {

            //     if ( pomodoro.sessionLength < 59 ) {
            //     pomodoro.sessionLength += 1;
            //     pomodoro.updateAllDisplays();
            //     }

            // },
            // decrSession: function() {

            //     if (  pomodoro.sessionLength > 1 ) {
            //     pomodoro.sessionLength -= 1;
            //     pomodoro.updateAllDisplays();
            //     }

            // },
            // incrBreak: function() {

            //     if (  pomodoro.breakLength < 30 ) {
            //     pomodoro.breakLength += 1;
            //     pomodoro.updateAllDisplays();
            //     }

            // },
            // decrBreak: function() {

            //     if ( pomodoro.breakLength > 1 ) {
            //     pomodoro.breakLength -= 1;
            //     pomodoro.updateAllDisplays();
            //     }

            // },
            // Reset variables to initial values
            resetVariables: function() {

                pomodoro.timeinterval = false;
                pomodoro.workSession = true;
                pomodoro.pausedTime = 0;
                pomodoro.timeStopped = false;
                pomodoro.timePaused = false;

            },
            startCountdown: function() {

                pomodoro.disableButtons();
                // Toggle typeDisplay and background color between work and break
                pomodoro.displayType();

                // Pause pomodoro if countdown is currently running, otherwise start
                // countdown
                if ( pomodoro.timeinterval !== false ) {
                pomodoro.pauseCountdown();
                } else {
                // Set start and end time with system time and convert to
                // miliseconds to correctly meassure time ellapsed
                pomodoro.startTime = new Date().getTime();

                // Check if pomodoro has just been unpaused
                if ( pomodoro.timePaused === false ) {
                    pomodoro.unPauseCountdown();
                } else {
                    pomodoro.endTime = pomodoro.startTime + pomodoro.pausedTime;
                    pomodoro.timePaused = false;
                }

                // Run updateCountdown every 990ms to avoid lag with 1000ms,
                // Update countdown checks time against system time and updates
                // #countdown display
                pomodoro.timeinterval = setInterval(pomodoro.updateCountdown,990);
                }

            },
            updateCountdown: function() {

                // Get differnce between the current time and the
                // end time in miliseconds. difference = remaining time
                var currTime = new Date().getTime();
                var difference = pomodoro.endTime - currTime;

                // Convert remaining milliseconds into minutes and seconds
                var seconds = Math.floor( ( difference/1000 ) % 60 );
                var minutes = Math.floor( ( difference/1000 ) / 60 % 60 );

                // Add 0 to seconds if less than ten
                if ( seconds < 10 ) { seconds = "0" + seconds; }

                // Display remaining minutes and seconds, unless there is less than 1 second
                // left on timer. Then change to next session.
                if ( difference > 1000 ) {
                pomodoro.countdownDisplay.innerHTML = minutes + ":" + seconds;
                } else {
                pomodoro.changeSessions();
                }

            },
            changeSessions: function() {

                // Stop countdown
                clearInterval( pomodoro.timeinterval );

                pomodoro.playSound();

                // Toggle between workSession being active or not
                // This determines if break session or work session is displayed
                if ( pomodoro.workSession === true ) {
                pomodoro.workSession = false;
                } else {
                pomodoro.workSession = true;
                }

                // Stop countdown
                pomodoro.timeinterval = false;
                // Restart, with workSession changed
                pomodoro.startCountdown();

            },
            pauseCountdown: function() {

                    // Save paused time to restart clock at correct time
                    var currTime = new Date().getTime();
                    pomodoro.pausedTime = pomodoro.endTime - currTime;
                    pomodoro.timePaused = true;

                    // Stop the countdown on second click
                    clearInterval( pomodoro.timeinterval );


                    // Reset variable so that counter will start again on click
                    pomodoro.timeinterval = false;
            },
            unPauseCountdown: function() {
                if ( pomodoro.workSession === true ) {
                pomodoro.endTime = pomodoro.startTime + ( pomodoro.sessionLength * 60000 );
                } else {
                pomodoro.endTime = pomodoro.startTime + ( pomodoro.breakLength * 60000 );
                }
            },
            resetCountdown: function(){

                // Stop clock and reset variables
                clearInterval( pomodoro.timeinterval );
                pomodoro.resetVariables();

                // Restart variables
                pomodoro.startCountdown();

            },
            stopCountdown: function() {

                // Stop timer
                clearInterval( pomodoro.timeinterval );

                // Change HTML
                pomodoro.updateAllDisplays();

                // Reset Variables
                pomodoro.resetVariables();

                pomodoro.unDisableButtons();

            },
            displayType: function() {
                // Check what session is running and change appearance and text above
                // countdown depending on session (break or work)
                if ( pomodoro.workSession === true ) {
                pomodoro.typeDisplay.innerHTML = "work session";
                pomodoro.countdownContainer.className = pomodoro.countdownContainer.className.replace( "break", "" );
                } else {
                pomodoro.typeDisplay.innerHTML = "Break";
                if ( pomodoro.countdownContainer.className !== "break" ) {
                    pomodoro.countdownContainer.className += "break";
                }
                }

            },
            playSound: function() {

                var mp3 = "http://soundbible.com/grab.php?id=1746&type=mp3";
                var audio = new Audio(mp3);
                audio.play();

            },
            disableButtons: function() {

                for (var i = 0; i < pomodoro.toggleTimerBtns.length; i++) {
                pomodoro.toggleTimerBtns[i].setAttribute("disabled", "disabled");
                pomodoro.toggleTimerBtns[i].setAttribute("title", "Stop the countdown to change timer length");
                }

            },
            unDisableButtons: function() {

                for (var i = 0; i < pomodoro.toggleTimerBtns.length; i++) {
                pomodoro.toggleTimerBtns[i].removeAttribute("disabled");
                pomodoro.toggleTimerBtns[i].removeAttribute("title");
                }

            }
        };

        // Initialise on page load
        pomodoro.init();
    </script>
@endsection
