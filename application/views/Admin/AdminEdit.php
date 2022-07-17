<div class="main-content" style="min-height: 651px;">
        <section class="section">
          <div class="section-header">
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Forms</a></div>
              <div class="breadcrumb-item">Advanced Forms</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Edit Data</h2>
            <p class="section-lead">Lengkapi data melalui form berikut ini.</p>

            <?php foreach($produk as $data) : ?>
            <form method="POST" action="<?= base_url('Admin/postEditProduk/' .$data->id) ?>" enctype="multipart/form-data">

            <div class="row">
              <div class="col-12 col-md-10 col-lg-10">
                <div class="card">
                  <div class="card-header">
                    <h4>Masukkan Data</h4>
                  </div>
                  <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>  
                    <div class="form-group">
                      <label>Nama Usaha</label>
                      <input type="text" value="<?= $data->nama_usaha; ?>" name="nama_usaha" class="form-control" >
                      <small class="text-danger"><i><?= form_error('nama_usaha'); ?></i></small>
                    </div>
                    <div class="form-group">
                      <label>Nama Pemilik</label>
                      <input type="text" value="<?= $data->nama_pemilik; ?>" name="nama_pemilik" class="form-control">
                      <small class="text-danger"><i><?= form_error('nama_pemilik'); ?></i></small>
                    </div>
                    <div class="form-group">
                      <label>Jenis Usaha</label>
                      <select name="jenis_usaha" class="form-control">
                        <option>--Pilih--</option>
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                        <option value="Bahan Pangan">Bahan Pangan</option>
                        <option value="Produk Herbal">Produk Herbal</option>
                        <option value="Fashion">Fashion</option>
                        <option value="Produk Kesehatan & Kecantikan">Produk Kesehatan & Kecantikan</option>
                        <option value="Fashion">Fashion</option>
                        <option value="Kerajinan Tangan">Kerajinan Tangan</option>
                      </select>
                      <small class="text-danger"><i><?= form_error('jenis_usaha'); ?></i></small>
                    </div>
                    <div class="form-group">
                      <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-12">
                          <div class="card">
                            <div class="card-body">
                              <img src="<?= base_url('assets/img/fotoProduk/'.$data->foto_produk); ?>" style="width:30vh;" alt="">
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-12">
                          <label>Foto Produk</label> 
                          <input type="file" name="foto_produk" class="form-control" ><small>(Biarkan kosong jika tidak ingin diubah)</small>
                          <input type="hidden" value="<?= $data->foto_produk; ?>" name="foto_produk_lama" class="form-control">
                          <small class="text-danger"><i><?= form_error('foto_produk'); ?></i></small>
                        </div>
                      </div>
                    </div>
                    <div class="form-group mb-0">
                        <label>Deskripsi Produk</label>
                        <textarea class="form-control" name="deskripsi"><?= $data->deskripsi_produk; ?></textarea>
                        <small class="text-danger"><i><?= form_error('deskripsi') ?></i></small>
                    </div>
                    <div class="form-group mb-0">
                        <label>Alamat</label>
                        <textarea class="form-control"" name="alamat"><?= $data->alamat; ?></textarea>
                        <small class="text-danger"><i><?= form_error('alamat') ?></i></small>
                    </div>
                    <div class="form-group">
                      <label>Lama Usaha</label>
                      <input type="text" value="<?= $data->lama_usaha; ?>" name="lama_usaha" class="form-control">
                      <small class="text-danger"><i><?= form_error('lama_usaha') ?></i></small>
                    </div>
                    <div class="form-group">
                      <label>Hubungan Dengan Pemohon</label>
                      <input type="text" value="<?= $data->hubungan_dgn_pemohon; ?>" name="hubungan_dgn_pemohon" class="form-control">
                      <small class="text-danger"><i><?= form_error('hubungan_dgn_pemohon') ?></i></small>
                    </div>
                    <div class="form-group">
                      <label>Nama Pemohon</label>
                      <input type="text" value="<?= $data->nama_pemohon; ?>" name="nama_pemohon" class="form-control">
                      <small class="text-danger"><i><?= form_error('nama_pemohon') ?></i></small>
                    </div>
                    <div class="form-group">
                      <label>Sosial Media (Opsional)</label>
                      <input type="text" value="<?= $data->sosial_media; ?>" name="sosial_media" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Tersedia Juga Di (Opsional)</label>
                      <input type="text" value="<?= $data->tersedia_juga_di; ?>" name="tersedia_juga_di" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Score</label>
                      <input type="number" value="<?= $data->score; ?>" name="score" class="form-control">
                      <small class="text-danger"><i><?= form_error('score') ?></i></small>
                    </div>
                    <div class="form-group">
                      <label>Kontak Order</label>
                      <input type="number" value="<?= $data->kontak_order; ?>" name="kontak_order" class="form-control">
                      <small class="text-danger"><i><?= form_error('kontak_order') ?></i></small>
                    </div>
                    <div class="form-group">
                      <label>Harga</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            $
                          </div>
                        </div>
                        <input type="text" value="<?= $data->harga; ?>" name="harga" class="form-control currency">
                      </div>
                      <small class="text-danger"><i><?= form_error('harga') ?></i></small>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-10">
                        </div>
                        <div class="col-sm-12 col-md-2">
                            <button type="submit" class="btn btn-warning" value="Tambah Data"><i class="fas fa-pen"> </i> Ubah Data</button>
                        </div>
                    </div>
            <?php endforeach; ?>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>