<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <h1 class="bg-red">
       {{$title}}
    </h1>
    <button class="Btn_add"><a href="{{ Route('entreprises.create') }}">ajouter</a></button>
    <table border="1" style="border-collapse:collapse;">
        <th style="padding:2px">nom</th>
        <th>pays</th>
        <th>ville</th>
        <th>quartier</th>
        <th>adresse</th>
        <th>User</th>
        <th>action</th>

        <tbody>
            @forelse ($liste as $une_entreprise)
                <tr>
                    <td>{{$une_entreprise->nom}}</td>
                <td>{{$une_entreprise->pays}}</td>
                <td>{{$une_entreprise->ville}}</td>
                <td>{{$une_entreprise->quartier}}</td>
                <td>{{$une_entreprise->adresse}}</td>
                <td>{{$une_entreprise->user->nom}}</td>
                <td>
                    <button>
                        <a href="{{ route('entreprises.edit',$une_entreprise)}}">Editer</a>

                    </button>
                </td>
                <td>
                        <form action="{{Route('entreprises.destroy',$une_entreprise)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button>supprimer

                            </button>

                        </form>
                </td>
            </tr>
            @empty
            <p> aucune entreprise</p>

            @endforelse
        </tbody>


    </table>
</body>
</html>
