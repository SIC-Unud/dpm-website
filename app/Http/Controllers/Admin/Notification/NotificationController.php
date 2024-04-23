<?php

namespace App\Http\Controllers\Admin\Notification;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Http\Requests\StoreNotification;
use App\Http\Requests\UpdateNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use illuminate\Support\Str;


class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::all();
        return view('admin.notification', compact('notifications'));
    }

    public function store(StoreNotification $request)
    {
        // Date must be later than today
        if ($request->post_limit < date('Y-m-d')) {
            $errors = [
                'date' => 'Please pick correct date'
            ];
            return response()->json(['errors' => $errors], 400);
        }

        $notification =  new Notification();
        $notification->title = $request->title;
        $notification->description = $request->description;
        $notification->user_id = $request->user_id;
        $notification->post_limit = $request->post_limit;

        if ($request->hasFile('file_path')) {
            $filename = Str::slug($request->title) . '_' . date('Y-m-d') . '.' . $request->file('file_path')->extension();
            $file_path = $request->file('file_path')->storeAs(Notification::FILE_PATH, $filename);
            $notification->file_path = $file_path;
        }

        $notification->save();

        return response()->json(['message' => 'Notification has been added'], 200);
    }

    public function destroy(Notification $notification)
    {
        if ($notification->file_path)
            Storage::delete($notification->file_path);

        $notification->delete();

        return response()->json(['message' => 'Notification has been deleted'], 200);
    }

    public function update(UpdateNotification $request, Notification $notification)
    {
        $notification->title       = $request->title;
        $notification->description = $request->description;
        $notification->user_id     = $request->user_id;
        $notification->post_limit  = $request->post_limit;

        if ($request->file('file_path')) {
            if ($notification->file_path)
                Storage::delete($notification->file_path);

            $file_path = $request->file('file_path')->store(Notification::FILE_PATH);
            $notification->file_path = $file_path;
        }

        $notification->save();

        return response()->json(['message' => 'Notification has been updated'], 200);
    }
}
