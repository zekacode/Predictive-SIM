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

            <?php if($salesData): ?>
                <dl class="row">
                    <dt class="col-sm-3">ORDERNUMBER</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->ORDERNUMBER); ?></dd>

                    <dt class="col-sm-3">QUANTITYORDERED</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->QUANTITYORDERED); ?></dd>

                    <dt class="col-sm-3">PRICEEACH</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->PRICEEACH); ?></dd>

                    <dt class="col-sm-3">ORDERLINENUMBER</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->ORDERLINENUMBER); ?></dd>

                    <dt class="col-sm-3">SALES</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->SALES); ?></dd>

                    <dt class="col-sm-3">ORDERDATE</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->ORDERDATE); ?></dd>

                    <dt class="col-sm-3">STATUS</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->STATUS); ?></dd>

                    <dt class="col-sm-3">QTR_ID</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->QTR_ID); ?></dd>

                    <dt class="col-sm-3">MONTH_ID</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->MONTH_ID); ?></dd>

                    <dt class="col-sm-3">YEAR_ID</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->YEAR_ID); ?></dd>

                    <dt class="col-sm-3">PRODUCTLINE</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->PRODUCTLINE); ?></dd>

                    <dt class="col-sm-3">MSRP</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->MSRP); ?></dd>

                    <dt class="col-sm-3">PRODUCTCODE</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->PRODUCTCODE); ?></dd>

                    <dt class="col-sm-3">CUSTOMERNAME</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->CUSTOMERNAME); ?></dd>

                    <dt class="col-sm-3">PHONE</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->PHONE); ?></dd>

                    <dt class="col-sm-3">ADDRESSLINE1</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->ADDRESSLINE1); ?></dd>

                    <dt class="col-sm-3">ADDRESSLINE2</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->ADDRESSLINE2); ?></dd>

                    <dt class="col-sm-3">CITY</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->CITY); ?></dd>

                    <dt class="col-sm-3">STATE</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->STATE); ?></dd>

                    <dt class="col-sm-3">POSTALCODE</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->POSTALCODE); ?></dd>

                    <dt class="col-sm-3">COUNTRY</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->COUNTRY); ?></dd>

                    <dt class="col-sm-3">TERRITORY</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->TERRITORY); ?></dd>

                    <dt class="col-sm-3">CONTACTLASTNAME</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->CONTACTLASTNAME); ?></dd>

                    <dt class="col-sm-3">CONTACTFIRSTNAME</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->CONTACTFIRSTNAME); ?></dd>

                    <dt class="col-sm-3">DEALSIZE</dt>
                    <dd class="col-sm-9"><?php echo e($salesData->DEALSIZE); ?></dd>
                </dl>
            <?php else: ?>
                <p>Data tidak ditemukan.</p>
            <?php endif; ?>

            <a href="<?php echo e(route('sales_data.index')); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\Users\Zakki\Documents\Unesa File\Semester 4\Pengujian Perangkat Lunak\predictive-sim\resources\views/sales_data/show.blade.php ENDPATH**/ ?>