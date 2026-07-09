<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Custom Tas Spunbond 3D - Tassouvenir</title>
  <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3081/3081559.png" type="image/png">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#1e3a5f',
            accent: '#c8a45a',
            dark: '#111827',
            muted: '#6b7280',
            'border-soft': '#e5e7eb',
            'surface': '#f9fafb',
            shopee: '#EE4D2D'
          },
          fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'] }
        }
      }
    }
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    *{box-sizing:border-box;margin:0;padding:0}
    html{scroll-behavior:smooth}
    body{font-family:'Inter',sans-serif;background:#fff;color:#111827;overflow-x:hidden}
    
    .header-scrolled{box-shadow:0 1px 3px rgba(0,0,0,.06);backdrop-filter:blur(12px);background:rgba(255,255,255,.92)}
    .scroll-progress{position:fixed;top:0;left:0;height:2px;background:linear-gradient(90deg,#1e3a5f,#c8a45a);z-index:9999;transition:width .1s linear}
    .nav-link{position:relative}
    .nav-link::after{content:'';position:absolute;bottom:-4px;left:0;width:0;height:1.5px;background:#1e3a5f;transition:width .3s ease}
    .nav-link:hover::after{width:100%}
    .wa-float{animation:waPulse 2s ease-in-out infinite}
    @keyframes waPulse{0%,100%{box-shadow:0 4px 14px rgba(37,211,102,.4)}50%{box-shadow:0 4px 24px rgba(37,211,102,.6)}}
    
    .shopee-bar{transition:all .4s cubic-bezier(.4,0,.2,1)}
    .shopee-bar.bar-hidden{transform:translateY(-100%);opacity:0;pointer-events:none}
    .shopee-bar-glow{box-shadow:0 2px 12px rgba(238,77,45,.25)}
    @keyframes shopeeSlideIn{from{transform:translateY(-100%);opacity:0}to{transform:translateY(0);opacity:1}}
    .shopee-bar-enter{animation:shopeeSlideIn .5s ease-out}
    .shopee-shimmer{background:linear-gradient(90deg,#fff 30%,#ffd6cc 50%,#fff 70%);background-size:200% 100%;-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;animation:shimmer 3s ease-in-out infinite}
    @keyframes shimmer{0%{background-position:-200% center}100%{background-position:200% center}}
    .header-with-bar{top:44px}.header-no-bar{top:0}
    .hero-with-bar{padding-top:calc(72px + 44px)}.hero-no-bar{padding-top:72px}
    
    .color-sw{transition:all .25s ease;cursor:pointer;border:2.5px solid transparent}
    .color-sw:hover{transform:translateY(-2px);box-shadow:0 4px 12px rgba(0,0,0,.08)}
    .color-sw.active{border-color:#1e3a5f;transform:translateY(-2px);box-shadow:0 4px 12px rgba(30,58,95,.15)}
    .color-sw.active .sw-tick{opacity:1;transform:scale(1)}
    .sw-tick{opacity:0;transform:scale(.4);transition:all .2s ease}
    
    .size-pill{transition:all .25s ease;cursor:pointer;border:2px solid #f0f0f0}
    .size-pill:hover{border-color:#c8a45a}
    .size-pill.active{border-color:#1e3a5f;background:#f9fafb;box-shadow:0 2px 8px rgba(30,58,95,.08)}
    
    .pos-btn{transition:all .2s ease;cursor:pointer;border:2px solid #f0f0f0}
    .pos-btn:hover{border-color:#c8a45a}
    .pos-btn.active{border-color:#1e3a5f;background:#1e3a5f;color:#fff}
    
    .form-input{border:1.5px solid #e5e7eb;transition:all .25s ease;background:#fff}
    .form-input:focus{border-color:#1e3a5f;box-shadow:0 0 0 3px rgba(30,58,95,.08);outline:none}
    .qty-btn{transition:all .15s ease}.qty-btn:hover{background:#e5e7eb}.qty-btn:active{transform:scale(.9)}
    
    .upload-zone{border:2px dashed #d1d5db;transition:all .3s ease;cursor:pointer}
    .upload-zone:hover,.upload-zone.drag-over{border-color:#1e3a5f;background:rgba(30,58,95,.03)}
    .upload-zone.has-file{border-color:#c8a45a;border-style:solid;background:rgba(200,164,90,.04)}
    .upload-zone.has-file .upload-ph{display:none}
    
    .toast{animation:toastIn .4s ease-out}
    @keyframes toastIn{from{transform:translateY(-20px) translateX(20px);opacity:0}to{transform:translateY(0) translateX(0);opacity:1}}
    
    .benefit-card{border:1px solid #f0f0f0;transition:all .3s ease}
    .benefit-card:hover{border-color:transparent;box-shadow:0 8px 24px rgba(0,0,0,.06)}
    
    .faq-item{border:1px solid #f0f0f0;transition:all .25s ease}
    .faq-item.open{border-color:#1e3a5f}
    .faq-answer{max-height:0;overflow:hidden;transition:max-height .35s ease}
    .faq-item.open .faq-answer{max-height:200px}
    .faq-item.open .faq-chevron{transform:rotate(180deg)}
    .faq-chevron{transition:transform .3s ease}
    .section-divider{height:1px;background:linear-gradient(90deg,transparent,#e5e7eb,transparent)}
    
    #three-container {
      width: 100%;
      height: 520px;
      background: linear-gradient(180deg, #f0f2f5 0%, #dce1e8 100%);
      border-radius: 20px;
      overflow: hidden;
      position: relative;
      cursor: grab;
    }
    #three-container:active { cursor: grabbing; }
    #three-container canvas { display: block; width: 100% !important; height: 100% !important; }
    
    .controls-hint {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      background: rgba(0,0,0,0.55);
      backdrop-filter: blur(8px);
      color: white;
      padding: 8px 20px;
      border-radius: 30px;
      font-size: 12px;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 10px;
      pointer-events: none;
      opacity: 0.6;
      z-index: 5;
    }
    .controls-hint:hover { opacity: 1; }
    .controls-hint i { font-size: 14px; }
    
    #loadingOverlay {
      position: absolute;
      inset: 0;
      background: rgba(255,255,255,0.85);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      z-index: 10;
      border-radius: 20px;
      transition: opacity 0.6s;
    }
    #loadingOverlay.hidden { opacity: 0; pointer-events: none; }
    .loader {
      width: 48px;
      height: 48px;
      border: 4px solid #e5e7eb;
      border-top-color: #1e3a5f;
      border-radius: 50%;
      animation: spin 0.8s linear infinite;
    }
    @keyframes spin { to { transform: rotate(360deg); } }
    
    @media (max-width: 768px) { #three-container { height: 350px; } }
    @media (max-width: 480px) { #three-container { height: 280px; } }
  </style>
</head>
<body>

<div class="scroll-progress" id="scrollProgress" style="width:0%"></div>

<!-- Shopee Bar -->
<div id="shopeeBar" class="shopee-bar shopee-bar-enter shopee-bar-glow fixed top-0 left-0 w-full z-[60] bg-shopee">
  <div class="max-w-7xl mx-auto px-4 lg:px-8 h-[44px] flex items-center justify-between">
    <div class="flex items-center gap-2.5 min-w-0">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 32 32" fill="none"><rect width="32" height="32" rx="6" fill="white" fill-opacity="0.2"/><path d="M7.5 11.5C7.5 9 9.5 7 12 7h8c2.5 0 4.5 2 4.5 4.5v2c0 1-.3 1.8-.8 2.5L22 20c-.3.4-.8.7-1.3.8l-1.7.4c-.8.2-1.2 1-.8 1.7l.3.6c.2.4 0 .9-.4 1.1l-.4.2c-.5.2-1-.1-1.1-.6l-.6-2.2c-.2-.7-.9-1.2-1.6-1.2h-1.2c-.7 0-1.4.5-1.6 1.2l-.6 2.2c-.1.5-.6.8-1.1.6l-.4-.2c-.4-.2-.6-.7-.4-1.1l.3-.6c.4-.7 0-1.5-.8-1.7l-1.7-.4c-.5-.1-1-.4-1.3-.8l-1.7-4C7.8 15.3 7.5 14.5 7.5 13.5v-2z" fill="white"/><circle cx="13" cy="13" r="1.2" fill="#EE4D2D"/><circle cx="19" cy="13" r="1.2" fill="#EE4D2D"/></svg>
      <p class="shopee-shimmer text-xs sm:text-sm font-bold whitespace-nowrap">Belanja Langsung di Toko Shopee Kami!</p>
    </div>
    <div class="flex items-center gap-3">
      <a href="https://shopee.co.id/TAS_SOUVENIR" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 bg-white text-shopee text-xs font-bold px-3.5 py-1.5 rounded-md hover:bg-gray-50 transition-colors whitespace-nowrap"><i class="fas fa-store text-[11px]"></i><span class="hidden sm:inline">Kunjungi Toko</span><span class="sm:hidden">Buka</span><i class="fas fa-arrow-right text-[9px]"></i></a>
      <button id="closeShopeeBar" class="w-7 h-7 flex items-center justify-center rounded-md hover:bg-white/20 transition-colors flex-shrink-0"><i class="fas fa-xmark text-white/80 text-sm"></i></button>
    </div>
  </div>
</div>

<!-- Header -->
<header id="mainHeader" class="header-with-bar fixed w-full z-50 transition-all duration-300" style="background:rgba(255,255,255,.95);backdrop-filter:blur(12px)">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="flex items-center justify-between h-[72px]">
      <a href="index.php" class="flex items-center gap-2.5 group">
        <div class="w-9 h-9 bg-primary rounded-lg flex items-center justify-center group-hover:bg-accent transition-colors duration-300"><i class="fas fa-bag-shopping text-white text-sm"></i></div>
        <span class="text-xl font-bold text-primary tracking-tight">Tas<span class="text-accent">Souvenir</span></span>
      </a>
      <nav class="hidden lg:flex items-center gap-8">
        <a href="index.php" class="nav-link text-sm font-medium text-muted hover:text-primary transition-colors">Beranda</a>
        <a href="index.php#produk" class="nav-link text-sm font-medium text-muted hover:text-primary transition-colors">Produk</a>
        <a href="index.php#layanan" class="nav-link text-sm font-medium text-muted hover:text-primary transition-colors">Layanan</a>
        <a href="index.php#tentang" class="nav-link text-sm font-medium text-muted hover:text-primary transition-colors">Tentang</a>
        <a href="index.php#kontak" class="nav-link text-sm font-medium text-muted hover:text-primary transition-colors">Kontak</a>
      </nav>
      <div class="flex items-center gap-3">
        <a href="https://shopee.co.id/TAS_SOUVENIR" target="_blank" rel="noopener" class="hidden md:inline-flex items-center gap-2 bg-shopee text-white text-sm font-medium px-4 py-2.5 rounded-lg hover:bg-[#D73211] transition-colors"><i class="fas fa-bag-shopping text-xs"></i><span>Shopee</span></a>
        <a href="https://wa.me/6285221692902" target="_blank" class="hidden md:inline-flex items-center gap-2 bg-primary text-white text-sm font-medium px-5 py-2.5 rounded-lg hover:bg-[#152c4a] transition-colors"><i class="fab fa-whatsapp text-base"></i><span>Chat Kami</span></a>
        <button id="menuToggle" class="lg:hidden w-10 h-10 flex items-center justify-center rounded-lg hover:bg-surface-alt transition-colors"><i class="fas fa-bars text-dark text-lg" id="menuIcon"></i></button>
      </div>
    </div>
  </div>
  <div id="mobileMenu" class="hidden lg:hidden bg-white border-t border-border-soft">
    <div class="max-w-7xl mx-auto px-6 py-4 space-y-1">
      <a href="https://shopee.co.id/TAS_SOUVENIR" target="_blank" rel="noopener" class="flex items-center justify-center gap-2 bg-shopee text-white text-sm font-semibold px-5 py-3 rounded-xl w-full mb-2"><i class="fas fa-bag-shopping text-sm"></i> Belanja di Shopee</a>
      <a href="index.php" class="block py-2.5 px-3 text-sm font-medium text-dark hover:bg-surface rounded-lg transition-colors">Beranda</a>
      <a href="index.php#produk" class="block py-2.5 px-3 text-sm font-medium text-muted hover:bg-surface rounded-lg transition-colors">Produk</a>
      <a href="index.php#layanan" class="block py-2.5 px-3 text-sm font-medium text-muted hover:bg-surface rounded-lg transition-colors">Layanan</a>
      <a href="index.php#tentang" class="block py-2.5 px-3 text-sm font-medium text-muted hover:bg-surface rounded-lg transition-colors">Tentang</a>
      <a href="index.php#kontak" class="block py-2.5 px-3 text-sm font-medium text-muted hover:bg-surface rounded-lg transition-colors">Kontak</a>
    </div>
  </div>
</header>

<!-- Toast -->
<div id="globalToast" class="fixed top-24 right-6 z-[60] hidden">
  <div class="toast bg-white border border-border-soft rounded-xl shadow-lg p-4 flex items-center gap-3 max-w-sm">
    <div id="toastIcon" class="w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0"></div>
    <p id="toastMsg" class="text-sm font-medium text-dark"></p>
  </div>
</div>

<main class="hero-with-bar">

<!-- Breadcrumb -->
<div class="bg-surface border-b border-border-soft">
  <div class="max-w-7xl mx-auto px-6 lg:px-8 py-4">
    <nav aria-label="Breadcrumb">
      <ol class="flex items-center gap-2 text-xs">
        <li><a href="index.php" class="text-muted hover:text-primary transition-colors">Beranda</a></li>
        <li><i class="fas fa-chevron-right text-[9px] text-gray-300"></i></li>
        <li><a href="index.php#produk" class="text-muted hover:text-primary transition-colors">Produk</a></li>
        <li><i class="fas fa-chevron-right text-[9px] text-gray-300"></i></li>
        <li class="text-primary font-semibold">Custom Tas 3D</li>
      </ol>
    </nav>
  </div>
</div>

<!-- Page Header -->
<section class="bg-white border-b border-border-soft">
  <div class="max-w-7xl mx-auto px-6 lg:px-8 py-8">
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
      <div>
        <span class="text-accent text-xs font-bold uppercase tracking-[0.2em] mb-2 block">Buat Desain Sendiri</span>
        <h1 class="text-2xl md:text-3xl font-extrabold text-dark tracking-tight">Custom Tas <span class="text-primary">Spunbond 3D</span></h1>
        <p class="text-muted text-sm mt-2 max-w-xl leading-relaxed">Upload desain, pilih warna & ukuran, lihat hasil 3D real-time yang bisa diputar 360°!</p>
      </div>
      <div class="flex items-center gap-3 flex-shrink-0">
        <div class="flex items-center gap-1"><i class="fas fa-star text-amber-400 text-xs"></i><i class="fas fa-star text-amber-400 text-xs"></i><i class="fas fa-star text-amber-400 text-xs"></i><i class="fas fa-star text-amber-400 text-xs"></i><i class="fas fa-star text-amber-400 text-xs"></i><span class="text-xs text-muted ml-1.5">4.9</span></div>
        <div class="h-4 w-px bg-border-soft"></div>
        <span class="text-xs font-semibold text-green-600 flex items-center gap-1"><i class="fas fa-circle text-[5px]"></i>3D Real-time</span>
      </div>
    </div>
  </div>
</section>

<!-- ==================== MAIN ==================== -->
<section class="py-10 md:py-14 bg-white">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid lg:grid-cols-5 gap-8 lg:gap-10">

      <!-- KIRI: 3D Preview -->
      <div class="lg:col-span-3 space-y-6">

        <!-- 3D Container -->
        <div id="three-container">
          <div id="loadingOverlay">
            <div class="loader"></div>
            <p class="text-sm text-muted mt-4 font-medium">Memuat tas 3D...</p>
          </div>
          <div class="controls-hint">
            <i class="fas fa-mouse-pointer"></i>
            <span>Seret untuk memutar 360°</span>
            <i class="fas fa-arrows-spin ml-1"></i>
          </div>
        </div>

        <!-- Status Bar -->
        <div class="flex flex-wrap items-center justify-center gap-4 bg-surface rounded-xl p-3 border border-border-soft">
          <div class="flex items-center gap-2">
            <div id="colorDotPreview" class="w-4 h-4 rounded-full bg-blue-500 border-2 border-white shadow-sm"></div>
            <span id="colorNamePreview" class="text-sm font-bold text-dark">Biru</span>
          </div>
          <div class="w-px h-6 bg-border-soft"></div>
          <span id="sizeNamePreview" class="text-sm font-bold text-dark">TLS 25 — 25 × 35 × 8 cm</span>
          <div class="w-px h-6 bg-border-soft"></div>
          <span id="designStatus" class="text-xs text-muted"><i class="fas fa-image mr-1"></i>Belum ada desain</span>
        </div>

        <!-- 1. Pilih Warna -->
        <div>
          <h3 class="text-sm font-bold text-dark mb-3 flex items-center gap-2">
            <span class="w-6 h-6 bg-primary rounded-md flex items-center justify-center text-white text-[10px] font-bold">1</span>
            Pilih Warna Tas
          </h3>
          <div class="grid grid-cols-4 sm:grid-cols-8 gap-2" id="colorGrid"></div>
        </div>

        <div class="section-divider"></div>

        <!-- 2. Pilih Ukuran -->
        <div>
          <h3 class="text-sm font-bold text-dark mb-3 flex items-center gap-2">
            <span class="w-6 h-6 bg-primary rounded-md flex items-center justify-center text-white text-[10px] font-bold">2</span>
            Pilih Ukuran
          </h3>
          <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-2.5" id="sizeGrid"></div>

          <div class="mt-3 bg-surface rounded-xl p-4 border border-border-soft">
            <label class="flex items-center gap-2 cursor-pointer" onclick="toggleCustomSize()">
              <input type="checkbox" id="customSizeCheck" class="w-4 h-4 rounded border-border-soft text-primary focus:ring-primary/20">
              <span class="text-sm font-semibold text-dark">Ukuran lain? (custom)</span>
            </label>
            <div id="customSizeFields" class="hidden mt-3 grid grid-cols-3 gap-2">
              <div>
                <label class="text-[10px] font-semibold text-muted uppercase">Panjang</label>
                <input type="number" id="customP" placeholder="30" class="form-input w-full px-3 py-2 rounded-lg text-sm text-center">
              </div>
              <div>
                <label class="text-[10px] font-semibold text-muted uppercase">Tinggi</label>
                <input type="number" id="customT" placeholder="40" class="form-input w-full px-3 py-2 rounded-lg text-sm text-center">
              </div>
              <div>
                <label class="text-[10px] font-semibold text-muted uppercase">Gusset</label>
                <input type="number" id="customG" placeholder="10" class="form-input w-full px-3 py-2 rounded-lg text-sm text-center">
              </div>
            </div>
          </div>
        </div>

        <div class="section-divider"></div>

        <!-- 3. Upload Desain -->
        <div>
          <h3 class="text-sm font-bold text-dark mb-3 flex items-center gap-2">
            <span class="w-6 h-6 bg-primary rounded-md flex items-center justify-center text-white text-[10px] font-bold">3</span>
            Upload Desain <span class="text-green-600 font-normal text-xs ml-1">✨ Langsung ke 3D!</span>
          </h3>
          <div class="bg-surface rounded-2xl border border-border-soft overflow-hidden">
            <div class="relative aspect-[3/1] flex items-center justify-center" id="designArea">
              <div id="uploadZone" class="upload-zone absolute inset-4 rounded-xl flex flex-col items-center justify-center z-[4]" onclick="document.getElementById('fileInput').click()">
                <div class="upload-ph text-center">
                  <div class="w-12 h-12 bg-primary/8 rounded-2xl flex items-center justify-center mx-auto mb-2">
                    <i class="fas fa-cloud-arrow-up text-primary text-lg"></i>
                  </div>
                  <p class="text-sm font-bold text-dark mb-0.5">Upload Desain Anda</p>
                  <p class="text-[11px] text-muted">PNG, JPG — Max 10MB</p>
                  <p class="text-[10px] text-accent mt-1">✨ Desain langsung muncul di tas 3D!</p>
                </div>
              </div>
              <div id="uploadedPreview" class="absolute inset-4 flex items-center justify-center z-[5] hidden">
                <img id="uploadedImg" src="" alt="Preview" class="max-w-full max-h-full object-contain rounded-lg">
              </div>
            </div>
            <input type="file" id="fileInput" class="hidden" accept=".png,.jpg,.jpeg" onchange="handleFile(event)">
            <div id="fileInfo" class="hidden px-4 py-2.5 bg-green-50 border-t border-green-100 flex items-center gap-2">
              <i class="fas fa-check-circle text-green-500 text-sm"></i>
              <span id="fileName" class="text-xs font-semibold text-green-800 flex-1 truncate"></span>
              <button onclick="removeFile()" class="text-green-600 hover:text-red-500 transition-colors"><i class="fas fa-xmark text-xs"></i></button>
            </div>
          </div>
        </div>

      </div>

      <!-- KANAN: Options -->
      <div class="lg:col-span-2">
        <div class="sticky top-[100px] space-y-5">

          <!-- Posisi Sablon -->
          <div class="bg-white border border-border-soft rounded-2xl p-5">
            <h4 class="text-xs font-bold uppercase tracking-wider text-muted mb-3"><i class="fas fa-arrows-alt text-accent mr-1.5"></i>Posisi Sablon</h4>
            <div class="grid grid-cols-3 gap-2">
              <button class="pos-btn active rounded-xl py-3 text-center" data-pos="depan" onclick="selectPos('depan')">
                <i class="fas fa-square text-base mb-0.5"></i>
                <div class="text-[11px] font-semibold">Depan</div>
              </button>
              <button class="pos-btn rounded-xl py-3 text-center" data-pos="belakang" onclick="selectPos('belakang')">
                <i class="fas fa-square text-base mb-0.5 opacity-40"></i>
                <div class="text-[11px] font-semibold">Belakang</div>
              </button>
              <button class="pos-btn rounded-xl py-3 text-center" data-pos="dua-sisi" onclick="selectPos('dua-sisi')">
                <i class="fas fa-clone text-base mb-0.5"></i>
                <div class="text-[11px] font-semibold">Dua Sisi</div>
              </button>
            </div>
          </div>

          <!-- Jumlah Warna Sablon -->
          <div class="bg-white border border-border-soft rounded-2xl p-5">
            <h4 class="text-xs font-bold uppercase tracking-wider text-muted mb-3"><i class="fas fa-palette text-accent mr-1.5"></i>Jumlah Warna Sablon</h4>
            <div class="grid grid-cols-4 gap-2">
              <button onclick="selectColorCount(1)" class="cc-btn text-[11px] font-semibold py-2.5 rounded-lg border-2 border-primary bg-primary/5 text-primary transition-all">1 Warna</button>
              <button onclick="selectColorCount(2)" class="cc-btn text-[11px] font-semibold py-2.5 rounded-lg border-2 border-border-soft text-muted hover:border-gray-300 transition-all">2 Warna</button>
              <button onclick="selectColorCount(3)" class="cc-btn text-[11px] font-semibold py-2.5 rounded-lg border-2 border-border-soft text-muted hover:border-gray-300 transition-all">3 Warna</button>
              <button onclick="selectColorCount(4)" class="cc-btn text-[11px] font-semibold py-2.5 rounded-lg border-2 border-border-soft text-muted hover:border-gray-300 transition-all">4+ Warna</button>
            </div>
          </div>

          <!-- Butuh bantuan desain? -->
          <label class="flex items-start gap-3 bg-accent/5 border border-accent/15 rounded-2xl p-4 cursor-pointer hover:bg-accent/10 transition-colors">
            <input type="checkbox" id="needDesign" class="w-4 h-4 rounded border-border-soft text-primary focus:ring-primary/20 mt-0.5 flex-shrink-0">
            <div>
              <p class="text-sm font-semibold text-dark">Butuh Bantuan Desain?</p>
              <p class="text-[11px] text-muted mt-0.5">Gratis! Kirim konsep/logo, kami buatkan.</p>
            </div>
          </label>

          <!-- Kalkulator -->
          <div class="bg-white border border-border-soft rounded-2xl p-5">
            <h4 class="text-xs font-bold uppercase tracking-wider text-muted mb-3"><i class="fas fa-calculator text-accent mr-1.5"></i>Kalkulasi Harga</h4>
            <div class="space-y-3 mb-4">
              <div>
                <label class="block text-[10px] font-semibold text-muted mb-1 uppercase tracking-wider">Jumlah Pesanan</label>
                <div class="flex items-center">
                  <button onclick="changeQty(-50)" class="qty-btn w-10 h-10 rounded-l-xl bg-surface border border-border-soft border-r-0 flex items-center justify-center text-muted font-bold text-sm">−</button>
                  <input type="number" id="qtyInput" value="100" min="100" step="50" class="form-input w-full h-10 text-center text-sm font-semibold rounded-none border-l-0 border-r-0">
                  <button onclick="changeQty(50)" class="qty-btn w-10 h-10 rounded-r-xl bg-surface border border-border-soft border-l-0 flex items-center justify-center text-muted font-bold text-sm">+</button>
                </div>
                <p class="text-[10px] text-muted mt-1">Min. 100 pcs, kelipatan 50</p>
              </div>
              <div>
                <label class="block text-[10px] font-semibold text-muted mb-1 uppercase tracking-wider">Jenis Tali</label>
                <div class="grid grid-cols-2 gap-2">
                  <button onclick="selectHandle('spunbond')" id="handleSpunbond" class="handle-btn text-[11px] font-semibold py-2.5 rounded-xl border-2 border-primary bg-primary/5 text-primary transition-all">Tali Spunbond</button>
                  <button onclick="selectHandle('kur')" id="handleKur" class="handle-btn text-[11px] font-semibold py-2.5 rounded-xl border-2 border-border-soft text-muted hover:border-gray-300 transition-all">Tali Kur +Rp 1.500</button>
                </div>
              </div>
            </div>
            <div class="bg-surface rounded-xl p-4 space-y-2">
              <div class="flex justify-between text-xs"><span class="text-muted">Estimasi /pcs</span><span id="estPrice" class="font-semibold text-dark">—</span></div>
              <div class="flex justify-between text-xs"><span class="text-muted">Jumlah</span><span id="estQty" class="font-semibold text-dark">—</span></div>
              <div class="border-t border-border-soft pt-2 flex justify-between items-center">
                <span class="text-xs font-bold text-dark">Estimasi Total</span>
                <span id="estTotal" class="text-xl font-extrabold text-primary">—</span>
              </div>
            </div>
          </div>

          <!-- Form Pemesan -->
          <div class="bg-white border border-border-soft rounded-2xl p-5">
            <h4 class="text-xs font-bold uppercase tracking-wider text-muted mb-3"><i class="fas fa-user text-accent mr-1.5"></i>Data Pemesan</h4>
            <div class="space-y-3 mb-4">
              <input type="text" id="custName" placeholder="Nama Lengkap *" class="form-input w-full px-4 py-2.5 rounded-xl text-sm">
              <input type="tel" id="custPhone" placeholder="No. WhatsApp *" class="form-input w-full px-4 py-2.5 rounded-xl text-sm">
              <input type="email" id="custEmail" placeholder="Email (opsional)" class="form-input w-full px-4 py-2.5 rounded-xl text-sm">
              <textarea id="custNotes" rows="2" placeholder="Catatan: deadline, alamat, catatan khusus..." class="form-input w-full px-4 py-2.5 rounded-xl text-sm resize-none"></textarea>
            </div>
            <button onclick="submitOrder()" id="submitBtn" class="w-full bg-primary text-white font-bold py-3.5 rounded-xl hover:bg-[#152c4a] transition-colors flex items-center justify-center gap-2 text-sm">
              <i class="fab fa-whatsapp text-base"></i> Kirim Pesanan via WhatsApp
            </button>
          </div>

          <!-- Tips -->
          <div class="bg-surface rounded-xl p-4">
            <h4 class="text-[11px] font-bold text-dark mb-2 flex items-center gap-2"><i class="fas fa-lightbulb text-accent text-[10px]"></i>Tips</h4>
            <ul class="space-y-1">
              <li class="flex items-start gap-2 text-[11px] text-dark/70 leading-relaxed"><i class="fas fa-check text-accent text-[8px] mt-1 flex-shrink-0"></i>Resolusi minimal 300 DPI, format PNG/JPG</li>
              <li class="flex items-start gap-2 text-[11px] text-dark/70 leading-relaxed"><i class="fas fa-check text-accent text-[8px] mt-1 flex-shrink-0"></i>Gunakan latar belakang transparan untuk hasil terbaik</li>
              <li class="flex items-start gap-2 text-[11px] text-dark/70 leading-relaxed"><i class="fas fa-check text-accent text-[8px] mt-1 flex-shrink-0"></i>Desain akan muncul di bagian depan tas</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Benefits -->
<section class="py-14 md:py-20 bg-surface">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-10">
      <span class="text-accent text-xs font-bold uppercase tracking-[0.2em] mb-2 block">Keunggulan</span>
      <h2 class="text-2xl md:text-3xl font-extrabold text-dark tracking-tight">Mengapa Custom di <span class="text-primary">TasSouvenir</span>?</h2>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <div class="benefit-card rounded-2xl p-6 text-center bg-white">
        <div class="w-14 h-14 bg-primary/8 rounded-2xl flex items-center justify-center mx-auto mb-4"><i class="fas fa-cube text-primary text-xl"></i></div>
        <h3 class="text-sm font-bold text-dark mb-1.5">Preview 3D</h3>
        <p class="text-xs text-muted leading-relaxed">Lihat desain Anda dalam 3D real-time, putar 360° untuk melihat dari semua sudut.</p>
      </div>
      <div class="benefit-card rounded-2xl p-6 text-center bg-white">
        <div class="w-14 h-14 bg-accent/10 rounded-2xl flex items-center justify-center mx-auto mb-4"><i class="fas fa-paint-roller text-accent text-xl"></i></div>
        <h3 class="text-sm font-bold text-dark mb-1.5">Sablon Tajam</h3>
        <p class="text-xs text-muted leading-relaxed">Tinta premium dengan hasil cetak tajam, warna cerah, dan tahan lama.</p>
      </div>
      <div class="benefit-card rounded-2xl p-6 text-center bg-white">
        <div class="w-14 h-14 bg-primary/8 rounded-2xl flex items-center justify-center mx-auto mb-4"><i class="fas fa-wand-magic-sparkles text-primary text-xl"></i></div>
        <h3 class="text-sm font-bold text-dark mb-1.5">Free Desain</h3>
        <p class="text-xs text-muted leading-relaxed">Belum punya desain? Tim kami bantu buatkan gratis.</p>
      </div>
      <div class="benefit-card rounded-2xl p-6 text-center bg-white">
        <div class="w-14 h-14 bg-accent/10 rounded-2xl flex items-center justify-center mx-auto mb-4"><i class="fas fa-medal text-accent text-xl"></i></div>
        <h3 class="text-sm font-bold text-dark mb-1.5">Proof Dulu</h3>
        <p class="text-xs text-muted leading-relaxed">Kami kirim preview desain untuk Anda approve sebelum produksi.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="py-14 md:py-20 bg-white">
  <div class="max-w-3xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-10">
      <span class="text-accent text-xs font-bold uppercase tracking-[0.2em] mb-2 block">FAQ</span>
      <h2 class="text-2xl md:text-3xl font-extrabold text-dark tracking-tight">Pertanyaan <span class="text-primary">Umum</span></h2>
    </div>
    <div class="space-y-3">
      <div class="faq-item rounded-xl bg-surface overflow-hidden">
        <button class="w-full flex items-center justify-between p-5 text-left" onclick="this.closest('.faq-item').classList.toggle('open')">
          <span class="text-sm font-semibold text-dark pr-4">Format file desain apa yang diterima?</span>
          <i class="fas fa-chevron-down text-muted text-xs faq-chevron flex-shrink-0"></i>
        </button>
        <div class="faq-answer px-5 pb-5"><p class="text-sm text-muted leading-relaxed">Untuk preview 3D, kami menerima PNG dan JPG. Untuk produksi, kami juga menerima PDF, AI, CDR, EPS, dan SVG.</p></div>
      </div>
      <div class="faq-item rounded-xl bg-surface overflow-hidden">
        <button class="w-full flex items-center justify-between p-5 text-left" onclick="this.closest('.faq-item').classList.toggle('open')">
          <span class="text-sm font-semibold text-dark pr-4">Saya tidak punya desain, bisa dibantu?</span>
          <i class="fas fa-chevron-down text-muted text-xs faq-chevron flex-shrink-0"></i>
        </button>
        <div class="faq-answer px-5 pb-5"><p class="text-sm text-muted leading-relaxed">Tentu! Centang "Butuh Bantuan Desain" lalu kirimkan konsep, logo, atau referensi. Tim desain kami buatkan gratis.</p></div>
      </div>
      <div class="faq-item rounded-xl bg-surface overflow-hidden">
        <button class="w-full flex items-center justify-between p-5 text-left" onclick="this.closest('.faq-item').classList.toggle('open')">
          <span class="text-sm font-semibold text-dark pr-4">Berapa lama proses produksinya?</span>
          <i class="fas fa-chevron-down text-muted text-xs faq-chevron flex-shrink-0"></i>
        </button>
        <div class="faq-answer px-5 pb-5"><p class="text-sm text-muted leading-relaxed">5–10 hari kerja setelah desain di-approve, tergantung jumlah dan kompleksitas.</p></div>
      </div>
      <div class="faq-item rounded-xl bg-surface overflow-hidden">
        <button class="w-full flex items-center justify-between p-5 text-left" onclick="this.closest('.faq-item').classList.toggle('open')">
          <span class="text-sm font-semibold text-dark pr-4">Minimum order berapa pcs?</span>
          <i class="fas fa-chevron-down text-muted text-xs faq-chevron flex-shrink-0"></i>
        </button>
        <div class="faq-answer px-5 pb-5"><p class="text-sm text-muted leading-relaxed">100 pcs per ukuran per warna. Di bawah itu silakan hubungi kami untuk penawaran khusus.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-16 md:py-20 text-white text-center relative z-10" style="background:linear-gradient(145deg,#1e3a5f 0%,#0f2440 100%)">
  <div class="max-w-3xl mx-auto px-6">
    <h2 class="text-2xl md:text-4xl font-extrabold tracking-tight mb-4 leading-tight">Masih Bingung<br>Dengan Desain Anda?</h2>
    <p class="text-white/60 text-base mb-8 max-w-lg mx-auto">Konsultasikan gratis sekarang. Tim kami siap membantu dari nol.</p>
    <div class="flex flex-wrap justify-center gap-3">
      <a href="https://wa.me/6285221692902" target="_blank" class="inline-flex items-center gap-2 bg-accent text-primary font-bold px-7 py-3.5 rounded-xl hover:bg-[#d4b76a] transition-all shadow-lg shadow-accent/20 text-sm"><i class="fab fa-whatsapp text-lg"></i>Konsultasi Gratis</a>
      <a href="https://shopee.co.id/TAS_SOUVENIR" target="_blank" rel="noopener" class="inline-flex items-center gap-2 bg-shopee text-white font-bold px-7 py-3.5 rounded-xl hover:bg-[#D73211] transition-all shadow-lg shadow-shopee/20 text-sm"><i class="fas fa-bag-shopping text-sm"></i>Belanja di Shopee</a>
    </div>
  </div>
</section>
</main>

<!-- Footer -->
<footer class="bg-dark text-white">
  <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16">
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-8">
      <div>
        <a href="index.php" class="flex items-center gap-2.5 mb-5"><div class="w-9 h-9 bg-primary rounded-lg flex items-center justify-center"><i class="fas fa-bag-shopping text-white text-sm"></i></div><span class="text-xl font-bold tracking-tight">Tas<span class="text-accent">Souvenir</span></span></a>
        <p class="text-gray-400 text-sm leading-relaxed mb-5">Spesialis pembuatan tas custom dan sablon berkualitas untuk berbagai kebutuhan souvenir dan promosi.</p>
        <p class="text-gray-500 text-xs">&copy; 2025 TasSouvenir. All rights reserved.</p>
      </div>
      <div><h4 class="text-sm font-bold uppercase tracking-wider mb-5 text-white">Navigasi</h4><ul class="space-y-3"><li><a href="index.php" class="text-gray-400 text-sm hover:text-accent transition-colors">Beranda</a></li><li><a href="index.php#produk" class="text-gray-400 text-sm hover:text-accent transition-colors">Produk</a></li><li><a href="index.php#layanan" class="text-gray-400 text-sm hover:text-accent transition-colors">Layanan</a></li><li><a href="index.php#tentang" class="text-gray-400 text-sm hover:text-accent transition-colors">Tentang Kami</a></li><li><a href="index.php#kontak" class="text-gray-400 text-sm hover:text-accent transition-colors">Kontak</a></li></ul></div>
      <div><h4 class="text-sm font-bold uppercase tracking-wider mb-5 text-white">Produk</h4><ul class="space-y-3"><li><a href="warnatas.php" class="text-gray-400 text-sm hover:text-accent transition-colors">Pilihan Warna</a></li><li><a href="ukuran.php" class="text-gray-400 text-sm hover:text-accent transition-colors">Pilihan Ukuran</a></li><li><a href="custom.php" class="text-gray-400 text-sm hover:text-accent transition-colors">Custom Tas 3D</a></li><li><a href="ukuran.php" class="text-gray-400 text-sm hover:text-accent transition-colors">Goodie Bag</a></li><li><a href="ukuran.php" class="text-gray-400 text-sm hover:text-accent transition-colors">Tas Box</a></li></ul></div>
      <div><h4 class="text-sm font-bold uppercase tracking-wider mb-5 text-white">Kontak</h4><ul class="space-y-3"><li class="flex items-start gap-2.5"><i class="fas fa-map-marker-alt text-accent text-xs mt-1.5 flex-shrink-0"></i><span class="text-gray-400 text-sm leading-relaxed">Kiaracondong, Sukapura, Jl. Salak Gang Jambu RT05/RW01 No.49</span></li><li class="flex items-center gap-2.5"><i class="fas fa-phone text-accent text-xs flex-shrink-0"></i><span class="text-gray-400 text-sm">+62 852-2169-2902</span></li><li class="flex items-center gap-2.5"><i class="fas fa-envelope text-accent text-xs flex-shrink-0"></i><span class="text-gray-400 text-sm">fardanapriansyah10@gmail.com</span></li></ul></div>
    </div>
  </div>
  <div class="border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-5 flex flex-col sm:flex-row items-center justify-between gap-3">
      <p class="text-gray-500 text-xs">Dibuat dengan <i class="fas fa-heart text-accent text-[10px]"></i> di Bandung</p>
      <div class="flex items-center gap-4">
        <a href="#" class="text-gray-500 hover:text-accent transition-colors"><i class="fab fa-instagram text-sm"></i></a>
        <a href="#" class="text-gray-500 hover:text-accent transition-colors"><i class="fab fa-facebook-f text-sm"></i></a>
        <a href="#" class="text-gray-500 hover:text-accent transition-colors"><i class="fab fa-tiktok text-sm"></i></a>
        <a href="https://shopee.co.id/TAS_SOUVENIR" target="_blank" class="text-shopee hover:text-[#ff6b4a] transition-colors"><i class="fas fa-bag-shopping text-sm"></i></a>
      </div>
    </div>
  </div>
</footer>

<!-- Floating Buttons -->
<a href="https://wa.me/6285221692902" target="_blank" class="wa-float fixed bottom-6 left-6 bg-[#25D366] text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg z-50 hover:scale-110 transition-transform"><i class="fab fa-whatsapp text-2xl"></i></a>
<a href="https://shopee.co.id/TAS_SOUVENIR" target="_blank" rel="noopener" class="fixed bottom-6 right-6 bg-shopee text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg z-50 hover:scale-110 transition-transform" style="box-shadow:0 4px 14px rgba(238,77,45,.4)"><i class="fas fa-bag-shopping text-xl"></i></a>

<!-- Three.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.js"></script>

<script>
// ============================================================
// 3D TAS SPUNBOND REALISTIC - 360° ROTATE
// ============================================================

(function() {
  'use strict';

  // ---------- STATE ----------
  var selectedColor = '#2196F3';
  var selectedColorName = 'Biru';
  var selectedSize = null;
  var selectedSizeName = 'TLS 25 — 25 × 35 × 8 cm';
  var selectedPos = 'depan';
  var colorCount = 1;
  var handleExtra = 0;
  var uploadedFile = null;
  var hasDesign = false;

  // ---------- DATA ----------
  var COLORS = [
    {name:'Oranye',code:'#FF9800'},{name:'Biru',code:'#2196F3'},{name:'Merah',code:'#F44336'},
    {name:'Hijau',code:'#4CAF50'},{name:'Kuning',code:'#FFEB3B'},{name:'Ungu',code:'#9C27B0'},
    {name:'Pink',code:'#E91E63'},{name:'Abu-abu',code:'#9E9E9E'},{name:'Putih',code:'#FFFFFF'},
    {name:'Hitam',code:'#212121'},{name:'Navy',code:'#0D47A1'},{name:'Maroon',code:'#B71C1C'},
    {name:'Tosca',code:'#00BFA5'},{name:'Cokelat',code:'#5D4037'},
    {name:'Cream',code:'#FFF9C4'},{name:'Orange Tua',code:'#E65100'}
  ];

  var SIZES = [
    {name:'TLS 20',size:'20 × 25 × 8 cm',base:2200},
    {name:'TLS 25',size:'25 × 35 × 8 cm',base:3500},
    {name:'TLS 30',size:'30 × 40 × 10 cm',base:4200},
    {name:'TLS 35',size:'35 × 40 × 10 cm',base:4500},
    {name:'TLS 40',size:'40 × 45 × 12 cm',base:5500},
    {name:'TLS 45',size:'45 × 50 × 12 cm',base:6200},
    {name:'TLS 50',size:'50 × 55 × 15 cm',base:7200},
    {name:'TLS 60',size:'60 × 70 × 20 cm',base:9000}
  ];

  // ---------- THREE.JS ----------
  var container = document.getElementById('three-container');
  var loadingOverlay = document.getElementById('loadingOverlay');

  var scene, camera, renderer, controls;
  var bagGroup;
  var designMesh;
  var isInitialized = false;

  function init3D() {
    var width = container.clientWidth;
    var height = container.clientHeight;

    scene = new THREE.Scene();
    scene.background = new THREE.Color(0xf0f2f5);

    camera = new THREE.PerspectiveCamera(32, width / height, 0.1, 20);
    camera.position.set(4.2, 2.8, 6.8);
    camera.lookAt(0, 0.3, 0);

    renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setSize(width, height);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    renderer.shadowMap.enabled = true;
    renderer.shadowMap.type = THREE.PCFSoftShadowMap;
    renderer.toneMapping = THREE.ACESFilmicToneMapping;
    renderer.toneMappingExposure = 1.1;
    container.appendChild(renderer.domElement);

    controls = new THREE.OrbitControls(camera, renderer.domElement);
    controls.enableDamping = true;
    controls.dampingFactor = 0.08;
    controls.autoRotate = true;
    controls.autoRotateSpeed = 2.0;
    controls.minDistance = 3;
    controls.maxDistance = 12;
    controls.target.set(0, 0.3, 0);
    controls.update();

    // LIGHTS
    var ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
    scene.add(ambientLight);

    var mainLight = new THREE.DirectionalLight(0xffffff, 1.0);
    mainLight.position.set(6, 10, 8);
    mainLight.castShadow = true;
    mainLight.shadow.mapSize.width = 1024;
    mainLight.shadow.mapSize.height = 1024;
    scene.add(mainLight);

    var fillLight = new THREE.DirectionalLight(0x8ecae6, 0.4);
    fillLight.position.set(-5, 4, -6);
    scene.add(fillLight);

    var rimLight = new THREE.DirectionalLight(0xffd6a5, 0.3);
    rimLight.position.set(-3, 2, 7);
    scene.add(rimLight);

    var hemiLight = new THREE.HemisphereLight(0x87ceeb, 0x3a3a3a, 0.4);
    scene.add(hemiLight);

    buildBag();

    isInitialized = true;
    loadingOverlay.classList.add('hidden');

    window.addEventListener('resize', onResize);
    animate();

    var idleTimer;
    renderer.domElement.addEventListener('pointerdown', function() {
      controls.autoRotate = false;
      clearTimeout(idleTimer);
    });
    renderer.domElement.addEventListener('pointerup', function() {
      idleTimer = setTimeout(function() {
        controls.autoRotate = true;
      }, 4000);
    });
    setTimeout(function() {
      controls.autoRotate = true;
    }, 2000);

    console.log('✅ 3D Tas Realistic initialized');
  }

  // ===== BUILD REALISTIC BAG =====
  function buildBag() {
    if (bagGroup) {
      scene.remove(bagGroup);
    }

    bagGroup = new THREE.Group();

    var color = new THREE.Color(selectedColor);
    var darkColor = new THREE.Color(selectedColor).multiplyScalar(0.65);
    var lightColor = new THREE.Color(selectedColor).multiplyScalar(1.15);

    // ---- MAIN BODY (Box dengan rounded feel) ----
    var bodyMat = new THREE.MeshPhysicalMaterial({
      color: color,
      roughness: 0.6,
      metalness: 0.02,
      clearcoat: 0.05,
      clearcoatRoughness: 0.3,
      side: THREE.DoubleSide,
    });

    var bodyGeo = new THREE.BoxGeometry(2.6, 1.8, 0.8);
    var body = new THREE.Mesh(bodyGeo, bodyMat);
    body.position.y = 0.5;
    body.castShadow = true;
    body.receiveShadow = true;
    bagGroup.add(body);

    // ---- GUSSET (Sisi lipatan) ----
    var gussetMat = new THREE.MeshPhysicalMaterial({
      color: darkColor,
      roughness: 0.8,
      metalness: 0,
      side: THREE.DoubleSide,
    });

    // Gusset kiri
    var gussetL = new THREE.Mesh(new THREE.BoxGeometry(0.08, 1.6, 0.6), gussetMat);
    gussetL.position.set(-1.26, 0.5, 0);
    bagGroup.add(gussetL);

    // Gusset kanan
    var gussetR = new THREE.Mesh(new THREE.BoxGeometry(0.08, 1.6, 0.6), gussetMat);
    gussetR.position.set(1.26, 0.5, 0);
    bagGroup.add(gussetR);

    // ---- LIPATAN BAWAH ----
    var foldMat = new THREE.MeshPhysicalMaterial({
      color: darkColor,
      roughness: 0.9,
      metalness: 0,
    });
    var foldBottom = new THREE.Mesh(new THREE.BoxGeometry(2.4, 0.06, 0.5), foldMat);
    foldBottom.position.set(0, -0.35, 0);
    bagGroup.add(foldBottom);

    // ---- LIPATAN ATAS ----
    var foldTop = new THREE.Mesh(new THREE.BoxGeometry(2.4, 0.06, 0.5), foldMat);
    foldTop.position.set(0, 1.35, 0);
    bagGroup.add(foldTop);

    // ---- TALI (lebih realistik) ----
    var handleMat = new THREE.MeshPhysicalMaterial({
      color: darkColor,
      roughness: 0.8,
      metalness: 0,
    });

    // Tali kiri
    var ptsL = [];
    for (var t = 0; t <= 1; t += 0.05) {
      var angle = t * Math.PI;
      var x = -0.6 + 1.2 * t;
      var y = 1.2 + 1.0 * Math.sin(angle) * 0.8;
      var z = 0.1 * Math.sin(angle * 2);
      ptsL.push(new THREE.Vector3(x, y, z));
    }
    var curveL = new THREE.CatmullRomCurve3(ptsL);
    var handleL = new THREE.Mesh(new THREE.TubeGeometry(curveL, 20, 0.045, 8, false), handleMat);
    handleL.castShadow = true;
    bagGroup.add(handleL);

    // Tali kanan
    var ptsR = ptsL.map(function(p) {
      return new THREE.Vector3(p.x, p.y, -p.z);
    });
    var curveR = new THREE.CatmullRomCurve3(ptsR);
    var handleR = new THREE.Mesh(new THREE.TubeGeometry(curveR, 20, 0.045, 8, false), handleMat);
    handleR.castShadow = true;
    bagGroup.add(handleR);

    // ---- DESIGN MESH (depan) ----
    var designGeo = new THREE.PlaneGeometry(2.0, 1.4);
    var designMat = new THREE.MeshPhysicalMaterial({
      color: 0xffffff,
      roughness: 0.3,
      metalness: 0,
      transparent: true,
      opacity: 0,
      side: THREE.DoubleSide,
      map: null,
    });
    designMesh = new THREE.Mesh(designGeo, designMat);
    designMesh.position.set(0, 0.5, 0.41);
    designMesh.renderOrder = 1;
    bagGroup.add(designMesh);

    // ---- JAHITAN DEKORASI ----
    var stitchMat = new THREE.MeshPhysicalMaterial({
      color: darkColor,
      transparent: true,
      opacity: 0.12,
      roughness: 1,
    });

    var stitchPositions = [
      {x: 0, y: 1.05, z: 0.41},
      {x: 0, y: -0.05, z: 0.41},
      {x: -1.0, y: 0.5, z: 0.41},
      {x: 1.0, y: 0.5, z: 0.41},
    ];

    stitchPositions.forEach(function(pos) {
      var isVertical = Math.abs(pos.x) > 0.5;
      var stitch = new THREE.Mesh(
        new THREE.BoxGeometry(isVertical ? 0.02 : 2.2, isVertical ? 1.2 : 0.02, 0.01),
        stitchMat
      );
      stitch.position.set(pos.x, pos.y, pos.z);
      bagGroup.add(stitch);
    });

    scene.add(bagGroup);
  }

  // ===== UPDATE FUNCTIONS =====
  function updateColor(colorHex) {
    selectedColor = colorHex;
    var color = new THREE.Color(colorHex);
    var darkColor = new THREE.Color(colorHex).multiplyScalar(0.65);

    bagGroup.children.forEach(function(child) {
      if (child.isMesh && child.material && child !== designMesh) {
        var mats = Array.isArray(child.material) ? child.material : [child.material];
        mats.forEach(function(mat) {
          if (mat.color && !mat.map) {
            if (child.position.y > 1.0 && child.geometry.type === 'TubeGeometry') {
              mat.color.set(darkColor);
            } else if (child.position.x < -0.5 || child.position.x > 0.5) {
              if (child.geometry.parameters && child.geometry.parameters.width < 0.1) {
                mat.color.set(darkColor);
              } else {
                mat.color.set(color);
              }
            } else {
              mat.color.set(color);
            }
          }
        });
      }
    });

    document.getElementById('colorDotPreview').style.backgroundColor = colorHex;
    document.getElementById('colorNamePreview').textContent = selectedColorName;
  }

  function updateDesign(imgDataUrl) {
    if (!designMesh) return;

    var textureLoader = new THREE.TextureLoader();
    var texture = textureLoader.load(imgDataUrl, function(tex) {
      tex.encoding = THREE.sRGBEncoding;
      tex.needsUpdate = true;
      
      designMesh.material.map = tex;
      designMesh.material.opacity = 1.0;
      designMesh.material.transparent = false;
      designMesh.material.color.set(0xffffff);
      designMesh.material.needsUpdate = true;
      
      hasDesign = true;
      document.getElementById('designStatus').innerHTML = '<i class="fas fa-check-circle text-green-500 mr-1"></i>Desain 3D terpasang ✅';
      document.getElementById('designStatus').className = 'text-xs text-green-600 ml-2 font-medium';
      
      showToast('✅ Desain berhasil diterapkan ke tas 3D!', 'success');
    });
  }

  function onResize() {
    if (!container) return;
    var width = container.clientWidth;
    var height = container.clientHeight;
    camera.aspect = width / height;
    camera.updateProjectionMatrix();
    renderer.setSize(width, height);
  }

  function animate() {
    requestAnimationFrame(animate);
    controls.update();
    renderer.render(scene, camera);
  }

  function initWhenReady() {
    if (document.getElementById('three-container').offsetWidth > 0) {
      init3D();
    } else {
      setTimeout(initWhenReady, 200);
    }
  }

  if (document.readyState === 'complete') {
    setTimeout(initWhenReady, 100);
  } else {
    window.addEventListener('load', function() {
      setTimeout(initWhenReady, 200);
    });
  }

  // ===== EXPOSE FUNCTIONS =====
  window.pickColor = function(idx) {
    var color = COLORS[idx];
    selectedColorName = color.name;
    document.querySelectorAll('.color-sw').forEach(function(el, i) {
      el.classList.toggle('active', i === idx);
    });
    updateColor(color.code);
    updateEstimate();
  };

  window.pickSize = function(idx) {
    var size = SIZES[idx];
    selectedSize = size;
    selectedSizeName = size.name + ' — ' + size.size;
    document.querySelectorAll('.size-pill').forEach(function(el, i) {
      el.classList.toggle('active', i === idx);
    });
    document.getElementById('customSizeCheck').checked = false;
    document.getElementById('customSizeFields').classList.add('hidden');
    document.getElementById('sizeNamePreview').textContent = selectedSizeName;
    updateEstimate();
  };

  window.toggleCustomSize = function() {
    var check = document.getElementById('customSizeCheck');
    var fields = document.getElementById('customSizeFields');
    fields.classList.toggle('hidden', !check.checked);
    if (check.checked) {
      document.querySelectorAll('.size-pill').forEach(function(el) {
        el.classList.remove('active');
      });
      selectedSize = null;
      selectedSizeName = 'Custom';
      document.getElementById('sizeNamePreview').textContent = 'Custom Size';
      updateEstimate();
    } else {
      pickSize(1);
    }
  };

  window.selectPos = function(pos) {
    selectedPos = pos;
    document.querySelectorAll('.pos-btn').forEach(function(el) {
      el.classList.toggle('active', el.getAttribute('data-pos') === pos);
    });
    updateEstimate();
  };

  window.selectColorCount = function(n) {
    colorCount = n;
    document.querySelectorAll('.cc-btn').forEach(function(el, i) {
      el.className = 'cc-btn text-[11px] font-semibold py-2.5 rounded-lg border-2 transition-all ' + 
        (i === n - 1 ? 'border-primary bg-primary/5 text-primary' : 'border-border-soft text-muted hover:border-gray-300');
    });
    updateEstimate();
  };

  window.selectHandle = function(type) {
    handleExtra = type === 'kur' ? 1500 : 0;
    document.getElementById('handleSpunbond').className = 'handle-btn text-[11px] font-semibold py-2.5 rounded-xl border-2 transition-all ' + 
      (type === 'spunbond' ? 'border-primary bg-primary/5 text-primary' : 'border-border-soft text-muted hover:border-gray-300');
    document.getElementById('handleKur').className = 'handle-btn text-[11px] font-semibold py-2.5 rounded-xl border-2 transition-all ' + 
      (type === 'kur' ? 'border-primary bg-primary/5 text-primary' : 'border-border-soft text-muted hover:border-gray-300');
    updateEstimate();
  };

  window.changeQty = function(delta) {
    var input = document.getElementById('qtyInput');
    var val = parseInt(input.value) || 100;
    val = Math.max(100, val + delta);
    val = Math.ceil(val / 50) * 50;
    input.value = val;
    updateEstimate();
  };

  // ===== FILE UPLOAD =====
  window.handleFile = function(e) {
    if (e.target.files.length) {
      processFile(e.target.files[0]);
    }
  };

  function processFile(file) {
    if (file.size > 10 * 1024 * 1024) {
      showToast('⚠️ Ukuran file maksimal 10MB', 'error');
      return;
    }
    
    if (!file.type.startsWith('image/')) {
      showToast('⚠️ Hanya file gambar (PNG/JPG) yang bisa dipreview 3D', 'error');
      return;
    }
    
    uploadedFile = file;
    
    var reader = new FileReader();
    reader.onload = function(e) {
      var imgData = e.target.result;
      updateDesign(imgData);
      
      document.getElementById('uploadZone').classList.add('has-file');
      document.getElementById('uploadedPreview').classList.remove('hidden');
      document.getElementById('fileInfo').classList.remove('hidden');
      document.getElementById('fileName').textContent = file.name + ' (' + (file.size / 1024).toFixed(1) + ' KB)';
      document.getElementById('uploadedImg').src = imgData;
    };
    reader.readAsDataURL(file);
  }

  window.removeFile = function() {
    uploadedFile = null;
    hasDesign = false;
    document.getElementById('fileInput').value = '';
    document.getElementById('uploadZone').classList.remove('has-file');
    document.getElementById('uploadedPreview').classList.add('hidden');
    document.getElementById('fileInfo').classList.add('hidden');
    document.getElementById('uploadedImg').src = '';
    
    if (designMesh) {
      designMesh.material.map = null;
      designMesh.material.opacity = 0;
      designMesh.material.needsUpdate = true;
    }
    
    document.getElementById('designStatus').innerHTML = '<i class="fas fa-image mr-1"></i>Belum ada desain';
    document.getElementById('designStatus').className = 'text-xs text-muted ml-2';
    showToast('🗑️ Desain dihapus', 'info');
  };

  // ===== ESTIMASI =====
  function updateEstimate() {
    var base = selectedSize ? selectedSize.base : 3500;
    var qty = Math.max(100, parseInt(document.getElementById('qtyInput').value) || 100);
    var tier = qty >= 1000 ? 3 : qty >= 500 ? 2 : qty >= 300 ? 1 : 0;
    var mult = [1, 0.85, 0.74, 0.63][tier];
    var posExtra = selectedPos === 'dua-sisi' ? 1500 : 0;
    var colorExtra = (colorCount - 1) * 1000;
    var price = Math.round(base * mult) + posExtra + colorExtra + handleExtra;
    document.getElementById('estPrice').textContent = 'Rp ' + price.toLocaleString('id-ID') + '/pcs';
    document.getElementById('estQty').textContent = qty.toLocaleString('id-ID') + ' pcs';
    document.getElementById('estTotal').textContent = 'Rp ' + (price * qty).toLocaleString('id-ID');
  }

  // ===== SUBMIT =====
  window.submitOrder = function() {
    var name = document.getElementById('custName').value.trim();
    var phone = document.getElementById('custPhone').value.trim();
    
    if (!name) { showToast('⚠️ Nama lengkap wajib diisi', 'error'); document.getElementById('custName').focus(); return; }
    if (!phone || phone.length < 10) { showToast('⚠️ Nomor WhatsApp tidak valid', 'error'); document.getElementById('custPhone').focus(); return; }
    
    var email = document.getElementById('custEmail').value.trim();
    var notes = document.getElementById('custNotes').value.trim();
    var needDesign = document.getElementById('needDesign').checked;
    var qty = parseInt(document.getElementById('qtyInput').value) || 100;
    
    var sizeDisplay = selectedSizeName;
    if (document.getElementById('customSizeCheck').checked) {
      var cp = parseInt(document.getElementById('customP').value) || 0;
      var ct = parseInt(document.getElementById('customT').value) || 0;
      var cg = parseInt(document.getElementById('customG').value) || 0;
      if (cp < 10 || ct < 10) { showToast('⚠️ Masukkan ukuran custom yang valid (min 10cm)', 'error'); return; }
      sizeDisplay = cp + ' × ' + ct + (cg > 0 ? ' × ' + cg : '') + ' cm (Custom)';
    }
    
    var fileInfo = uploadedFile ? '✅ ' + uploadedFile.name + ' (' + (uploadedFile.size / 1024).toFixed(1) + ' KB)' : '❌ Tidak ada file';
    
    var msg = 
      'Halo TasSouvenir, saya ingin memesan TAS CUSTOM 3D:\n\n' +
      '📋 *DETAIL PESANAN*\n' +
      '━━━━━━━━━━━━━━━━━━━━━\n' +
      '🎨 *Warna Tas:* ' + selectedColorName + '\n' +
      '📏 *Ukuran:* ' + sizeDisplay + '\n' +
      '🖨️ *Posisi Sablon:* ' + (selectedPos === 'depan' ? 'Depan' : selectedPos === 'belakang' ? 'Belakang' : 'Dua Sisi') + '\n' +
      '🎯 *Jumlah Warna Sablon:* ' + colorCount + ' warna\n' +
      '📦 *Jumlah Pesanan:* ' + qty.toLocaleString('id-ID') + ' pcs\n' +
      '🔗 *Tali:* ' + (handleExtra > 0 ? 'Tali Kur (+Rp 1.500/pcs)' : 'Tali Spunbond') + '\n' +
      '📎 *File Desain:* ' + fileInfo + '\n' +
      (needDesign ? '🎨 *Butuh Bantuan Desain:* ✅ Ya\n' : '') +
      (notes ? '📝 *Catatan:* ' + notes + '\n' : '') +
      '\n👤 *DATA PEMESAN*\n' +
      '━━━━━━━━━━━━━━━━━━━━━\n' +
      'Nama: ' + name + '\n' +
      'WhatsApp: ' + phone + '\n' +
      (email ? 'Email: ' + email + '\n' : '') +
      '\n━━━━━━━━━━━━━━━━━━━━━\n' +
      'Mohon info harga final dan konfirmasi. Terima kasih! 🙏';
    
    var encodedMsg = encodeURIComponent(msg);
    
    var btn = document.getElementById('submitBtn');
    var origHtml = btn.innerHTML;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin text-sm"></i> Membuka WhatsApp...';
    btn.disabled = true;
    
    setTimeout(function() {
      window.open('https://wa.me/6285221692902?text=' + encodedMsg, '_blank');
      setTimeout(function() {
        btn.innerHTML = origHtml;
        btn.disabled = false;
        showToast('✅ Pesanan berhasil dikirim ke WhatsApp!', 'success');
      }, 3000);
    }, 500);
  };

  // ===== TOAST =====
  function showToast(msg, type) {
    var toast = document.getElementById('globalToast');
    var icon = document.getElementById('toastIcon');
    var msgEl = document.getElementById('toastMsg');
    
    var colors = {
      success: { bg: 'bg-green-500', icon: 'fa-check' },
      error: { bg: 'bg-red-500', icon: 'fa-exclamation' },
      info: { bg: 'bg-blue-500', icon: 'fa-info' }
    };
    
    var c = colors[type] || colors.info;
    icon.className = 'w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0 ' + c.bg;
    icon.innerHTML = '<i class="fas ' + c.icon + ' text-white text-xs"></i>';
    msgEl.textContent = msg;
    
    toast.classList.remove('hidden');
    clearTimeout(toast._timer);
    toast._timer = setTimeout(function() { toast.classList.add('hidden'); }, 3500);
    toast.onclick = function() { toast.classList.add('hidden'); clearTimeout(toast._timer); };
  }
  window.showToast = showToast;

  // ===== RENDER UI =====
  function renderColors() {
    var grid = document.getElementById('colorGrid');
    grid.innerHTML = '';
    COLORS.forEach(function(c, i) {
      var isActive = i === 1 ? ' active' : '';
      var border = (c.code === '#FFFFFF' || c.code === '#FFF9C4' || c.code === '#FFEB3B') ? 'border border-gray-200' : '';
      grid.innerHTML += 
        '<div class="color-sw rounded-xl p-2 bg-surface text-center' + isActive + '" onclick="pickColor(' + i + ')">' +
          '<div class="relative w-9 h-9 rounded-full mx-auto mb-1 ' + border + '" style="background:' + c.code + '">' +
            '<div class="sw-tick absolute inset-0 rounded-full bg-primary/25 flex items-center justify-center">' +
              '<i class="fas fa-check text-white text-[8px] drop-shadow"></i>' +
            '</div>' +
          '</div>' +
          '<p class="text-[10px] font-medium text-dark leading-tight">' + c.name + '</p>' +
        '</div>';
    });
  }

  function renderSizes() {
    var grid = document.getElementById('sizeGrid');
    grid.innerHTML = '';
    SIZES.forEach(function(s, i) {
      var isActive = i === 1 ? ' active' : '';
      grid.innerHTML += 
        '<div class="size-pill rounded-xl p-3.5 bg-white text-center' + isActive + '" onclick="pickSize(' + i + ')">' +
          '<div class="text-[10px] text-muted font-semibold">' + s.name + '</div>' +
          '<div class="text-[12px] font-bold text-dark leading-tight">' + s.size + '</div>' +
          '<div class="text-primary font-extrabold text-sm mt-1">Rp ' + s.base.toLocaleString('id-ID') + '</div>' +
        '</div>';
    });
  }

  // ===== SHOPEE BAR =====
  (function() {
    var bar = document.getElementById('shopeeBar');
    var header = document.getElementById('mainHeader');
    var main = document.querySelector('main');
    var dismissed = localStorage.getItem('shopeeBarDismissed') === 'true' && 
                    localStorage.getItem('shopeeBarDismissedAt') && 
                    (Date.now() - parseInt(localStorage.getItem('shopeeBarDismissedAt')) < 86400000);
    
    if (dismissed) {
      bar.classList.add('bar-hidden');
      header.classList.remove('header-with-bar');
      header.classList.add('header-no-bar');
      main.classList.remove('hero-with-bar');
      main.classList.add('hero-no-bar');
    }
    
    document.getElementById('closeShopeeBar').addEventListener('click', function() {
      bar.classList.add('bar-hidden');
      header.classList.remove('header-with-bar');
      header.classList.add('header-no-bar');
      main.classList.remove('hero-with-bar');
      main.classList.add('hero-no-bar');
      localStorage.setItem('shopeeBarDismissed', 'true');
      localStorage.setItem('shopeeBarDismissedAt', Date.now().toString());
    });
  })();

  // ===== SCROLL =====
  window.addEventListener('scroll', function() {
    var scroll = window.scrollY;
    var height = document.documentElement.scrollHeight - window.innerHeight;
    document.getElementById('scrollProgress').style.width = (scroll / height * 100) + '%';
    document.getElementById('mainHeader').classList.toggle('header-scrolled', scroll > 20);
  });

  // ===== MOBILE MENU =====
  document.getElementById('menuToggle').addEventListener('click', function() {
    var menu = document.getElementById('mobileMenu');
    var icon = document.getElementById('menuIcon');
    var hidden = menu.classList.toggle('hidden');
    icon.className = hidden ? 'fas fa-bars text-dark text-lg' : 'fas fa-xmark text-dark text-lg';
  });

  // ===== DRAG & DROP =====
  var zone = document.getElementById('uploadZone');
  zone.addEventListener('dragover', function(e) {
    e.preventDefault();
    this.classList.add('drag-over');
  });
  zone.addEventListener('dragleave', function(e) {
    e.preventDefault();
    this.classList.remove('drag-over');
  });
  zone.addEventListener('drop', function(e) {
    e.preventDefault();
    this.classList.remove('drag-over');
    if (e.dataTransfer.files.length) {
      processFile(e.dataTransfer.files[0]);
    }
  });

  // ===== FAQ =====
  document.querySelectorAll('.faq-item button').forEach(function(btn) {
    btn.addEventListener('click', function() {
      this.closest('.faq-item').classList.toggle('open');
    });
  });

  // ===== QTY =====
  document.getElementById('qtyInput').addEventListener('input', function() {
    var val = parseInt(this.value);
    if (isNaN(val) || val < 100) this.value = 100;
    updateEstimate();
  });

  // ===== INIT =====
  renderColors();
  renderSizes();
  pickSize(1);
  updateEstimate();

  console.log('✅ 3D Custom Tas Spunbond Realistic - READY!');
  console.log('🎨 Klik warna untuk mengubah warna tas');
  console.log('📤 Upload gambar untuk live preview 3D');
  console.log('🔄 Seret untuk memutar tas 360°');

})();
</script>

</body>
</html>