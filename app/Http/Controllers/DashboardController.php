<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\Presence;
use App\Models\User;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        // ->whereNotIn('user_id', User::select('id')->get())
        $date = new DateTime();
        $x = $date->format('Y-m-d');

        return view('dashboard.index', [
            "title" => "Dashboard",
            "positionCount" => Position::count(),
            "userCount" => User::count(),
            "userPresence" => Presence::where('presence_date', $date->format('Y-m-d'))->count(),
            "userNotPresence" => DB::query("SELECT COUNT(id) FROM users WHERE users.id NOT IN (SELECT user_id FROM presences WHERE presence_date = '$x')")

        ]);
    }
}
