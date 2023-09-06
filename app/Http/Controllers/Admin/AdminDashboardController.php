<?php

namespace App\Http\Controllers\Admin;

use App\Models\Resi;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $data['total_resi'] = Resi::count();
        $data['total_admin'] = Admin::count();
        return view('admin.dashboard', compact('data'));
    }
    public function indexSetting()
    {
        return view('admin.setting');
    }
    public function indexForm()
    {
        return view('admin.form');
    }
    public function indexTable()
    {
        return view('admin.table');
    }
    public function indexInvoice()
    {
        return view('admin.invoice');
    }
}
