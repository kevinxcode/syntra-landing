<!DOCTYPE html>
<html lang="id" prefix="og: https://ogp.me/ns#">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Blog Syntra Teknologi | Panduan, Tren & Wawasan Software Bisnis Indonesia</title>
  <meta name="description" content="Wawasan, panduan, dan tren terbaru seputar software bisnis, ERP, POS, dan transformasi digital untuk UMKM dan enterprise di Indonesia." />
  <meta name="keywords" content="blog software bisnis, tren UMKM 2026, panduan ERP, transformasi digital Indonesia, software POS UMKM" />
  <meta name="author" content="Syntra Teknologi Indonesia" />
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1" />
  <meta name="googlebot" content="index, follow" />
  <meta name="GPTBot" content="index, follow" />
  <meta name="Google-Extended" content="index, follow" />
  <meta name="ClaudeBot" content="index, follow" />
  <meta name="PerplexityBot" content="index, follow" />
  <meta name="CCBot" content="index, follow" />
  <meta name="theme-color" content="#1A73E8" />

  <link rel="canonical" href="https://syntra-enterprise.com/blog" />
  <link rel="alternate" hreflang="id" href="https://syntra-enterprise.com/blog" />
  <link rel="alternate" hreflang="x-default" href="https://syntra-enterprise.com/blog" />
  <link rel="alternate" type="application/rss+xml" title="Blog Syntra Teknologi" href="https://syntra-enterprise.com/blog/feed" />

  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/favicon.png'); ?>">

  <meta property="og:type" content="website" />
  <meta property="og:title" content="Blog Syntra Teknologi | Panduan & Tren Software Bisnis Indonesia" />
  <meta property="og:description" content="Wawasan, panduan, dan tren terbaru seputar software bisnis untuk UMKM dan enterprise di Indonesia." />
  <meta property="og:url" content="https://syntra-enterprise.com/blog" />
  <meta property="og:image" content="https://syntra-enterprise.com/assets/og-image.jpg" />
  <meta property="og:locale" content="id_ID" />
  <meta property="og:site_name" content="Syntra Teknologi Indonesia" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@syntrateknologi" />

  <!-- Blog ItemList Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Blog",
    "name": "Blog Syntra Teknologi Indonesia",
    "url": "https://syntra-enterprise.com/blog",
    "description": "Wawasan, panduan, dan tren software bisnis untuk UMKM dan enterprise di Indonesia.",
    "publisher": {
      "@type": "Organization",
      "name": "Syntra Teknologi Indonesia",
      "logo": { "@type": "ImageObject", "url": "https://syntra-enterprise.com/assets/syntra-logo.png" }
    },
    "blogPost": [
      <?php $items = []; foreach ($posts as $slug => $p) {
        $items[] = '{"@type":"BlogPosting","headline":' . json_encode($p['title']) . ',"url":"https://syntra-enterprise.com/blog/' . $slug . '","datePublished":"' . $p['published'] . '","dateModified":"' . $p['modified'] . '","author":{"@type":"Organization","name":"Syntra Teknologi Indonesia"}}';
      } echo implode(',', $items); ?>
    ]
  }
  </script>

  <!-- Breadcrumb -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Beranda", "item": "https://syntra-enterprise.com/" },
      { "@type": "ListItem", "position": 2, "name": "Blog", "item": "https://syntra-enterprise.com/blog" }
    ]
  }
  </script>

  <link href="<?php echo base_url('assets/style.css'); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets/header.css'); ?>" rel="stylesheet" type="text/css" />

  <style>
    .blog-hero { background: linear-gradient(135deg, #0d47a1 0%, #1A73E8 100%); color: #fff; padding: 5rem 1rem 4rem; text-align: center; }
    .blog-hero h1 { font-size: clamp(1.8rem, 4vw, 2.8rem); margin: 0 0 .8rem; }
    .blog-hero p { font-size: 1.1rem; opacity: .92; max-width: 700px; margin: 0 auto; }
    .blog-list { max-width: 1100px; margin: -2rem auto 4rem; padding: 0 1rem; display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 1.5rem; }
    .blog-card { background: #fff; border-radius: 12px; box-shadow: 0 4px 16px rgba(0,0,0,.06); overflow: hidden; transition: transform .25s, box-shadow .25s; display: flex; flex-direction: column; }
    .blog-card:hover { transform: translateY(-4px); box-shadow: 0 12px 28px rgba(0,0,0,.1); }
    .blog-card-img { aspect-ratio: 16 / 9; background: linear-gradient(135deg, #1A73E8, #0d47a1); display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 700; font-size: 1.4rem; padding: 1rem; text-align: center; }
    .blog-card-body { padding: 1.4rem 1.4rem 1.6rem; flex: 1; display: flex; flex-direction: column; }
    .blog-card-meta { font-size: .85rem; color: #64748b; margin-bottom: .6rem; display: flex; gap: 12px; flex-wrap: wrap; }
    .blog-card-meta .cat { background: #e8f0fe; color: #1A73E8; padding: 2px 10px; border-radius: 20px; font-weight: 600; }
    .blog-card h2 { font-size: 1.2rem; margin: 0 0 .6rem; line-height: 1.4; color: #1a202c; }
    .blog-card h2 a { color: inherit; text-decoration: none; }
    .blog-card h2 a:hover { color: #1A73E8; }
    .blog-card p { color: #475569; font-size: .95rem; line-height: 1.6; margin: 0 0 1rem; flex: 1; }
    .blog-card .read-more { color: #1A73E8; font-weight: 600; text-decoration: none; font-size: .9rem; }
    .blog-card .read-more:hover { text-decoration: underline; }
  </style>
</head>
<body>

<?php $this->load->view('blog/_header'); ?>

<main>
  <section class="blog-hero" aria-labelledby="blog-title">
    <h1 id="blog-title">Blog Syntra Teknologi</h1>
    <p>Wawasan, panduan, dan tren terbaru seputar software bisnis, ERP, POS, dan transformasi digital untuk UMKM dan enterprise di Indonesia.</p>
  </section>

  <section class="blog-list" aria-label="Daftar Artikel">
    <?php foreach ($posts as $slug => $p): ?>
      <article class="blog-card" itemscope itemtype="https://schema.org/BlogPosting">
        <meta itemprop="datePublished" content="<?php echo $p['published']; ?>">
        <meta itemprop="dateModified" content="<?php echo $p['modified']; ?>">
        <div class="blog-card-img" aria-hidden="true"><?php echo htmlspecialchars($p['category']); ?></div>
        <div class="blog-card-body">
          <div class="blog-card-meta">
            <span class="cat"><?php echo htmlspecialchars($p['category']); ?></span>
            <time datetime="<?php echo $p['published']; ?>"><?php echo date('d M Y', strtotime($p['published'])); ?></time>
            <span><?php echo (int)$p['reading_time']; ?> menit baca</span>
          </div>
          <h2 itemprop="headline"><a href="<?php echo base_url('blog/' . $slug); ?>" itemprop="url"><?php echo htmlspecialchars($p['title']); ?></a></h2>
          <p itemprop="description"><?php echo htmlspecialchars($p['description']); ?></p>
          <a class="read-more" href="<?php echo base_url('blog/' . $slug); ?>">Baca selengkapnya →</a>
        </div>
      </article>
    <?php endforeach; ?>
  </section>
</main>

<?php $this->load->view('blog/_footer'); ?>
