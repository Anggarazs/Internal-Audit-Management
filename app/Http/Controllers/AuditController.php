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

    public function insert_audit(Request $request){
        $validateData = $request->validate([
            "judul_audit" => 'required|max:255',
            "tipe_audit" => 'required|max:255',
            "jenis_audit" => 'required|max:255',
            "auditor" => 'required|max:255',
            "kriteria_audit" => 'required|max:255',
            "tahun_audit" => 'required',
            "tanggal_mulai_audit" => 'required|date_format:Y-m-d',
            "tanggal_akhir_audit" => 'required|date_format:Y-m-d',
            "file" => 'mimes:pdf,jpg,jpeg,png|max:10000'
        ]);

        $dokumen=$request->judul_audit.'.'.$request->file->extension();
        $request->file->move(storage_path('app/public/LaporanAudit'),$dokumen);

        $audit=new Audit;
        $audit->judul_audit=$request->get('judul_audit');
        $audit->tipe_audit=$request->get('tipe_audit');
        $audit->jenis_audit=$request->get('jenis_audit');
        $audit->auditor=$request->get('auditor');
        $audit->kriteria_audit=$request->get('kriteria_audit');
        $audit->tahun_audit=$request->get('tahun_audit');
        $audit->tanggal_mulai_audit=$request->get('tanggal_mulai_audit');
        $audit->tanggal_akhir_audit=$request->get('tanggal_akhir_audit');
        $audit->file=$dokumen;
        $audit->save();

        session()->flash('berhasil', 'Laporan Audit Berhasil Ditambahkan');
        return redirect('/audit');
    }

    public function delete_audit($id){
        $audit =Audit::where("no_audit", $id);
        $audit->delete();
        session()->flash('berhasil', 'Laporan Audit Berhasil Dihapus');
        return redirect('/audit');
    }
}
