@extends('user.layouts.Principale')
@section('title')
Les cours video 
@endsection
@section('css')
@endsection
@section('script')
@endsection
@section('content')
<div class="flex items-center justify-center mt-20 md:ml-64 ">
    <div class="w-full  max-w-xxl h-96  rounded-lg   mx-10 ">
            <div class="row">
                
                <div class="col-md-4">
                    <div class="card my-2 ">
                        <div class="card-body text-center bg-gray-900 ">
                            <h5 class="card-title fs-3 py-2 bg-yellow-300  ">Video</h5>
                            <hr/>
                            <video width="450" class="mt-2" controls>
                                <source src="" 
                                type="video/mp4">    
                            </video>
                        </div>
                    </div>
               
                </div>

</div>
</div>
</div>       

@endsection
