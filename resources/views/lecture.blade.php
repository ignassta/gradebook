@extends('layout')
@section('title')
    Paskaitos
@endsection

@section('content')
    @include('create-lecture')

    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Paskaita</th>
                    <th scope="col">Aprašymas</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>

                @foreach($lectures as $lecture)

                    <tr>
                        <td></td>
                        <td>{{$lecture->title}}</td>
                        <td>{{$lecture->description}}</td>
                        <td><a class="btn btn-primary" href="{{action('LectureController@getUpdateLecture', $lecture->id)}}">Taisyti</a></td>
                        <td>
                            <form action="{{action('LectureController@destroyLecture', $lecture->id)}}" method="post">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger" type="submit">Trinti</button>
                            </form>
                        </td>
                    </tr>

                @endforeach

            </table>
        </div>
    </div>

@endsection
