<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><i class="fa fa-shopping-cart"></i>&nbsp;Products Table</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <?php
                             if($this->session->flashdata('success') != ''){?>
                                <div class="alert alert-success" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                  <?php echo $this->session->flashdata('success');?>
                                </div>
                            <?php }?>
                            <?php if($this->session->flashdata('error') != ''){?>
                                <div class="alert alert-danger" role="alert"> <button type="button" class="close" data-dismiss="alert">x</button>
                                  <?php echo $this->session->flashdata('error');?>
                                </div>
                            <?php }?>
                            <a class='pull-right btn btn-success' href="<?php echo base_url('products/addproducts');?>">Add Products</a>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col"><i class="fas fa-rupee-sign"></i>&nbsp;Price</th>
                                            <th scope="col"><i class="fas fa-sort-amount-up"></i>&nbsp;Quantity</th>
                                            <th scope="col"><i class="fas fa-file-image"></i>&nbsp;Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col"><i class="fas fa-rupee-sign"></i>&nbsp;Price</th>
                                            <th scope="col"><i class="fas fa-sort-amount-up"></i>&nbsp;Quantity</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <?php 
                                        $i=1;
                                            foreach ($products_list as $product) {
                                        ?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $product->cat_name;?></td>
                                                <td><?php echo $product->name;?></td>
                                                <td><?php echo $product->description;?></td>
                                                <td><i class="fas fa-rupee-sign"></i>&nbsp;<?php echo $product->price;?></td>
                                                <td><?php echo $product->quantity;?></td>
                                                <td class="text-center"><img src="<?php echo base_url('uploads/products/'.$product->id.'.png');?>" height="60" width="60"/></td>
                                                <td class='text-center'><a class='text-info' href="<?php echo base_url('Products/editproduct?id='.$product->id);?>"><i class="fa fa-edit"></i></a>&nbsp; |
                                                    &nbsp; <a class='text-danger' href="<?php echo base_url('Products/deleteproducts?id='.$product->id);?>"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                        <?php $i++;}?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>