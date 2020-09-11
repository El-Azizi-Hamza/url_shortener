<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Link;

class public_c_link extends Controller
{
    //
   

    

        public function redirect()
    {
        $id = request("id");
        

        $my_link = Link::LinkBy($id);
        $url = $my_link["url"];
        $nb= $my_link["nb"]+1;
        $data = DB::table('links')
                ->where('id_link', $id)
               ->update(['nb' =>$nb]);
       
        
        return redirect()->away($url);
        //return view('redirect', compact('my_link'));
    }

}