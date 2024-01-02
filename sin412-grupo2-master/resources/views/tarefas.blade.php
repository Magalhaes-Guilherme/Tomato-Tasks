
@extends('layouts.app')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="../assets/tomato tasks logo icon.png" type="image/x-icon">
    <style>
        .accordion-flush .accordion-item {
            border-top: 0;
            margin: 10px;
            box-shadow: 0px 4px 4px rgb(0 0 0 / 25%);
            border-radius: 17px;
        }
        .accordion-header {
            border-radius: 17px;
        }
        .accordion-flush .accordion-item .accordion-button {
            border-radius: 17px;
            font-family: 'Outfit';
            font-style: normal;
            font-weight: 500;
            font-size: 26px;
            line-height: 40px;
            text-decoration-line: underline;
            color: #591616;
            padding: 10px;
        }
        .accordion-item:last-of-type .accordion-button.collapsed {
            border-radius: 17px;
        }
        .accordion-body{
            font-family: 'Outfit';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 30px;
            color: #591616;
        }
        .accordion-button:not(.collapsed){
            background-color: white;
        }
        .accordion-button:focus {
            outline:0 !important;
        }
        .info-card{
            border-radius: 17px;
            background-color: #ffffffb8;
            box-shadow: 0 2px 4px 0 rgb(0 0 0 / 10%), 0 3px 10px 0 rgb(0 0 0 / 9%);
            padding: 20px;
        }
    </style>
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <span style="font-size: 2.5rem; margin: 0; font-weight: 700; color: #591616;">Histórico de tarefas</span>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion accordion-flush" id="accordionFlush">
                        @isset($tarefas)
                            @foreach($tarefas as $data => $dados)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-{{$data}}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-{{$data}}" aria-expanded="false" aria-controls="flush-collapse-{{$data}}">
                                           {{ (new Datetime($data))->format('d/m/Y') }}
                                    </button>
                                    </h2>
                                    <div id="flush-collapse-{{$data}}" class="accordion-collapse collapse" aria-labelledby="flush-{{$data}}" data-bs-parent="#accordionFlush">
                                        <div class="row" style="padding: 20px; font-size: 0.9rem;">
                                            @foreach($dados as $tarefa)
                                                <div class="col-lg-6" style="padding:10px; padding-left: 20px; padding-right: 20px;">
                                                    <div class="row info-card">
                                                        <div class="col-lg-12">
                                                            <strong style="font-size: 1.1rem; color: #8C1515">Tarefa {{ $tarefa->id}}</strong> @if(Auth::user()->papel == 'admin')<small>- {{ $tarefa->user->name }}</small>@endif
                                                            <br>
                                                            <br>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <p style="color: #591616; font-weight: 500;">Título&nbsp;&nbsp;</p>
                                                            <span>{{ $tarefa->titulo }}</span>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <p style="color: #591616; font-weight: 500;">Descrição&nbsp;&nbsp;</p>
                                                            <span>{{ $tarefa->descricao }}</span>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <p style="color: #591616; font-weight: 500;">Complexidade&nbsp;&nbsp;</p>
                                                            <span style="text-transform:capitalize;">{{ $tarefa->complexidade }}</span>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <hr>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <p style="color: #591616; font-weight: 500;">Prioridade&nbsp;&nbsp;</p>
                                                            <span style="text-transform:capitalize;">{{ $tarefa->prioridade }}</span>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <p style="color: #591616; font-weight: 500;">Tipo de ciclo&nbsp;&nbsp;</p>
                                                            <span style="text-transform:capitalize;">{{ $tarefa->ciclo->label }}</span>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <p style="color: #591616; font-weight: 500;">Quantidade de ciclos&nbsp;&nbsp;</p>
                                                            <span>{{ $tarefa->qtd_ciclos }}</span>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <p style="color: #591616; font-weight: 500;">Tempo a tarefa&nbsp;&nbsp;</p>
                                                            <span>{{ $tarefa->tempo }}</span><span> &nbsp;min</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection
