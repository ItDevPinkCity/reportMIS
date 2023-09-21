<?php

namespace App\Models\erp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Library\Helper;

class Attendance extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $connection = 'erpnext';
    //protected $table = 'tabStock Ledger Entry';
    //protected $table = 'tabPurchase Order';
    //protected $table = 'tabPurchase Order Item';
    //protected $table = 'tabSales Order';
    protected $table = 'tabEmployee Checkin';
   //  protected $table = 'tabAttendance';
  //  protected $table = 'tabItem';
  //  protected $table = 'tabDelivery Note';
   //  protected $table = 'tabSales Team';
  
  
    
    protected $guarded = [];

    public $timestamps = false; //only want to used created_at column
    const UPDATED_AT = null; //and updated by default null set
    const created_at = null;

}
