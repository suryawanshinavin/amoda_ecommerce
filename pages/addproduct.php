<?php include '../include/header.php' ?>

<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->

    <?php include '../include/sidebar.php' ?>

    <!-- partial -->

    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->

        <?php include '../include/navbar.php' ?>

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-8 col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">ADD PRODUSTS</h4>
                                <form class="forms-sample" action="../controllers/product_controller.php" method="post">
                                    <div class="form-group">
                                        <label for="product_name">Product Name</label>
                                        <input type="text" name="product_name" class="form-control" id="product_name"
                                            placeholder="Enter Product Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="product_description">Product Description</label>
                                        <textarea class="form-control" name="product_description"
                                            id="product_description" placeholder="Enter Product Description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" step="0.01" name="price" class="form-control" id="price"
                                            placeholder="Enter Product Price">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id">Category</label>
                                        <select class="form-select" name="category_id" id="category_id">
                                            <option>Select Categories</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="stock_quantity">Stock Quantity</label>
                                        <input class="form-control" type="number" name="stock_quantity"
                                            id="stock_quantity" placeholder="Enter Quantity">
                                    </div>
                                    <div class="form-group">
                                        <label>Product Image</label>
                                        <!-- <input type="file" name="img[]" class="form-control file-upload-default" > -->
                                        <div class="input-group col-xs-12 d-flex align-items-center">
                                            <input type="file" name="product_image[]"
                                                class="col-lg-10 form-control text-dark bg-secondry"
                                                placeholder="Upload Image">
                                            <span class="input-group-append btn ms-2">
                                                <button class="file-upload-browse btn btn-primary px-5"
                                                    type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-select" name="status" id="status">
                                            <option selected aria-readonly="true">Select Status</option>
                                            <option value="active">Active</option>
                                            <option value="inctive">Inactive</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <button class="btn btn-dark">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 grid-margin ">
                        <div class="card">
                            <div class="card-body pb-0">
                                <h4 class="card-title">ADD Categories</h4>
                                <form action="">
                                    <div class="form-group mt-5">
                                        <label for="category_name ">Category Name</label>
                                        <div class="d-flex ">
                                            <input type="text" class="form-control " name="category_name"
                                                id="category_name" placeholder="Enter Category Name">
                                            <button type="submit" class="btn btn-primary ms-2 px-4" value=""
                                                name="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body ">
                                <div class="table-responsive">
                                    <table class="table " style="font-size: 10px;">
                                        <thead>
                                            <tr>
                                                <th scope="col">Sr no.</th>
                                                <th scope="col">Category Name</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row" class="p-3">1</td>
                                                <td class="p-3">abc</td>
                                                <td class="p-3">
                                                    <a href="" class="btn btn-primary py-1 px-1 me-2">
                                                        <i class="mdi mdi-file-edit"></i>
                                                    </a>
                                                    <button class="btn btn-danger py-1 px-1 me-0">
                                                        <i class="mdi mdi-delete"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../include/footer.php' ?>