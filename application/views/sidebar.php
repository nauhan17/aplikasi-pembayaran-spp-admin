<div class="sidebar" data-color="orange" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Admin SPP by NAUFAL
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('siswa') ?>">
              <i class="material-icons">person</i>
              <p>Data Siswa</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('petugas') ?>">
              <i class="material-icons">content_paste</i>
              <p>Data Petugas</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('kelas') ?>">
              <i class="material-icons">library_books</i>
              <p>Data Kelas</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('transaksi') ?>">
              <i class="material-icons">bubble_chart</i>
              <p>Transaksi Pembayaran</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('spp') ?>">
              <i class="material-icons">location_ons</i>
              <p>Data SPP</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('petugas/logout') ?>">
              <i class="material-icons">notifications</i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>