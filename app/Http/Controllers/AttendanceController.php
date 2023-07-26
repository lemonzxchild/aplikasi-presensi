<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        return view('attendances.index', [
            "title" => "Jadwal Presensi"
        ]);
    }

    public function create()
    {
        return view('attendances.create', [
            "title" => "Tambah Jadwal"
        ]);
    }

    public function edit()
    {
        return view('attendances.edit', [
            "title" => "Edit Data Jadwal",
            "attendance" => Attendance::findOrFail(request('id'))
        ]);
    }
}
