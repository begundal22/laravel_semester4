<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
        public function index(){
        return "Selamat Datang Dio";
        }
    
        public function about(){
        return "NIM : 2041720086 <br> NAMA : Dio Aulia Ari Kurnia Sandi <br> KELAS : TI2C";
        }
    
        public function articles($id){
        return "Ini adalah halaman article dengan ID ".$id;
        }
}
