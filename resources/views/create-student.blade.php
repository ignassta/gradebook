<div class="row">
    <div class="col-12">
        <h4>Įtraukti Studentą</h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="{{route('student')}}">
            <input class="form-control" placeholder="Vardas" type="text" value="{{ old('nameI') }}" name="nameI" required>
            <input class="form-control" placeholder="Pavardė" type="text" value="{{ old('surnameI') }}" name="surnameI" required>
            <input class="form-control" placeholder="El. Paštas" type="text" value="{{ old('emailI') }}" name="emailI" required>
            <input class="form-control" placeholder="Telefono nr." type="text" value="{{ old('phoneI') }}" name="phoneI" required>
            <button type="submit" class="btn btn-primary">Išsaugoti</button>

            @csrf

        </form>
    </div>
</div>
