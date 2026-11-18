<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OutcomingLetter extends Model
{
    protected $fillable = [
        'nomor_surat', 'tanggal', 'pengirim', 'perihal', 'keterangan',
    ];
    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
