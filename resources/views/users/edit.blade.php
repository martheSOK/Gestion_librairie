<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Utilisateur</title>
</head>
<body>
    <h1>Modifier Utilisateur - {{ $user->nom }} {{ $user->prenom }}</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="{{ old('nom', $user->nom) }}" required>
        @error('nom')
            <div>{{ $message }}</div>
        @enderror

        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" value="{{ old('prenom', $user->prenom) }}" required>
        @error('prenom')
            <div>{{ $message }}</div>
        @enderror

        <label for="username">Nom d'utilisateur</label>
        <input type="text" name="username" id="username" value="{{ old('username', $user->username) }}" required>
        @error('username')
            <div>{{ $message }}</div>
        @enderror

        <label for="role">Rôle</label>
        <select name="role" id="role" required>
            <option value="admin" {{ old('role', $user->role) === 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="client" {{ old('role', $user->role) === 'client' ? 'selected' : '' }}>Client</option>
            <option value="employer" {{ old('role', $user->role) === 'employer' ? 'selected' : '' }}>Employer</option>
        </select>
        @error('role')
            <div>{{ $message }}</div>
        @enderror

        <label for="contact">Contact</label>
        <input type="text" name="contact" id="contact" value="{{ old('contact', $user->contact) }}" required>
        @error('contact')
            <div>{{ $message }}</div>
        @enderror

        <label for="password">Nouveau Mot de passe (optionnel)</label>
        <input type="password" name="password" id="password">
        @error('password')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Mettre à Jour Utilisateur</button>
    </form>
</body>
</html>
