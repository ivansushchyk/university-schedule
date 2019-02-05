<!DOCTYPE>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">

    <div id="header" align="center">
        <img src="/1.jpg" align="middle" width="170" height="170" style="border-width:0px;" />
        <h1>
            Розклад занять</h1>
        <hr>
    </div>
    <div>

        <h2 class="text-center"> Верхній тиждень </h2>
        <table class="table table-bordered table-sm">
            <thead>
            <tr>
                <th> </th>
                <th class="text-center">Понеділок</th>
                <th class="text-center"> Вівторок </th>
                <th class="text-center"> Середа</th>
                <th class="text-center"> Четвер </th>
                <th class="text-center"> П'ятниця </th>
            </tr>
            </thead>

            <tbody>

            <?php
            $arr = ['08.30-09.50', '10.00-11.45', '13.15-14.35', '14.40-16.00', '16.00-17.20'];
            ?>

            @foreach($arr as $key => $value)
                <?php $a = ($key + 1) + ($key * 4); ?>
                <tr>
                    <th class="text-center"> {{ $key+1 }} пара <br> ({{ $value }})</th>
                    @for($i = 0;$i <= 4;$i++)
                       @if(isset($pairs[$i+$a]))

                        <th class="text-center"> {{$pairs[$i+$a]['type']}} - {{ $pairs[$i+$a]->subject->all()[0]['name'] }} <br>
                            {{ $pairs[$i+$a]->classroom->all()[0]['number'] }} -
                            {{ $pairs[$i+$a]->teacher->all()[0]['rank'] }}.{{ $pairs[$i+$a]->teacher->all()[0]['name'] }} </th>
                        @else
                            <th   class="text-center"> </th>
                        @endif
                    @endfor
                </tr>
            @endforeach



            </tbody>
        </table>

        <hr>

</body>
</html>

