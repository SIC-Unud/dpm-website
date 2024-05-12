<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\Post;
use App\Models\Work;

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
            ["KETUA", "WAKIL KETUA INTERNAL", "WAKIL KETUA EKSTERNAL"],
            ["SEKERTARIS UMUM", "BENDAHARA I", "BENDAHARA II", "SEKERTARIS JENDRAL"],
            ["KOMISI I"],
            ["KOMISI II"],
            ["KOMISI III"],
            ["KOMISI IV"],
            ["KOMISI V"],
            ["STAF AHLI LITBANG"],
            ["STAF AHLI KESTARI"],
            ["STAF AHLI ADMINISTRASI UMUM"],
            ["STAF AHLI INTERNALISASI & HUBUNGAN ANTAR ANGGOTA"],
            ["STAF AHLI KOMUNIKASI VISUAL"],
        ];

        $prokerDisplayTemplate = [
            'PROKER WAJIB',
            'INTI',
            'KOMISI I',
            'KOMISI II',
            'KOMISI III',
            'KOMISI IV',
            'KOMISI V',
            'AHLI LITBANG',
            'AHLI KESTARI',
            'AHLI ADMINISTRASI UMUM',
            'AHLI INTERNALISASI HUBUNGAN ANTAR ANGGOTA',
            'AHLI KOMUNIKASI VISUAL'
        ];

        $works = Work::all();
        $orderedWorks = [];
        $users     = User::where('role', '<>', 'SUPER_ADMIN')->get();
        $orderedUsers = [];


        $dewanCount = UserDetail::all()->where('role_id', '<=', 12)->count();
        $staffCount = UserDetail::all()->where('role_id', '>', 12)->count();

        for ($i = 0; $i < count($prokerDisplayTemplate); $i++) {
            array_push($orderedWorks, []);
        }

        foreach ($works as $work) {
            for ($i = 0; $i < count($prokerDisplayTemplate); $i++) {
                if ($work->type == $prokerDisplayTemplate[$i]) {
                    array_push($orderedWorks[$i], $work);
                }
            }
        }


        for ($i = 0; $i < count($displayTemplate); $i++) {
            array_push($orderedUsers, []);
        }

        foreach ($users as $user) {
            for ($i = 0; $i < count($displayTemplate); $i++) {
                for ($j = 0; $j < count($displayTemplate[$i]); $j++) {
                    if (isset($user->detail->role) && !is_null($user->detail->role)) {
                        if ($user->detail->role->role == $displayTemplate[$i][$j]) {
                            array_push($orderedUsers[$i], $user);
                        }
                    }
                }
            }
        }


        $documents = Document::all();
        $posts     = Post::latest()->get();

        return view('index', compact('users', 'documents', 'orderedUsers', 'orderedWorks', 'posts', 'dewanCount', 'staffCount'));
    }
}
