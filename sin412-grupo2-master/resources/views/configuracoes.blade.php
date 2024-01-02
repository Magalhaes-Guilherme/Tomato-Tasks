
@extends('layouts.app')

@section('css')
    <link rel="shortcut icon" href="../assets/tomato tasks logo icon.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" /> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .card{
            border-radius: 17px;
            background-color: #ffffffb8;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .user{
            max-height: 100%;
            max-width: 100%;
            width: auto;
            height: auto;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            padding: 10px;
        }
        strong{
            color: #624848;
        }
        .button-user{
            text-align: center;
            background-color: white;
            border-radius: 17px;
            color: #8d2619 !important;
            font-family: 'Outfit', sans-serif !important;
            font-weight: 700;
            width: 100%;
            padding: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            /* display: flex; */
            /* align-items:center; */
            /* justify-content: center; */
            border: none;
        }
        .button-user-delete{
            text-align: center;
            background-color: #8d2619;
            border-radius: 17px;
            color: white !important;
            font-family: 'Outfit', sans-serif !important;
            font-weight: 700;
            width: 100%;
            padding: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border: none;
        }
        select {
            width: 100%;
            height: 46px;
            background-color: #00000008;
            border: 1px solid #eee;
            outline: none;
            font-size: 15px;
            font-weight: 400;
            color: #2a2a2a;
            padding: 0px 20px;
            border-radius: 23px;
            margin-top: 10px;
            box-shadow: 3px 3px 6px rgb(163 177 198 / 49%), 3px 3px 6px rgb(255 255 255);
        }
        input{
            font-family: 'Outfit', sans-serif !important;
            width: 100%;
            height: 46px;
            background-color: #00000008;
            border: 1px solid #eee;
            outline: none;
            font-size: 15px;
            font-weight: 400;
            color: #2a2a2a;
            padding: 0px 20px;
            border-radius: 23px;
            margin-top: 10px;
            box-shadow: 3px 3px 6px rgb(163 177 198 / 49%), 3px 3px 6px rgb(255 255 255);
        }
        .icon{
            text-align: center;
            box-shadow: 0px 0px 15px rgb(0 0 0 / 10%);
            border-radius: 23px;
            padding: 25px 15px;
            margin: 15px;
        }
        .icon img {
            max-width: 60px;
            display: block;
            margin: 0 auto;
            border-style: none;
        }
        .info-card{
            border-radius: 17px;
            background-color: #ffffffb8;
            box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
            padding: 20px;
            margin: 20px;
        }
        hr{
            margin: 0.5rem 0;
        }
        label{
            color: #565656;
            margin-top: 15px;
            margin-left: 15px;
        }
        .badge-tomato{
            color: #078C2D;
            background-color: white;
            outline: 1px solid #078C2D;
            margin: 5px;
        }
    </style>
@endsection

