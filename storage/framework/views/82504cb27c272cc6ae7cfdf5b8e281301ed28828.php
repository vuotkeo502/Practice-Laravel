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

</head>

<body>
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">PRODUCT
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label>ID</label>
                                <input class="form-control" name="id" value="<?php echo e($product->id); ?>" readonly="">
                            </div>
                            
                            <div class="form-group">
                                <label>NAME</label>
                                <input class="form-control"  name="name" value="<?php echo e($product->name); ?>" >
                            </div>
                            <div class="form-group">
                                <label>PRICE</label>
                                <input class="form-control" name="price" value="<?php echo e($product->price); ?>" >
                            </div>
                            <div class="form-group">
                                <label>DESCRIPTION</label>
                                <input class="form-control"  name="description" value="<?php echo e($product->description); ?>">
                            </div>
                            
                            <button type="submit" class="btn btn-info">Sửa</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
</body>
</html><?php /**PATH C:\xampp2\htdocs\Product_Manager\resources\views/product/edit.blade.php ENDPATH**/ ?>