<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-cart-plus"></i>&nbsp;Add Products</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-database"></i>&nbsp;Products Adding Form</h6>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?php echo base_url(); ?>Products/addproduct">
                                <div class="mb-2">
                                    <label for="productname" class="form-label">Product Name</label>
                                    <input name="name" type="text" class="form-control" id="productname"  required>
                                    
                                </div>
                                <div class="mb-2">
                                    <label for="description" class="form-label">Product Description</label>
                                    <input name="description" type="text" class="form-control" id="description" required>
                                </div>
                                <div class="row mb-2">
                                    <div class="col">
                                        <label for="price" class="form-label"><i class="fas fa-rupee-sign"></i>&nbsp;Price</label>
                                        <input name="price" type="number" class="form-control" id="price"  required>
                                        
                                    </div>
                                    <div class="col">
                                        <label for="quantity" class="form-label"><i class="fas fa-sort-amount-up"></i>&nbsp;Quantity Required</label>
                                        <input name="quantity" type="number" class="form-control" id="quantity" required>
                                       
                                    </div>
                                </div>
                               
                            <button name="submit" value="post" type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>