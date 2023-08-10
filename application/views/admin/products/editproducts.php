<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><i class='fas fa-edit'></i>&nbsp;Edit Products</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-database"></i>&nbsp;Products Editing Form</h6> -->
                            <div class='pull-right'>
                                <a class='pull-right btn btn-success' href="<?php echo base_url('products');?>">Show Products</a>
                            </div>
                        </div>
                       
                        <div class="card-body">
                            <form method="post" action="<?php echo base_url('Products/updateproducts?id='.$product->id); ?>">
                                <div class="mb-2">
                                    <label for="productname" class="form-label">Product Name</label>
                                    <input name="uname" type="text" class="form-control" id="productname" value=<?php echo $product->name;?> aria-describedby="productname" required>
                                    <div id="productname" class="form-text">Always enter the proper Product Name</div>
                                </div>
                                <div class="mb-2">
                                    <label for="description" class="form-label">Product Description</label>
                                    <input name="udescription" type="text" class="form-control" id="description" value=<?php echo $product->description;?> required>
                                </div>
                                <div class="row mb-2">
                                    <div class="col">
                                        <label for="price" class="form-label">Price limit</label>
                                        <input name="uprice" type="number" class="form-control" id="price" value=<?php echo $product->price;?> aria-describedby="price" required>
                                        <div id="price" class="form-text">Enter the valid Price</div>
                                    </div>
                                    <div class="col">
                                        <label for="quantity" class="form-label">Quantity Required</label>
                                        <input name="uquantity" type="number" class="form-control" id="quantity" value=<?php echo $product->quantity;?> aria-describedby="quantity" required>
                                        <div id="quantity" class="form-text">Enter the valid quantity</div>
                                    </div>
                                </div>
                               
                            <button name="usubmit" value="Update" type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>

                </div>