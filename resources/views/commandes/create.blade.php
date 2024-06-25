<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une Commande</title>
</head>
<body>
    <h1>Créer une Commande</h1>
    <form action="{{ route('commandes.store') }}" method="POST">
        @csrf
        <label for="montant">Montant</label>
        <input type="text" name="montant" id="montant" required>
        @error('montant')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <label for="date_commande">Date de Commande</label>
        <input type="date" name="date_commande" id="date_commande" required>
        @error('date_commande')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <label for="id_clients">Client</label>
        <select name="id_clients" id="id_clients" required>
            @foreach($clients as $client)
                <option value="{{ $client->id }}">{{ $client->user->nom }} {{ $client->user->prenom }}</option>
            @endforeach
        </select>
        @error('id_clients')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <button type="submit">Créer Commande</button>
    </form>
</body>
</html>
