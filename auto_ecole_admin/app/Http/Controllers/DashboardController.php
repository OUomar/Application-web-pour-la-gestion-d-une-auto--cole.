<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\vehicule;
use App\Models\cours;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
  
 
  public function PieChart()
  {
    $counteleve= User::count();
      $result1 = DB::select(DB::raw("select count(*) As number,Permis FROM users GROUP BY Permis"));
      $data1 = "";
      foreach($result1 as  $value)
      {
        $data1.="['".$value->Permis."', ".$value->number."],";
      }
      $Permis = $data1;

      $countvehicule= vehicule::count();
      $result2 = DB::select(DB::raw("select count(*) As number,type FROM vehicules GROUP BY type"));
      $data2 = "";
      foreach($result2 as  $value)
      {
        $data2.="['".$value->type."', ".$value->number."],";
      }
      $type = $data2;

      $countcours= cours::count();
      $result3 = DB::select(DB::raw("select count(*) As number,type FROM cours GROUP BY type"));
      $data3 = "";
      foreach($result3 as  $value)
      {
        $data3.="['".$value->type."', ".$value->number."],";
      }
      $typecour = $data3;
      
      $users = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                  ->whereYear('created_at', date('Y'))
                  ->groupBy(DB::raw("Month(created_at)"))
                  ->pluck('count', 'month_name');

      $labels = $users->keys();
      $data = $users->values();
      return view('Dashbord.index', compact('Permis','type','typecour','counteleve','countvehicule','countcours','labels', 'data'));
  }


   
}
