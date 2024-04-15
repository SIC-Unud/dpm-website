<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $displayTemplate = [
            ["KETUA", "WAKIL KETUA"],
            ["SEKERTARIS UMUM", "BENDAHARA I", "BENDAHARA II", "SEKERTARIS JENDRAL"],
            ["KOMISI I"],
            ["KOMISI II"],
            ["KOMISI III"],
            ["KOMISI IV"],
            ["KOMISI V"],
            ["DIVISI KESTARI"],
            ["DIVISI MEDINFO"],
            ["DIVISI PSDM"],
            ["DIVISI LITBANG"]
        ];
        $users     = User::where('role', '<>', 'SUPER_ADMIN')->get();
        $orderedUsers = [];

        for ($i=0; $i < count($displayTemplate); $i++) {
            array_push($orderedUsers, []);
        }

        foreach($users as $user){
            for ($i=0; $i < count($displayTemplate); $i++) {
                for ($j=0; $j < count($displayTemplate[$i]); $j++) { 
                    if(isset($user->detail->role) && !is_null($user->detail->role)){
                        if($user->detail->role->role == $displayTemplate[$i][$j]){
                            array_push($orderedUsers[$i], $user);
                        }
                    }
                }
            }
        }

        $documents = Document::all();
        $posts     = Post::latest()->get();

        return view('index', compact('users', 'documents', 'orderedUsers', 'posts'));
    }
}
