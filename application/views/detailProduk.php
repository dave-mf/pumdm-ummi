<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="<?= base_url('Home'); ?>">Beranda</a></li>
      <li>Detail Produk</li>
    </ol>
    <h2>Detail Produk</h2>

  </div>
</section><!-- End Breadcrumbs -->

<?php foreach($produk as $data) : ?> 
<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img style="width: 100%;height:100%;object-fit:cover;" src="<?= base_url('assets/img/fotoProduk/' .$data->foto_produk); ?>" alt="">
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info hero">
          <h3>Informasi Produk</h3>
          <ul>
            <li><strong>Nama Usaha</strong>: <?= $data->nama_usaha; ?></li>
            <li><strong>Nama Pemilik</strong>: <?= $data->nama_pemilik; ?></li>
            <li><strong>Jenis Usaha</strong>: <?= $data->jenis_usaha; ?></li>
            <li><strong>Alamat</strong>: <?= $data->alamat; ?></li>
            <li><strong>Lama Usaha</strong>: <?= $data->lama_usaha; ?></li>
            <!-- <li><strong>Hubungan Dengan Pemohon</strong>: <?= $data->hubungan_dgn_pemohon; ?></li> -->
            <!-- <li><strong>Nama Pemohon</strong>: <?= $data->nama_pemohon; ?></li> -->
            <li><strong>Sosial Media</strong>: <?= $data->sosial_media; ?></li>
            <li><strong>Tersedia Juga Di</strong>: <?php if($data->tersedia_juga_di == null) {echo 'Tidak ada data!';} ?><?= $data->tersedia_juga_di; ?></li>
            <li><strong>Score</strong>: <?= $data->score; ?></li>
            <li><strong>Harga</strong>: <?= $data->harga; ?></li>
            <li>
              <section id="about" class="about">
                  <div class="text-center text-lg-center">
                      <a href="https://api.whatsapp.com/send?phone=+62<?= $data->kontak_order; ?>&amp;text=Saya%20ingin%20informasi%20lebih%20banyak%20mengenai%20produk%20<?= $data->nama_usaha; ?>%20ini." class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                        <span>Hubungi Penjual</span>
                        <i class="bi bi-arrow-right"></i>
                      </a>
                  </div>
              </section>
            </li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>Deskripsi Produk</h2>
          <p>
            <?= $data->deskripsi_produk; ?>
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->
<?php endforeach; ?> 

</main><!-- End #main -->