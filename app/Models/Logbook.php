<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    use HasFactory;

    protected $fillable = [ 'date',
                            'product_id',
                            'brand_id',
                            'count',
                            'worker_id',
                            'price',
                            'warehouse_id' ];
    
    public function Product() {
        return $this->belongsTo(nomenclature::class, "product_id", "id");
        
    }
    public function Brand() {
        return $this->belongsTo(brand::class, "brand_id", "id");
        
    }
    public function Worker() {
        return $this->belongsTo(empoyee::class, "worker_id", "id");
        
    }
    public function Warehouse() {
        return $this->belongsTo(warehouse::class, "warehouse_id", "id");
        
    }
}
