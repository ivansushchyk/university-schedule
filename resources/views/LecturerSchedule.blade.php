@extends('photoTemplate')

@section('content')



    <div style="text-align:center">
        <h1>
            Розклад занять </h1>
        <hr>
        <a class="btn btn-primary " href="/LecturerSchedule" role="button">Для викладачів</a>
        <a class="btn btn-primary " href="/GroupSchedule" role="button">Для студентів </a>
    </div>
    <div style="text-align:center;margin: 30px">
        <form action="/ScheduleLecturerSelection" method="post">
            <input name="teacher_name" style="width: 16%" placeholder="Введіть П.І.Б. викладача (напр. Пугач І.О.)"> <br>
            @csrf
            <br>
            @foreach ($errors->all() as $error)
                <li class="alert alert-info"> {{ $error }} </li>
            @endforeach
            <button type="submit" class="btn btn-primary mb-2 text-center"> Показати розклад</button>
        </form>
    </div>




























@stop