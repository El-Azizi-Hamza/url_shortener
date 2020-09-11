<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Link;

class c_link extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $id = Auth::user()->id;

        $my_links = Link::LinkFor($id);

        return view('home', compact('my_links'));
    }


    public function add(){
        $url = request("url");
        

          

              if($url != null ){
                    $addlink = new Link;
                    $addlink->url = $url; 
                    $addlink->nb = 0;
                    $addlink->id_user = Auth::user()->id;
                    $addlink->save();


            }
            return redirect('/home');
        }
        public function delete(){
            $id = request("id");
            
    
              
    
                  if($id != null ){
                        
                    DB::table('links')->where('id_link', $id)->delete();
    
                }
                return redirect('/home');
            }

}