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

    <form action="{{ Route('achats.update',$achat) }}" method="post">
        @csrf
        @method("PUT")
        <h1>
            modifier une achats
        </h1>
        {{-- {{
            dd($achat)
        }} --}}
    @csrf
    <style>
        .cont{
            border: 1px solid red;
        }
    </style>
        <label for="montant_achat">prix:</label> <input type="text" name="montant_achat" value="{{ old('montant_achat')  ?? $achat->montant_achat }}"   class="@error('montant_achat') cont @enderror">
        @error('montant_achat')
        <span style ="color:red"> champs requis</span>

        @enderror
        <label for="etat">etat:</label> <input type="text" name="etat" value="{{ old('etat') ?? $achat->etat }}" class="@error('etat') cont @enderror">
        @error('etat')
        <span style ="color:red"> champs requis</span>


        @enderror

        <label for="employer_id">employer:</label>
    
        <input type="text" name="employer_id" value="{{ $achat->employer_id}}">

        <label for="fournisseur_id">fournisseur:</label>
    
        <input type="text" name="fournisseur_id" value="{{ $achat->fournisseur_id}}">
        <button type="submit">envoye</button>
    </form>

</body>
</html>
