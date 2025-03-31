<!DOCTYPE html>
<html>
<head>
    <title>Detail Data Penjualan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h2 class="text-center text-primary">Detail Data Penjualan</h2>

            @if($salesData)
                <dl class="row">
                    <dt class="col-sm-3">ORDERNUMBER</dt>
                    <dd class="col-sm-9">{{ $salesData->ORDERNUMBER }}</dd>

                    <dt class="col-sm-3">QUANTITYORDERED</dt>
                    <dd class="col-sm-9">{{ $salesData->QUANTITYORDERED }}</dd>

                    <dt class="col-sm-3">PRICEEACH</dt>
                    <dd class="col-sm-9">{{ $salesData->PRICEEACH }}</dd>

                    <dt class="col-sm-3">ORDERLINENUMBER</dt>
                    <dd class="col-sm-9">{{ $salesData->ORDERLINENUMBER }}</dd>

                    <dt class="col-sm-3">SALES</dt>
                    <dd class="col-sm-9">{{ $salesData->SALES }}</dd>

                    <dt class="col-sm-3">ORDERDATE</dt>
                    <dd class="col-sm-9">{{ Carbon\Carbon::parse($salesData->ORDERDATE)->format('d-m-Y') }}</dd>

                    <dt class="col-sm-3">STATUS</dt>
                    <dd class="col-sm-9">{{ $salesData->STATUS }}</dd>

                    <dt class="col-sm-3">QTR_ID</dt>
                    <dd class="col-sm-9">{{ $salesData->QTR_ID }}</dd>

                    <dt class="col-sm-3">MONTH_ID</dt>
                    <dd class="col-sm-9">{{ $salesData->MONTH_ID }}</dd>

                    <dt class="col-sm-3">YEAR_ID</dt>
                    <dd class="col-sm-9">{{ $salesData->YEAR_ID }}</dd>

                    <dt class="col-sm-3">PRODUCTLINE</dt>
                    <dd class="col-sm-9">{{ $salesData->PRODUCTLINE }}</dd>

                    <dt class="col-sm-3">MSRP</dt>
                    <dd class="col-sm-9">{{ $salesData->MSRP }}</dd>

                    <dt class="col-sm-3">PRODUCTCODE</dt>
                    <dd class="col-sm-9">{{ $salesData->PRODUCTCODE }}</dd>

                    <dt class="col-sm-3">CUSTOMERNAME</dt>
                    <dd class="col-sm-9">{{ $salesData->CUSTOMERNAME }}</dd>

                    <dt class="col-sm-3">PHONE</dt>
                    <dd class="col-sm-9">{{ $salesData->PHONE }}</dd>

                    <dt class="col-sm-3">ADDRESSLINE1</dt>
                    <dd class="col-sm-9">{{ $salesData->ADDRESSLINE1 }}</dd>

                    <dt class="col-sm-3">ADDRESSLINE2</dt>
                    <dd class="col-sm-9">{{ $salesData->ADDRESSLINE2 }}</dd>

                    <dt class="col-sm-3">CITY</dt>
                    <dd class="col-sm-9">{{ $salesData->CITY }}</dd>

                    <dt class="col-sm-3">STATE</dt>
                    <dd class="col-sm-9">{{ $salesData->STATE }}</dd>

                    <dt class="col-sm-3">POSTALCODE</dt>
                    <dd class="col-sm-9">{{ $salesData->POSTALCODE }}</dd>

                    <dt class="col-sm-3">COUNTRY</dt>
                    <dd class="col-sm-9">{{ $salesData->COUNTRY }}</dd>

                    <dt class="col-sm-3">TERRITORY</dt>
                    <dd class="col-sm-9">{{ $salesData->TERRITORY }}</dd>

                    <dt class="col-sm-3">CONTACTLASTNAME</dt>
                    <dd class="col-sm-9">{{ $salesData->CONTACTLASTNAME }}</dd>

                    <dt class="col-sm-3">CONTACTFIRSTNAME</dt>
                    <dd class="col-sm-9">{{ $salesData->CONTACTFIRSTNAME }}</dd>

                    <dt class="col-sm-3">DEALSIZE</dt>
                    <dd class="col-sm-9">{{ $salesData->DEALSIZE }}</dd>
                </dl>
            @else
                <p>Data tidak ditemukan.</p>
            @endif

            <a href="{{ route('sales_data.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>