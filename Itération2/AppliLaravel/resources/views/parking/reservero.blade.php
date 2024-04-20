@extends('parking.base')
@section('content')

<p>Reservation</p>


<form method="POST" action="{{ route('reservations.store') }}">
    @csrf
<div class = "buttonposition">
    <button type="submit">Effectuer une réservation</button>
</div>
</form>

@endsection
