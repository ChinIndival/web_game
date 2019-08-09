<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Bill;
use App\Product;

class BillDetail extends Model
{
    public function bill_details() 
    {
    	return $this->hasMany('App\BillDetail', 'id_bill', 'id');
    }
    public function product() 
    {
    	return $this->belongsTo('App\Product', 'id_product', 'id');
    }
    public function bill() 
    {
    	return $this->belongsTo('App\Bill', 'id_bill', 'id');
    }
}
