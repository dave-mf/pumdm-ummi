<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">administrator</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">ad</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="<?php if($this->uri->segment(2) == "") {echo 'active';} ?>"><a class="nav-link active" href="<?= base_url('Admin') ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
              <li class="menu-header">Kelola</li>
              <li class="<?php if($this->uri->segment(2) == "produk") {echo 'active';} ?>"><a class="nav-link" href="<?= base_url('Admin/produk'); ?>"><i class="far fa-file-alt"></i> <span>Produk</span></a></li>
            </ul>
        </aside>
      </div>