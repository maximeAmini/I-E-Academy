<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>@isset($titre) {{$titre.' | '}} @endisset {{env('APP_NAME')}}</title>
    <meta name="viewport" content="width=device-width" />

    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/icone/css/all.css">
    <script src="css/bootstrap/js/jquery.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <style>
        .princi {
            margin-top:80px;
            margin-left: 20%;
            margin-right:5%;
        }
        #menu {
            height: 100%;
            top: 0;
            bottom: 0;
            display: initial;
            box-shadow: 0 .15rem 1.75rem 0 rgba(58, 59, 69, .15) !important;
        }

        #recherche{

            border : none;
        }

        #logosearch{
            border : none;
            color: #fff;
            background: #4e73df;
            border-top-right-radius: 0.35rem;
            border-bottom-right-radius: 0.35rem;
        }

        #rechLogo{
            display: none;
        }

        .card-body{
            border-radius: 0.5em;
            font-size: 10px;
        }

        @media screen and (max-width: 569px) {
            .princi {
                margin-left: 10px;
            }

            #menu hr{
                display: none;
            }

            #menu {
                height:min-content;
                font-size: 15px;
                display: none;
            }

            #menuRech{
                position:absolute;
                margin-top: 60px;
                width: 90%;
            }

            #menuRech input{
                background-color: #343a40;
                color: #fff;
            }

            #rechLogo{
                display: inline;
            }
        }

    </style>
</head>

<body>
    @include('layouts.partials.menu')

    <div class="princi">
        @yield('content')
    </div>

    <script>
        function rep(){
            if($('#menu').css('display')=='flex'){
                $('#menu').css('display','none')
            }else{
                $('#menu').css('display','flex');
            }
        }
    </script>
</body>

</html>
