<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
<script type="text/javascript">
    function notification(){
      var l= {{$noti=$noti-1}};
       var m= document.getElementById('nombreNotification');
       m.innerHTML=l;
    }
</script>

@vite(['resources/css/app.css', 'resources/js/app.js'])
@yield('script')
