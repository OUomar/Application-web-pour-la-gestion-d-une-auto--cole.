<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('css')
    @include('user.layouts.head')
    <title>@yield('title')</title>
    </head>
    <body class="font-sans antialiased scrollbar-thumb-blue-500 scrollbar-track-gray-200">
        <div class="relative min-h-screen md:flex  " x-data="{open:true}">
  <aside :class="{'-translate-x-full': !open }" class="  z-10 bg-blue-500 text-white w-64 px-4 py-4   inset-y-0   transform  md:translate-x-0 overflow-y-auto transition ease-in-out duration-200 shadow-lg fixed left-0 top-0 h-screen scrollbar scrollbar-thumb-blue-500 ">
                @include('moniteur.layouts.sidebaremenu')

            </aside>

            <main class="flex-1  bg-gray-100  ">
            @include('moniteur.layouts.headpage')
            <div class=" ">

               @yield('content')

            </div>
            </main>


</div>


@include('moniteur.layouts.footerscript')
@yield('script')
</body>
</html>
