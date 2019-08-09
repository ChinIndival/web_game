<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\BillDetail;
// use App\Mail;

class Bill extends Model
{
    public function bill_details() 
    {
    	return $this->hasMany('App\BillDetail', 'id_bill', 'id');
    }
    public function getBill_detail($id) 
    {
        $bill_detail = BillDetail::where('id_bill', $id)->first();

        return $bill_detail;
    }
    public function user() 
    {
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
