<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Client</title>
</head>
<body>
    <h1>Créer un Client</h1>
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="{{ old('nom') }}" >
        @error('nom')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" value="{{ old('prenom') }}" >
        @error('prenom')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <label for="username">Nom d'utilisateur</label>
        <input type="text" name="username" id="username" value="{{ old('username') }}">
        @error('username')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <label for="role">Rôle</label>
        <select name="role" id="role" required>
            <option value="admin">Admin</option>
            <option value="client">Client</option>
            <option value="employer">Employer</option>
        </select>
        @error('role')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <label for="contact">Contact</label>
        <input type="text" name="contact" id="contact" value="{{ old('contact') }}">
        @error('contact')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" value="{{ old('password') }}">
        @error('password')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <button type="submit">Créer Client</button>
    </form>
</body>
</html>
