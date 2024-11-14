<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
    use HasFactory;

    public function assignedLeads()
    {
        return $this->hasMany(assignLead::class, "agent_id")->with("leadInfo");
    }
}
