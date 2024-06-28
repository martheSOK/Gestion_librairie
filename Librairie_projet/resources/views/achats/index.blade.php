
<h1>
 </h1>
 <button class="Btn_add"><a href="{{ Route('achats.create') }}">ajouter</a></button>
 <table border="1" style="border-collapse:collapse;">
    
     <th>prix</th>
     <th>etat</th>
     <th>employer</th>
     <th>fournisseur</th>
   
     <th>action</th>
    
    
     <tbody>
         @forelse ($achats as $achat)
             <tr>
                 <td>{{$achat->montant_achat}}</td>
             <td>{{ $achat->etat }}</td>
             <td>{{ $achat->employer->user->nom }}</td>
             <td>{{ $achat->fournisseur->nom }}</td>

             <td>
                 <button>
                     <a href="{{ route('achats.show',$achat)}}">details</a>

                 </button>
             </td>
             
             <td>
                 <button>
                     <a href="{{ route('achats.edit',$achat)}}">Editer</a>

                 </button>
             </td>
             <td>
                     <form action="{{Route('achats.destroy',$achat)}}" method="POST">
                         @csrf
                         @method("DELETE")
                         <button>supprimer

                         </button>

                     </form>
             </td>
         </tr>
         @empty
         <p> aucune ligne de achat</p>

         @endforelse
     </tbody>


</table>

