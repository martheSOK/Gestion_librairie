<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Commandes</title>
</head>
<body>
    <h1>Liste des Commandes</h1>
    <a href="{{ route('commandes.create') }}">Créer une Commande</a>
    <table border="1">
        <thead>
            <tr>
                <th>Montant</th>
                <th>Date de Commande</th>
                <th>Client</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($commandes as $commande)
                <tr>
                    <td>{{ $commande->montant }}</td>
                    <td>{{ $commande->date_commande }}</td>
                    <td>{{ $commande->client ? $commande->client->user->nom : 'Non disponible' }}</td>
                    <td>
                        <a href="{{ route('commandes.show', $commande->id) }}">Voir</a>
                        <a href="{{ route('commandes.edit', $commande->id) }}">Modifier</a>
                        <form action="{{ route('commandes.destroy', $commande->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
