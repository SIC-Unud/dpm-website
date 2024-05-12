<?php

namespace App\Http\Controllers\Admin\Work;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWork;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use illuminate\Support\Str;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all();
        $roles = ['PROKER WAJIB', 'INTI', 'KOMISI I', 'KOMISI II', 'KOMISI III', 'KOMISI IV', 'KOMISI V', 'AHLI LITBANG', 'AHLI KESTARI', 'AHLI ADMINISTRASI UMUM', 'AHLI INTERNALISASI HUBUNGAN ANTAR ANGGOTA', 'AHLI KOMUNIKASI VISUAL'];

        return view('admin.work', compact('works', 'roles'));
    }

    public function store(StoreWork $request)
    {
        $work = new Work();
        $work->title = $request->title;
        $work->description = $request->description;
        $work->type = $request->type;


        if ($request->hasFile('image')) {
            $filename = Str::slug($request->title) . '_' . date('Y-m-d') . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs(Work::image_path, $filename);
            $work->image_name = $filename;
        }

        $work->save();

        return response()->json(['message' => 'New work has been added'], 200);
    }

    public function destroy(Work $work)
    {
        if ($work->image_name)
            Storage::delete(Work::image_path . "/" . $work->image_name);

        $work->delete();

        return response()->json(['message' => 'work has been deleted'], 200);
    }

    public function update(StoreWork $request, Work $work)
    {
        $work->title = $request->title;
        $work->description = $request->description;

        if ($request->file('image')) {
            if ($work->image_path)
                Storage::delete($work->image_path);

            $filename = Str::slug($request->title) . '_' . date('Y-m-d') . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs(Work::image_path, $filename);
            $work->image_name = $filename;
        }
        $work->save();
        return response()->json(['message' => 'work has been updated'], 200);
    }
}