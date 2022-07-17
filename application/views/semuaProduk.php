<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio" style="margin-top:13vh;">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>Produk</h2>
    <p>Cek produk terbaru dari kami</p>
  </header>

  
  <div class="row" data-aos="fade-up" data-aos-delay="100">
    <div class="col-lg-12 d-flex justify-content-center">
      <ul id="portfolio-flters">
        <!-- <li data-filter="*" class="filter-active">Semua Produk</li> -->
      </ul>
    </div>
    <div class="col-lg-12 d-flex justify-content-center">
      <ul id="portfolio-flters">
        <form action="<?= base_url('Home/filter_produk'); ?>" method="POST"> 
            <header class="section-header">
              <h2>PIlih Kategori Produk</h2>
            </header>

            <select name="jenis_usaha" id="jenis_usaha" class="form-control">
              <option value="">Semua</option>
              <option value="Makanan">Makanan</option>
              <option value="Minuman">Minuman</option>
              <option value="Bahan Pangan">Bahan Pangan</option>
              <option value="Produk Herbal">Produk Herbal</option>
              <option value="Fashion">Fashion</option>
              <option value="Produk Kesehatan & Kecantikan">Produk Kesehatan & Kecantikan</option>
              <option value="Fashion">Fashion</option>
              <option value="Kerajinan Tangan">Kerajinan Tangan</option>
            </select>

            <button type="submit" class="btn btn-primary mt-2">Konfirmasi <i class="bi bi-arrow-right"></i></button>

        </form>

      </ul>
    </div>
  </div>
  
  
  <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
    
  <?php foreach($semua_produk as $data) : ?>
    
    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img style="width:450px;height:252px;object-fit:cover;" src="<?= base_url('assets/img/fotoProduk/'.$data->foto_produk); ?>" class="img-fluid" alt="" height="252px">
        <div class="portfolio-info">
          <h4><?= $data->nama_usaha; ?></h4>
          <p><?= $data->nama_pemilik ?></p>
          <div class="portfolio-links">
            <a href="<?php echo base_url('Home/detail_produk/' .$data->id); ?>" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>
  
  <?php endforeach; ?>

  </div>

</div>

</section><!-- End Portfolio Section -->