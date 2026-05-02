  <a href="#" onclick="sendEmail(); return false;" class="wa-float" aria-label="Email Syntra Teknologi">
    <svg class="wa-icon" viewBox="0 0 24 24" fill="none" stroke="#1A73E8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
      <path d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
    </svg>
    <span>Email Kami</span>
  </a>

  <style>
    .wa-float { position: fixed; bottom: 20px; right: 20px; background: #fff; border-radius: 30px; box-shadow: 0 4px 10px rgba(0,0,0,.1); padding: 8px 14px; display: flex; align-items: center; text-decoration: none; color: #333; font-weight: 500; z-index: 9999; transition: transform .3s ease, box-shadow .3s ease; }
    .wa-float:hover { transform: translateY(-3px); box-shadow: 0 6px 14px rgba(0,0,0,.2); }
    .wa-icon { width: 24px; height: 24px; margin-right: 8px; }
  </style>

  <script>
    function sendEmail() {
      const to = '<?php echo email; ?>';
      const subject = encodeURIComponent('Konsultasi Solusi Digital Syntra');
      const body = encodeURIComponent('Halo Tim Syntra Teknologi,\n\nSaya tertarik dengan layanan Syntra Teknologi.\n\nNama: \nNama Perusahaan: \nKebutuhan: \n\nTerima kasih.');
      window.location.href = `mailto:${to}?subject=${subject}&body=${body}`;
    }

    const hamburger = document.getElementById('hamburger');
    const navbar = document.getElementById('navbar');
    if (hamburger && navbar) {
      hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navbar.classList.toggle('active');
      });
      document.querySelectorAll('.nav-menu li a').forEach(link => {
        link.addEventListener('click', () => {
          hamburger.classList.remove('active');
          navbar.classList.remove('active');
        });
      });
    }
  </script>

  <footer role="contentinfo">
    <p>&copy; <?php echo date('Y'); ?> <span itemprop="name">Syntra Teknologi Indonesia</span>. Semua Hak Dilindungi.</p>
    <p><small>by Fade Digital Development</small></p>
  </footer>
</body>
</html>
