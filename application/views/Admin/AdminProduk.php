<div class="main-content" style="min-height: 651px;">
        <section class="section">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>List Produk</h4>
                  <div class="card-header-action">
                    <a href="<?= base_url('Admin/tambahProduk'); ?>" class="btn btn-primary">Tambah Produk <i class="fas fa-plus"></i></a>
                  </div>
                </div>
                <div class="ml-3 mr-3">
                  <?= $this->session->flashdata('pesan'); ?> 
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <th>#</th>
                          <th>Nama Usaha</th>
                          <th>Nama Pemilik</th>
                          <th>Jenis Usaha</th>
                          <th>Alamat</th>
                          <th>Lama Usaha</th>
                          <th>Hubungan Dengan Pemohon</th>
                          <th>Nama Pemohon</th>
                          <th>Sosial Media</th>
                          <th>Tersedia Juga Di</th>
                          <th>Score</th>
                          <th>Harga</th>
                          <th>Aksi</th>
                        </tr>
                      <?php $no = 1; foreach($produk as $data) : ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data->nama_usaha; ?></td>
                        <td><?= $data->nama_pemilik; ?></td>
                        <td><?= $data->jenis_usaha; ?></td>
                        <td><p style="width:100%;height:45px;overflow:hidden;text-overflow:ellipsis;"><?= $data->alamat; ?></</p>td>
                        <td><?= $data->lama_usaha; ?></td>
                        <td><?= $data->hubungan_dgn_pemohon; ?></td>
                        <td><?= $data->nama_pemohon; ?></td>
                        <td><?= $data->sosial_media; ?></td>
                        <td><?= $data->tersedia_juga_di; ?></td>
                        <td><div class="badge badge-primary"><?= $data->score; ?></div></td>
                        <td class="font-weight-600"><?= $data->harga; ?></td>
                        <td>
                          <a href="<?= base_url('Admin/editProduk/'. $data->id); ?>" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                        </td>
                        <td>
                          <form action="<?= base_url('Admin/hapusProduk' .$data->id) ?>" method="POST">
                            <input type="hidden" name="foto_produk_lama" value="<?= $data->foto_produk; ?>">
                            <a type="submit" href="<?= base_url('Admin/hapusProduk/'. $data->id); ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                          </form>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody></table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>