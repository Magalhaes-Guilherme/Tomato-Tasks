<style>
    .botao-login {
        text-align: center;
        background-color: #8d2619;
        border-radius: 17px;
        color: white;
        font-family: 'Outfit', sans-serif !important;
        font-weight: 700;
        font-size: 30px;
        margin-top: 10px;
        width: 100%;
        padding: 10px !important;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        align-items:center;
        justify-content: center;
        border: none;
    }
    .botao-login img{
        height: 30px;
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
        margin: 30px !important;
        border-radius: 17px !important;
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
    .card-title {
        flex-wrap: nowrap;
        max-width: 70%;
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
        margin-bottom: 30px;
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
        margin-bottom: 30px;
        box-shadow: 3px 3px 6px rgb(163 177 198 / 49%), 3px 3px 6px rgb(255 255 255);
    }
    .button{
        text-align: center;
        background-color: white;
        border-radius: 17px;
        color: #8d2619 !important;
        font-family: 'Outfit', sans-serif !important;
        font-weight: 700;
        width: 100%;
        padding: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border: none;
    }
    label{
        color: #565656;
    }
    .modal-content label{
        padding-left: 9px;
        padding: 5px;
    }
    .button-delete{
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
    time {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    img{
        user-drag: none;
        -webkit-user-drag: none;
        user-select: none;
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    .badge-info {
        color: #fff !important;
        background-color: #DF7B7B !important;
    }
    .badge-warning {
        color: white !important;
        background-color: #D83636 !important;
    }
    .badge-danger {
        color: white !important;
        background-color: #591616 !important;
    }
    .group input[type="radio"] {
        position: absolute;
        opacity: 0;
        z-index: 1;
        width: 50%;
    }
    .group label {
        position: relative;
        margin-right: 1em;
        padding-left: 2em;
        padding-right: 1em;
        line-height: 1.3;
        cursor: pointer;
        padding-bottom: 0;
        margin-bottom: 0;
    }
    .group label::before {
        box-sizing: border-box;
        content: " ";
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 1.4em;
        height: 1.4em;
        border: 2px solid #8C1515;
        border-radius: .25em;
        z-index: 1;
    }
    .group input[type="radio"] + label::before {
        border-radius: 1em;
    }

    .group input[type="radio"]:checked + label {
        padding-left: 1em;
        color: #8C1515 !important;
    }
    .group input[type="radio"]:checked + label::before {
        top: 0;
        width: 100%;
        height: 1.3em;
        /* background: #e7e1e1 !important; */
    }
    .group label,
        label::before {
        -webkit-transition: .25s all ease;
        -o-transition: .25s all ease;
        transition: .25s all ease;
    }
</style>
