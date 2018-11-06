@extends('layout')

@section('title')
    Taisyti Studento Duomenis
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <h4>Taisyti Studento Duomenis</h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="{{action('StudentController@updateStudent', $id)}}">
            <input class="form-control" placeholder="Vardas" type="text" value="{{$student->name}}" name="nameI" required>
            <input class="form-control" placeholder="Pavardė" type="text" value="{{$student->surname}}" name="surnameI" required>
            <input class="form-control" placeholder="El. Paštas" type="text" value="{{$student->email}}" name="emailI" required>
            <input class="form-control" placeholder="Telefono nr." type="text" value="{{$student->phone}}" name="phoneI" required>
            <button type="submit" class="btn btn-primary">Taisyti</button>

            @csrf
            @method('PUT')

        </form>
    </div>
</div>

@endsection
