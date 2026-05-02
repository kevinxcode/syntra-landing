<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	private $posts;

	public function __construct()
	{
		parent::__construct();

		// Daftar artikel blog (slug => metadata + view file)
		$this->posts = [
			'tren-software-bisnis-umkm-2026' => [
				'title'        => '5 Tren Software Bisnis 2026 yang Wajib Diketahui UMKM Indonesia',
				'description'  => 'Panduan tren teknologi bisnis 2026 untuk UMKM Indonesia: AI agent, QRIS Tap NFC, Coretax e-Faktur, cloud-first ERP, dan otomatisasi WhatsApp Business.',
				'keywords'     => 'tren software bisnis 2026, UMKM digital, AI untuk UMKM, QRIS Tap, Coretax DJP, ERP cloud, WhatsApp Business API, transformasi digital UMKM',
				'image'        => 'assets/syntra-enterprise.png',
				'published'    => '2026-04-28',
				'modified'     => '2026-05-02',
				'reading_time' => 8,
				'category'     => 'Tren Teknologi',
				'view'         => 'post_tren_2026',
			],
			'panduan-memilih-software-pos-umkm-fnb-2026' => [
				'title'        => 'Panduan Memilih Software POS untuk UMKM F&B di Indonesia (2026)',
				'description'  => 'Panduan lengkap memilih software POS untuk bisnis F&B di Indonesia: 8 fitur wajib, kriteria evaluasi, integrasi QRIS, dan rekomendasi sesuai skala bisnis.',
				'keywords'     => 'panduan POS UMKM, software kasir F&B, aplikasi POS restoran, POS terbaik 2026, integrasi QRIS, kasir cafe',
				'image'        => 'assets/a.png',
				'published'    => '2026-04-15',
				'modified'     => '2026-05-02',
				'reading_time' => 9,
				'category'     => 'Panduan',
				'view'         => 'post',
			],
			'panduan-e-faktur-coretax-pkp-2026' => [
				'title'        => 'Cara Menerapkan e-Faktur Coretax 4.0: Checklist Praktis untuk PKP 2026',
				'description'  => 'Checklist langkah demi langkah implementasi e-Faktur Coretax DJP 4.0 untuk PKP UMKM dan enterprise di Indonesia tahun 2026.',
				'keywords'     => 'e-faktur Coretax, panduan PKP 2026, implementasi Coretax DJP, faktur pajak digital, kepatuhan pajak UMKM, e-faktur 4.0',
				'image'        => 'assets/b.png',
				'published'    => '2026-04-08',
				'modified'     => '2026-05-02',
				'reading_time' => 7,
				'category'     => 'Kepatuhan',
				'view'         => 'post',
			],
			'whatsapp-business-api-setup-roi-umkm' => [
				'title'        => 'WhatsApp Business API: Setup, Integrasi, dan ROI untuk UMKM Indonesia',
				'description'  => 'Panduan praktis setup WhatsApp Business API, integrasi dengan CRM/POS, dan menghitung ROI untuk UMKM Indonesia 2026.',
				'keywords'     => 'WhatsApp Business API, setup WhatsApp bisnis, ROI WA Business, integrasi WhatsApp, otomatisasi sales WA, chatbot WhatsApp',
				'image'        => 'assets/c.png',
				'published'    => '2026-03-28',
				'modified'     => '2026-05-02',
				'reading_time' => 8,
				'category'     => 'Marketing & Sales',
				'view'         => 'post',
			],
			'erp-vs-aplikasi-akuntansi-kapan-upgrade' => [
				'title'        => 'ERP vs Aplikasi Akuntansi Sederhana: Kapan UMKM Harus Upgrade?',
				'description'  => 'Framework keputusan kapan UMKM harus pindah dari aplikasi akuntansi sederhana ke sistem ERP terintegrasi: 7 sinyal yang tidak boleh diabaikan.',
				'keywords'     => 'ERP UMKM, kapan upgrade ke ERP, software akuntansi vs ERP, transformasi sistem bisnis, sistem ERP cloud, software pembukuan',
				'image'        => 'assets/syntra-dashboard.png',
				'published'    => '2026-03-15',
				'modified'     => '2026-05-02',
				'reading_time' => 7,
				'category'     => 'Strategi',
				'view'         => 'post',
			],
			'ai-untuk-umkm-otomatisasi-bisnis-praktis' => [
				'title'        => 'AI untuk UMKM: 10 Cara Praktis Mengotomatisasi Bisnis Tanpa Tim IT',
				'description'  => '10 cara konkret menggunakan AI untuk mengotomatisasi operasional UMKM Indonesia tanpa perlu tim IT atau coding — biaya, tools, dan hasil terukur.',
				'keywords'     => 'AI untuk UMKM, otomatisasi bisnis AI, AI tools UMKM, ChatGPT untuk bisnis kecil, otomatisasi tanpa coding, AI bisnis Indonesia',
				'image'        => 'assets/syntra-enterprise.png',
				'published'    => '2026-02-28',
				'modified'     => '2026-05-02',
				'reading_time' => 9,
				'category'     => 'AI & Otomatisasi',
				'view'         => 'post',
			],
		];
	}

	public function index()
	{
		$data = [
			'posts' => $this->posts,
		];
		$this->load->view('blog/index', $data);
	}

	public function post($slug = '')
	{
		if ( ! isset($this->posts[$slug])) {
			show_404();
			return;
		}

		$post = $this->posts[$slug];
		$post['slug'] = $slug;

		$data = [
			'post'  => $post,
			'posts' => $this->posts,
		];
		$this->load->view('blog/' . $post['view'], $data);
	}

	public function feed()
	{
		$this->output->set_content_type('application/rss+xml; charset=utf-8');
		$base = 'https://syntra-enterprise.com';

		$xml  = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
		$xml .= '<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">' . "\n";
		$xml .= "<channel>\n";
		$xml .= "<title>Blog Syntra Teknologi Indonesia</title>\n";
		$xml .= "<link>{$base}/blog</link>\n";
		$xml .= "<description>Wawasan, panduan, dan tren software bisnis untuk UMKM dan enterprise di Indonesia.</description>\n";
		$xml .= "<language>id-ID</language>\n";
		$xml .= '<atom:link href="' . $base . '/blog/feed" rel="self" type="application/rss+xml" />' . "\n";

		foreach ($this->posts as $slug => $p) {
			$xml .= "<item>\n";
			$xml .= '<title>' . htmlspecialchars($p['title'], ENT_XML1) . "</title>\n";
			$xml .= "<link>{$base}/blog/{$slug}</link>\n";
			$xml .= "<guid>{$base}/blog/{$slug}</guid>\n";
			$xml .= '<pubDate>' . date(DATE_RSS, strtotime($p['published'])) . "</pubDate>\n";
			$xml .= '<description>' . htmlspecialchars($p['description'], ENT_XML1) . "</description>\n";
			$xml .= "<category>" . htmlspecialchars($p['category'], ENT_XML1) . "</category>\n";
			$xml .= "</item>\n";
		}

		$xml .= "</channel>\n</rss>";
		$this->output->set_output($xml);
	}
}
