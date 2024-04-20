@extends('parking.base')
@section('content')

<h1>Reservation</h1>


<form method="POST" action="{{ route('reservations.store') }}">
    @csrf
<div class = "buttonposition">
    <button type="submit">Effectuer une réservation</button>
</div>
</form>

@endsection
