<?php

namespace App\Models;

use App\Models\Audit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisAudit extends Model
{
    protected $table = 'jenis_audit';
    protected $primaryKey = 'id_jenis_audit';
    protected $fillable = ['id_jenis_audit','jenis_audit'];

    public function audit(){
        return $this->belongsToMany(Audit::class);
    }
}
