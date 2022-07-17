
<body>

  <div class="icon">
    <a style="font-size:2.5em;" href="<?= base_url('Home'); ?>"></a>
  </div>

  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?= base_url('assets/img/ummi_logo.png'); ?>" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>  
                <form method="POST" action="<?= base_url('Admin/login'); ?>" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Username</label>
                    <input id="email" type="text" value="<?= set_value('username'); ?>" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Masukkan username
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" value="<?= set_value('password'); ?>" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      Masukkan password
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Masuk
                    </button>
                  </div>
                  <div class="form-group">
                    <a href="<?= base_url('Home'); ?>" class="btn btn-secondary btn-lg btn-block" tabindex="4">
                      <i class="fas fa-arrow-left"></i> Kembali ke halman utama
                    </a>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
