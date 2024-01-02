
@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
        .botao-login {
            text-align: center;
            background-color: #8d2619;
            border-radius: 17px;
            color: white !important;
            font-family: 'Outfit', sans-serif !important;
            font-weight: 700;
            font-size: 50px;
            margin-top: 10px;
            width: 100%;
            padding: 0 !important;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            display: flex;
            align-items:center;
            justify-content: center;
            border: none;
        }
        .botao-login:hover{
            box-shadow: 0px 15px 25px -5px rgba(darken(dodgerblue, 40%));
            transform: scale(1.03);
        }
        .botao-login:active{
            box-shadow: 0px 4px 8px rgba(darken(dodgerblue, 30%));
            transform: scale(.98);
        }
        .timer{
            background-color: #ffffff;
            color: #591616;
            font-size: 60px;
            text-align: center;
            font-weight: 700;
            padding: 10px;
            margin: auto;
            width: 100%;
            border-radius: 17px;
            display: flex;
            align-items:center;
            justify-content: center;
        }
        .time{
            color: #591616;
            font-size: 60px;
            font-weight: 700;
        }
        .card-task{
            margin: 30px;
            border-radius: 17px;
            background-color: #ffffffb8;
            min-height: 450px;
        }
        .title-task{
            font-style: normal;
            font-weight: 500;
            font-size: 45px;
            color: #591616;
            text-align: center;
        }
        .text-task{
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 25px;
            color: #591616;
            text-align: center;
            padding: 5px;
            margin-bottom: 0;
        }
    </style>
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <span style="font-size: 2.5rem; margin: 0; font-weight: 700; color: #591616;">Pomodoro board</span>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6" style="margin-bottom: 30px;">
                    <div class="card" style="width: 35%; float: right; background-color: transparent; box-shadow: none;">
                        <div class="card-body timer">
                            <!-- <span class="time" id="relogio">25:00</span> -->
                            <!-- 25:00 -->
                            <span class="time" id="minutos">25</span>
                            <span class="time" >:</span>
                            <span class="time" id="segundos">00</span>

                            <img src="../assets/tecnica-pomodoro (3).png" style="height: 63px; vertical-align:middle">
                        </div>
                        <div id="filler"></div>
                        <button class="botao-login" id="timer_button" value="start" onclick="timer_function(this.value)">
                            <img src="../assets/botao-play-ponta-de-seta.png" style="height: 45px;"> &nbsp;START
                        </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card" style="width: 50%; float: left; margin-left: 30px; background-color: transparent; box-shadow: none;">
                        <div class="card-body">
                            <img src="../assets/Ellipse_1.png" style="height: 45px;">
                            <img src="../assets/Line_1.png">
                            <img src="../assets/Ellipse_2.png" style="height: 45px;"><br>
                            <span style="margin-left: 5px; color:#591616; font-weight: 300;">Foco</span>
                            <span style="margin-left: 57px; color:#591616; font-weight: 300;">Descanso</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10" style="margin: auto">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card card-task">
                                <br>
                                <button class="button-user-delete" onclick="modal_create()">criar</button>
                                <img src="../assets/plus_create.png" style="top: 0; right: 0; float: right; text-align: end; position: absolute; margin: 7px;">
                                <p class="title-task">To do</p>
                                <div class="card-body" style="padding: 5px">
                                    <div class="card" style="background: #F4F4F4; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px;">
                                        <p class="text-task">Crie as tarefas a fazer no dia!</p>
                                        <img src="../assets/plus_button.png" style="width: 50px; margin: auto; margin-bottom: 10px; ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-task">
                                <br>
                                <p class="title-task">Doing</p>
                                <div class="card-body" style="padding: 5px">
                                    <div class="card" style="background: #F4F4F4; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px;">
                                        <p class="text-task" >Arraste as tarefas que iniciou a fazer aqui!</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-task">
                                <br>
                                <p class="title-task">Done</p>
                                <div class="card-body" style="padding: 5px">
                                    <div class="card" style="background: #F4F4F4; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px;">
                                        <p class="text-task" >Arraste as tarefas finalizadas aqui!</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        // function startTimer(duration, display, action) {
        //     var timer = duration, minutes, seconds;
        //     setInterval(function () {
        //         minutes = parseInt(timer / 60, 10);
        //         seconds = parseInt(timer % 60, 10);
        //         minutes = minutes < 10 ? "0" + minutes : minutes;
        //         seconds = seconds < 10 ? "0" + seconds : seconds;
        //         display.textContent = minutes + ":" + seconds;
        //         if (--timer < 0) {
        //             timer = duration;
        //         }
        //     }, 1000);
        // }
        // function timer_function(action){
        //     console.log(action);
        //     display = document.querySelector('#relogio'); // selecionando o timer
        //     if(action == 'start'){
        //         var duration = 60 * 25; // Converter para segundos
        //         startTimer(duration, display, 'start'); // iniciando o timer
        //         document.getElementById("timer_button").value = "stop";
        //         document.getElementById("timer_button").innerHTML = '<img src="../assets/botao-play-ponta-de-seta.png" style="height: 45px;"> &nbsp;STOP';
        //     }else if(action == 'stop'){
        //         startTimer('0', display, 'stop'); // iniciando o timer
        //         // clearInterval(temporizador);
        //         document.getElementById("timer_button").value = "start";
        //         document.getElementById("timer_button").innerHTML = '<img src="../assets/pausa.png" style="height: 45px;"> &nbsp;START';
        //     }
        //     console.log(window)
        // }

        function modal_create(){
            console.log('teste');
            $('#modal-add').modal('show');
        }
        var pomodoro = {
            started : false,
            minutes : 0,
            seconds : 0,
            fillerHeight : 0,
            fillerIncrement : 0,
            interval : null,
            minutesDom : null,
            secondsDom : null,
            fillerDom : null,
            init : function(){
                var self = this;
                this.minutesDom = document.querySelector('#minutos');
                this.secondsDom = document.querySelector('#segundos');
                this.fillerDom = document.querySelector('#filler');
                this.interval = setInterval(function(){
                    self.intervalCallback.apply(self);
                }, 1000);
                document.querySelector('#timer_button').onclick = function(){
                    if(document.querySelector('#timer_button').value == 'start'){
                        self.startWork.apply(self);
                        document.getElementById("timer_button").value = "stop";
                        document.getElementById("timer_button").innerHTML = '<img src="../assets/pausa.png" style="height: 45px;"> &nbsp;STOP';
                    }else if(document.querySelector('#timer_button').value == 'stop'){
                        self.stopTimer.apply(self);
                        document.getElementById("timer_button").value = "start";
                        document.getElementById("timer_button").innerHTML = '<img src="../assets/botao-play-ponta-de-seta.png" style="height: 45px;"> &nbsp;START';
                    }
                };
                // document.querySelector('#shortBreak').onclick = function(){
                //     self.startShortBreak.apply(self);
                // };
                // document.querySelector('#longBreak').onclick = function(){
                //     self.startLongBreak.apply(self);
                // };
                // document.querySelector('#stop').onclick = function(){
                //     self.stopTimer.apply(self);
                // };
            },
            resetVariables : function(mins, secs, started){
                this.minutes = mins;
                this.seconds = secs;
                this.started = started;
                this.fillerIncrement = 200/(this.minutes*60);
                this.fillerHeight = 0;
            },
            startWork: function() {
                this.resetVariables(25, 0, true);
            },
            startShortBreak : function(){
                this.resetVariables(5, 0, true);
            },
            startLongBreak : function(){
                this.resetVariables(15, 0, true);
            },
            stopTimer : function(){
                this.resetVariables(25, 0, false);
                this.updateDom();
            },
            toDoubleDigit : function(num){
                if(num < 10) {
                    return "0" + parseInt(num, 10);
                }
                return num;
            },
            updateDom : function(){
                this.minutesDom.innerHTML = this.toDoubleDigit(this.minutes);
                this.secondsDom.innerHTML = this.toDoubleDigit(this.seconds);
                this.fillerHeight = this.fillerHeight + this.fillerIncrement;
                this.fillerDom.style.height = this.fillerHeight + 'px';
            },
            intervalCallback : function(){
                if(!this.started) return false;
                if(this.seconds == 0) {
                    if(this.minutes == 0) {
                        this.timerComplete();
                        return;
                    }
                    this.seconds = 59;
                    this.minutes--;
                } else {
                    this.seconds--;
                }
                this.updateDom();
            },
            timerComplete : function(){
                this.started = false;
                this.fillerHeight = 0;
            }
        };
        window.onload = function(){
            pomodoro.init();
        };
    </script>
@endsection
