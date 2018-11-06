@extends('layout')

@section('title')
    Studentai
@endsection

@section('content')
    @include('create-student')
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Vardas</th>
                    <th scope="col">Pavardė</th>
                    <th scope="col">El. Paštas</th>
                    <th scope="col">Telefono Rr.</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>

                @foreach($students as $student)

                    <tr>
                        <td></td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->surname}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->phone}}</td>
                        <td><a class="btn btn-primary" href="{{action('GradeController@getGrade', $student->id)}}">Pažymiai</a></td>
                        <td><a class="btn btn-primary" href="{{action('StudentController@getUpdateStudent', $student->id)}}">Taisyti</a></td>
                        <td>
                            <form action="{{action('StudentController@destroyStudent', $student->id)}}" method="post">
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
