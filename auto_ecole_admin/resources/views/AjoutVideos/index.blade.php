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
            
            @foreach ($Video as $item)
           
                <div class="col-md-4">
                    <div class="card my-2 ">
                        <div class="card-body text-center bg-gray-900 ">
                            <h5 class="card-title fs-3 py-2 bg-yellow-300  ">{{$item->titre}}</h5>
                            <hr/>
                            <video width="450" class="mt-2" controls>
                                <source src="{{asset('storage'. '/' . $item->video)}}" type="video/mp4">    
                            </video>
                        </div>
                    </div>
                    <div class="col-md">   
                                    <form action="{{ route('Video.destroy',$item->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                        <div class="d-grid gap-2 col-4 mx-auto">
                                <button type="submit" class="d-flex  btn btn-outline-danger bg-gray-200 text-black border-black font-bold  py-2 px-4 rounded  " onclick="return confirm(&quot;Confirm delete?&quot;)"> Supprimer
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                              </svg>
                              </button>
                        </div>
                           
                             </form>
                            </div>
                </div>
             
            @endforeach
       
            <div class="col-md-4">
                    <div class="card fs-2 py-24 mt-4 h-75 flex justify-center ">
                        <div class="card-body  ">
                        <div class="d-grid gap-2 col-1 mx-auto " data-kt-user-table-toolbar="base">
                            <a href="" class="" data-bs-toggle="modal" data-bs-target="#exampleModal2" >
                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                              </svg>
                        
                             </a>
                             </div>
                    </div>
                </div>
</div>


<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-info">
          <span class="modal-title text-bold " id="exampleModalLabel2">Ajouter une Video</span>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('Video.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class=" text-center">
                    <div class="col-md">
                        <input id="Video" type="file" name="video" class="border-bottom border-0 p-2 mb-3 mx-4 " size="36" required>
                        <input id="titre" type="texte" name="titre" placeholder="Saisir le titre ici" class="border-bottom border-0 p-2 mb-3 mx-4 " size="36" required>
                        <input id="Serie" type="hidden" name="id_Serie"  class="" size="36"  value="{{$Serie->id}}" >
                        
                        <p>
                            @if($errors->has('video'))
                            {{$errors->first('video')}}
                            @endif
                        </p>
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
