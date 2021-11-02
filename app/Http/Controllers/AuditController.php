<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audit;

class AuditController extends Controller
{
    public function index_audit(){
        $audit = Audit::all();
        return view('audit.audit_index',['audit' => $audit]);
    }

    public function delete_audit($id){
        $audit =Audit::where("no_audit", $id);
        $audit->delete();
        session()->flash('berhasil', 'Laporan Audit Berhasil Dihapus');
        return redirect('/audit');
    }
}
