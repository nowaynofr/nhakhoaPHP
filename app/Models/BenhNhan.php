<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BenhNhan extends Model
{
    use HasFactory;

    public $table = 'benhnhan';

    public $timestamps = false;

    protected $primaryKey = 'Id';

    protected $guarded = [];

    public function sokham(): HasOne
    {
        return $this->hasOne(SoKhamBenh::class, 'MaBenhNhan', 'Id');
    }
}
