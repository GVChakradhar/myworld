<div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><i class='fas fa-edit'></i>&nbsp;Edit Category</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class='pull-right'>
                                <a class='pull-right btn btn-success' href="<?php echo base_url('categories');?>">Show Categories</a>
                            </div>
                            <!-- <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-database"></i>&nbsp;Catagories Editing Form</h6> -->
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?php echo base_url('Categories/updatecategories?id='.$category->id); ?>" enctype="multipart/form-data" >
                                <div class="mb-2">
                                    <label for="categoryname" class="form-label">Category Name</label>
                                    <input name="uname" type="text" class="form-control" id="categoryname" value="<?php echo $category->name ;?>"  required>
                                    
                                </div>
                                <div class="mb-2">
                                    <label for="description" class="form-label">Category Description</label>
                                    <input name="udescription" type="text" class="form-control" id="description" value="<?php echo $category->description;?>" required>
                                </div>
                                <div class="mb-3">
                                        <label for="image" class="form-label"><i class="fas fa-file-image"></i>Image</label>
                                        <input name="uimage" type="file" class="form-control" id="image" >
                                </div>
                            
                            <button name="usubmit" value="Update" type="submit" class="btn btn-primary">Update Data</button>
                            </form>
                        </div>
                    </div>

                </div>