
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
                    <span style="font-size: 2.5rem; margin: 0; font-weight: 700; color: #591616;">Analytics <small>Admin</small></span>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @if(!empty($relatorio))
                    <!-- Usuarios -->
                    <div class="col-lg-2" style="padding: 20px;">
                        <div class="card">
                            <img src="data:image/png;base64,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">
                            <h1> {{ $relatorio['usuarios'] }} </h1>
                            @if($relatorio['usuarios'] == 1)
                                <h6>Usuários cadastrados</h6>
                            @else
                                <h6>Usuários cadastrados</h6>
                            @endif
                            <br>
                        </div>
                    </div>
                    <!-- Tarefa finalizada -->
                    <div class="col-lg-2" style="padding: 20px;">
                        <div class="card">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABmJLR0QA/wD/AP+gvaeTAAASEklEQVR4nO2df5QU1ZXHv/d1z0yY6Rlkpqr6wKAgGSW6uzlukmNOzOou+CPZo64iQgQBXX+hEt2F6R7wR0xnNwIzPT825BicxUSFiAhRE4xuFIWIP06ynpzEY3RViAEUtKtqhoH5wdA/3t0/upGq6u6Z7pnunp5hPufMH33r1Xuv+8579d59994CxhlnnHHGGWdo0Eh3YDAC06d/obKvb6ZknknA2UR0DjPPAFCR+JsEogowE4AeAEdA1AfmLjD/hYA9DOwVwJ4K03x7KRAZ0S80CEWnkHagpFtVvw7m2SCaBeAbAMpyUTcBfQz8nol2Ixbb3dvR8XoACOei7lxRFAoJAKLS650lpVxCwBwAlQVpmKiTmJ+VQmyZFgrtmg/ECtLuQF0aycZbqqtPh8t1BwOLAJw+kn0BEAKwQQIPNRjGZyPViRFRSKuq1jGwiokWg7k0g1v2AXgXRO+zlB+4gA9jLlcHgN5of39X9ZEjPQDQOXGip6S8vMoVDpdHgclEVMfAWQI4i4m+BqA2g7aOA3iChWjzh0J/Hvq3HBoFVUjQ6z1TMP+Qmb8DwDVA0UNgfoWIdkai0Z2rDh8+kIv227zeGVLKixj4RwBXAqgZoLgEsFFIef+Kjo6DuWg/EwqikHV1dWXhI0f8AO4FMCFNsR4GnhFCbOwOhXYF4j9I3mgHSnpU9VJmvg5EVyP9c6uXmIPdpaXBwKFDffnsE1AAhQS93ktIyocAnJ2myB4wN7HL9aQ/FOrNd39S0agolS7gFgD/BqJpaYr9RRLd0KDrb+SzL3lTSDtQclTT1hLz8jTtvMPMq6eZ5rZiWN0AQABwexRlHoi+D2BmiiIxAppLJk78/t179x7PRx/yopDmyZOnIRJ5CkRfT3FZB9BQbxgbCeB8tD9c2oGSo4qyjIgeADApRZE/uVyuOcs/+2xfrtvOuUJaVfXbEtiM5C8imbk9Goncd8+RI4dz3W4+WF1bW1MWDjcycLPzGgMGAdf4DOP1XLaZU4W0aNoiZv4ZgBLbBeb9JMTCel1/M5ftFYqgolxJRBsAeG0XiMLEvLTeMB5z3tOsqhf5DGN3tm2JoXfT0QFFWc7MG+FUBtF2EQ5/ZbQqAwD8pvkcC/FlBl6wXWAuZWa3s3yLpi0B8Gqzqv4sAGSyz/qcnIyQoKb9BzF/zyGOgXllvWm2FuuzIlu2Aq4DmtYI5noAYOZmv2n6rWWaVPVCAexAwv7GwKuR0tK59x482JFJG8MeIc2KsjyFMo4TsMBnmi1jRRkAMB+I+XTdR/FnyrZe01xpvd6qqnUCeAYWYygB55f298/ItI1hjZCgoiwkok2wK7ZHEs1t0PWXhlP3aGNddXVVWIg3QfQ3FjEz8yK/aW7OtJ6k+S9TEqupx2BXRjekvLiho+OtodY7GmkHSrqFeMahDAB4IBtlAEOcslqqq0+XwM9hfYAThSXRtb5TTBkA0K0o60B0sUP8VL1hPJhtXVkrpB0oYZdrC+yGOUnMi061aQoAWjTNB6LbrTIC3iidOPGGoTw/s1ZIt6atAXCBTcjcUG8Y27Kta7QT9HqvYuZGh/gjLim5eqimlawe6glD4Uu2+4i21+v61WNpNZUJLar69wy8hvi5/gm6XFJesLyj4/+GWm/GI2RdXV1Zwmp7UhnM+0V//7+easpoVJQpDGyHXRkRFmKeUxktirI0MH36FzKtO2OFJM4zrCZ0SUIsXHH0aGemdYwFgl5vhYtoO4CpVjkx3+UPhV62ypoV5XomWu/p7fVlWn9GU1bQ6z2TpHwXlsMlZl7vN807M21oLBAARKWq/oLjjhgnIWrz6foKq6hJ074pmF8BUEZAXyQaPSeTk8+MRggxPwj7SZ8ejUTuy+TesYRHUdYkKQN47gxd9zvLEvMGnDSflLvd7h9k0sagCmnStC+CeZ6tMSL/aDGh54oWVb0RRA02IfO7pbHYojQHbA87Pi9uVJRUh142BlWIi/ke2Hf076zQ9U2D3TeWaFGUWQz8t0P8KUn5z3d3dh5NdU+VYawHsMcicgmiewdra0CFtFRXn85Ei60yZl59Kq2q2rzeGUy0FfZjhWMsxJz6zs6P092XcFm17dQJWNBaUzOgK9LAI8TlusPhN7VnmmmeMhvA1bW1NTEpfwNAsYglES32h0K/H+z+SsPYjLhP2QlKmOiWge5Jq5AAIBIehSdhbioWh4R8EwBKS8LhpwGc5bh0X72uP51JHYlR8l9WGRPdFhjAqJtWIRVe72zY3Tt7JxBtyaQjYwGPpv2Y4g51Vh7zGcbabOpxRSKPE2D155ri0TSnIfJz0k9ZUtqfHcDTywyjJ5vOjFaaVXUVmG+zyhh4tccwlmZb1/Kuri5mto8o5vnpyqdUSAAoJcd6WwixMdvOjEZaNG0uHA9jAHsipaVzhxy6IMQTDsmcdGftKRXiUdXzYXetPNQdCu0aUmdGEa2K8jXEHTVO/i7xkIUrMj0TT0Wlru8EYN23TapSlG+kKpt6ymKe7fj8Sr59bUeaxurqqZJoOwPlFnGEpLy23jQ/HE7dS4EIMz9vlUkhZqcqm1oh8cgly0faOZwOFTsPqarH5XI9B2CyVU7Md9WbZk5mBkH0iqPuWSnLOQUJU7FtOLHbPWanq62A61jc0/I82wXmpnrTbM9VO1KIV23VA+e3O33YkEIhlX19M2GP6dvn+/TT/bnqWLGxX9OaEI8V+RwCnu0xzXty2Y4/FPorAGucSVmv1/slZ7kkhUhmpwGs4FFEhSKoqjcT8wqH+I9SiMX5eGYy8Lb1s2Q+z1kmSSHCqRCiD3LdsWIg6PVeQsB6h/iTGPMV+YpTEcA7NgHzuSnK2GEhbAphKcecQtpqas4hKbfBPof3EvAvK03zUL7alYDtt2Tmqc4yyass5jOtH13AsJZ8A8EjEHTaPGWKEhPiOQCnWcSShbi+3jD+mM+2iegTx+cMFOKItUtEu+acNkWZ3KKqbzVp2jfzUX8q1tXVlSESeRbAF20XmBv8odCv8t6BaNQZPJpkih9UISREdy77BACtVVXVMaIXAXxVML/YrGnfynUbThigcFfXBgD/YJUT0Qafabbku30AcLvdzn/upEDTQRUSFiKnBsV1dXVlsqzseQB/lxBVANjeoqrzBrht2LSo6n1wHLaB+RWPri/LZ7tWRDR6zCFKikhOVgiRXSEHD+Z0hNy9d+9xBn5pEzKXMvBkUFFuzWVbJ2hW1WsBOJ0MPohEIvMKmYymrLPTqZByZ5mcRVBlg98wGonoTtjX+i4iam/WtIZ09w2FZkX5KgGPw/5dOyRwZaEdNY7X1Tl/76S9TiqF2KaoqqoqTy47dYJ6XV8P5kWw/4cSmBtbVDWrQ6B0NE+ePA1EzycZDJnnNRjGnrQ35olwX5/zmZE0+yQrREpbIVlRkbfMPD7TfJKZ5wCwDWUGVjYryvrAMEZwo6JUIhrdDkegJjMvy5XBMFs4FhuCQohshQRzXkbICfym+TyAbwOwu9MQ3e5R1SdSGeAGYyvgchE9AeDLVjkDD/pNc8Nw+jssmLNXCAFHbIJoVHGWyTU+w9gN5tkMGI5L13Wr6rOtU6emy4+SkgOq2gaHwRDANp9hOGMhC4qQ0pnsJsmnK9l0QmTLThBLn6Mkp/hM8w8k5UUAnL5Ol/Px4y+unTRpYib1NCvKLQDucoj/0FNScuNI+5MlmaWAj5xlkkeIw3ZFjkryia+j43243RfCYa5h4MISt3tn0OvVBrq/WdO+BSKnwfCgkPKqQmTyGQxyGG7JYdsCUpnfndbdZHN8XvF9+ul+N9FFAP5k6wbwFZJyd0t1dcrMc201NeeAeQvsPk/dRHR5IfNdDQQ7EtpQCkt6qof6+w7J3+a2W4Pz77oeckUiswhwpkKaCbf79RZFsU2jQa9XiwnxAuwGwxgzL6jX9bdRJJAjSjfpnx8pFNJbXv4hgH6LaHrz5MnpckjljeVdXV3dJSWXMfAbq5yZz2Ci15pU9TwgfuRMUv4SwHRHFfWJFVxR0Ob1zmDmMyyiY2WVlUl7oeQz9X37+gH8zirjaDSlh0S+CRw61NdrGFcB2Oq4pAngt02qeqGnr+8ROHwAADziM4wfFaaXmRGLxZyePG+kCgxNufEiZruXidMtqIAEgPAZhrEwkY3HykQB7ALz9VYhAS/1GMYdBexiRpAQdi8TopSb05QKiQlhUwgRXTycXfNwmQ/EVuj6UjAHHZfsiTSJ3otEo/MDQLRwvRucrYCLmW3+vJyNQibq+v/CvoucnHC+HjEIYJ9pNnA8kWYqdCa6YtXhw0fSXB8x9sWdq60mnCO9up4y40VKhSRM0s/YhA7n65HCbxhrQHQH7JbSfiKak3C1KToEsMT6mYBfpBvFaachEsIWtkbA3IdUNa92rUzx6frDHH92RAAwEd1arAnSgl5vBZivssqIOW1IYFqFdIdCu4jIGsZbcYz5uhz0MSf4TXMLAVdzPIDm5yPdn3RQLHY9gJP/yMz7l5tm2tR/A0VQSTDb3eiJGrYOnJG6oNQbxgt+w1gz0v1IRwBwJ0XuEm0ayKY24MopGov9BETWmIizDihK2mCTcex4NG0B7B4ux4WUznBpGwMqZGVn5yeJeAnLHeL+kVwCjxYCgACzM6790cHsaoPHqQuxBtYVAfO5laq6JP0d4wCAR1Fugt0OGGGXq2mw+wZVyPJQ6CMQPWWVSaCptaqqOvtunhqsrq2tAZHz2bY5k2V5RlNPNBK5F8DnDsgEqLK0NOv0dacKpeHwWlhi2wnoc7lcgUzuzUghiSw2q21CotsK6QY6WmhS1QsB3GSVMdEPMs0Tn/HDuccwmhmwJucSgnlL85QpeT9zHy20VlVVi/imzxo0+l6lrrdlWkfGCgkAYUj5XdjX0FMRiTw6El7sxQYDFCsr2+R4/4hkKZdl4x2Z1SZvx7Fjf72svLwCRNap6uw3PZ7eHb29RWm6KBSVqrqKAKfZv9Fvmj/Npp6s9xM9pnmv82iVmNe2qOp3sq1rrBBUlOuQnGzgd5WG8UC2dWWtkAAQRSy2AIDVtV4wsKkQYQXFRouizCIiZ4bvw3C7rxuKI/eQdtz1nZ0fS6KFsDdYAuZtrTU15w+lztFIa03N+Uz0K1ijlonCLMT8oUYuD9kE0qDrLzHzEtjPJSqlEDtPhZESrKmZLYXYAXs8DRNwqzM7aTYMy3K7o6/vz5d5PCaAyy3iUhDNv3TChL07+vrGZEh1s6ZdQ0RPw563F8y8wmcYw0o2MGxT+ku9vW9d6vEQAf9krZeIrrnM4+l/sbf3zYzScY4CGKBKVV2FeIJLmxM4MQd8pulMO541Ods/BFX1uwT8CMnT4K/DpaU3DiebTjGwura2pjQcfhz22QCIn1g21Ot6cy7ayemGLqgoC0mIR1O83/ZjAAtz/UazQpF4jdFmOLJZgyjMUt7gN82cZdrL+Q67SdMuE8ybkfyeWQmiR0R//z2jJT356tramrJIZA0z34zkkW+yEAuG8wBPRV5MHmsnTTrD7XY/CedrLeKYBKzsNozHijUHVwAQHkW5CURrkeIFxgS8gVhswUBpYodK3mxQAcBdoWn3J14Ylsqp+z0CGrt1fXOxOLYlcrvPZaJAqjwkiC9rf+wxDF++onfzbhRsUZRZTPQTAEmpiBLsZeamcqInRyrJ5kOq6uljXkBEK+HM8nACovdYymV+0/xtPvtSECttO1DSrap3AvghrC4xdvoBPMfMm3pN83/yPWoCgPCo6gUgWgzmhen6RUCfJAqWVVWtydcLiR3tFY7ES4v/E0QLMPAb4kIgepmZd0GInbnySAx6vWdCytmCaHbC19Y7QPEogCcoFvtePp4V6RiRc4w2r3dGjHklgBtTLJGTIKIDzPwuiN5PhNx9KIXocBP18LFjXUePHu0B4jH1NGHCaZK5ElJWAzibhZjJzOcIonMd8RnpOM5Ej4GocSRcU0f0YKmxunqqcLluF0SLM/yx8gfzfhBtElI+PJIhcEVx0hcARIWiXERESwDMBVBVoKaPAHhaMG88apqvFcMyvCgUYmUr4DqgKOcx0SXEfEnidDKrOPUBiAJ4m4CXpRAv94ZCu4ecrTpPFJ1CnASA0gpN+xIxn03ATGaeSUQzOL4qqgTRaTi5QuoBcxeAbgJ6mPmjRBDrh0KID46GQh8UmwLGGWecccYZJ1f8PwzgyLOuWW6cAAAAAElFTkSuQmCC">
                            <h1> {{ $relatorio['tarefas'] }} </h1>
                            @if($relatorio['tarefas'] == 1)
                                <h6>Tarefa cadastrada</h6>
                            @else
                                <h6>Tarefas cadastradas</h6>
                            @endif
                            <br>
                        </div>
                    </div>
                    <!-- Total de ciclos criados -->
                    <div class="col-lg-2" style="padding: 20px;">
                        <div class="card">
                            <img src="data:image/png;base64,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">
                            <h1> {{ $relatorio['total_ciclos'] }} </h1>
                            <h6>Total de ciclos</h6>
                            <br>
                        </div>
                    </div>
                    <!-- Média min/dia na plataforma -->
                    <div class="col-lg-2" style="padding: 20px;">
                        <div class="card">
                            <img src="data:image/png;base64,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">
                            <h1> {{ number_format($relatorio['media_tempo'], 1, '.', '') }} </h1>
                            <h6>Média de minutos / dia na plataforma</h6>
                        </div>
                    </div>
                    <!-- Média tarefa /usuario -->
                    <div class="col-lg-2" style="padding: 20px;">
                        <div class="card">
                            <img src="data:image/png;base64,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">
                            <h1> {{ number_format(($relatorio['tarefas'] / $relatorio['usuarios']), 1, '.', '') ?? '' }} </h1>
                            <h6>Média de tarefas / usuários</h6>
                            <br>
                        </div>
                    </div>
                    <!-- Média de ciclos por tarefa -->
                    <div class="col-lg-2" style="padding: 20px;">
                        <div class="card">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABmJLR0QA/wD/AP+gvaeTAAADc0lEQVR4nO3cvU7bUBjG8eeEqRxGjq+jlTp2bIpERZdeQRBIVRkD6gjdqprslUCVqi69hqSXQAtShy7dYKA4a47UoXEHMCXECf44H9h+fmMWH+lPTGy/PgARERERERERERERERERERHdK++Veuh7DbP4XFvLx0FDpTot4FtPqXc+jj9PGAR7LeD7fhC88nH8BdcHDJXqCOAQl38MT1akfNDX+qvrdaQJg2BPxPEuAAHg+bOlpd/90ejI5RqEy4P1lFqPgQNMfjPHAnjcjaJjl2u5rafUoxg4wvTaNrtR9NHVOpydskKlOikxYgix5TsGAHSj6DgGNgCMb3zcioFDl6cvJ6esW6epRAwhXm9fXHxwsYYsBlqftKU8FcAa/p89nJ6+rAepSoyE7yhWg1QtRsJnFGtBqhoj4SuKlSBVj5HwEcV4kLrESLiOYjRI3WIkXEYxFqSuMRKuohgJUvcYCRdRSgdpSoyE7SilgjQtRsJmlMJBmhojYStKoSBNj5GwESV3EMaYZDpKriCMkc5klMxBGGM+U1EyBWGMbExEuTMIY+RTNsrcIIxRTJkoM4MwRjlFo6QGYQwzikSZCsIYZuWNMhGEMezIE+U6yIwYYwFsbkfRgZOV19hA65MVKc8wHWW1LeXpQOsT4CpILwheAviEyW9MDCG2GMOcvtbHad8UAay1Fxd/DbT+4WXYmmZbAID+aPSzLeVZyjludUXKs77W3kc966Cn1DpS/i3EwMbOcPgZuHGKmvOP54WPKfC6CZXqIP0H09ZOFB0mH0z8yvI9RllXeX69Tl2HMIpZeS8lUq/UGcWMItd1M+9lMUo5RS+y597tZZRiytzxuPN5CKPkU/b2U6YnhoySjYl7gZmfqTPKfKZuzOaaOmGUdCbvkueey2KUSaYfWRSaXGSUSzaeHxWe7W16FFsP80pNvzc1is0nq6XfD2laFNuPuY28QdWUKC5mDoy9Y1j3KK4GQIy+hVvXKC6ncYy/p163KK5Ho6zs5FCXKD7m1KztdVL1KL6GBq3uBlTVKD4nOK3vl1W1KL7HaZ3sKFeVKL5jANwE89p92QTT6TaxabOtIo7fdofDLy7Xkaav9Xlbyj8CeHr1UXNmm0OlOvtK/e0tL+/6XsttoVJv9pUa+9pI2RtuNU5ERERERERERERERERERER5/ANomILedx5qTQAAAABJRU5ErkJggg==">
                            <h1> {{ number_format($relatorio['media_ciclos'], 1, '.', '') }} </h1>
                            <h6>Média de ciclos / tarefa</h6>
                            <br>
                        </div>
                    </div>
                    <!-- Gráficos Pizza -->
                    <div class="col-lg-3" style="padding: 20px;">
                        <div class="card">
                            <div id="highcharts-pizza-usuario"></div>
                        </div>
                    </div>
                    <div class="col-lg-3" style="padding: 20px;">
                        <div class="card">
                            <div id="highcharts-pizza-tarefa"></div>
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
            Highcharts.chart('highcharts-pizza-usuario', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie',
                    backgroundColor: 'transparent',
                },
                title: {
                    text: 'Usuários'
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
                        },
                        size: '50%'
                    }
                },
                credits:{
                    enabled:false
                },
                series: [{
                    colorByPoint: true,
                    data: [{
                        name: 'Possuem transtorno neurobiológico',
                        y: {{ ($relatorio["tdah"]/$relatorio["usuarios"])*100 }},
                        sliced: true,
                        selected: true,
                        color: '#A62929'
                    }, {
                        name: 'Não possuem transtorno neurobiológico',
                        y: {{ (($relatorio["usuarios"]-$relatorio["tdah"])/$relatorio["usuarios"])*100 }},
                        color: '#DF7B7B'
                    }]
                }]
            });
            Highcharts.chart('highcharts-pizza-tarefa', {
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
                        },
                        size: '50%'
                    }
                },
                credits:{
                    enabled:false
                },
                series: [{
                    colorByPoint: true,
                    data: [{
                        name: 'Em andamento',
                        y: {{ (($relatorio["tarefas"]-$relatorio["finalizadas"])/$relatorio["tarefas"])*100 }},
                        color: '#A62929'
                    },{
                        name: 'Finalizadas',
                        y: {{ ($relatorio["finalizadas"]/$relatorio["tarefas"])*100 }},
                        sliced: true,
                        selected: true,
                        color: '#591616'
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
                            {{ count($info['total']) }},
                        @endforeach
                    ],
                    color: '#078C2D'
                },{
                    name: 'To do',
                    data: [
                        @foreach($relatorio['frequencia'] as $data => $info)
                            {{ count($info['Todo']) }},
                        @endforeach
                    ],
                    color: '#DF7B7B'
                },{
                    name: 'Doing',
                    data: [
                        @foreach($relatorio['frequencia'] as $data => $info)
                            {{ count($info['Doing']) }},
                        @endforeach
                    ],
                    color: '#FF5959'
                },{
                    name: 'Done',
                    data: [
                        @foreach($relatorio['frequencia'] as $data => $info)
                            {{ count($info['Done']) }},
                        @endforeach
                    ],
                    color: '#D83636'
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
