<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>@isset($titre) {{$titre.' | '}} @endisset {{env('APP_NAME')}}</title>
    <meta name="viewport" content="width=device-width" />

    <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/icone/css/all.css">
    <script src="../../css/bootstrap/js/jquery.js"></script>

    @if ( isset($titre) && ( $titre=="Créer un texte" || $titre =='modifer un texte'))
    <link href="../../css/summer/summernote-bs4.css" rel="stylesheet">
    <script src="../../css/summer/popper.min.js" ></script>
    @endif

    <script src="../../css/bootstrap/js/bootstrap.js" ></script>
    <script src="../../css/summer/summernote-bs4.js"></script>
    <script src="../../css/summer/lang/summernote-fr-FR.min.js"></script>


    <link rel="stylesheet" href="../../css/style.css">

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
