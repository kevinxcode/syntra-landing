<?php
$canonical = 'https://syntra-enterprise.com/blog/' . $post['slug'];
$image_abs = 'https://syntra-enterprise.com/' . $post['image'];
$content_file = APPPATH . 'views/blog/content/' . $post['slug'] . '.php';
?>
<!DOCTYPE html>
<html lang="id" prefix="og: https://ogp.me/ns# article: https://ogp.me/ns/article#">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?php echo htmlspecialchars($post['title']); ?> | Blog Syntra Teknologi</title>
  <meta name="description" content="<?php echo htmlspecialchars($post['description']); ?>" />
  <meta name="keywords" content="<?php echo htmlspecialchars($post['keywords']); ?>" />
  <meta name="author" content="Syntra Teknologi Indonesia" />
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1" />
  <meta name="googlebot" content="index, follow" />
  <meta name="GPTBot" content="index, follow" />
  <meta name="Google-Extended" content="index, follow" />
  <meta name="ClaudeBot" content="index, follow" />
  <meta name="PerplexityBot" content="index, follow" />
  <meta name="CCBot" content="index, follow" />
  <meta name="anthropic-ai" content="index, follow" />
  <meta name="theme-color" content="#1A73E8" />

  <link rel="canonical" href="<?php echo $canonical; ?>" />
  <link rel="alternate" hreflang="id" href="<?php echo $canonical; ?>" />
  <link rel="alternate" hreflang="x-default" href="<?php echo $canonical; ?>" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/favicon.png'); ?>">

  <meta property="og:type" content="article" />
  <meta property="og:title" content="<?php echo htmlspecialchars($post['title']); ?>" />
  <meta property="og:description" content="<?php echo htmlspecialchars($post['description']); ?>" />
  <meta property="og:url" content="<?php echo $canonical; ?>" />
  <meta property="og:image" content="<?php echo $image_abs; ?>" />
  <meta property="og:locale" content="id_ID" />
  <meta property="og:site_name" content="Syntra Teknologi Indonesia" />
  <meta property="article:published_time" content="<?php echo $post['published']; ?>T08:00:00+07:00" />
  <meta property="article:modified_time" content="<?php echo $post['modified']; ?>T08:00:00+07:00" />
  <meta property="article:author" content="Syntra Teknologi Indonesia" />
  <meta property="article:section" content="<?php echo htmlspecialchars($post['category']); ?>" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@syntrateknologi" />
  <meta name="twitter:title" content="<?php echo htmlspecialchars($post['title']); ?>" />
  <meta name="twitter:description" content="<?php echo htmlspecialchars($post['description']); ?>" />
  <meta name="twitter:image" content="<?php echo $image_abs; ?>" />

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "mainEntityOfPage": { "@type": "WebPage", "@id": "<?php echo $canonical; ?>" },
    "headline": <?php echo json_encode($post['title']); ?>,
    "description": <?php echo json_encode($post['description']); ?>,
    "image": ["<?php echo $image_abs; ?>"],
    "datePublished": "<?php echo $post['published']; ?>T08:00:00+07:00",
    "dateModified": "<?php echo $post['modified']; ?>T08:00:00+07:00",
    "author": {
      "@type": "Organization",
      "name": "Syntra Teknologi Indonesia",
      "url": "https://syntra-enterprise.com"
    },
    "publisher": {
      "@type": "Organization",
      "name": "Syntra Teknologi Indonesia",
      "logo": { "@type": "ImageObject", "url": "https://syntra-enterprise.com/assets/syntra-logo.png" }
    },
    "articleSection": <?php echo json_encode($post['category']); ?>,
    "keywords": <?php echo json_encode($post['keywords']); ?>,
    "inLanguage": "id-ID",
    "timeRequired": "PT<?php echo (int)$post['reading_time']; ?>M"
  }
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Beranda", "item": "https://syntra-enterprise.com/" },
      { "@type": "ListItem", "position": 2, "name": "Blog", "item": "https://syntra-enterprise.com/blog" },
      { "@type": "ListItem", "position": 3, "name": <?php echo json_encode($post['title']); ?>, "item": "<?php echo $canonical; ?>" }
    ]
  }
  </script>

  <link href="<?php echo base_url('assets/style.css'); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets/header.css'); ?>" rel="stylesheet" type="text/css" />

  <style>
    .article-hero { background: linear-gradient(135deg, #0d47a1 0%, #1A73E8 100%); color: #fff; padding: 4rem 1rem 5rem; }
    .article-hero-inner { max-width: 820px; margin: 0 auto; }
    .article-breadcrumb { font-size: .9rem; opacity: .85; margin-bottom: 1rem; }
    .article-breadcrumb a { color: #fff; text-decoration: none; opacity: .85; }
    .article-breadcrumb a:hover { text-decoration: underline; }
    .article-cat { display: inline-block; background: rgba(255,255,255,.18); padding: 4px 14px; border-radius: 20px; font-size: .85rem; font-weight: 600; margin-bottom: 1rem; }
    .article-hero h1 { font-size: clamp(1.8rem, 4vw, 2.6rem); line-height: 1.25; margin: 0 0 1rem; }
    .article-meta { font-size: .9rem; opacity: .9; display: flex; gap: 18px; flex-wrap: wrap; }
    .article-body { max-width: 760px; margin: -3rem auto 4rem; background: #fff; padding: 3rem clamp(1.2rem, 4vw, 3rem); border-radius: 14px; box-shadow: 0 8px 30px rgba(0,0,0,.08); line-height: 1.8; color: #1f2937; font-size: 1.05rem; }
    .article-body p { margin: 0 0 1.2rem; }
    .article-body h2 { font-size: 1.55rem; color: #0d47a1; margin: 2.4rem 0 1rem; line-height: 1.35; scroll-margin-top: 80px; }
    .article-body h3 { font-size: 1.2rem; color: #1A73E8; margin: 1.8rem 0 .8rem; }
    .article-body ul, .article-body ol { padding-left: 1.4rem; margin: 0 0 1.2rem; }
    .article-body li { margin-bottom: .5rem; }
    .article-body strong { color: #0d47a1; }
    .article-body blockquote { border-left: 4px solid #1A73E8; background: #f1f7ff; padding: 1rem 1.4rem; margin: 1.5rem 0; font-style: italic; color: #334155; border-radius: 4px; }
    .article-body table { width: 100%; border-collapse: collapse; margin: 1.5rem 0; font-size: .95rem; }
    .article-body table th, .article-body table td { padding: 10px 14px; border: 1px solid #e2e8f0; text-align: left; }
    .article-body table th { background: #f1f7ff; color: #0d47a1; font-weight: 600; }
    .article-body .lede { font-size: 1.15rem; color: #475569; }
    .article-toc { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 1.2rem 1.4rem; margin-bottom: 2rem; }
    .article-toc strong { display: block; margin-bottom: .5rem; color: #0d47a1; }
    .article-toc ol { margin: 0; padding-left: 1.2rem; }
    .article-toc a { color: #1A73E8; text-decoration: none; }
    .article-toc a:hover { text-decoration: underline; }
    .article-cta { background: linear-gradient(135deg, #e8f0fe, #f8fafc); border: 1px solid #d2e3fc; border-radius: 12px; padding: 1.8rem; margin: 2.5rem 0; text-align: center; }
    .article-cta h3 { color: #0d47a1; margin: 0 0 .6rem; }
    .article-cta p { margin: 0 0 1rem; color: #475569; }
    .article-cta a { display: inline-block; background: #1A73E8; color: #fff; padding: 12px 28px; border-radius: 6px; text-decoration: none; font-weight: 600; transition: background .2s; }
    .article-cta a:hover { background: #1557b0; }
    .article-tags { display: flex; gap: 8px; flex-wrap: wrap; margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid #e2e8f0; }
    .article-tags span { background: #f1f5f9; color: #475569; font-size: .85rem; padding: 4px 12px; border-radius: 20px; }
    .article-share { margin-top: 1.5rem; display: flex; gap: 10px; align-items: center; flex-wrap: wrap; }
    .article-share span { font-weight: 600; color: #475569; font-size: .9rem; }
    .article-share a { background: #1A73E8; color: #fff; padding: 6px 14px; border-radius: 5px; text-decoration: none; font-size: .85rem; }
    .related-posts { max-width: 1100px; margin: 0 auto 4rem; padding: 0 1rem; }
    .related-posts h2 { color: #0d47a1; margin-bottom: 1.2rem; font-size: 1.4rem; }
    .related-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 1rem; }
    .related-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 1.2rem; transition: box-shadow .2s, transform .2s; }
    .related-card:hover { box-shadow: 0 8px 20px rgba(0,0,0,.08); transform: translateY(-2px); }
    .related-card .cat { font-size: .75rem; color: #1A73E8; font-weight: 600; text-transform: uppercase; }
    .related-card h3 { font-size: 1rem; margin: .4rem 0 .6rem; line-height: 1.4; }
    .related-card h3 a { color: #1a202c; text-decoration: none; }
    .related-card h3 a:hover { color: #1A73E8; }
    .related-card p { font-size: .85rem; color: #64748b; margin: 0; }
  </style>
</head>
<body itemscope itemtype="https://schema.org/BlogPosting">
<meta itemprop="datePublished" content="<?php echo $post['published']; ?>">
<meta itemprop="dateModified" content="<?php echo $post['modified']; ?>">

<?php $this->load->view('blog/_header'); ?>

<main>
  <section class="article-hero">
    <div class="article-hero-inner">
      <nav class="article-breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo base_url(); ?>">Beranda</a> &rsaquo;
        <a href="<?php echo base_url('blog'); ?>">Blog</a> &rsaquo;
        <span><?php echo htmlspecialchars($post['category']); ?></span>
      </nav>
      <span class="article-cat"><?php echo htmlspecialchars($post['category']); ?></span>
      <h1 itemprop="headline"><?php echo htmlspecialchars($post['title']); ?></h1>
      <div class="article-meta">
        <span itemprop="author" itemscope itemtype="https://schema.org/Organization">
          <span itemprop="name">Tim Syntra Teknologi</span>
        </span>
        <time datetime="<?php echo $post['published']; ?>"><?php echo date('d F Y', strtotime($post['published'])); ?></time>
        <span><?php echo (int)$post['reading_time']; ?> menit baca</span>
      </div>
    </div>
  </section>

  <article class="article-body" itemprop="articleBody">
    <?php if (file_exists($content_file)) { include $content_file; } ?>

    <div class="article-cta">
      <h3>Siap Mulai Transformasi Digital Bisnis Anda?</h3>
      <p>Konsultasikan kebutuhan software bisnis Anda dengan tim ahli Syntra Teknologi — gratis, tanpa komitmen.</p>
      <a href="<?php echo base_url(); ?>#contact">Konsultasi Gratis →</a>
    </div>

    <div class="article-tags" aria-label="Tag artikel">
      <?php foreach (explode(',', $post['keywords']) as $tag): $tag = trim($tag); if (!$tag) continue; ?>
        <span>#<?php echo htmlspecialchars($tag); ?></span>
      <?php endforeach; ?>
    </div>

    <div class="article-share">
      <span>Bagikan:</span>
      <a href="https://wa.me/?text=<?php echo urlencode($post['title'] . ' ' . $canonical); ?>" target="_blank" rel="noopener">WhatsApp</a>
      <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode($canonical); ?>" target="_blank" rel="noopener">LinkedIn</a>
      <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode($post['title']); ?>&url=<?php echo urlencode($canonical); ?>" target="_blank" rel="noopener">Twitter/X</a>
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($canonical); ?>" target="_blank" rel="noopener">Facebook</a>
    </div>
  </article>

  <?php
  $related = [];
  foreach ($posts as $rslug => $rp) {
    if ($rslug === $post['slug']) continue;
    $related[$rslug] = $rp;
  }
  $related = array_slice($related, 0, 3, true);
  ?>
  <?php if (!empty($related)): ?>
  <section class="related-posts" aria-label="Artikel Terkait">
    <h2>Artikel Lainnya</h2>
    <div class="related-grid">
      <?php foreach ($related as $rslug => $rp): ?>
        <article class="related-card">
          <span class="cat"><?php echo htmlspecialchars($rp['category']); ?></span>
          <h3><a href="<?php echo base_url('blog/' . $rslug); ?>"><?php echo htmlspecialchars($rp['title']); ?></a></h3>
          <p><?php echo (int)$rp['reading_time']; ?> menit baca</p>
        </article>
      <?php endforeach; ?>
    </div>
  </section>
  <?php endif; ?>
</main>

<?php $this->load->view('blog/_footer'); ?>
