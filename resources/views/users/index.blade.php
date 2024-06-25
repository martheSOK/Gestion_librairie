<!-- resources/views/users/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Utilisateurs</title>
</head>
<body>
    <h1>Liste des Utilisateurs</h1>
    <button style=""><a href="{{ route('users.create') }}" >Créer un Utilisateur</a></button><br>
    
    <table border="2">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Username</th>
                <th>Rôle</th>
                <th>Contact</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->nom }}</td>
                    <td>{{ $user->prenom }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->contact }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}">Voir</a>
                        <a href="{{ route('users.edit', $user->id) }}">Modifier</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
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
