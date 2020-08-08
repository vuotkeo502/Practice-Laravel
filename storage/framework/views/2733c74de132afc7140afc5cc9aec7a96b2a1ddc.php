<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type="text/css">
        h3{
            color: red;
            margin-top: 10px;
            text-align: center;
        }
    </style>

</head>

<body>
    <h3>PRODUCT</h3>
    <div class="container">
        <div style="margin-bottom: 10px">
            <button class="bg-success"><a href="add" style="color: black;">Add</a></button>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($pro->id); ?></td>
                    <td><?php echo e($pro->name); ?></td>
                    <td><?php echo e($pro->price); ?></td>
                    <td><?php echo e($pro->description); ?></td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="delete/<?php echo e($pro['id']); ?>"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="edit/<?php echo e($pro['id']); ?>">Edit</a></td> 
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html><?php /**PATH C:\xampp2\htdocs\Product_Manager\resources\views/product/list.blade.php ENDPATH**/ ?>