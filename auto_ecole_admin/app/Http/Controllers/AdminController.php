<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;


class AdminController extends Controller
{

  public function showNotificaton()
    {
      //$notifications = auth()->user()->unreadNotifications;
      $notifications = User::has('notifications')->first()->unreadNotifications;
      //dd($user->unreadNotifications);
      return view('layouts.pageprincipale',compact('notifications'));
    }

    public function markNotification(Request $request)
    {
       auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }
    public function supprimer($id)

    {

        DB::delete('delete from notifications where id = ?', $id);

    }
    public function update(Request $request, DatabaseNotification $notification)
    {
        $notification->markAsRead();

        if($request->user()->unreadNotifications->isEmpty()) {
            return redirect()->route('blog.index');
        }

        return back();
    }

}
