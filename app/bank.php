<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = ['user_id','method','fromBank','fromAccountNumber','fromAccountName','transferDate',
    'transferTime','amount','toBank','toAccountNumber','toAccountName','transferStatus'];

    public function user()
    {
      return $this->belongsTo(User::class, 'user_id');
    }
}
