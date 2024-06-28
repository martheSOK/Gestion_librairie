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
    

    <form action="{{ Route('achats.store') }}" method="post">
    @csrf
    <style>
        .cont{
            border: 1px solid red;
        }
    </style>
        <label for="montant_achat">prix:</label> <input type="text" name="montant_achat" value="{{ old('montant_achat') }}"   class="@error('montant_achat') cont @enderror">
        @error('montant_achat')
        <span style ="color:red"> champs requis</span>

        @enderror
        <br>
        <label for="etat">etat:</label>
        <select name="etat" id="etat">
            <option value="">selectionner</option>
           
            <option value="en cours">en cours </option>
            <option value="livrer">livrer </option>
            <option value="annuler">annuler </option>

          
        </select>  
      
        <br>

        <label for="employer_id">employers:</label>
            <select name="employer_id" id="employer_id">
                <option value="">selectionner</option>
                @foreach ($employers as $employer)
                    
                    <option  value="{{ $employer->id }}">{{ $employer->statut }}</option>
                @endforeach
            </select>

         
        <br>

        <label for="fournisseur_id">fournisseur:</label>

            <select name="fournisseur_id" id="fournisseur_id">
                <option value="">selectionner</option>
                @foreach ($fournisseurs as $fournisseur)
                  
                    <option value="{{ $fournisseur->id }}">{{ $fournisseur->nom }}</option>
                @endforeach

            </select>

        <br>

        <button type="submit">envoye</button>
    </form>

</body>
</html>
