@extends('photoTemplate')

@section('content')
    <div style="text-align:center">
        <h1>
            Розклад занять </h1>
        <hr>
        <a class="btn btn-primary " href="/LecturerSchedule" role="button">Для викладачів</a>
        <a class="btn btn-primary " href="/GroupSchedule" role="button">Для студентів </a>
    </div>


    <div id="bottom" style="text-align:center;margin: 30px">
        <form action="/ScheduleGroupSelection" METHOD="post">
            @csrf
            <input name="group_name" style="width: 11%" placeholder="Введіть номер групи"> <br>
            <br>
            @foreach ($errors->all() as $error)
                <div>
                <li id='errorAlert' class="alert alert-info"> {{ $error }} </li>
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary mb-2 text-center"> Показати розклад</button>
        </form>
    </div>

<script>

if(document.getElementById('errorAlert')){
    function hideAlert() {
        var div = document.getElementById('errorAlert');
        div.hidden = true;
    }
    setTimeout(hideAlert,1500);

}

</script>



























@stop