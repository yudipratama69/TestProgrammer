<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class DashboardController extends Controller
{
    public function index()
    {
        $totalKaryawan = Karyawan::count();
        $jumlahAktif = Karyawan::where('statusaktif', 1)->count();
        $jumlahTidakAktif = Karyawan::where('statusaktif', 0)->count();

        return view('dashboard', compact('totalKaryawan', 'jumlahAktif', 'jumlahTidakAktif'));
    }
}