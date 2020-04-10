      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Data Product</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/admin')?>">Home</a></li>
            <li class="breadcrumb-item active">Product        </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                    <div class="row d-flex justify-content-center">
                      <div class="card card-primary">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                          <table class="table table-striped text-nowrap">
                            <font color="#ffffff">
                            <thead class="text-white">
                              <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>Option</th>
                              </tr>
                            </thead>
                            <tbody class="text-white">
                              <?php 
                                  $no = 1;
                                  foreach($products as $u){ 
                                  ?>
                              <tr>
                                <td><?php echo $no++ ?></td>
                                <td><img src="<?php echo base_url('gambar/product/'.$u->gambar) ?> "width="64"/></td>
                                <td><?php echo $u->nama_produk ?></td>
                                <td><?php echo $u->harga ?></td>
                                <td><?php echo $u->deskripsi ?></td>
                                <td><?php echo $u->kategori ?></td>
                                <td>
                                  <a href="<?php echo site_url('Admin/crud/edit/'.$u->id_produk) ?>"
                                 class="btn btn-sm btn-warning"></i> Edit</a>
                                <?php echo form_open_multipart('Admin/crud/hapus');?>
                                  <a href="<?php echo site_url('Admin/crud/hapus/'.$u->id_produk) ?>"
                                  class="btn btn-sm btn-danger"></i> Delete</a>
                                <?php echo form_close(); ?>
                                </td>
                              </tr>
                              <?php } ?>
                            </tbody>
                            </font>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                          <div class="card-footer">
                            <a href="<?php echo base_url('Admin/insert_product')?>"><button type="submit" class="btn btn-primary">Add Product</button></a>
                          </div>
                      <!-- /.card --><br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>