<div class="row">
    <div class="col-12">
        <h4>Sukurti Naują Paskaitą</h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="{{route('lecture')}}">
            <input class="form-control" placeholder="Paskaitos Pavadinimas" type="text" value="{{ old('titleI') }}" name="titleI" required>
            <input class="form-control" placeholder="Paskaitos Aprašymas" type="text" value="{{ old('descriptionI') }}" name="descriptionI" required>
            <button type="submit" class="btn btn-primary">Išsaugoti</button>

            @csrf

        </form>
    </div>
</div>
