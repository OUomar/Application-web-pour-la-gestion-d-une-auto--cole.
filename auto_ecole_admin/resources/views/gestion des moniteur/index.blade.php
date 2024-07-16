@extends('layouts.pageprincipale')
@section('title')
Moniteurs
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
    <div class="w-full  max-w-xxl h-96  rounded-lg   mx-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="card">
                    <div class="card-body font-serif">
                      <div class="d-flex justify-between">
                        <div><h4 class="text-gray-600 font-bold text-lg">Liste des moniteur <span class=" text-emerald-500">({{$moniteur->count()}} moniteurs)</span></h4></div>
                        <div class=" "> <a href="" class=" btn btn-primary d-flex " data-bs-toggle="modal" data-bs-target="#mointeur" >
                           Ajouter
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                           </svg>
                          </a></div>
                      </div>
<!-- Modal -->
<div class="modal fade" id="mointeur" tabindex="-1" aria-labelledby="mointeurLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="mointeurLabel">Ajouter un Moniteur</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{url('admin/moniteur')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class=" text-center">
                    <div class="col-md">
                        <input id="nom_prenom" type="text" name="nom_prenom" placeholder="Nom & Prénom" class="border-bottom border-0 p-2 mb-3 mx-4 " size="30"  values="{{old('nom_prenom')}}"required>
                        <span class="text-danger">
                @error('nom_prenom')
                {{$message}}
                @enderror
                </span>
                        <input type="text" name="user_name"  placeholder="nom d'utilisateur" class="border-bottom border-0 p-2 mb-3 mx-4" size="30"  values="{{old('nom_d\'utilisateur')}}"required>
                        <span class="text-danger">
                @error('user_name')
                {{$message}}
                @enderror
                </span>
                        <input type="text" name="cin"  placeholder="CIN" class="border-bottom border-0 p-2 mb-3 mx-4" size="30"  values="{{old('cin')}}"required>
                        <span class="text-danger">
                @error('cin')
                {{$message}}
                @enderror
                </span>
                        <input type="email" name="email"  placeholder="Email" class="border-bottom border-0 p-2 mb-3 mx-4" size="30"  values="{{old('email')}}"required>
                        <span class="text-danger">
                @error('email')
                {{$message}}
                @enderror
                </span>
                        <input type="text" name="adresse"  placeholder="aadresse" class="border-bottom border-0 p-2 mb-3 mx-4" size="30"  values="{{old('adresse')}}"required>
                        <span class="text-danger">
                @error('adresse')
                {{$message}}
                @enderror
                </span>
                        <input type="text" name="N_telephone"  placeholder="N° Téléphone" class="border-bottom border-0 p-2 mb-3 mx-4" size="30"  values="{{old('N_telephone')}}"required>
                        <span class="text-danger">
                @error('N_telephone')
                {{$message}}
                @enderror
                </span>
                        <input type="password" name="password"  placeholder="Mot de passe" class="border-bottom border-0 p-2 mb-3 mx-4" size="30"  values="{{old('password')}}"required>
                        <span class="text-danger">
                @error('password')
                {{$message}}
                @enderror
                </span>
                <input type="file"   name="image"   class="border-bottom border-0 p-2 mb-3 mx-4" size="30"  values="{{old('password')}}"required>
                </span>
                <select name="id_vehicule" class="form-select form-select-lg mb-3 border-bottom border-0 p-2 mb-3 mx-4 w-75"  aria-label=".form-select-lg example">
                    @foreach ($vehicule as $item)
                    <option value="{{$item->id}}">{{$item->type}}</option>
                    @endforeach

                  </select>
                    </div>
                    <div class="col-md">
                        <label class="text-center lead"> Date de naissance</label>
                        <input type="date" name="date_naissance"  class="border-bottom border-0 p-2 mb-3 mx-4" size="50" value="{{old('date_naissance')}}"required>
                        <span class="text-danger">
                @error('date_naissance')
                {{$message}}
                @enderror
                </span>
                    </div>

                </div>



        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class=" btn btn-primary bg-blue-500 " value="Enregistrer">
        </div>
    </form>
      </div>
    </div>
  </div>



<div class="overflow-x-auto relative shadow-md sm:rounded-lg my-4">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 text-center" id="dataTable">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                   N°
                </th>
                <th scope="col" class="py-3 px-6">
                    Nom & Prenom
                </th>
                <th scope="col" class="py-3 px-6">
                    Date de Naissance
                </th>
                <th scope="col" class="py-3 px-6">
                    Date DE création
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($moniteur as $ligne)


            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <td class="py-4 px-6">
                    {{$ligne->nom_prenom}}
                </td>
                <td class="py-4 px-6">
                    {{$ligne->date_naissance}}
                </td>
                <td class="py-4 px-6">
                {{$ligne->created_at}}
                </td>
                <td class="py-4 px-6 d-flex justify-content-center  align-items-center">
                    <a href="{{url('admin/moniteur/'. $ligne->id)}}" class="d-flex btn btn-sm btn-primary mx-1">Consulter<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>
                      </a>
                    <a href="{{url('admin/moniteur/'. $ligne->id. '/edit')}}" class="d-flex btn btn-sm btn-warning mx-1">Modifier<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                      </svg>
                      </a>
                         <form action="{{url('admin/moniteur'. '/' . $ligne->id)}}" method="POST">
                            @csrf
                            @method('DELETE')

                             <button type="submit" class="d-flex btn btn-sm btn-danger bg-red-500 mx-1 " onclick="return confirm(&quot;Confirm delete?&quot;)"> Supprimer
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                              </svg>
                              </button>
                             </form>
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


