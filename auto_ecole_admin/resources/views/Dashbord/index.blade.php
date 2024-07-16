@extends('layouts.pageprincipale')
@section('title')
Tableau de Bord
@endsection
@section('css')
<style type="text/css">
  
        .box{
            width:800px;
            margin:0 auto;
        }
      
    </style>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart1);

        function drawChart1()
        {
            var data = google.visualization.arrayToDataTable([['Permis','Number'],
            <?php echo $Permis; ?> ]);
            var options = {
                title : 'Pourcentage de Permis d\'élèves (A,B,EB,C,EC,D)',
                is3D: true,
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart_eleve'));
            chart.draw(data, options);
        }
        
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart2);

        function drawChart2()
        {
            var data = google.visualization.arrayToDataTable([['type','Number'],
            <?php echo $type; ?> ]);
            var options = {
                title : 'Nombre de véhicules pour chaque type',
                is3D: true,
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart_véhicule'));
            chart.draw(data, options);
        }
        

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart3);

        function drawChart3()
        {
            var data = google.visualization.arrayToDataTable([['typecour','Number'],
            <?php echo $typecour; ?> ]);
            var options = {
                title : 'Nombre des cours pour chaque type',
                is3D: true,
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart_cours'));
            chart.draw(data, options);
        }


        var labels =  {{ Js::from($labels) }};
      var users =  {{ Js::from($data) }};
  
      const data = {
        labels: labels,
        datasets: [{
         
          label: "Nombre d'élève",
          backgroundColor: 'rgb(0, 50, 250)',
          borderColor: 'rgb(0,50, 255)',
          data: users,
        }]
      };
  
      const config = {
        type: 'line',
        data: data,
        options: {}
      };
  
      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );


      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
 
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['', 'bénéfices', 'pertes'],
 
         ['Jan', 5, 2],           
         ['Feb', 10, 8],          
         ['Mar', 19, 15],
         ['Apr', 21, 6 ],
         ['May', 25, 14 ],
         ['Jun', 10, 3],            
         ['Jul', 17, 13],
         ['Aug', 30, 20 ],
         ['Sept', 25, 16.5 ],
         ['Oct', 19.20, 14],
         ['Nov', 21.45, 12],
         ['Dec', 20, 18],
        ]);
 
        var options = {
          chart: {
           
          },
          bars: 'vertical'
        };
        var chart = new google.charts.Bar(document.getElementById("chart_bar"));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
           
    </script>

@endsection
@section('content')
<div class="flex items-center justify-center mt-20 md:ml-64 ">
    <div class="w-full  max-w-xxl h-96  rounded-lg   mx-10 ">
      <span class="fs-2 font-bold font-mono text-gray-400">Tableau de Bord</span>
      <hr class="mb-4 mt-2 ">
        <div class="row">
                    <div class="col-md md:mt-2">
                    <div class="flex justify-center">
          <div class="block rounded-lg shadow-lg bg-white max-w-sm text-center rounded-xl">
            <div class="flex  py-4 px-6 border-b border-gray-300 bg-red-500 text-xl font-bold text-white rounded-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-people-fill " viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                </svg>
               <span class="pl-6 pt-1">Élèves ( {{$counteleve}} )</span>
           
            </div> 
            <div id="pie_chart_eleve" style="width:300px; height:200px;" ></div>
          </div>
        </div>
    </div>


<div class="col-md md:mt-2">
            <div class="flex justify-center">
  <div class="block rounded-lg shadow-lg bg-white max-w-sm text-center">
    <div class=" flex py-4 px-6 border-b border-gray-300 bg-yellow-400 text-xl font-bold text-white">
    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
    <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
    </svg>
    <span class="pl-6">Véhicules ( {{$countvehicule}} )</span>
    </div> 
    <div id="pie_chart_véhicule" style="width:300px; height:200px;"></div>
  </div>
</div>
 </div>
            <div class="col-md md:mt-2">
            <div class="flex justify-center">
  <div class="block rounded-lg shadow-lg bg-white max-w-sm text-center">
    <div class="flex py-4 px-6 border-b border-gray-300 bg-black text-xl font-bold text-white">
    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
  <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg>
<span class="pl-6"> Cours ( {{$countcours}} )</span>
    </div> 
    <div id="pie_chart_cours" style="width:300px; height:200px;"></div>
  </div>
</div>
</div>
</div>

<div class="row">
    <div class="col-md my-6">
    <div class="flex justify-center">
  <div class="block rounded-lg shadow-lg bg-white max-w-50 text-center">
    <div class="flex py-2  border-b border-gray-300 text-sm font-bold text-black ">
    <span class="mx-28 text-gray-400">Le nombre d'élèves qui ajout dans chaque mois </span>
      </div>
    <canvas id="myChart" style="width:550px; height:260px;"></canvas>
  
    </div>
    </div>
    </div>
    <div class="col-md my-6">
    <div class="flex justify-center">
  <div class="block rounded-lg shadow-lg bg-white max-w-50 text-center">
    <div class="flex py-2 border-b border-gray-300 text-sm font-bold text-black">
      <span class="mx-28 text-gray-400">Les bénéfices et les pertes pour chaque mois </span>
      </div>
    <div id="chart_bar" style="width: 550px; height: 260px;"></div>
   
    </div>
    </div>
    </div>
    
    
</div>

</div>
</div>
 @endsection