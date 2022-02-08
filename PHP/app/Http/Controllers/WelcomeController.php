<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Adress;

class WelcomeController extends Controller
{
   public function index( $number ){
     
         $startTime = now();
         $endTime = now();
         $isPrime = true;
         for($i = 3; $i < $number; $i++ ){
             if($number % $i == 0){
                 $endTime = now();
                 $isPrime = false;
                 break;
             }
     
             if( $isPrime ) {    
               $endTime = now();
             }
     
         }

      return[ 
         "number"  => $number,
         "isPrime" => $isPrime,
         "time"   => 0
      ];
   }
}
