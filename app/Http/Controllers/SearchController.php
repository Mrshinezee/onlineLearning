<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index() 
    {
     return view ('search.index');
    } 
    
    public function advance() 
    {
     return view ('search.advance');
    } 
     
    public function detailVideo() 
    {
     return view ('search.detailVideo');
    } 
    public function detailAudio() 
    {
     return view ('search.detailAudio');
    } 
    public function guestPurchaseList() 
    {
     return view ('search.guestPurchaseList');
    } 
}
