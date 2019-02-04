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
            <tr>
                <th class="text-center"> 1 пара <br> (08.30-9.50)</th>

                @for($i = 1; $i <= 5; $i++)
                @if(isset($pairs[$i]))

                    <th class="text-center"> {{$pairs[$i]['type']}} - {{ $pairs[$i]->subject->all()[0]['name'] }} <br>
                        {{ $pairs[$i]->classroom->all()[0]['number'] }} -
                        {{ $pairs[$i]->teacher->all()[0]['rank'] }}{{ $pairs[$i]->teacher->all()[0]['name'] }} </th>
                @else
                    <th   class="text-center"> </th>

                @endif
                @endfor
            </tr>
            <tr>
                <th   class="text-center"> 2 пара <br> (10.00-11.20)</th>
                @for($i = 6; $i <= 10; $i++)
                    @if(isset($pairs[$i]))

                        <th class="text-center"> {{$pairs[$i]['type']}} - {{ $pairs[$i]->subject->all()[0]['name'] }} <br>
                            {{ $pairs[$i]->classroom->all()[0]['number'] }} -
                            {{ $pairs[$i]->teacher->all()[0]['rank'] }}{{ $pairs[$i]->teacher->all()[0]['name'] }} </th>
                    @else
                        <th   class="text-center"> </th>

                    @endif
                @endfor
            </tr>

            <tr>
                <th   class="text-center">  3 пара <br> (11.45-13.05)</th>
                @for($i = 11; $i <= 15; $i++)
                    @if(isset($pairs[$i]))

                        <th class="text-center"> {{$pairs[$i]->type}} - {{ $pairs[$i]->subject->all()[0]->name }} <br>
                            {{ $pairs[$i]->classroom->all()[0]['number'] }} -
                            {{ $pairs[$i]->teacher->all()[0]['rank'] }}{{ $pairs[$i]->teacher->all()[0]['name'] }} </th>
                    @else
                        <th   class="text-center"> </th>

                    @endif
                @endfor
            </tr>
            <tr>
                <th  class="text-center">  3 пара <br> (13.05-14.25)</th>
                @for($i = 16; $i <= 20; $i++)
                    @if(isset($pairs[$i]))

                        <th class="text-center"> {{$pairs[$i]['type']}} - {{ $pairs[$i]->subject->all()[0]['name'] }} <br>
                            {{ $pairs[$i]->classroom->all()[0]['number'] }} -
                            {{ $pairs[$i]->teacher->all()[0]['rank'] }}{{ $pairs[$i]->teacher->all()[0]['name'] }} </th>
                    @else
                        <th   class="text-center"> </th>

                    @endif
                @endfor
            </tr>

            <tr>
                <th  class="text-center">  5 пара <br> (14.40-16.00)</th>
                @for($i = 21; $i <= 25; $i++)
                    @if(isset($pairs[$i]))

                        <th class="text-center"> {{$pairs[$i]['type']}} - {{ $pairs[$i]->subject->all()[0]['name'] }} <br>
                            {{ $pairs[$i]->classroom->all()[0]['number'] }} -
                            {{ $pairs[$i]->teacher->all()[0]['rank'] }}{{ $pairs[$i]->teacher->all()[0]['name'] }} </th>
                    @else
                        <th   class="text-center"> </th>

                    @endif
                @endfor
            </tr>

            </tbody>
        </table>

        <hr>
        <div>

            <h2 class="text-center"> Нижній тиждень </h2>
            <table class="table table-bordered">
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
                <tr>
                    <th   class="text-center"> 1 пара <br> (08.30-9.50)</th>
                    <th   class="text-center"> Л - Менеджмент (059) <br>
                        qwrqw</th>
                    <th   class="text-center"> Third</th>
                    <th   class="text-center"> Fourth</th>
                    <th   class="text-center"> Fiveth </th>
                    <th   class="text-center"> First</th>
                </tr>
                <tr>
                    <th   class="text-center"> 2 пара  <br> (10.00-11.20)</th>
                    <th   class="text-center"> Second</th>
                    <th   class="text-center"> Third</th>
                    <th   class="text-center"> Fourth</th>
                    <th   class="text-center"> Fiveth </th>
                    <th   class="text-center"> First</th>
                </tr>
                <tr>
                    <th   class="text-center">  3 пара <br> (11.45-13.05)</th>
                    <th   class="text-center"> Second</th>
                    <th  class="text-center"> Third</th>
                    <th  class="text-center"> Fourth</th>
                    <th  class="text-center"> Fiveth </th>
                    <th  class="text-center"> First</th>
                </tr>

                <tr>
                    <th  class="text-center">  3 пара <br> (13.05-14.25)</th>
                    <th  class="text-center"> Second</th>
                    <th  class="text-center"> Third</th>
                    <th  class="text-center"> Fourth</th>
                    <th  class="text-center"> Fiveth </th>
                    <th  class="text-center"> First</th>
                </tr>

                <tr>
                    <th  class="text-center">  5 пара <br> (14.40-16.00)</th>
                    <th  class="text-center"> Second</th>
                    <th  class="text-center"> Third</th>
                    <th  class="text-center"> Fourth</th>
                    <th  class="text-center"> Fiveth </th>
                    <th  class="text-center"> First</th>
                </tr>

                </tbody>
            </table>

            <hr>
            <div>
</body>
</html>


