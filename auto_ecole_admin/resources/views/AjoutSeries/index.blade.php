@extends('layouts.pageprincipale')
@section('title')
Série cours
@endsection
@section('css')
@endsection
@section('script')
@endsection
@section('content')
<div class="flex items-center justify-center mt-20 md:ml-64 ">
    <div class="w-full  max-w-xxl h-96  rounded-lg   mx-10 ">
            <div class="row">
                @foreach ($Serie as $item)
                    <div class="col-md-4">
                        <div class="card my-2"> 
                            <div class="card-body text-center">
                                <h5 class="card-title fs-2"> La Série N°{{$loop->iteration }} </h5>
                                <hr>
                            <div class="d-flex mt-6 ">
                                <div class="col-md">   
                                    <form action="{{ route('Serie.destroy',$item->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="d-flex btn btn-sm btn-danger bg-red-500 mx-1 font-bold  pt-2 pb-1 px-2 rounded " onclick="return confirm(&quot;Confirm delete?&quot;)"> Supprimer
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                        </button>
                                    </form>
                                </div>
                                <div class="com-md">
                                    <a href="{{route('Video.index',$item->id)}}"   class=" d-flex float-right btn btn-sm btn-success  font-bold  py-2 px-3 rounded" > voir plus 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
                                        </svg>
                                    </a>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
              
                @endforeach
     
                    <div class="col-md-4">
                    <a href="" class="text-primary " data-bs-toggle="modal" data-bs-target="#exampleModal2" >
                        <div class="card fs-2 py-6 my-2 hover:bg-gray-200">
                            <div class="card-body text-center   ">
                                <div class="d-grid gap-2 col-1 mx-auto" data-kt-user-table-toolbar="base">
                                 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                    
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>

    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel2">Ajouter une série</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('Serie.store')}}" method="POST" enctype="multipart/form-data">
                     @csrf
               
                    <div class=" text-center">
                        <div class="col-md">
                            <input id="Serie" type="text" name="Serie" placeholder="Nom de la Série" class="border-bottom border-0 p-2 mb-3 mx-4 " size="36" required>
                           
                            <input  type="hidden" name="id_Permis" value="{{$Permis->id}}"  class="" size="36"  >
                           
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class=" btn btn-primary bg-sky-500/100 " value="Enregistrer">
                        </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>      

@endsection
