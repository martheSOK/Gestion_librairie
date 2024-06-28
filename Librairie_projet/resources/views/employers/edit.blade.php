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

    <form action="{{ Route('employers.update',$employer) }}" method="post">
        @csrf
        @method("PUT")
        <h1>
            modifier une entreprises
        </h1>
        {{-- {{
            dd($entreprise)
        }} --}}
    @csrf
    <label for="statut">statut:</label> 
        <select name="statut" id="statut">
            <option value="">selectionner</option>
            <option value="vendeur">vendeur</option>
            <option value="gerant">gerant</option>
            <option value="magasinier">magasinier</option>
        </select>
       
        <label for="user_id" >employes:</label>
       
            <select name="user_id" id="user_id">
                <option value="">selectionner</option>
                 @foreach ($employes as $employe)
                     <option value="{{ $employe->id }}"
                    
                     @if ($employer->user_id == $employe->id)
                        selected
                     @endif>
                            {{ $employe->nom }}
                    </option>
                @endforeach
            </select>

       
        <button type="submit">modifier</button>
    </form>

</body>
</html>
