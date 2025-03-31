<!DOCTYPE html>
<html>
<head>
    <title>Data Penjualan</title>
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
        .table th {
            background-color: #007bff;
            color: white;
        }
        .btn {
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h2 class="text-center text-primary">📊 Data Penjualan</h2>

            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p><?php echo e($message); ?></p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <div class="d-flex justify-content-between mb-3">
                <a href="<?php echo e(route('sales_data.create')); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>

            <table class="table table-hover table-bordered text-center">
                <thead>
                    <tr>
                        <th>Order Number</th>
                        <th>Order Date</th>
                        <th>Customer Name</th>
                        <th>Country</th>
                        <th>Sales</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $salesData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($data->ORDERNUMBER); ?></td>
                            <td><?php echo e(Carbon\Carbon::parse($data->ORDERDATE)->format('d-m-Y')); ?></td>
                            <td><?php echo e($data->CUSTOMERNAME); ?></td>
                            <td><?php echo e($data->COUNTRY); ?></td>
                            <td>Rp <?php echo e(number_format($data->SALES, 2, ',', '.')); ?></td>
                            <td>
                                <a href="<?php echo e(route('sales_data.show', ['id' => $data->ORDERNUMBER])); ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="<?php echo e(route('sales_data.edit', ['id' => $data->ORDERNUMBER])); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo e(route('sales_data.destroy', ['id' => $data->ORDERNUMBER])); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\Users\Zakki\Documents\Unesa File\Semester 4\Pengujian Perangkat Lunak\predictive-sim\resources\views/sales_data/index.blade.php ENDPATH**/ ?>