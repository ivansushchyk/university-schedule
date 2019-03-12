@extends('photoTemplate')

<?php
$pairs_time = ['08.30-09.50', '10.00-11.45', '13.15-14.35', '14.40-16.00', '16.00-17.20'];
if ($isGroupSelection = isset($lessons_array[1])) {
    $lessonsTopWeek = $lessons_array[1];
    $lessonsBottomWeek = $lessons_array[2];
} else {
    $lessonsTopWeek = $lessons_array[0];
    $lessonsBottomWeek = $lessons_array[2];
}
?>

@section('content')
    <div style="text-align:center">
        <h1> Розклад занять для @if($isGroupSelection)
                ФІН-{{ current($lessonsTopWeek->first())->group->name }}
            @else
                {{ current($lessonsTopWeek->first())->teacher->name }}
            @endif
        </h1>
        <hr>
    </div>
    <div class="container-fluid">
        <div>

            <h2 class="text-center"> Верхній тиждень </h2>

            <table id="topWeek" class="table table-bordered table-sm">
                <thead>
                <tr>
                    <th></th>
                    <th class="text-center">Понеділок</th>
                    <th class="text-center"> Вівторок</th>
                    <th class="text-center"> Середа</th>
                    <th class="text-center"> Четвер</th>
                    <th class="text-center"> П'ятниця</th>
                </tr>
                </thead>

                <tbody>


                @foreach($pairs_time as $key => $value)
                    <tr>
                        <th class="text-center"> {{ $key+1 }} пара <br> ({{ $value }})</th>

                        @for($i = 1;$i <= 5;$i++)
                            @if(isset($lessonsTopWeek[$i][$key+1]))
                                @if($isGroupSelection)
                                    <th class="text-center"> {{$lessonsTopWeek[$i][$key+1]->type }}
                                        - {{$lessonsTopWeek[$i][$key+1]->subject['name']}}<br>
                                        {{$lessonsTopWeek[$i][$key+1]->classroom['number']}}
                                        - {{$lessonsTopWeek[$i][$key+1]->teacher['rank']}}.
                                        {{$lessonsTopWeek[$i][$key+1]->teacher['name']}}
                                    </th>
                                @else
                                    <th class="text-center"> {{$lessonsTopWeek[$i][$key+1]->type }}
                                        - {{$lessonsTopWeek[$i][$key+1]->subject['name']}}<br>
                                        {{$lessonsTopWeek[$i][$key+1]->classroom['number']}}
                                        - {{$lessonsTopWeek[$i][$key+1]->group['name'] }} Група

                                    </th>
                                @endif

                            @else

                                <th class="text-center"></th>
                            @endif
                        @endfor
                    </tr>
                @endforeach

                </tbody>
            </table>


            <h2 class="text-center"> Нижній тиждень </h2>

            <table class="table table-bordered table-sm">
                <thead>
                <tr>
                    <th></th>
                    <th class="text-center">Понеділок</th>
                    <th class="text-center"> Вівторок</th>
                    <th class="text-center"> Середа</th>
                    <th class="text-center"> Четвер</th>
                    <th class="text-center"> П'ятниця</th>
                </tr>
                </thead>

                <tbody>


                @foreach($pairs_time as $key => $value)
                    <tr>
                        <th class="text-center"> {{ $key+1 }} пара <br> ({{ $value }})</th>

                        @for($i = 1;$i <= 5;$i++)
                            @if(isset($lessonsBottomWeek[$i][$key+1]))
                                @if($isGroupSelection)
                                    <th class="text-center"> {{$lessonsBottomWeek[$i][$key+1]->type }}
                                        - {{$lessonsBottomWeek[$i][$key+1]->subject['name']}}<br>
                                        {{$lessonsBottomWeek[$i][$key+1]->classroom['number']}}
                                        - {{$lessonsBottomWeek[$i][$key+1]->teacher['rank']}}.
                                        {{$lessonsBottomWeek[$i][$key+1]->teacher['name']}}
                                    </th>
                                @else
                                    <th class="text-center"> {{$lessonsBottomWeek[$i][$key+1]->type }}
                                        - {{$lessonsBottomWeek[$i][$key+1]->subject['name']}}<br>
                                        {{$lessonsBottomWeek[$i][$key+1]->classroom['number']}}
                                        - {{$lessonsBottomWeek[$i][$key+1]->group['name'] }} Група

                                    </th>
                                @endif

                            @else

                                <th class="text-center"></th>
                            @endif
                        @endfor
                    </tr>
                @endforeach

                </tbody>
            </table>

            <script>
                var now = new Date();
                today = now.getDay() + 1;
                var table = document.getElementById('topWeek');
                var a = 2;
                for (var i = 1; i < 6; i++) {
                    if (table.rows[i].cells[2].innerHTML)
                        table.rows[i].cells[2].style.backgroundColor = '#FAEBD7';
                }


            </script>





@stop

