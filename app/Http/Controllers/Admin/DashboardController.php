<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class DashboardController extends Controller
{
    public function index()
    {
        $notifications = Notification::orderBy('id', 'desc')->get();
        return view('admin.dashboard', compact('notifications'));
    }

    public function sort(Request $request)
    {
        // dd($request);
        $request->validate([
            'order' => ['required', 'string', Rule::in(['post_limit'])]
        ]);

        $notifications = Notification::orderBy($request->order, 'asc')->get();

        return response()->json(['data' => $notifications], 200);
    }
}
