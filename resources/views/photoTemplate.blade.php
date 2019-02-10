
<html>
<head>
    <title>Розклад занять</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
@section('sidebar')
    <div id="header" align="center">
        <img src="/1.jpg" align="middle" width="170" height="170" style="border-width:0px;"/>
        <h1>
            Розклад занять</h1>
        <hr>
    </div>
@show

<div class="container-fluid">
    @yield('content')
</div>
</body>
</html>