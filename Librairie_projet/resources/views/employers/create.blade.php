<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
    <form action="{{ Route('employers.store') }}" method="post">
    @csrf
    <style>
        .cont{
            border: 1px solid red;
        }
    </style>
        <label for="statut">statut:</label> 
        <select name="statut" id="statut">
            <option value="">selectionner</option>
            <option value="vendeur">vendeur</option>
            <option value="gerant">gerant</option>
            <option value="magasinier">magasinier</option>
        </select>
       
        <label for="user_id">employes:</label>
       
            <select name="user_id" id="user_id">
                <option value="">selectionner</option>
                 @foreach ($employes as $employe)
                     <option value="{{ $employe->id }}">{{ $employe->nom }}</option>
                @endforeach
            </select>

       
        <button type="submit">envoye</button>
    </form>

</body>
</html>
