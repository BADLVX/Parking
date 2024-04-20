
  <style>
    .elretour{
        display:flex;
            justify-content: center;
            align-items: center;
            justify-content:center;
        flex-direction:column;
    }
    </style>
  
  <div class = elretour>
        <h1>Erreur</h1>
        <p>{{ $errorMessage }}</p>
        <a href="{{ url()->previous() }}" id = "retour">Retour</a>
    </div>

