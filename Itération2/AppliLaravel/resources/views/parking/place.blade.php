<form method="POST" action="{{ route('places.reserve', ['id' => 5]) }}">
    @csrf
    <button type="submit">Réserver la place</button>
</form>


