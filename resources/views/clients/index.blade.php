<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Clients</title>
</head>
<body>
    <h1>Liste des Clients</h1>
    <a href="{{ route('clients.create') }}">Créer un Client</a>
    <table border="1">
        <thead>
            <tr>
               
                <th>Nom</th>
                <th>Prénom</th>
                <th>Nom d'utilisateur</th>
                <th>Contact</th>
                <th>Rôle</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach($clients as $client)
                {{''}}
            @endforeach
            @foreach($users as $user)
                <tr>
                   
                    <td>{{ $user->nom  }}</td>
                    <td>{{ $user->prenom   }}</td>
                    <td>{{ $user->username  }}</td>
                    <td>{{ $user->role  }}</td>
                    <td>{{ $user->contact  }}</td>
                    <td>
                        <a href="{{ route('clients.show', $client->id) }}">Voir</a>
                        <a href="{{ route('clients.edit', $client->id) }}">Modifier</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
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
