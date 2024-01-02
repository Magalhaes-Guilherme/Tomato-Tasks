
@extends('layouts.app')

@section('css')
    <link rel="shortcut icon" href="../assets/tomato tasks logo icon.png" type="image/x-icon">
    <style>
        .card{
            text-align:center;
            padding: 20px;
            margin: 10px;
            border-radius: 25px;
            background-color: #ffffffb8;
            /* min-height: 450px; */
        }
        h6{
            color: #565656;
            font-weight: 300;
        }
        h1{
            font-weight: 500;
            color: #591616;
            top: -15px;
            position: inherit;
        }
        .content img{
            height: 60px;
            width: 60px;
        }
    </style>
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <span style="font-size: 2.5rem; margin: 0; font-weight: 700; color: #591616;">Analytics</span>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @if(!empty($relatorio))
                    <!-- Tarefa finalizada -->
                    <div class="col-lg-2" style="padding: 20px;">
                        <div class="card">
                            <img src="data:image/png;base64,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">
                            <h1> {{ $relatorio['finalizadas'] }} </h1>
                            @if($relatorio['finalizadas'] == 1)
                                <h6>Tarefa finalizada</h6>
                            @else
                                <h6>Tarefas finalizadas</h6>
                            @endif
                        </div>
                    </div>
                    <!-- Tarefas interrompidas -->
                    <div class="col-lg-2" style="padding: 20px;">
                        <div class="card">
                            <img src="data:image/png;base64,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">
                            <h1> {{ $relatorio['interrompidas'] }} </h1>
                            <h6>Tarefas interrompidas</h6>
                        </div>
                    </div>
                    <!-- Média de ciclos por tarefa -->
                    <div class="col-lg-2" style="padding: 20px;">
                        <div class="card">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABmJLR0QA/wD/AP+gvaeTAAADc0lEQVR4nO3cvU7bUBjG8eeEqRxGjq+jlTp2bIpERZdeQRBIVRkD6gjdqprslUCVqi69hqSXQAtShy7dYKA4a47UoXEHMCXECf44H9h+fmMWH+lPTGy/PgARERERERERERERERERERHdK++Veuh7DbP4XFvLx0FDpTot4FtPqXc+jj9PGAR7LeD7fhC88nH8BdcHDJXqCOAQl38MT1akfNDX+qvrdaQJg2BPxPEuAAHg+bOlpd/90ejI5RqEy4P1lFqPgQNMfjPHAnjcjaJjl2u5rafUoxg4wvTaNrtR9NHVOpydskKlOikxYgix5TsGAHSj6DgGNgCMb3zcioFDl6cvJ6esW6epRAwhXm9fXHxwsYYsBlqftKU8FcAa/p89nJ6+rAepSoyE7yhWg1QtRsJnFGtBqhoj4SuKlSBVj5HwEcV4kLrESLiOYjRI3WIkXEYxFqSuMRKuohgJUvcYCRdRSgdpSoyE7SilgjQtRsJmlMJBmhojYStKoSBNj5GwESV3EMaYZDpKriCMkc5klMxBGGM+U1EyBWGMbExEuTMIY+RTNsrcIIxRTJkoM4MwRjlFo6QGYQwzikSZCsIYZuWNMhGEMezIE+U6yIwYYwFsbkfRgZOV19hA65MVKc8wHWW1LeXpQOsT4CpILwheAviEyW9MDCG2GMOcvtbHad8UAay1Fxd/DbT+4WXYmmZbAID+aPSzLeVZyjludUXKs77W3kc966Cn1DpS/i3EwMbOcPgZuHGKmvOP54WPKfC6CZXqIP0H09ZOFB0mH0z8yvI9RllXeX69Tl2HMIpZeS8lUq/UGcWMItd1M+9lMUo5RS+y597tZZRiytzxuPN5CKPkU/b2U6YnhoySjYl7gZmfqTPKfKZuzOaaOmGUdCbvkueey2KUSaYfWRSaXGSUSzaeHxWe7W16FFsP80pNvzc1is0nq6XfD2laFNuPuY28QdWUKC5mDoy9Y1j3KK4GQIy+hVvXKC6ncYy/p163KK5Ho6zs5FCXKD7m1KztdVL1KL6GBq3uBlTVKD4nOK3vl1W1KL7HaZ3sKFeVKL5jANwE89p92QTT6TaxabOtIo7fdofDLy7Xkaav9Xlbyj8CeHr1UXNmm0OlOvtK/e0tL+/6XsttoVJv9pUa+9pI2RtuNU5ERERERERERERERERERER5/ANomILedx5qTQAAAABJRU5ErkJggg==">
                            <h1> {{ number_format($relatorio['media_ciclos'], 1, '.', ''); }} </h1>
                            <h6>Média de ciclos / tarefa</h6>
                        </div>
                    </div>
                    <!-- Total de ciclos criados -->
                    <div class="col-lg-2" style="padding: 20px;">
                        <div class="card">
                            <img src="data:image/png;base64,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">
                            <h1> {{ $relatorio['total_ciclos'] }} </h1>
                            <h6>Total de ciclos</h6>
                        </div>
                    </div>
                    <!-- Total de tempo de foco -->
                    <div class="col-lg-2" style="padding: 20px;">
                        <div class="card">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABmJLR0QA/wD/AP+gvaeTAAANjElEQVR4nO2bf3Bc1XXHP+e+1Qosy8by3reKDcbDLw/gzpSENhhw+ZUxM0lDABODOwkZChhSO2ltrWyDoVUzYLB2ZVPCL5ukDfEEMBNgCNN0QguNwU75EZhOg6c2IYG42I72rZBly8Za7Xunf7y39lraXe1KMulM/Z3R6M275557ztlz7zv3nnPhOP5/Q44l8w6IT7D280ZkDqqzBGYpfAaYgkgTAKoHgF6BPcB2FXkvUP2Pg573Rgfkj6V8cAwMsCaRaHZErgUWCsxVmDAaPgIHA3jViDx1gupziz2vf5xFLY4zPui09kwDy4GFQFP0WoFfAZtFdVsAO2KOs/PQoUO9A319BwAaJ09uchobW5wgmAGcpSLnApcCs0vkOwA8ZWDNMs97f7xkhnEwwLrW1pl+EKxGdQHgAKrwqoEfNjjOi9/+/e+90fB9sLXVDvj+VQI3AnMjWX1Eni4MDt65srd351hlhzEYoAPiTda2GbgrcvMBRJ4IoHN5Nvub8RCuiLXWnhHACkRuRDVO6BH3NHte120wOBbeozJAp+ueblQ3AZ8DVFV/5KiuXNbTs2sswoyErpaWUzQWW4PqwujVW44xNyzt7v7taHnWbYCM616N6g+AycD7qnprey7389EKMBqkp069XIx5HDgN2Cuq32jL5X4yGl51GSBt7U0CG4CYwPNmcPAvl+7du3c0A48VD7a0TMo7zgbgesK1YUkqm32sXj41GyBj7Z3AvYSL3B3tnrem3sGOBSK57iHU5Y6U591fT/+aDNDlut9U1UcAX+HWds/7p3oG6bL2vADmCZwHnAu4hFPIAP2o7laR7cDbGPPKge7utzogqJV/2tqbBdYDjqje3pbLra+174gGiOb8s4Ao3Fyr8g+4btIPgttV5GbglFoFivCRwEYJgodrXVgzicQtiGwAAlG9ttY1oaoBotX+bWCywsqi23dALPpfGNpn3UknneTH43ehugRojF7vQvVFFXnTwH86Irv3TpjQ95kPP/R7pk+f1JjPzwhUzwYuFpErCRc3gAHg+2Zg4O5l+/Z9PJIyXdau0nA67FVjPtve3f3BqA3QAfGJ1v6C8FP3TMrzri+2ZVx3G0GgqVxudmmfjOteraobBCwQCLzgw7p2z9siYVQ4IhQk7boXmtCAXyUMrnIKi9s975mR+qet/bHAfOCtZs+7aKQ4wVRqaLK2jVD59+O+f+vRUuo5hCErAM+Ak7H2AVSfE7ACrxlj/rjN865d7nmv1ao8gIAuz2a3pjxvoRMEf4Tqy0BCYFPG2oeK3lcJscHBW4APgD/Z77pLaxhvONa1ts4MfH+bwomqevnQ73zGWgVIeZ48eMYZjYN9fU8pXINIHljals0+OpLSGWu3Cmib5108kpAZ170d1XXACcCLprHx+mUfffRJJfp0MvkFCYJ/BQ4UCoVzqoXNZT3AD4LVChNU9UfVgpxnwMn39T2rcI2CJ3BZKpt9pMZf/EKFi2qgI5XNPmaC4BIgB3w5GBjYVM0T2ru7/w3YBDTFHOeearyHGaDT2jOjjc2Ao7qyWued1nYBXwJ6EPlCWzb7ixr0GRWW9fS86QTBnxEZodnaddXoC4XCckTyiCzsdN3TK9ENM0C0pXUQeaKGT9BfAwMmCL7Yns3+Vw16lGKLwGv1dFja0/PfasyfA4cUlmSsva4S7cre3p2iuhGIRTqVxVFrQHSYsQeYEIicWWlXV1wDIgZL2jzv4XoUqRXpZNKVIPgp8EnK8+YW3xcDMwWvkM/PuqOvr7dc/+iMYgdwQI1pbe/uPjCU5igPiInMB5oUXq11S6vwUMZaLf3rsnZLXZqWQaT8y8DnNFz8DqMtm30UkVcEbDwe/04lHss979cCW4CJRvWacjRHGUDhhujlD0eQbyQFaw5jy6FE+dnAuxjzpWFEhcK3iELzNYnEtIqChNMAVb2hXPvhKdAB8WZrexVOjDtOcrQnOWPFUOXVmCvau7uz5Wgz1m4CFgCrU563qhzNA66bLKjuAQ40e17L0MDosAdMtPaC6GTnV/9Xlb9/ypQZ6WTSLenyXQAR+VpHhU/632Sz3cA2YGKf6/7p0PYjnUQuiJ42j1mTUaCa8p3Wzu2y9mexWOwDCYLXi33aPG8r8KGqzpg0der5VdhvBnBgztCGIwZQnQUgqtvGRaM6MNIvb+AhhXnAgMKTxfcCqiI/A/CNuawSfxHZBqCRjqU4bACBWQBB+Nn41FDLnBdjbkP1tsF8fnq75911VFsQvAYgUNEDAt/fEdEMM8DhcFJhOkAsFvtwLArVg1oXvLbu7teB14cxCLE9+j9MuSJisdiHfhAc1vGotpLnZoBPHGd/rQqMFl3WflFhPUGQBBoYYbWvhngstjPv+xCm3MrCd5x9BAHApKFtRwwg0owq+V276jJAxtqtwIUAAltr2d1peHx1cjRuXkVGVL7iOBMn7qOvD6IfsBziEybsz1egqXgeUAeCCs/jjWMyzhEPUN0PTI1Pn97Mrl09tTIojdHrwCJCL2hFNS6qL6eTyapeUHGc/v6iW1f03PzBg82VaEo9YD9AQ6EwbJ6MN1Ke9y8pz5uhxpwMvAvMliB4eUiQUxPyhcKM6HFPJRrH94s67RvaVvoZDLe+vn9qvUKMFu3d3Vk15gpGMELadedkEolF902ePGVomxhzdvRY8fNdKBRmQomOJThsAI0YmCqfk2OBckbITJuWKKUR1ccQWd8Qj+/qsnZ1aZuGmWMUfllpDOM4syKaYUY6YoAwMYGWHHZ+WhhqBPL5rw8hWSzwEtBY3LFCeIJMEFwJ4ISHp2WhqrOjh+1D20wJUTHQuLSasGtaWk7usnZ1p7Wt1dWqD+3d3VkaGi5T1aUmn3+itC3leVvaPO9KYrHT1JjinoW0tRcjcqqI7NyXy71TkbnqJQCBMcOCqcNfgYOe90aztQcVZj/Y2mor7QhjxixQuMPA6YSJyXFDavfuHPAAQGbatASFwr2obkx53haA1J49vyulN/AtCPf8lVJp0Q91DtA/OZt9c2j7YQ/ogHwArwIy4PtXVRKyAE8Dh4Dr0snk7Ep0Y4Xk8xegugh4KeO6Vw5tj8aeDxwKwrxlWRjVqwjPPTaXS5IcFQhJqBxRWUpZrMjldkcpciO+X5FurNify/1URdYDJ6L6bAfEi20KIkHwXcAIbFiRy+2uyEjk6+E/ebpc81EGOBGeJSw/mbvW2jMq8czn8x2opk0s9kQlmrGiA4JUNvtNYJWqPlpaMpexdjHhWpXN5/MdlXh0JRJnEeYe+gOR58vRDMsMZax9HLhFRB5vy2YXjVWRSqgnM1SKtOvOEdV/BxoRmZ/KZp+rMsY/AjchsiGVzd5WjqZcXmAN4WHjN7paWkZMa2es/UHG2g8yLS3n1KEH1JEZKmJta+u5ovoiYdb5H6opv661dSbwNaDgiFQs5hhmgGWe976IbEI1rrFYLVUgjcBMdZyfr00kqh1LjQlp150T+P5mYKqovjDD89qq0fu+nwYaFJ6sVkRVdjeojnOnwEFUF6anTr282kD9TU03Af8sYAOR1zKJxC016AM1ZoYUJG3tksjtp4rqC3LCCQsXgF+pT6frzgOuA/qN799ViQ6q1AdkrF0J3Af8tlAofHZlb29fJdroSL1LYUnE9KWC6rdX5HJjOl5LJ5Ozo9X+0ojvg6d43rJqyt83efKUhnj8HWAmIitS2WxntTGqFkg0hQvV+cCPU5731REFtnaBhEfVLlFVp8Aj9SRNo1/84ijImU/opd2I/FW1OV/s25VIPIfI1Yi82ZzNXjxSgUTVEpl1yeRpfhC8Q1jQtCrleaur0QOsnTSpJWhs7ABu5UhK6zeq+hKwRWF7obHxd8WTp4nTpk0inz9VjDlbYS6q84CZUb9DAhvM4ODf1VKOl0kk/haRv2c8SmSKSCeTX5EgeBYwUYXY90fqA7AmkZhmjLldguBGROraYovIzkB1Y0z14aW5XMV9fikyicQiwsDJV9Vr2nO5F2saqybmYYXGo4CP6u2pXO57tfQD6AAzMZE4D2OuQPV8wu32dESKpzT9qH4EvKfwSwmCV/p7et6up0wuUv4RwFHVRe253OO19q25UDJt7R0CqwEVuLvN8+6tte+xQjTn747cntJKtlox+lJZ1Rfyg4M3VcrNH2tEpbLfI6wk80V1cT0FkkXUXSwdrQlPEC6MH6gxi6KanE8Nna47z6iuJ1ws96rqjbXO+aEYVbn8umTytEIQbCpJR20qFArLx+sSQ8VxW1tnRhFesTTmLTXm+lpW+0oY9YWJ9dCwz9plAncDTYjkRXWjD2uWe96vR8u3HLoSibNUZCVhbN8AHEDkO83Z7Lo/yIWJUtw/ZcoMx3HuFZGFRFdmBLYEqhsbjPlJlJ+vG53WthrVq6L9/EWRrAVUn5IgWNX28cf/M1bZYTwvTbnu6Q6sUNW/4OhLU9uAzYi8q77/nmPMzkPxeG8xEIpPn958Qj4/xQ+CGcZxZqnquaheytGHs/2IPOmIrBnL7ZByGPdrcw9bO/ETkWtU9QaBSzhijHrRD2wWkacDkefLVXiNB47pxcn10LDf2s+ryBxRPSu6ODkdmHw4EApTcn0CuxR2iMgOVX292fPeGOv8Po7jOI7jGAn/C2Eo7kDOpmSxAAAAAElFTkSuQmCC">
                            <h1> {{ $relatorio['total_foco'] }} min</h1>
                            <h6>Total tempo focado</h6>
                        </div>
                    </div>
                    <!-- Total dias utilizando Tomato Task -->
                    <div class="col-lg-2" style="padding: 20px;">
                        <div class="card">
                            <img src="../assets/tomato tasks logo icon.png">
                            <h1> {{ $relatorio['total_dias'] }} </h1>
                            <h6>Dias utilizando Tomato Task</h6>
                        </div>
                    </div>
                    <!-- Gráfico Pizza -->
                    <div class="col-lg-6" style="padding: 20px;">
                        <div class="card">
                            <div id="highcharts-pizza"></div>
                        </div>
                    </div>
                    <!-- Grafico Linha -->
                    <div class="col-lg-6" style="padding: 20px;">
                        <div class="card">
                            <div id="highcharts-linha"></div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-2" style="padding: 20px;">
                        <div class="card">
                            <p>Nenhum dado criado ainda! Explore a ferramenta e crie tarefas.</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script>
        @if(!empty($relatorio))
            Highcharts.chart('highcharts-pizza', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie',
                    backgroundColor: 'transparent',
                },
                title: {
                    text: 'Tarefas'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                        }
                    }
                },
                credits:{
                    enabled:false
                },
                series: [{
                    colorByPoint: true,
                    data: [{
                        name: 'Finalizadas',
                        y: {{ ($relatorio["finalizadas"]/$relatorio["total"])*100 }},
                        sliced: true,
                        selected: true,
                        color: '#A62929'
                    }, {
                        name: 'Em andamento',
                        y: {{ (($relatorio["total"]-$relatorio["finalizadas"])/$relatorio["total"])*100 }},
                        color: '#DF7B7B'
                    }]
                }]
            });
            Highcharts.chart('highcharts-linha', {

                title: {
                    text: 'Uso da plataforma'
                },

                subtitle: {
                    text: 'Dias x Tarefas'
                },

                yAxis: {
                    title: {
                        text: 'Nº de tarefas'
                    }
                },

                xAxis: {
                    categories: [
                        @foreach($relatorio['frequencia'] as $data => $info)
                            '{{ $data }}',
                        @endforeach
                    ]
                },

                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
                },

                // plotOptions: {
                //     series: {
                //         label: {
                //             connectorAllowed: false
                //         },
                //         pointStart: 2010
                //     }
                // },

                series: [{
                    name: 'Tarefas',
                    data: [
                        @foreach($relatorio['frequencia'] as $data => $info)
                            {{ count($info) }},
                        @endforeach
                    ],
                    color: '#A62929'
                }],

                credits:{
                    enabled:false
                },

                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }]
                }

            });
        @endif

    </script>
@endsection
