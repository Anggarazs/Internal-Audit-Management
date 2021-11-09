<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audit;
use App\Models\JenisAudit;
use DB;

class AuditController extends Controller
{
    public function index_audit(){
        $audit = Audit::all();
        $jenis_audit = JenisAudit::all();
        return view('audit.audit_index',compact('audit','jenis_audit'));
    }

    public function insert_audit(Request $request){
        $validateData = $request->validate([
            "no_laporan_audit" => 'required|max:255',
            "judul_audit" => 'required|max:255',
            "tipe_audit" => 'required|max:255',
            "jenis_audit" => 'required',
            "objek" => 'required|max:255',
            "auditor" => 'required|max:255',
            "department" => 'required',
            "kriteria_audit" => 'required|max:255',
            "tahun_audit" => 'required',
            "tanggal_mulai_audit" => 'required|date_format:Y-m-d',
            "tanggal_akhir_audit" => 'required|date_format:Y-m-d',
            "jumlah_temuan" => 'required',
            "file" => 'mimes:pdf,jpg,jpeg,png|max:10000'
        ]);

        $dokumen=$request->judul_audit.'.'.$request->file->extension();
        $request->file->move(storage_path('app/public/LaporanAudit'),$dokumen);
        $audit=new Audit;
        $audit->no_laporan_audit=$request->get('no_laporan_audit');
        $audit->judul_audit=$request->get('judul_audit');
        $audit->tipe_audit=$request->get('tipe_audit');
        $audit->jenis_audit=$request->get('jenis_audit');
        $audit->objek=$request->get('objek');
        $audit->auditor=$request->get('auditor');
        $audit->department=$request->get('department');
        $audit->kriteria_audit=$request->get('kriteria_audit');
        $audit->tahun_audit=$request->get('tahun_audit');
        $audit->tanggal_mulai_audit=$request->get('tanggal_mulai_audit');
        $audit->tanggal_akhir_audit=$request->get('tanggal_akhir_audit');
        $audit->jumlah_temuan=$request->get('jumlah_temuan');
        $audit->file=$dokumen;
        $audit->jenis_audit()->attach($request->jenis_audit);
        $audit->save();

        

        session()->flash('berhasil', 'Laporan Audit Berhasil Ditambahkan');
        return redirect('/audit');
    }

    public function edit_audit($id){
        $audit=Audit::where("no_audit", $id)->first();
        return view('audit.edit_audit', ['audit' => $audit]);
    }

    public function delete_audit($id){
        $audit =Audit::where("no_audit", $id);
        $audit->delete();
        session()->flash('berhasil', 'Laporan Audit Berhasil Dihapus');
        return redirect('/audit');
    }
}
