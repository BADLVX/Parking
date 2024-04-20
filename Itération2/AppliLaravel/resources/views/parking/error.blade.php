


<!DOCTYPE html>

<html>
<head>
    <title>Erreur</title>
</head>
<style>
    form, div{
        display:flex;
        align-items:center;
        justify-content:center;
        flex-direction:column;
        margin-bottom:10px;
       
    }
  
</style>
<body>

    
   <div>
    <h1>Erreur</h1>
    <p>{{ $errorMessage }}</p>
    <a href="{{ url()->previous() }}" id = "anciennereservation">Retour</a>
</div>

</body>
</html>
