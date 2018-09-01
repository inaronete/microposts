<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserFavoriteController extends Controller
{
      public function store($id)
    {

        \Auth::user()->favorite($id);
        return redirect()->back();
        
        
    }
    
     public function destroy($id)
    {
      
       \Auth::user()->unfavorite($id);
        return redirect()->back();
    }
    
    public function index($id)
    {
        $user = User::find($id);
        $microposts = $user->favoriting()->paginate(10);
      
        
         $data = [
            'user' => $user,
            'favoriting' => $microposts,
        ];
        
        $data += $this->counts($user);
        
        return view('users.favoriting', $data);
    }
}