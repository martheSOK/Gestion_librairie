<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>
    detail d'un achat
 </h1>
 
 <table border="1" style="border-collapse:collapse;">
    
     <th>prix</th>
     <th>etat</th>
     <th>date achat</th>
     <th>status</th>
     <th>role</th>
     <th>contact employer</th>
     <th>nom employer</th>
     <th>prenom employer</th>
     <th> nom fournisseur</th>
     <th>adresse fournisseur</th>
     <th>contact fournisseur</th>
    
    
     <tbody>
       
             <tr>
                 <td>{{$achat->montant_achat}}</td>
                <td>{{ $achat->etat }}</td>
                <td>{{ $achat->created_at }}</td>
                <td>{{ $achat->employer->statut }}</td>
                <td>{{ $achat->employer->user->role }}</td>

                <td>{{ $achat->employer->user->contact }}</td>
                <td>{{ $achat->employer->user->nom }}</td>
                <td>{{ $achat->employer->user->prenom }}</td>
                <td>{{ $achat->fournisseur->nom }}</td>
                <td>{{ $achat->fournisseur->adresse }}</td>

                <td>{{ $achat->fournisseur->contact }}</td>
            </tr>
           
     </tbody>


</table>


</body>
</html>
