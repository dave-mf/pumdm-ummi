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
            <h2 class="section-title">Tambah Data</h2>
            <p class="section-lead">Lengkapi data melalui form berikut ini.</p>

            <form method="POST" action="<?= base_url('Admin/tambahProduk'); ?>" enctype="multipart/form-data">

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
                      <input type="text" name="nama_usaha" class="form-control">
                      <small class="text-danger"><i><?= form_error('nama_usaha'); ?></i></small>
                    </div>
                    <div class="form-group">
                      <label>Nama Pemilik</label>
                      <input type="text" name="nama_pemilik" class="form-control">
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
                      <label>Foto Produk</label>
                      <input type="file" name="foto_produk" class="form-control" >
                      <small class="text-danger"><i><?= form_error('foto_produk'); ?></i></small>
                    </div>
                    <div class="form-group mb-0">
                        <label>Deskripsi Produk</label>
                        <textarea class="form-control" name="deskripsi"></textarea>
                        <small class="text-danger"><i><?= form_error('deskripsi') ?></i></small>
                    </div>
                    <div class="form-group mb-0">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat"></textarea>
                        <small class="text-danger"><i><?= form_error('alamat') ?></i></small>
                    </div>
                    <div class="form-group">
                      <label>Lama Usaha</label>
                      <input type="text" name="lama_usaha" class="form-control">
                      <small class="text-danger"><i><?= form_error('lama_usaha') ?></i></small>
                    </div>
                    <div class="form-group">
                      <label>Hubungan Dengan Pemohon</label>
                      <input type="text" name="hubungan_dgn_pemohon" class="form-control">
                      <small class="text-danger"><i><?= form_error('hubungan_dgn_pemohon') ?></i></small>
                    </div>
                    <div class="form-group">
                      <label>Nama Pemohon</label>
                      <input type="text" name="nama_pemohon" class="form-control">
                      <small class="text-danger"><i><?= form_error('nama_pemohon') ?></i></small>
                    </div>
                    <div class="form-group">
                      <label>Sosial Media (Opsional)</label>
                      <input type="text" name="sosial_media" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Tersedia Juga Di (Opsional)</label>
                      <input type="text" name="tersedia_juga_di" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Score</label>
                      <input type="number" name="score" class="form-control">
                      <small class="text-danger"><i><?= form_error('score') ?></i></small>
                    </div>
                    <div class="form-group">
                      <label>Kontak Order</label>
                      <input type="text" name="kontak_order" class="form-control">
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
                        <input type="text" class="form-control currency" name="harga">
                      </div>
                      <small class="text-danger"><i><?= form_error('harga') ?></i></small>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-10">
                        </div>
                        <div class="col-sm-12 col-md-2">
                            <button type="submit" class="btn btn-primary" value="Tambah Data"><i class="fas fa-plus"></i> Tambah Data</button>
                        </div>
                    </div>
          
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>