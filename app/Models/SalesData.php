<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesData extends Model
{
    use HasFactory;

    protected $table = 'sales_data'; // Nama tabel

    protected $primaryKey = 'ORDERNUMBER'; // Primary key

    public $incrementing = false; // Primary key bukan auto-increment

    protected $keyType = 'string'; // Tipe data primary key adalah string (karena ORDERNUMBER adalah VARCHAR)

    protected $fillable = [
        'ORDERNUMBER',
        'QUANTITYORDERED',
        'PRICEEACH',
        'ORDERLINENUMBER',
        'SALES',
        'ORDERDATE',
        'STATUS',
        'QTR_ID',
        'MONTH_ID',
        'YEAR_ID',
        'PRODUCTLINE',
        'MSRP',
        'PRODUCTCODE',
        'CUSTOMERNAME',
        'PHONE',
        'ADDRESSLINE1',
        'ADDRESSLINE2',
        'CITY',
        'STATE',
        'POSTALCODE',
        'COUNTRY',
        'TERRITORY',
        'CONTACTLASTNAME',
        'CONTACTFIRSTNAME',
        'DEALSIZE',
    ];

     protected $casts = [
        'ORDERNUMBER' => 'integer',  // Cast ORDERNUMBER ke integer
        'QUANTITYORDERED' => 'integer',
        'PRICEEACH' => 'float',
        'ORDERLINENUMBER' => 'integer',
        'SALES' => 'float',
        'QTR_ID' => 'integer',
        'MONTH_ID' => 'integer',
        'YEAR_ID' => 'integer',
        'MSRP' => 'integer',
    ];

    public $timestamps = false;
}