<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //
    public function users(){
        return $this->belongsTo("App\User");
    }

    static public function LinkFor($id){
        
        $links= self::all();
        $my_links = [];
        foreach($links as $link){
            if($link['id_user'] == $id){
                $my_links [] = $link;
                
            }
        }
        return $my_links;
    }

    static public function LinkBy($id){
        
        $links= self::all();
        $my_link = null;
        foreach($links as $link){
            if($link['id_link'] == $id){
                $my_link = $link;
                
            }
        }
        return $my_link;
    }
}
