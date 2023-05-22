<?php
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header('location: login.php');
}


// $product_id = $_POST('product_id');
// $product_name = $_POST('product_name');
// $product_brand = $_POST('product_brand');
// $product_category = $_POST('product_category');
// $product_description = $_POST('product_description');
// $product_criteria = $_POST('product_criteria');
// $product_image1 = $_POST('product_image1');
// $product_image2 = $_POST('product_image2');
// $product_image3 = $_POST('product_image3');
// $product_image4 = $_POST('product_image4');
// $product_price = $_POST('product_price');
// $product_offer = $_POST('product_offer');
// $product_color = $_POST('product_color');
?>

<?php include('layouts/header.php'); ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Products</h1>
        <nav class="mt-4 rounded" aria-label="breadcrumb">
            <ol class="breadcrumb px-3 py-2 rounded mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="products.php">Products</a></li>
                <li class="breadcrumb-item active">Create Product</li>
            </ol>
        </nav>


        <form>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-left">Product ID</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 400px;">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-left">Product Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 400px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-left">Product Brand </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 400px;">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-left">Product Category</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 400px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-left">Product Description </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="width: 400px;"></textarea>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-left">Product Criteria</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Favorite
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Tidak Favorite
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-left">Product Image 1</label>
                        <input class="form-control" type="file" id="formFile" style="height: 45px; width: 400px;">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-left">Product Image 2</label>
                        <input class="form-control" type="file" id="formFile" style="height: 45px; width: 400px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-left">Product Image 3</label>
                        <input class="form-control" type="file" id="formFile" style="height: 45px; width: 400px;">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-left">Product Image 4</label>
                        <input class="form-control" type="file" id="formFile" style="height: 45px; width: 400px;">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-left">Product Price</label>
                        <div class="input-group mb-3" style="width: 400px;">
                            <span class="input-group-text">Rp.</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-left">Special Offer</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 400px;">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-left">Product Color</label>
                        <br>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="width: 400px; height: 40px;">
                            <option selected>Pilih Warna </option>
                            <option value="1">Merah</option>
                            <option value="2">Biru</option>
                            <option value="3">Putih</option>
                        </select>
                    </div>
                </div>


            </div>
        </form>
    </div>


</body>

</html>

<?php include('layouts/footer.php'); ?>