@section('content')
    <!-- <section class="content-header"> -->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <span style="font-size: 2.5rem; margin: 0; font-weight: 700; color: #591616;">Configurações</span>
                </div>
            </div>
        </div>
    <!-- </section>
    <section class="content"> -->
        <div class="container-fluid">
            <div class="row">
                <!-- Minha conta -->
                <div class="col-lg-12">
                    <div @if(Auth::user()->papel == 'admin') class="card collapsed-card" @else class="card" @endif>
                        <div class="card-header">
                            <h5 class="card-title">Minha conta</h5>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <img style="height:20px" src="https://img.icons8.com/external-those-icons-fill-those-icons/24/591616/external-down-arrows-those-icons-fill-those-icons-1.png">
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <img style="height:20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAABmJLR0QA/wD/AP+gvaeTAAADoklEQVR4nO2cMU8bMRTH/26BQFAOGEAKohJSjykj/Q7VDVWhKnPp1m/RMvQjdIeZCKg6nBj6LZpOJ8RMpBBCiXrX0uuAToWIhPPZfval77ci2+9+Opyz/fwAhmEYhmEYhmEYhmGY8UHo6ijw/crc5eWOSNM3AJAKsXdRq70PoyjWNYZJTMevRfRWozE1cXbWhBAvBv50XKlWN3ZPT3/qGMcUFPErix4RZIbTsqniVxKdI8gMJ2VTxl9YtESQGU7Jpo6/kOgCQWY4IdtG/I9kGwS+X5lst48KBAkAz5N+/yDw/UqBtlqwFf9j2QbPJic/AtiWbXeLtZk4Xl+p15tRp3Ot0I80ge9XFnq9wxQIFLpZm06SiW9XV19lGkm/0dl3pgopEMz3ep+3V1enVfvKy1ajMTV/cbGvKPmGNH0r20RatEaex/3+EYVshTl5GNL/ifKihdiVbjMc43O24px8P0LsyTaRFt2t1T4IIJRtN4wUCBZ6vUMTsjXNyXcQQNit1XZk20mLDqMo/rW4uIE0/SLbdhgm5mytc/I/jqeq1VdF9j8oFyx50PKd7WJsVEtwGZQeyMWYAJpNpSIUejCXYhnE9DapClIP6EIMo9C28W/zQV2XDGgUDdh54DJIBjSLBmgfvCySAQOiARoBZZIMGBINmBVxNTv7p0ySAYOiAXNLYOBmNamzz3PP2zR5Ym9UNGDszdYJyamPcdGA07LJjtZIRANOyiY9vyQTDTglm/yQmFQ04IRsKyfx5KIBq7KtpTtYEQ1YkW01p8SaaIBUtvXEHauiARLZ1iUDDogGjMp2QjJgN6/jv8L6G81TBwH8Y0gAf94RwAsWAngJToADkjPGd1PJIckZ47dN6qDkjPHZ+HdYcgaJbKMrQxNJ4AIIdeZng+gCkzHRJvOTy5CfPQgn0IwYQyecEpZzLFU4ybHAmEXgtF3FsfPCiegaYxgFX60wFMsgfFmIICaAr7/JUKp6HaPQ+uPjWozSok3lPJvIT3YpVhv1Ou5gMgk86nSuV+r15kwcrwNY09Rteep13KLw3eq8mLi7XrZ6HWR7wfutVvJ7aem1RtnlqNchgLDreS8pj5L2W62kOze3pWWLtQz1Oigu5gwjjKL43PM2VeMvQ70O43PyQ9iKnwsMulxgMINLZuaHi8CWoQhsBpc1fhjpleF9fG+3r58sLx9MJ8kEgKcAfkCIT13Pe9c8OXG+UHfZ42cYhmEYhmEYhmEYhqHmL5T8en3BqkP4AAAAAElFTkSuQmCC">
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12" style="position: relative;">
                                    <strong style="font-size: 1.1rem;">Sobre</strong>
                                    <hr>
                                    <br>
                                </div>
                                <div class="col-lg-2" style="position: relative;">
                                    <img src="../assets/user_red.png" class="user">
                                </div>
                                <div class="col-lg-4" style="padding-left: 70px">
                                    <strong>Nome</strong>
                                    <p class="text-muted">{{ $myUser->name}} </p>
                                    <hr>
                                    <strong>Email</strong>
                                    <p class="text-muted">{{ $myUser->email}} </p>
                                    <hr>
                                </div>
                                <div class="col-lg-4" style="padding-left: 70px">
                                    <strong>Telefone</strong>
                                    <p class="text-muted">{{ $myUser->phone}} </p>
                                    <hr>
                                    @if(Auth::user()->cadastro == false)
                                        <strong>Possui algum transtorno neurobiológicos?</strong>
                                        <br><span class="badge badge-tomato" onclick="modal_tdah()">Finalizar cadastro! Clique aqui</span>
                                    @else
                                        <strong>Possui algum transtorno neurobiológicos?</strong>
                                        <p class="text-muted">{!!$myUser->TDAH == 1 ? 'Sim' : 'Não'!!} </p>
                                    @endif
                                    <hr>
                                    <br>
                                    <br>
                                </div>
                                <div class="col-lg-8">
                                </div>
                                <div class="col-lg-2" style="padding: 15px">
                                    <button class="button-user" onclick="edit()">Editar usuário</button>
                                </div>
                                <div class="col-lg-2" style="padding: 15px">
                                    <button class="button-user-delete" onclick="destroy()">Deletar usuário</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if(Auth::user()->papel == 'admin')
                    <!-- Usuários -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Usuários do sistema</h5>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <img style="height:20px" src="https://img.icons8.com/external-those-icons-fill-those-icons/24/591616/external-down-arrows-those-icons-fill-those-icons-1.png">
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <img style="height:20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAABmJLR0QA/wD/AP+gvaeTAAADoklEQVR4nO2cMU8bMRTH/26BQFAOGEAKohJSjykj/Q7VDVWhKnPp1m/RMvQjdIeZCKg6nBj6LZpOJ8RMpBBCiXrX0uuAToWIhPPZfval77ci2+9+Opyz/fwAhmEYhmEYhmEYhmGY8UHo6ijw/crc5eWOSNM3AJAKsXdRq70PoyjWNYZJTMevRfRWozE1cXbWhBAvBv50XKlWN3ZPT3/qGMcUFPErix4RZIbTsqniVxKdI8gMJ2VTxl9YtESQGU7Jpo6/kOgCQWY4IdtG/I9kGwS+X5lst48KBAkAz5N+/yDw/UqBtlqwFf9j2QbPJic/AtiWbXeLtZk4Xl+p15tRp3Ot0I80ge9XFnq9wxQIFLpZm06SiW9XV19lGkm/0dl3pgopEMz3ep+3V1enVfvKy1ajMTV/cbGvKPmGNH0r20RatEaex/3+EYVshTl5GNL/ifKihdiVbjMc43O24px8P0LsyTaRFt2t1T4IIJRtN4wUCBZ6vUMTsjXNyXcQQNit1XZk20mLDqMo/rW4uIE0/SLbdhgm5mytc/I/jqeq1VdF9j8oFyx50PKd7WJsVEtwGZQeyMWYAJpNpSIUejCXYhnE9DapClIP6EIMo9C28W/zQV2XDGgUDdh54DJIBjSLBmgfvCySAQOiARoBZZIMGBINmBVxNTv7p0ySAYOiAXNLYOBmNamzz3PP2zR5Ym9UNGDszdYJyamPcdGA07LJjtZIRANOyiY9vyQTDTglm/yQmFQ04IRsKyfx5KIBq7KtpTtYEQ1YkW01p8SaaIBUtvXEHauiARLZ1iUDDogGjMp2QjJgN6/jv8L6G81TBwH8Y0gAf94RwAsWAngJToADkjPGd1PJIckZ47dN6qDkjPHZ+HdYcgaJbKMrQxNJ4AIIdeZng+gCkzHRJvOTy5CfPQgn0IwYQyecEpZzLFU4ybHAmEXgtF3FsfPCiegaYxgFX60wFMsgfFmIICaAr7/JUKp6HaPQ+uPjWozSok3lPJvIT3YpVhv1Ou5gMgk86nSuV+r15kwcrwNY09Rteep13KLw3eq8mLi7XrZ6HWR7wfutVvJ7aem1RtnlqNchgLDreS8pj5L2W62kOze3pWWLtQz1Oigu5gwjjKL43PM2VeMvQ70O43PyQ9iKnwsMulxgMINLZuaHi8CWoQhsBpc1fhjpleF9fG+3r58sLx9MJ8kEgKcAfkCIT13Pe9c8OXG+UHfZ42cYhmEYhmEYhmEYhqHmL5T8en3BqkP4AAAAAElFTkSuQmCC">
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach($users as $user)
                                        <div class="col-lg-3 info-card">
                                            <div style="width: 48%; display:inline-block">
                                                <strong style="font-size: 1.1rem; color: #8C1515">Usuários {{ $user->id}}</strong>
                                            </div>
                                            <div class="card-tools" style="width: 49%; display:inline-block; text-align: end">
                                                <button type="button" class="btn btn-tool" onclick="edit_user('{{ $user }}')">
                                                    <img style="height:20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAABmJLR0QA/wD/AP+gvaeTAAAEiElEQVR4nO2czWscZRjAf8+mFbKzRg/ZTW6epQheqwVDbFr0TxC8CYInYRtavGTjQa35oBcPBfEi9GBB9ODBJEgqREE99i5+HbqzUAvdidTuPh7awXS7m76z887uzLzv77Y7zzzv8GN45v2YecHj8Xg8Ho/H4/F4copM+wLywMf1+oui2hSRZaAOtIE9rVQ2V2/dummjDedFb87PNxG5DMwMOXxf4N1mGH6Stp1hyZ1ho9FoCXwAVEaEVIDXzwVBbyeKvk/TlrOiNxqNlqiuGYYvp5XtpOiEkmNSyXZO9JiSY8aW7ZTolJJjxpLtjGhLkmMSy3ZCtGXJMcvng6CzE0U/mwSP6tZ4DFC4sr24eMok1ok7erfb3V+p1URgyXLqiqpWd6Lo6ycGWm44t6y22y0VWc8g9asmQc6IhoxkiyyYhDklGjKQrdo2CXNONNiVrfCdSVxpRG80Gq2NRqNlGm9Jdg+RLZPAUvQ64n6ywNJKrSa73e6+yXlpeyOiunohDL8yiS286MHBiMDS+SCY3YmiPZPzd7vd/ZUg+EfgbJJ2RbXV7HQ+Mo0vtOhjRnxnEsmOooMksh9KTlR2CivaYFidiexxJENBRSeYu7Aqe1zJUEDRY0wQWZGdRjIUTHSKWbhUstNKhgKJtjDVeSZR1y+KDlZqNUHkxoUwTD24KcTrBjbnkwUuN8Pwko1cScj9HZ3BpH2iMmKLXIvOaGUEpiA7t6IzlBwzUdm5FD0ByTETk5070ROUHDMR2bmaJp2C5AeoHmbdRG66d9OSbGMwYtRO1g2YUHbJkAPRLkiGKYt2RTJMUbRLkmFKol2TDFMQ7aJkmLBoVyXDBEW7LBkmJNp1yTAB0V7yAzIV7SX/T2aiveRHyUS0l/w41kV7ycOxKtpLHo010V7y8VgR7SU/mdSivWQzUi3OXoWT92Zn78jMzBcKNwWeB+YsXdtIVGTdxmtak8T2w/C0qP5gM+cgKrK+2m4bf6uSF6yugs+1278A923mPEpRJYNl0W/Dv8AdmzljRLVVVMmQzXsd1kUX7cE3DOuiBf62mU9F1osuGeCE7YSqehux84wV1VbRehejsF86RG5bSVOCcnEU66JV5HcLOUpRLo5i/47u9b5Jc3qRu3DHkWhkuL2w8MLZIHjnuA9udg8Pf12pVm8IhFKp/Kbwh0AIdIBDoA9Uh51bVsmQcGS4Wa9/CFxKK2R7cfFUv9c7AJ6J/yuzZEhwRyvIj9Xqp4g8m3QXgUG+vXs3PFerNYDTUH7JkKBGb9XrLyPyXPxbVNeS7I8xiPb7P4EbkiGBaFV9Y/A/UV3bqteNt1J4pOGZmbDow+okGJWOq3DyXhB8xvCHWKIvUmNe6nb/ei+KjLbJKQNGol+Zn39NRN4adTzpZiQA+9AzjS0DRqWjUqk8VjYGUbg4bhlxASPRqmq0M4uXPRrTSSWTyfw/Bb5U1etpLqisGIkW+Fzh4pBDHVW9LiLXmmF4IKCWr680GI0MW/DU0/X6+wpvAidEZK/f71+b63R2Hq6qeDwej8fj8Xg8Ho+nqPwHV1Ky45llH2QAAAAASUVORK5CYII=">
                                                </button>
                                                <button type="button" class="btn btn-tool" onclick="destroy_user('{{ $user }}')">
                                                    <img style="height:20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAABmJLR0QA/wD/AP+gvaeTAAACL0lEQVR4nO3cv27TUBiG8ddJlYSQKjBEoEy9oFwBf8QICAEqAiGYPDEUxA4LUkXFTXALSGVh6tChA8IDVYkTnDQ5DFlQF4Rz+saNnt/uL58f2UdKhkgAAAAAUFHJqhc4K93aanVGo1cK4Yaka/95+Xclyadhu/0yPTz8fR77lbWx6gXO6uT5jqSHJS+/rhC2N/O8LulxxLWWVlv1An8LizfsdoQ5d0LF3tallkn7/XZnOn0t6aakbpyVKudY0l6t2Xz25OhoXHbIUkfH5dPTt5LuLjPjArgi6cFsMtmQdK/skNJPdCrVOr3eUNKlsjMukkQa/cqyzVSal7m+Umf0OisdOpXmIUl2Yy5TZSGE3bJPs7TkGV1vNLZDUUyDdEuLs2wd/ZT0sdZqPV/1IgAAAP8W7YeXN71eiDWrSp5mWZRGfDM0IbQJoU0IbUJoE0KbENqE0CaENiG0CaFNCG1CaBNCmxDahNAmhDYhtAmhTQhtQmgTQpsQ2oTQJoQ2IbQJoU0IbUJoE0KbENqE0CaENiG0CaFNCG1CaBNCmxDahNAmhDYhtAmhTQhtQmgTQpsQ2iRm6GHEWVVxEmtQvNBJ8i3arOqIdk/RQocQ9mLNqoogRbunaKGb3e47SV9jzauA/TzL3scaFi30o4ODYjabDbQesfdr8/kglSaxBtZjDZKkz+PxyaDf/zArih+Srmrxf6WNmJ9xjoaSvgRpJ8+y+y/G4+NVLwQAAAAAAFBVfwAPpHAQv7u4IwAAAABJRU5ErkJggg==">
                                                </button>
                                            </div>
                                            <hr>
                                            <strong>Nome</strong>
                                            <span class="text-muted">&nbsp; {{ $user->name}} </span>
                                            <hr>
                                            <strong>Papel</strong>
                                            <span class="text-muted">&nbsp; {{ $user->papel ?? ''}} </span>
                                            <hr>
                                            <strong>Email</strong>
                                            <span class="text-muted">&nbsp; {{ $user->email}} </span>
                                            <hr>
                                            <strong>Telefone</strong>
                                            <span class="text-muted">&nbsp; {{ $user->phone}} </span>
                                            <hr>
                                            <strong>Possui algum transtorno neurobiológicos?</strong>
                                            <span class="text-muted">&nbsp; {!!$user->TDAH == 1 ? 'Sim' : 'Não'!!} </span>
                                            <hr>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ciclos -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Ciclos</h5>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <img style="height:20px" src="https://img.icons8.com/external-those-icons-fill-those-icons/24/591616/external-down-arrows-those-icons-fill-those-icons-1.png">
                                    </button>
                                    <button type="button" class="btn btn-tool" onclick="create()">
                                        <img style="height:20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAPklEQVRIiWNgGFEgUkzsf6SY2H9S9DDRyjGjFoxaMIQsYIQxSM1AhMDyV68YGRjo4AOSwGhRMWrBqAUjFQAALEEKNEPfBCsAAAAASUVORK5CYII=">
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <img style="height:20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAABmJLR0QA/wD/AP+gvaeTAAADoklEQVR4nO2cMU8bMRTH/26BQFAOGEAKohJSjykj/Q7VDVWhKnPp1m/RMvQjdIeZCKg6nBj6LZpOJ8RMpBBCiXrX0uuAToWIhPPZfval77ci2+9+Opyz/fwAhmEYhmEYhmEYhmGY8UHo6ijw/crc5eWOSNM3AJAKsXdRq70PoyjWNYZJTMevRfRWozE1cXbWhBAvBv50XKlWN3ZPT3/qGMcUFPErix4RZIbTsqniVxKdI8gMJ2VTxl9YtESQGU7Jpo6/kOgCQWY4IdtG/I9kGwS+X5lst48KBAkAz5N+/yDw/UqBtlqwFf9j2QbPJic/AtiWbXeLtZk4Xl+p15tRp3Ot0I80ge9XFnq9wxQIFLpZm06SiW9XV19lGkm/0dl3pgopEMz3ep+3V1enVfvKy1ajMTV/cbGvKPmGNH0r20RatEaex/3+EYVshTl5GNL/ifKihdiVbjMc43O24px8P0LsyTaRFt2t1T4IIJRtN4wUCBZ6vUMTsjXNyXcQQNit1XZk20mLDqMo/rW4uIE0/SLbdhgm5mytc/I/jqeq1VdF9j8oFyx50PKd7WJsVEtwGZQeyMWYAJpNpSIUejCXYhnE9DapClIP6EIMo9C28W/zQV2XDGgUDdh54DJIBjSLBmgfvCySAQOiARoBZZIMGBINmBVxNTv7p0ySAYOiAXNLYOBmNamzz3PP2zR5Ym9UNGDszdYJyamPcdGA07LJjtZIRANOyiY9vyQTDTglm/yQmFQ04IRsKyfx5KIBq7KtpTtYEQ1YkW01p8SaaIBUtvXEHauiARLZ1iUDDogGjMp2QjJgN6/jv8L6G81TBwH8Y0gAf94RwAsWAngJToADkjPGd1PJIckZ47dN6qDkjPHZ+HdYcgaJbKMrQxNJ4AIIdeZng+gCkzHRJvOTy5CfPQgn0IwYQyecEpZzLFU4ybHAmEXgtF3FsfPCiegaYxgFX60wFMsgfFmIICaAr7/JUKp6HaPQ+uPjWozSok3lPJvIT3YpVhv1Ou5gMgk86nSuV+r15kwcrwNY09Rteep13KLw3eq8mLi7XrZ6HWR7wfutVvJ7aem1RtnlqNchgLDreS8pj5L2W62kOze3pWWLtQz1Oigu5gwjjKL43PM2VeMvQ70O43PyQ9iKnwsMulxgMINLZuaHi8CWoQhsBpc1fhjpleF9fG+3r58sLx9MJ8kEgKcAfkCIT13Pe9c8OXG+UHfZ42cYhmEYhmEYhmEYhqHmL5T8en3BqkP4AAAAAElFTkSuQmCC">
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach($ciclos as $ciclo)
                                        <div class="col-lg-2 info-card">
                                            <div style="width: 48%; display:inline-block">
                                                <strong style="font-size: 1.1rem; color: #8C1515">Ciclo {{ $ciclo->id}}</strong>
                                            </div>
                                            <div class="card-tools" style="width: 49%; display:inline-block; text-align: end">
                                                <button type="button" class="btn btn-tool" onclick="edit_ciclo('{{ $ciclo }}')">
                                                    <img style="height:20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAABmJLR0QA/wD/AP+gvaeTAAAEiElEQVR4nO2czWscZRjAf8+mFbKzRg/ZTW6epQheqwVDbFr0TxC8CYInYRtavGTjQa35oBcPBfEi9GBB9ODBJEgqREE99i5+HbqzUAvdidTuPh7awXS7m76z887uzLzv77Y7zzzv8GN45v2YecHj8Xg8Ho/H4/F4copM+wLywMf1+oui2hSRZaAOtIE9rVQ2V2/dummjDedFb87PNxG5DMwMOXxf4N1mGH6Stp1hyZ1ho9FoCXwAVEaEVIDXzwVBbyeKvk/TlrOiNxqNlqiuGYYvp5XtpOiEkmNSyXZO9JiSY8aW7ZTolJJjxpLtjGhLkmMSy3ZCtGXJMcvng6CzE0U/mwSP6tZ4DFC4sr24eMok1ok7erfb3V+p1URgyXLqiqpWd6Lo6ycGWm44t6y22y0VWc8g9asmQc6IhoxkiyyYhDklGjKQrdo2CXNONNiVrfCdSVxpRG80Gq2NRqNlGm9Jdg+RLZPAUvQ64n6ywNJKrSa73e6+yXlpeyOiunohDL8yiS286MHBiMDS+SCY3YmiPZPzd7vd/ZUg+EfgbJJ2RbXV7HQ+Mo0vtOhjRnxnEsmOooMksh9KTlR2CivaYFidiexxJENBRSeYu7Aqe1zJUEDRY0wQWZGdRjIUTHSKWbhUstNKhgKJtjDVeSZR1y+KDlZqNUHkxoUwTD24KcTrBjbnkwUuN8Pwko1cScj9HZ3BpH2iMmKLXIvOaGUEpiA7t6IzlBwzUdm5FD0ByTETk5070ROUHDMR2bmaJp2C5AeoHmbdRG66d9OSbGMwYtRO1g2YUHbJkAPRLkiGKYt2RTJMUbRLkmFKol2TDFMQ7aJkmLBoVyXDBEW7LBkmJNp1yTAB0V7yAzIV7SX/T2aiveRHyUS0l/w41kV7ycOxKtpLHo010V7y8VgR7SU/mdSivWQzUi3OXoWT92Zn78jMzBcKNwWeB+YsXdtIVGTdxmtak8T2w/C0qP5gM+cgKrK+2m4bf6uSF6yugs+1278A923mPEpRJYNl0W/Dv8AdmzljRLVVVMmQzXsd1kUX7cE3DOuiBf62mU9F1osuGeCE7YSqehux84wV1VbRehejsF86RG5bSVOCcnEU66JV5HcLOUpRLo5i/47u9b5Jc3qRu3DHkWhkuL2w8MLZIHjnuA9udg8Pf12pVm8IhFKp/Kbwh0AIdIBDoA9Uh51bVsmQcGS4Wa9/CFxKK2R7cfFUv9c7AJ6J/yuzZEhwRyvIj9Xqp4g8m3QXgUG+vXs3PFerNYDTUH7JkKBGb9XrLyPyXPxbVNeS7I8xiPb7P4EbkiGBaFV9Y/A/UV3bqteNt1J4pOGZmbDow+okGJWOq3DyXhB8xvCHWKIvUmNe6nb/ei+KjLbJKQNGol+Zn39NRN4adTzpZiQA+9AzjS0DRqWjUqk8VjYGUbg4bhlxASPRqmq0M4uXPRrTSSWTyfw/Bb5U1etpLqisGIkW+Fzh4pBDHVW9LiLXmmF4IKCWr680GI0MW/DU0/X6+wpvAidEZK/f71+b63R2Hq6qeDwej8fj8Xg8Ho+nqPwHV1Ky45llH2QAAAAASUVORK5CYII=">
                                                </button>
                                                <button type="button" class="btn btn-tool" onclick="destroy_ciclo('{{ $ciclo }}')">
                                                    <img style="height:20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAABmJLR0QA/wD/AP+gvaeTAAACL0lEQVR4nO3cv27TUBiG8ddJlYSQKjBEoEy9oFwBf8QICAEqAiGYPDEUxA4LUkXFTXALSGVh6tChA8IDVYkTnDQ5DFlQF4Rz+saNnt/uL58f2UdKhkgAAAAAUFHJqhc4K93aanVGo1cK4Yaka/95+Xclyadhu/0yPTz8fR77lbWx6gXO6uT5jqSHJS+/rhC2N/O8LulxxLWWVlv1An8LizfsdoQ5d0LF3tallkn7/XZnOn0t6aakbpyVKudY0l6t2Xz25OhoXHbIUkfH5dPTt5LuLjPjArgi6cFsMtmQdK/skNJPdCrVOr3eUNKlsjMukkQa/cqyzVSal7m+Umf0OisdOpXmIUl2Yy5TZSGE3bJPs7TkGV1vNLZDUUyDdEuLs2wd/ZT0sdZqPV/1IgAAAP8W7YeXN71eiDWrSp5mWZRGfDM0IbQJoU0IbUJoE0KbENqE0CaENiG0CaFNCG1CaBNCmxDahNAmhDYhtAmhTQhtQmgTQpsQ2oTQJoQ2IbQJoU0IbUJoE0KbENqE0CaENiG0CaFNCG1CaBNCmxDahNAmhDYhtAmhTQhtQmgTQpsQ2iRm6GHEWVVxEmtQvNBJ8i3arOqIdk/RQocQ9mLNqoogRbunaKGb3e47SV9jzauA/TzL3scaFi30o4ODYjabDbQesfdr8/kglSaxBtZjDZKkz+PxyaDf/zArih+Srmrxf6WNmJ9xjoaSvgRpJ8+y+y/G4+NVLwQAAAAAAFBVfwAPpHAQv7u4IwAAAABJRU5ErkJggg==">
                                                </button>
                                            </div>
                                            <hr>
                                            <strong>ID</strong>
                                            <span class="text-muted">&nbsp; {{ $ciclo->id }} </span>
                                            <hr>
                                            <strong>Label</strong>
                                            <span class="text-muted">&nbsp; {{ $ciclo->label }} </span>
                                            <hr>
                                            <strong>Tempo de foco</strong>
                                            <span class="text-muted">&nbsp; {{ $ciclo->tempo_foco }} </span>
                                            <hr>
                                            <strong>Tempo de pausa</strong>
                                            <span class="text-muted">&nbsp; {{ $ciclo->tempo_pausa }} </span>
                                            <hr>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    <!-- </section> -->
    <!-- Minha conta -->
    <div class="modal fade" id="modal-user-edit" role="dialog">
        <div class="modal-dialog modal-lg" style="max-width: 80% !important;">
            <form id="contact" action="{{ route('users.update')}}" method="POST">
                {{ csrf_field() }}
                <div class="modal-content" style="background-color: #ffffffeb !important; backdrop-filter: blur(5px); border-radius: 25px;">
                    <div class="modal-header">
                        <b style="color: #591616">{{ $myUser->name }} <small>&nbsp;- Editar</small></b>
                        <a type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="info-post">
                                    <div class="icon">
                                        <img src="https://cdn-icons-png.flaticon.com/512/726/726623.png" alt="">
                                        <br><span >{{ $myUser->email }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="info-post">
                                    <div class="icon">
                                        <img src="https://cdn-icons-png.flaticon.com/512/724/724664.png" alt="">
                                        <br><span>{{ $myUser->phone }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="info-post">
                                    <div class="icon">
                                        <img src="https://cdn-icons-png.flaticon.com/512/2491/2491387.png" alt="">
                                        <br><span>{!!$myUser->TDAH == 1 ? 'Possui transtornos neurobiológicos' : 'Não possui transtornos neurobiológicos'!!}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>Nome</label>
                                        <input type="name" name="name" id="name" placeholder="Insira seu Nome" autocomplete="on" value="{{isset($myUser) ? $myUser->name : ''}}">
                                    </div>
                                    <div class="col-lg-2">
                                        <label>Telefone</label>
                                        <input type="text" name="phone" id="phone" placeholder="Insira seu Telefone" value="{{isset($myUser) ? $myUser->phone : ''}}">
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Email</label>
                                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Insira seu Email" value="{{isset($myUser) ? $myUser->email : ''}}">
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Possui transtornos neurobiológicos?</label>
                                        <select name="tdah" id="tdah">
                                            <option value="1" @if($myUser->tdah == 1) selected @endif >Sim</option>
                                            <option value="0" @if($myUser->tdah == 0) selected @endif >Não</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <br>
                                <hr>
                            </div>
                            <div class="col-lg-9">
                            </div>
                            <div class="col-lg-3" style="padding: 25px;">
                                <button type="submit" class="button-user" >Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="modal-user-destroy" role="dialog">
        <div class="modal-dialog modal-lg" style="max-width: 70% !important;">
            <form id="contact" action="{{ route('users.destroy')}}" method="POST">
                {{ csrf_field() }}
                <div class="modal-content" style="background-color: #ffffffeb !important; backdrop-filter: blur(5px); border-radius: 25px;">
                    <div class="modal-header">
                        <b style="color: #591616">{{ $myUser->name }} <small>&nbsp;- Deletar</small></b>
                        <input type="hidden" name="id"  value="{{ $myUser->id }}">
                        <a type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <div class="fill-form" style="padding:10px;">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="info-post">
                                        <div class="icon">
                                            <img src="https://cdn-icons-png.flaticon.com/512/726/726623.png" alt="">
                                            <br><span >{{ $myUser->email }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="info-post">
                                        <div class="icon">
                                            <img src="https://cdn-icons-png.flaticon.com/512/724/724664.png" alt="">
                                            <br><span>{{ $myUser->phone }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="info-post">
                                        <div class="icon">
                                            <img src="https://cdn-icons-png.flaticon.com/512/2491/2491387.png" alt="">
                                            <br><span>{!!$myUser->TDAH == 1 ? 'Possui transtornos neurobiológicos' : 'Não possui transtornos neurobiológicos'!!}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <br>
                                    <p style="margin-left: 20px;">Deseja mesmo <span style="color: #591616; ">deletar</span> este usuário?</p>
                                </div>
                                <div class="col-lg-12">
                                    <br>
                                    <hr>
                                </div>
                                <div class="col-lg-9">
                                </div>
                                <div class="col-lg-3" style="padding: 25px;">
                                    <button type="submit" class="button-user-delete" >Deletar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="modal-user-tdah" role="dialog">
        <div class="modal-dialog modal-lg" style="max-width: 60% !important;">
            <form id="contact" action="{{ route('users.tdah')}}" method="POST">
                {{ csrf_field() }}
                <div class="modal-content" style="background-color: #ffffffeb !important; backdrop-filter: blur(5px); border-radius: 25px;">
                    <div class="modal-header">
                        <b style="color: #591616">{{ $myUser->name }}</b>
                        <a type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12" style="padding-left: 40px;padding-right: 40px; text-align: justify;">
                                        <span style="color:#8C1515; font-weight:500">O que é TDAH?</span><br>
                                        <span style="font-style: italic; margin:15px; font-weight:300">“O Transtorno do Déficit de Atenção com Hiperatividade (TDAH) é um transtorno neurobiológico, de causas genéticas, que aparece na infância e freqüentemente acompanha o indivíduo por toda a sua vida. Ele se caracteriza por sintomas de desatenção, inquietude e impulsividade. Ele é chamado às vezes de DDA (Distúrbio do Déficit de Atenção). Em inglês, também é chamado de ADD, ADHD ou de AD/HD.”</span>
                                        <br>
                                        <small><small class="text-muted"> Fonte: <a href="https://tdah.org.br/sobre-tdah/o-que-e-tdah/">TDAH.org.br</a></small></small>
                                        <br>
                                        <span style="color:#8C1515; font-weight:500">Quer saber mais sobre a TDAH? Para mais informações consulte os sites:</span>
                                        <br>
                                        <a style="color: #D83636;font-size: .8rem; font-weight:300" href="https://tdah.org.br/sobre-tdah/o-que-e-tdah/">O que é TDAH?</a><br>
                                        <a style=" color: #D83636;font-size: .8rem; font-weight:300" href="https://drauziovarella.uol.com.br/doencas-e-sintomas/tdah-transtorno-do-deficit-de-atencao-com-hiperatividade/">TDAH (Transtorno do Deficit de Atencao com Hiperatividade)</a>
                                        <br>
                                        <br>
                                        <span style="color:#8C1515; font-weight:500">Você se encaixa em alguns dos sintomas descritos?</span><br>
                                        <span style="font-weight:300">Procure o diagnóstico clínico com um profissional de saúde capacitado para confirmar se possui TDAH.</span>
                                        <br>
                                        <span style="font-weight:300">Preencha o questionário de avaliação de sintomas ASRS-18, que foi desenvolvido por pesquisadores em colaboração com a Organização Mundial de Saúde. Esta é a versão validada no Brasil:</span>
                                        <br>
                                        <a style="color: #D83636;font-size: .8rem; font-weight:300" href="https://tdah.org.br/diagnostico-adultos/">Diagnostico para adultos</a>
                                        <br>
                                        <a style="color: #D83636;font-size: .8rem; font-weight:300" href="https://tdah.org.br/diagnostico-criancas/">Diagnostico para crianças</a>
                                        <br>
                                        <br>
                                        <span style="font-weight:400;">Esta plataforma não tem como objetivo promover o auto diagnóstico por parte de seus usuários acerca se eles possuem determinada condição neurobiológica ou não e  reforçamos, primeiramente, a importância do diagnóstico clínico com o profissional de saúde capacitado.</span>
                                    </div>
                                    <div class="col-lg-5" style="padding-left: 40px;">
                                        <br>
                                        <span style="font-weight: 500"> Possui algum transtorno neurobiológico?</span>
                                        <select name="tdah" id="tdah" style="margin-top: 10px;">
                                            <option value="1">Sim</option>
                                            <option value="0">Não</option>
                                            <option value="0">Prefiro não responder</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12" style="padding-left: 40px; padding-top: 20px; text-align: justify;">
                                        <span style="color:#8C1515; font-weight:500">OBS: Esta informação será utilizado apenas para desenvolvimento desta plataforma e não será divulgado.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <hr>
                            </div>
                            <div class="col-lg-9">
                            </div>
                            <div class="col-lg-3" style="padding-right: 25px; padding-top: 10px">
                                <button type="submit" class="button-user" >Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if(Auth::user()->papel == 'admin')
        <!-- Usuários -->
        <div class="modal fade" id="modal-users-edit" role="dialog">
            <div class="modal-dialog modal-lg" style="max-width: 80% !important;">
                <form id="user-update" action="{{ route('users.update')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-content" style="background-color: #ffffffeb !important; backdrop-filter: blur(5px); border-radius: 25px;">
                        <div class="modal-header">
                            <b style="color: #591616" id="id-edit-users"> </b><small>&nbsp;- Editar</small>
                            <a type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="info-post">
                                        <div class="icon">
                                            <img src="https://cdn-icons-png.flaticon.com/512/726/726623.png" alt="">
                                            <br><span id="email-edit-users"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="info-post">
                                        <div class="icon">
                                            <img src="https://cdn-icons-png.flaticon.com/512/724/724664.png" alt="">
                                            <br><span id="phone-edit-users"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="info-post">
                                        <div class="icon">
                                            <img src="https://cdn-icons-png.flaticon.com/512/2491/2491387.png" alt="">
                                            <br><span id="tdah-edit-users"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <input type="hidden" name="id" id="id-edit" value="">
                                        <div class="col-lg-3">
                                            <label>Nome</label>
                                            <input type="name" name="name" id="name-edit" placeholder="Insira seu Nome" autocomplete="on" value="">
                                        </div>
                                        <div class="col-lg-2">
                                            <label>Telefone</label>
                                            <input type="text" name="phone" id="phone-edit" placeholder="Insira seu Telefone" value="">
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Email</label>
                                            <input type="text" name="email" id="email-edit" pattern="[^ @]*@[^ @]*" placeholder="Insira seu Email" value="">
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Possui transtornos neurobiológicos?</label>
                                            <select name="tdah" id="tdah">
                                                <option value="1" id="tdah-1">Sim</option>
                                                <option value="0" id="tdah-0">Não</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <br>
                                    <hr>
                                </div>
                                <div class="col-lg-9">
                                </div>
                                <div class="col-lg-3" style="padding: 25px;">
                                    <button type="button" class="button-user" id="submit_user_edit" onclick="submit_user_edit_()">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="modal-users-destroy" role="dialog">
            <div class="modal-dialog modal-lg" style="max-width: 70% !important;">
                <form id="user-destroy"  action="{{ route('users.destroy')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-content" style="background-color: #ffffffeb !important; backdrop-filter: blur(5px); border-radius: 25px;">
                        <div class="modal-header">
                            <b style="color: #591616" id="id-destroy-users"> </b><small>&nbsp;- Deletar</small>
                            <a type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body">
                            <div class="fill-form" style="padding:10px;">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="info-post">
                                            <div class="icon">
                                                <img src="https://cdn-icons-png.flaticon.com/512/726/726623.png" alt="">
                                                <br><span id="email-destroy-users"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="info-post">
                                            <div class="icon">
                                                <img src="https://cdn-icons-png.flaticon.com/512/724/724664.png" alt="">
                                                <br><span id="phone-destroy-users"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="info-post">
                                            <div class="icon">
                                                <img src="https://cdn-icons-png.flaticon.com/512/2491/2491387.png" alt="">
                                                <br><span id="tdah-destroy-users"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" id="id-destroy" value="">
                                    <div class="col-lg-12">
                                        <br>
                                        <p style="margin-left: 20px;">Deseja mesmo <span style="color: #591616; ">deletar</span> este usuário?</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <br>
                                        <hr>
                                    </div>
                                    <div class="col-lg-9">
                                    </div>
                                    <div class="col-lg-3" style="padding: 25px;">
                                        <button type="button" class="button-user-delete" id="submit_user_destroy" onclick="submit_user_destroy_()">Deletar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Ciclos -->
        <div class="modal fade" id="modal-ciclos-create" role="dialog">
            <div class="modal-dialog modal-lg" style="max-width: 50% !important;">
                <form id="ciclos-create" action="{{ route('ciclos.store')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-content" style="background-color: #ffffffeb !important; backdrop-filter: blur(5px); border-radius: 25px;">
                        <div class="modal-header">
                            <b style="color: #591616" > Ciclo</b><small>&nbsp;- Criar</small>
                            <a type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label>Label</label>
                                            <input type="text" style="margin-top: 10px" name="label" placeholder="Insira o label" autocomplete="on">
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Tempo de Foco</label>
                                            <input type="number" style="margin-top: 10px" name="tempo_foco" placeholder="Insira o tempo foco">
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Tempo de Pausa</label>
                                            <input type="number" style="margin-top: 10px" name="tempo_pausa" placeholder="Insira o tempo pausa">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <br>
                                    <hr>
                                </div>
                                <div class="col-lg-9">
                                </div>
                                <div class="col-lg-3" style="padding: 25px;">
                                    <button type="button" class="button-user" onclick="create_ciclo()">Criar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="modal-ciclos-edit" role="dialog">
            <div class="modal-dialog modal-lg" style="max-width: 50% !important;">
                <form id="ciclos-update" action="{{ route('ciclos.update')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-content" style="background-color: #ffffffeb !important; backdrop-filter: blur(5px); border-radius: 25px;">
                        <div class="modal-header">
                            <b style="color: #591616" id="id-ciclos"> </b><small>&nbsp;- Editar</small>
                            <a type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <input type="hidden" name="id" id="id-edit-ciclos" value="">
                                        <div class="col-lg-4">
                                            <label>Label</label>
                                            <input type="label" name="label" id="label-edit" placeholder="Insira o label" autocomplete="on" value="">
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Tempo de Foco</label>
                                            <input type="number" name="tempo_foco" id="tempo_foco-edit" placeholder="Insira o tempo foco" value="">
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Tempo de Pausa</label>
                                            <input type="number" name="tempo_pausa" id="tempo_pausa-edit" placeholder="Insira o tempo pausa" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <br>
                                    <hr>
                                </div>
                                <div class="col-lg-9">
                                </div>
                                <div class="col-lg-3" style="padding: 25px;">
                                    <button type="button" class="button-user" id="submit_ciclo_edit" onclick="submit_ciclo_edit_()">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="modal-ciclos-destroy" role="dialog">
            <div class="modal-dialog modal-lg" >
                <form id="ciclos-destroy"  action="{{ route('ciclos.destroy')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-content" style="background-color: #ffffffeb !important; backdrop-filter: blur(5px); border-radius: 25px;">
                        <div class="modal-header">
                            <b style="color: #591616" id="id-destroy-ciclos"> </b><small>&nbsp;- Deletar</small>
                            <a type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body">
                            <div class="fill-form" style="padding:20px;margin-left: 20px">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <strong>Label&nbsp; &nbsp; </strong>
                                        <span class="text-muted" id="label-destroy">&nbsp; </span>
                                        <hr>
                                        <strong>Tempo de foco&nbsp; &nbsp; </strong>
                                        <span class="text-muted" id="tempo_foco-destroy">&nbsp; </span>
                                        <hr>
                                        <strong>Tempo de pausa&nbsp; &nbsp; </strong>
                                        <span class="text-muted" id="tempo_pausa-destroy">&nbsp; </span>
                                        <input type="hidden" name="id" id="id-ciclo-destroy" value="">
                                    </div>
                                    <div class="col-lg-12">
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <p>Deseja mesmo <span style="color: #591616; ">deletar</span> este ciclo?</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <hr>
                                    </div>
                                    <div class="col-lg-9">
                                    </div>
                                    <div class="col-lg-3" style="padding: 25px;">
                                        <button type="button" class="button-user-delete" id="submit_ciclo_destroy" onclick="submit_ciclo_destroy_()">Deletar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endif

@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        // Minha conta
        function edit(){
            $('#modal-user-edit').modal('show');
        }
        function destroy(){
            $('#modal-user-destroy').modal('show');
        }
        function modal_tdah(){
            $('#modal-user-tdah').modal('show');
        }
        @if(Auth::user()->papel == 'admin')
            // Usuários
            function edit_user(info){
                var usuario = JSON.parse(info);
                $('#id-edit-users').html(usuario['id']);
                $('#email-edit-users').html(usuario['email']);
                $('#phone-edit-users').html(usuario['phone']);
                $('#id-edit').val(usuario['id']);
                $('#name-edit').val(usuario['name']);
                $('#phone-edit').val(usuario['phone']);
                $('#email-edit').val(usuario['email']);
                if(usuario['tdah'] == true){
                    $('#tdah-edit-users').html('Possui transtornos neurobiológicos');
                    document.getElementById('tdah-1').selected = true;
                }else{
                    $('#tdah-edit-users').html('Não possui transtornos neurobiológicos');
                    document.getElementById('tdah-0').selected = true;
                }
                $('#modal-users-edit').modal('show');
            }
            function submit_user_edit_(){
                document.getElementById("user-update").submit();
            }
            function destroy_user(info){
                var usuario = JSON.parse(info);
                $('#id-destroy-users').html(usuario['id']);
                $('#email-destroy-users').html(usuario['email']);
                $('#phone-destroy-users').html(usuario['phone']);
                $('#id-destroy').val(usuario['id']);
                if(usuario['tdah'] == true){
                    $('#tdah-destroy-users').html('Possui transtornos neurobiológicos');
                }else{
                    $('#tdah-destroy-users').html('Não possui transtornos neurobiológicos');
                }
                $('#modal-users-destroy').modal('show');
            }
            function submit_user_destroy_(){
                document.getElementById("user-destroy").submit();
            }
            // Ciclos
            function create(){
                $('#modal-ciclos-create').modal('show');
            }
            function create_ciclo(){
                document.getElementById("ciclos-create").submit();
            }
            function edit_ciclo(info){
                var ciclo = JSON.parse(info);
                $('#id-ciclos').html(ciclo['id']);
                $('#id-edit-ciclos').val(ciclo['id']);
                $('#label-edit').val(ciclo['label']);
                $('#tempo_pausa-edit').val(ciclo['tempo_pausa']);
                $('#tempo_foco-edit').val(ciclo['tempo_foco']);
                $('#modal-ciclos-edit').modal('show');
            }
            function submit_ciclo_edit_(){
                document.getElementById("ciclos-update").submit();
            }
            function destroy_ciclo(info){
                var ciclo = JSON.parse(info);
                $('#id-destroy-ciclos').html(ciclo['id']);
                $('#label-destroy').html(ciclo['label']);
                $('#tempo_pausa-destroy').html(ciclo['tempo_pausa']);
                $('#tempo_foco-destroy').html(ciclo['tempo_foco']);
                $('#id-ciclo-destroy').val(ciclo['id']);
                $('#modal-ciclos-destroy').modal('show');
            }
            function submit_ciclo_destroy_(){
                document.getElementById("ciclos-destroy").submit();
            }
        @endif

    </script>
@endsection
