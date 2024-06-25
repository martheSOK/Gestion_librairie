<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la Commande</title>
</head>
<body>
    <h1>Détails de la Commande</h1>
    <p>ID: {{ $commande->id }}</p>
    <p>Montant: {{ $commande->montant }}</p>
    <p>Date de Commande: {{ $commande->date_commande }}</p>
    <p>Client: {{ $commande->client ? $commande->client->user->nom . ' ' . $commande->client->user->prenom : 'Non disponible' }}</p>
    <a href="{{ route('commandes.edit', $commande->id) }}">Modifier</a>
    <form action="{{ route('commandes.destroy', $commande->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
    <br>
    <a href="{{ route('commandes.index') }}">Retour à la liste des commandes</a>
</body>
</html>
