@extends('moniteur.layouts.Principale')
@section('title')
Profil
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
        $('#dataTable').DataTable();

    });
</script>
@endsection
@section('content')
<div class="flex items-center justify-center mt-20 md:ml-64 ">
    <div class="w-full  max-w-xxl h-96  rounded-lg shadow-md  mx-10">
                <div class="p-6 bg-white border-b border-gray-200">
                  <div class="card bg-light shadow-lg shadow-blue-500/50 my-2 ">
                    <div class="  text-center   border-b border-gray-300  text-xl font-bold ">
                     <h3 class="p-2 fs-2 text-red-500 bg-yellow-400">Liste des élèves </h3>
                    </div>
                    <div class=" card-body">


                    <div class="w-full max-w-full">
                        <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                          <div class="table-responsive">
                            <table class="table table-flush text-slate-500" datatable id="dataTable">
                              <thead class="thead-light">
                                <tr>
                                  <th>N°</th>
                                  <th>Nom & Prenom</th>
                                  <th>Permi</th>
                                  <th>Groupe</th>

                                </tr>
                              </thead>
                              <tbody>
                           @foreach ($eleve as $itme )
                                <tr>
                                  <td class="font-normal leading-normal text-sm">{{ $loop->iteration }}</td>
                                  <td class="font-normal leading-normal text-sm">{{$itme->nom_prenom}}</td>
                                  <td class="font-normal leading-normal text-sm">{{$itme->Permis}}</td>
                                  <td class="font-normal leading-normal text-sm">{{$itme->name_groupe}}</td>

                                </tr>
                                @endforeach

                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    @endsection
