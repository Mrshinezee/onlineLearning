<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class SearchPostedController extends Controller
{ 
  public function escrow() 
    {
     return view ('search.escrowMgt');
    }

  public function detailDoc($id) 
    { 
    	$searchDetail = App\SearchPosted::find($id);
     return view ('search.detailDoc', compact('searchDetail'));
    }

    public function detailAudio($id) 
    { 
    	$searchDetail = App\SearchPosted::find($id);
     return view ('search.detailAudio', compact('searchDetail'));
    }

    public function detailVideo($id) 
    { 
    	$searchDetail = App\SearchPosted::find($id);
     return view ('search.detailVideo', compact('searchDetail'));
    }


    public function searchD() 
    {
        $search = \Request::get('search');
         $searchDocuments = App\SearchPosted::where('title','like','%'.$search.'%')
        ->orderBy('title')
        ->paginate(3);
     //$searchDocuments =  App\SearchPosted::all();
      return view ('search.searchD', compact('searchDocuments'));
    } 
    
    public function searchA() 
    {
     $search = \Request::get('search');
         $searchAudios = App\SearchPosted::where('title','like','%'.$search.'%')
        ->orderBy('title')
        ->paginate(3);
      return view ('search.searchA', compact('searchAudios'));
    } 

    public function searchV() 
    {
     $search = \Request::get('search');
         $searchVideos = App\SearchPosted::where('title','like','%'.$search.'%')
        ->orderBy('title')
        ->paginate(3);
      return view ('search.searchV', compact('searchVideos'));
    }

      

}
