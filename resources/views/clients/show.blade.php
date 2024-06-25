<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Client</title>
</head>
<body>
    <h1>Détails du Client</h1>
    <p>ID: {{ $client->id }}</p>
    <p>Nom: {{ $client->user ? $client->user->nom : 'Non disponible' }}</p>
    <p>Prénom: {{ $client->user ? $client->user->prenom : 'Non disponible' }}</p>
    <p>Nom d'utilisateur: {{ $client->user ? $client->user->username : 'Non disponible' }}</p>
    <p>Contact: {{ $client->user ? $client->user->contact : 'Non disponible' }}</p>
    <p>Rôle: {{ $client->user ? $client->user->role : 'Non disponible' }}</p>
    <br>
    <a href="{{ route('clients.index') }}">Retour à la liste des clients</a>
</body>
</html>
