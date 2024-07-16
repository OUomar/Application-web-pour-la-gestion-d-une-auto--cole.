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
        $('#dataTable').DataTable({
            dom: 'Bfrtip',
        });

    });
</script>
@endsection
@section('content')
<div class="flex items-center justify-center mt-20 md:ml-64 ">
    <div class="w-full  max-w-xxl h-96  rounded-lg shadow-md  mx-10">
                <div class="p-6 bg-white border-b border-gray-200">
                  <div class="card bg-white shadow-2xl">
                    <div class="  justify-content-lg-center  d-flex  border-b border-gray-300  p-2 fs-2 text-red-500 bg-yellow-400">
                      <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" class="bi bi-people mx-2 mt-2" viewBox="0 0 16 16">
                          <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                        </svg>

                      </div>
                      <div>
                     <h3 class="my-2">Liste des groupes </h3></div>
                    </div>
                    <div class=" card-body">


                    <div class="w-full max-w-full">
                        <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                          <div class="table-responsive">
                            <table class="table table-flush text-slate-500" datatable id="dataTable">
                              <thead class="thead-light">
                                <tr>
                                  <th>N°</th>
                                  <th>Nom de groupe</th>
                                  <th>Action</th>


                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($groupe as $i)
                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$i->name_groupe}}</td>
                                <td class="py-4 px-6 d-flex justify-content-center  align-items-center"> <a href="{{route('monieur.liste.eleve', $i->name_groupe)}}" class="d-flex btn btn-sm  btn-danger mx-1">Consulter<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                  </svg>
                                  </a></td>
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
