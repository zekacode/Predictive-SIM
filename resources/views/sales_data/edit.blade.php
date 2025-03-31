<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Penjualan</title>
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
            <h2 class="text-center text-primary">Edit Data Penjualan</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('sales_data.update', ['id' => $salesData->ORDERNUMBER]) }}" method="POST">
                @csrf
                @method('POST')  <!-- Penting: Ubah menjadi POST -->

                <div class="mb-3">
                    <label for="ORDERNUMBER" class="form-label">ORDERNUMBER</label>
                    <input type="number" class="form-control" id="ORDERNUMBER" name="ORDERNUMBER" value="{{ $salesData->ORDERNUMBER }}" required>
                </div>

                <div class="mb-3">
                    <label for="QUANTITYORDERED" class="form-label">QUANTITYORDERED</label>
                    <input type="number" class="form-control" id="QUANTITYORDERED" name="QUANTITYORDERED" value="{{ $salesData->QUANTITYORDERED }}" required>
                </div>

                <div class="mb-3">
                    <label for="PRICEEACH" class="form-label">PRICEEACH</label>
                    <input type="number" step="0.01" class="form-control" id="PRICEEACH" name="PRICEEACH" value="{{ $salesData->PRICEEACH }}" required>
                </div>

                <div class="mb-3">
                    <label for="ORDERLINENUMBER" class="form-label">ORDERLINENUMBER</label>
                    <input type="number" class="form-control" id="ORDERLINENUMBER" name="ORDERLINENUMBER" value="{{ $salesData->ORDERLINENUMBER }}" required>
                </div>

                <div class="mb-3">
                    <label for="SALES" class="form-label">SALES</label>
                    <input type="number" step="0.01" class="form-control" id="SALES" name="SALES" value="{{ $salesData->SALES }}" required>
                </div>

                <div class="mb-3">
                    <label for="ORDERDATE" class="form-label">ORDERDATE</label>
                    <input type="date" class="form-control" id="ORDERDATE" name="ORDERDATE" value="{{ $salesData->ORDERDATE }}" required>
                </div>

                <div class="mb-3">
                    <label for="STATUS" class="form-label">STATUS</label>
                    <input type="text" class="form-control" id="STATUS" name="STATUS" value="{{ $salesData->STATUS }}" required>
                </div>

                <div class="mb-3">
                    <label for="QTR_ID" class="form-label">QTR_ID</label>
                    <input type="number" class="form-control" id="QTR_ID" name="QTR_ID" value="{{ $salesData->QTR_ID }}" required>
                </div>

                <div class="mb-3">
                    <label for="MONTH_ID" class="form-label">MONTH_ID</label>
                    <input type="number" class="form-control" id="MONTH_ID" name="MONTH_ID" value="{{ $salesData->MONTH_ID }}" required>
                </div>

                 <div class="mb-3">
                    <label for="YEAR_ID" class="form-label">YEAR_ID</label>
                    <input type="number" class="form-control" id="YEAR_ID" name="YEAR_ID" value="{{ $salesData->YEAR_ID }}" required>
                </div>

                 <div class="mb-3">
                    <label for="PRODUCTLINE" class="form-label">PRODUCTLINE</label>
                    <input type="text" class="form-control" id="PRODUCTLINE" name="PRODUCTLINE" value="{{ $salesData->PRODUCTLINE }}" required>
                </div>

                 <div class="mb-3">
                    <label for="MSRP" class="form-label">MSRP</label>
                    <input type="number" class="form-control" id="MSRP" name="MSRP" value="{{ $salesData->MSRP }}" required>
                </div>

                <div class="mb-3">
                    <label for="PRODUCTCODE" class="form-label">PRODUCTCODE</label>
                    <input type="text" class="form-control" id="PRODUCTCODE" name="PRODUCTCODE" value="{{ $salesData->PRODUCTCODE }}" required>
                </div>

                <div class="mb-3">
                    <label for="CUSTOMERNAME" class="form-label">CUSTOMERNAME</label>
                    <input type="text" class="form-control" id="CUSTOMERNAME" name="CUSTOMERNAME" value="{{ $salesData->CUSTOMERNAME }}" required>
                </div>

                 <div class="mb-3">
                    <label for="PHONE" class="form-label">PHONE</label>
                    <input type="text" class="form-control" id="PHONE" name="PHONE" value="{{ $salesData->PHONE }}" required>
                </div>

                <div class="mb-3">
                    <label for="ADDRESSLINE1" class="form-label">ADDRESSLINE1</label>
                    <input type="text" class="form-control" id="ADDRESSLINE1" name="ADDRESSLINE1" value="{{ $salesData->ADDRESSLINE1 }}" required>
                </div>

                <div class="mb-3">
                    <label for="ADDRESSLINE2" class="form-label">ADDRESSLINE2</label>
                    <input type="text" class="form-control" id="ADDRESSLINE2" name="ADDRESSLINE2" value="{{ $salesData->ADDRESSLINE2 }}">
                </div>

                <div class="mb-3">
                    <label for="CITY" class="form-label">CITY</label>
                    <input type="text" class="form-control" id="CITY" name="CITY" value="{{ $salesData->CITY }}" required>
                </div>

                <div class="mb-3">
                    <label for="STATE" class="form-label">STATE</label>
                    <input type="text" class="form-control" id="STATE" name="STATE" value="{{ $salesData->STATE }}">
                </div>

                <div class="mb-3">
                    <label for="POSTALCODE" class="form-label">POSTALCODE</label>
                    <input type="text" class="form-control" id="POSTALCODE" name="POSTALCODE" value="{{ $salesData->POSTALCODE }}">
                </div>

                <div class="mb-3">
                    <label for="COUNTRY" class="form-label">COUNTRY</label>
                    <input type="text" class="form-control" id="COUNTRY" name="COUNTRY" value="{{ $salesData->COUNTRY }}" required>
                </div>

                <div class="mb-3">
                    <label for="TERRITORY" class="form-label">TERRITORY</label>
                    <input type="text" class="form-control" id="TERRITORY" name="TERRITORY" value="{{ $salesData->TERRITORY }}">
                </div>

                 <div class="mb-3">
                    <label for="CONTACTLASTNAME" class="form-label">CONTACTLASTNAME</label>
                    <input type="text" class="form-control" id="CONTACTLASTNAME" name="CONTACTLASTNAME" value="{{ $salesData->CONTACTLASTNAME }}" required>
                </div>

                <div class="mb-3">
                    <label for="CONTACTFIRSTNAME" class="form-label">CONTACTFIRSTNAME</label>
                    <input type="text" class="form-control" id="CONTACTFIRSTNAME" name="CONTACTFIRSTNAME" value="{{ $salesData->CONTACTFIRSTNAME }}" required>
                </div>

                <div class="mb-3">
                    <label for="DEALSIZE" class="form-label">DEALSIZE</label>
                    <input type="text" class="form-control" id="DEALSIZE" name="DEALSIZE" value="{{ $salesData->DEALSIZE }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('sales_data.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>