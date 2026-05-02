<?php
if ( ! defined('email')) {
	define('email', 'syntrateknologi@gmail.com');
}
?>
<header>
  <div class="container header-content">
    <div class="logo-nav-wrapper">
      <a href="<?php echo base_url(); ?>" class="logo">
        <img src="<?php echo base_url('assets/syntra-logo-white.png'); ?>" alt="Logo Syntra Teknologi Indonesia" width="160" height="40" />
      </a>

      <div class="hamburger" id="hamburger">
        <span></span><span></span><span></span>
      </div>

      <nav class="navbar" id="navbar">
        <ul class="nav-menu">
          <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
          <li><a href="<?php echo base_url(); ?>#fitur">Fitur</a></li>
          <li><a href="<?php echo base_url(); ?>#produk">Produk</a></li>
          <li><a href="<?php echo base_url('blog'); ?>" aria-current="page">Blog</a></li>
          <li><a href="<?php echo base_url(); ?>#contact">Kontak</a></li>
          <li class="mobile-login"><a href="https://app.syntra-enterprise.com/" target="_blank" rel="noopener" class="btn-default mobile-login-btn">Login</a></li>
        </ul>
      </nav>

      <a href="https://app.syntra-enterprise.com/" target="_blank" rel="noopener" class="btn-default desktop-login">Login</a>
    </div>
  </div>
</header>
