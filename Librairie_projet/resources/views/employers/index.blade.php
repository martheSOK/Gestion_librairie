
<h1 class="text-bold text-red-500 bg-yellow-500">
    listes des employes
 </h1>
 <button class="Btn_add"><a href="{{ Route('employers.create') }}">ajouter</a></button>
 <table border="1" style="border-collapse:collapse;">
  
     <th>statut</th>
     <th>nom</th>
     
     <th>action</th>

     <tbody>
         @forelse ($employes as $employe)
             <tr>
                 <td>{{$employe->statut}}</td>
                <td>{{$employe->user->nom}}</td>
                <td>
                     <button>
                              <a href="{{ route('employers.edit',$employe)}}">Editer</a>
                     </button>
                 </td>
                <td>
                     <form action="{{Route('employers.destroy',$employe)}}" method="POST">
                         @csrf
                         @method("DELETE")
                         <button>supprimer

                         </button>

                     </form>
                </td>
             </tr>
         @empty
         <p> aucun employe</p>

         @endforelse
     </tbody>


 </table

