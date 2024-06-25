<!-- resources/views/users/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails Utilisateur</title>
</head>
<body>
    <h1>Détails Utilisateur - {{ $user->nom }} {{ $user->prenom }}</h1>
    <p><strong>Nom:</strong> {{ $user->nom }}</p>
    <p><strong>Prénom:</strong> {{ $user->prenom }}</p>
    <p><strong>Username:</strong> {{ $user->username }}</p>
    <p><strong>Rôle:</strong> {{ $user->role }}</p>
    <p><strong>Contact:</strong> {{ $user->contact }}</p>
</body>
</html>
