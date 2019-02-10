@extends('photoTemplate')

@section('content')
    <div style="text-align:center">
        <a class="btn btn-primary " href="/LetcurerSchedule" role="button">Для викладачів</a>
        <a class="btn btn-primary " href="/GroupSchedule" role="button">Для студентів </a>
    </div>


    <div style="text-align:center;margin: 30px">
        <form action="/index">
        <input name="name"  style="width: 10%" placeholder="Введіть П.І.Б. викладача"> <br>
            <br>
            <button type="submit" class="btn btn-primary mb-2 text-center"> Показати розклад </button>
        </form>
    </div>




























@stop