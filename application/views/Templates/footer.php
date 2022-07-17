  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>Ummi Promo</span>
            </a>
            <p>Dengan platform digital untuk membuat bisnismu lebih berkembang.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Beranda</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('Home'); ?>">Beranda</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('Home/semua_produk'); ?>">Produk</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Jasa</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('Home'); ?>">Kontak</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('Admin/halaman_login'); ?>">Masuk</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Kontak kami</h4>
            <p>
            Program Studi Administrasi Bisnis, Fakultas Ilmu Administrasi dan Humaniora, Universitas Muhammadiyah Sukabumi <br>(
            Jl. R. Syamsudin, S.H. No. 50, Cikole, Kec. Cikole,
            Kota Sukabumi, Jawa Barat 43113)<br>
              <strong>Phone:</strong> (0266) 218345<br>
              <strong>Email:</strong> info@ummi.ac.id<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>WebPromo</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/purecounter/purecounter.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/aos/aos.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery-3.6.0.min.js'); ?>"></script>

  <!-- Custom Query -->
  <script>
    $(document).ready(function() {
      $('#jenis_produk').change(function(){
        let a = $(this).val();
        console.log(a);
      });
    });
  </script>

</body>

</html>