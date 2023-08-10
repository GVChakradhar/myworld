<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-cart-plus"></i>&nbsp;Add Category</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-database"></i>&nbsp;Catagories Adding Form</h6>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?php echo base_url(); ?>Categories/addcategory" enctype="multipart/form-data" >
                                <div class="mb-2">
                                    <label for="categoryname" class="form-label">Category Name</label>
                                    <input name="name" type="text" class="form-control" id="categoryname"  required>
                                   
                                </div>
                                <div class="mb-2">
                                    <label for="description" class="form-label">Category Description</label>
                                    <input name="description" type="text" class="form-control" id="description" required>
                                </div>
                                <div class="mb-3">
                                        <label for="image" class="form-label"><i class="fas fa-file-image"></i>&nbsp;Image</label>
                                        <input name="image" type="file" class="form-control" id="image" required>
                                </div>
                            
                            <button name="submit" value="post" type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>