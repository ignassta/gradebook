@extends('layout')
@section('title')
    Taisyti Paskaitą
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <h4>Taisyti Paskaitą</h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="{{action('LectureController@updateLecture', $id)}}">
            <input class="form-control" placeholder="Paskaitos Pavadinimas" type="text" value="{{$lecture->title}}" name="titleU" required>
            <input class="form-control" placeholder="Paskaitos Aprašymas" type="text" value="{{$lecture->description}}" name="descriptionU" required>
            <button type="submit" class="btn btn-primary">Taisyti</button>

            @csrf
            @method('PUT')

        </form>
    </div>
</div>

@endsection
