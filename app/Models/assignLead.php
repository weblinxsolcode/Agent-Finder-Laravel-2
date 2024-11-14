<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignLead extends Model
{
    use HasFactory;

    public function leadInfo()
    {
        return $this->belongsTo(Leads::class, "lead_id");
    }

    public function agentInfo()
    {
        return $this->belongsTo(Agents::class, "agent_id");
    }
}
