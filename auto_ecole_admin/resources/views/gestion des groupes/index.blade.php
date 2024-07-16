@extends('layouts.pageprincipale')
@section('title')
Groupe
@endsection
@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@endsection
@section('script')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable({
            dom: 'Bfrtip',
        });

    });
</script>
@endsection
@section('content')
<div class="flex items-center justify-center mt-20 md:ml-64 ">
    <div class="w-full  max-w-xxl h-96  rounded-lg  mx-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <div class="card">
                    <div class="card-body font-serif">
                      <div class="d-flex justify-between">
                        <div><h4 class="text-gray-600 font-bold text-lg">Liste des groupe <span class=" text-emerald-500">({{$groupe->count()}} groupes)</span></h4></div>
                        <div class=" "> <a href="" class=" btn btn-primary d-flex " data-bs-toggle="modal" data-bs-target="#groupe" >
                           Ajouter
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                           </svg>
                          </a></div>
                      </div>
<!-- Modal -->
<div class="modal fade" id="groupe" tabindex="-1" aria-labelledby="groupeLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="groupeLabel">Ajouter un groupe</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{url('admin/groupe')}}" method="POST">
                @csrf
                <div class=" text-center">
                    <div class="col-md">
                        <input id="name_groupe" type="text" name="name_groupe" placeholder="Nome de groupe" class="border-bottom border-0 p-2 mb-3 mx-4 " size="30"  values="{{old('name_groupe')}}"required>
                        <select name="id_moniteur" class="form-select form-select-lg mb-3 border-bottom border-0 p-2 mb-3 mx-4 w-75"  aria-label=".form-select-lg example">
                            @foreach ($moniteur as $item)
                            <option value="{{$item->id}}">{{$item->nom_prenom}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <input type="submit" class=" btn btn-primary bg-blue-500 " value="Enregistrer">
        </div>
    </form>
      </div>
    </div>
  </div>





<div class=" relative shadow-md sm:rounded-lg my-4">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 text-center" id="dataTable">
        <thead class="text-xs text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
               N°
                </th>
                <th scope="col" class="py-3 px-6">
                    Nom de groupe
                </th>
                <th scope="col" class="py-3 px-6">
                   Date de création
                </th>

                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
         @foreach ($groupe as $item )


            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <td class="py-4 px-6">
                    {{$item->name_groupe}}
                </td>
                <td class="py-4 px-6">

                    {{$item->created_at}}


                </td>
                <td class="py-4 px-6 ">
                    <div class="dropdown">
                        <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Action
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="{{url('admin/groupe/'. $item->id)}}">Consulter</a></li>
                          <li><a class="dropdown-item" href="{{url('admin/groupe/'. $item->id. '/edit')}}">Modifier</a></li>
                          <li><a class="dropdown-item" href="#">
                            <form action="{{url('admin/groupe'. '/' . $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')

                                 <button type="submit" class=" " onclick="return confirm(&quot;Confirm delete?&quot;)"> Supprimer

                                  </button>
                                 </form>
                            </a></li>
                        </ul>
                      </div>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

                    </div>
                </div>




                </div>
            </div>
        </div>
    </div>
@endsection

