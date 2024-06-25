<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Client</title>
</head>
<body>
    <h1>Modifier Client - {{ $client->user ? $client->user->nom : '' }} {{ $client->user ? $client->user->prenom : 'non dispo' }}</h1>
    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="{{ $client->user ? $client->user->nom : 'non dispo' }}" >
        @error('nom')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" value="{{ $client->user ? $client->user->prenom : 'non dispo' }}" >
        @error('prenom')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <label for="username">Nom d'utilisateur</label>
        <input type="text" name="username" id="username" value="{{ $client->user ? $client->user->username : 'non dispo' }}" >
        @error('username')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <label for="role">Rôle</label>
        <select name="role" id="role" required>
            <option value="admin" {{ $client->user && $client->user->role === 'admin' ? 'selected' : 'non dispo' }}>Admin</option>
            <option value="client" {{ $client->user && $client->user->role === 'client' ? 'selected' : 'non dispo' }}>Client</option>
            <option value="employer" {{ $client->user && $client->user->role === 'employer' ? 'selected' : 'non dispo' }}>Employer</option>
        </select>
        @error('role')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <label for="contact">Contact</label>
        <input type="text" name="contact" id="contact" value="{{ $client->user ? $client->user->contact : 'non dispo' }}" >
        @error('contact')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <label for="password">Nouveau Mot de passe (optionnel)</label>
        <input type="password" name="password" id="password">
        @error('password')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <button type="submit">Mettre à Jour Client</button>
    </form>
</body>
</html>
