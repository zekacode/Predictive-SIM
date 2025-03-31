<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sales_data', function (Blueprint $table) {
            $table->bigInteger('ORDERNUMBER')->primary(); // Jadikan ORDERNUMBER sebagai primary key
            $table->bigInteger('QUANTITYORDERED');
            $table->double('PRICEEACH');
            $table->bigInteger('ORDERLINENUMBER');
            $table->double('SALES');
            $table->string('ORDERDATE', 100);
            $table->string('STATUS', 100);
            $table->bigInteger('QTR_ID');
            $table->bigInteger('MONTH_ID');
            $table->bigInteger('YEAR_ID');
            $table->string('PRODUCTLINE', 512);
            $table->bigInteger('MSRP');
            $table->string('PRODUCTCODE', 512);
            $table->string('CUSTOMERNAME', 255);
            $table->string('PHONE', 20);
            $table->string('ADDRESSLINE1', 512);
            $table->string('ADDRESSLINE2', 512)->nullable();
            $table->string('CITY', 30);
            $table->string('STATE', 30)->nullable();
            $table->string('POSTALCODE', 20)->nullable();
            $table->string('COUNTRY', 30);
            $table->string('TERRITORY', 30);
            $table->string('CONTACTLASTNAME', 255);
            $table->string('CONTACTFIRSTNAME', 255);
            $table->string('DEALSIZE', 255);
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_data');
    }
};