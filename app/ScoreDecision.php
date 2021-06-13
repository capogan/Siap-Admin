<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScoreDecision extends Model
{
    protected $table = 'tb_score_decision';
    protected $fillable = [
        's_d_limit_credit','s_d_score_min','s_d_score_max','s_d_nominal_limit','updated_at','score','status'
    ];
}
