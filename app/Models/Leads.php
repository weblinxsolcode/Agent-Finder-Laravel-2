<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    use HasFactory;

    public function assignInfo()
    {
        return $this->hasOne(assignLead::class, "lead_id")->with("agentInfo");
    }
}
