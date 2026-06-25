<?php
// =============================================
// CONFIGURATION — Edit these to your details
// =============================================
$config = [
    'brand_name'    => 'Bin Shahzad',
    'brand_name2'   => 'Fashions',
    'tagline'       => 'Pakistani Brands & Signature Originals · UAE',
    'whatsapp'      => '971551838486',
    'phone'         => '+971 55 183 8486',
    'email'         => 'info@binshahzadfashion.com',
    'address'       => 'Al Ghuwair, Sharjah, United Arab Emirates',
    'instagram'     => 'https://www.instagram.com/binshahzadfashion',
    'facebook'      => 'https://www.facebook.com/BinShahzadFashions',
    'youtube'       => 'https://www.youtube.com/@BinshahzadFashion',
    'tiktok'        => 'https://tiktok.com/@bin_shahzad_uae',
    'location'      => 'Al Ghuwair, Sharjah, United Arab Emirates',
    'sells'         => 'Pakistani clothes from brands and self branding too like shalwaar kameez, eid dresses, event dresses on events like eid ramadan and all',
    'year'          => date('Y'),
];

// Simple contact form handler
$formMessage = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    if ($name && $email && $message) {
        // TODO: mail($config['email'], "New Enquiry from $name", $message, "From: $email");
        $formMessage = 'success';
    } else {
        $formMessage = 'error';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Bin Shahzad Fashions — Pakistani clothes from top brands and our own signature shalwar kameez, Eid dresses, event wear and Ramadan pieces in Sharjah. Browse the display catalog and order via WhatsApp or visit our store.">
<meta name="keywords" content="Pakistani clothes UAE, shalwar kameez Sharjah, Eid dresses UAE, Ramadan collection UAE, Pakistani brands UAE, eastern wear Sharjah, Bin Shahzad Fashions">
<meta property="og:title" content="Bin Shahzad Fashions | <?= $config['tagline'] ?>">
<meta property="og:description" content="Display catalog for Pakistani brands and our own originals — Eid, Ramadan, bridal and event wear. Visit our Sharjah store or order through WhatsApp.">
<meta property="og:type" content="website">
<meta property="og:image" content="images/logo.png">
<title>Bin Shahzad Fashions | <?= $config['tagline'] ?></title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600&family=Jost:wght@200;300;400;500&family=Noto+Nastaliq+Urdu:wght@400;700&display=swap" rel="stylesheet">
<link rel="icon" href="images/logo.png" type="image/png">

<style>
/* =========================================
   CSS VARIABLES & RESET
   ========================================= */
:root {
  --bg:          #FAF8F3;
  --bg-card:     #F2EFE8;
  --bg-glass:    rgba(250,248,243,0.92);
  --crimson:     #A8385E;
  --crimson-lt:  #D94878;
  --gold:        #B8860B;
  --gold-lt:     #D4A017;
  --gold-pale:   rgba(184,134,11,0.12);
  --emerald:     #2E7D5C;
  --cream:       #2B2420;
  --cream-dim:   #5C5047;
  --text:        #1F1A15;
  --text-muted:  #6B6159;
  --border:      rgba(184,134,11,0.18);
  --ff-display:  'Cormorant Garamond', Georgia, serif;
  --ff-body:     'Jost', sans-serif;
  --ff-urdu:     'Noto Nastaliq Urdu', serif;
  --ease-silk:   cubic-bezier(0.25, 0.46, 0.45, 0.94);
  --transition:  0.4s var(--ease-silk);
}

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

html { scroll-behavior: smooth; font-size: 16px; }

body {
  position: relative;
  background: var(--bg);
  color: var(--text);
  font-family: var(--ff-body);
  font-weight: 300;
  line-height: 1.7;
  overflow-x: hidden;
  cursor: default;
}

body::before {
  content: '';
  position: fixed;
  inset: 0;
  pointer-events: none;
  z-index: -1;
  background: radial-gradient(circle at center, transparent 58%, rgba(0,0,0,0.48) 100%);
}

::-webkit-scrollbar { width: 4px; }
::-webkit-scrollbar-track { background: var(--bg); }
::-webkit-scrollbar-thumb { background: var(--gold); border-radius: 2px; }

a { text-decoration: none; color: inherit; }
img { display: block; max-width: 100%; }
ul { list-style: none; }

/* =========================================
   ORNAMENTAL PATTERNS
   ========================================= */
.section-label {
  font-family: var(--ff-body);
  font-weight: 400;
  font-size: 0.68rem;
  letter-spacing: 0.35em;
  text-transform: uppercase;
  color: var(--gold);
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: 16px;
}
.section-label::before,
.section-label::after {
  content: '';
  flex: 1;
  height: 1px;
  background: linear-gradient(to right, transparent, var(--gold));
  max-width: 60px;
}
.section-label::after { background: linear-gradient(to left, transparent, var(--gold)); }

.section-title {
  font-family: var(--ff-display);
  font-size: clamp(2rem, 4vw, 3.2rem);
  font-weight: 400;
  line-height: 1.15;
  color: var(--cream);
}
.section-title em {
  font-style: italic;
  color: var(--gold-lt);
}

/* =========================================
   ANNOUNCEMENT BAR
   ========================================= */
.announce-bar {
  background: linear-gradient(90deg, var(--crimson), #6B0F22, var(--crimson));
  text-align: center;
  padding: 9px 20px;
  font-size: 0.72rem;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--cream);
  overflow: hidden;
  position: relative;
}
.announce-bar span { animation: marquee 28s linear infinite; display: inline-block; white-space: nowrap; }
@keyframes marquee {
  0%   { transform: translateX(60vw); }
  100% { transform: translateX(-100%); }
}

/* =========================================
   HEADER / NAV
   ========================================= */
header {
  position: fixed;
  top: 0; left: 0; right: 0;
  z-index: 1000;
  background: rgba(8,6,10,0.9);
  backdrop-filter: blur(18px) saturate(1.2);
  border-bottom: 1px solid rgba(255,255,255,0.06);
  transition: background var(--transition), backdrop-filter var(--transition), box-shadow var(--transition), border-color var(--transition);
}
header.scrolled {
  background: rgba(8,6,10,0.95);
  backdrop-filter: blur(20px) saturate(1.4);
  box-shadow: 0 1px 0 var(--border);
}

.header-inner {
  max-width: 1300px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  align-items: center;
  padding: 16px 40px;
  gap: 20px;
}

.nav-links { display: flex; gap: 32px; align-items: center; }
.nav-links a {
  font-size: 0.72rem;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: var(--cream-dim);
  transition: color var(--transition);
  position: relative;
}
.nav-links a::after {
  content: '';
  position: absolute;
  bottom: -3px; left: 0;
  width: 0; height: 1px;
  background: var(--gold);
  transition: width var(--transition);
}
.nav-links a:hover { color: var(--gold); }
.nav-links a:hover::after { width: 100%; }

/* Logo badge - light card so logo's dark text shows clearly */
.logo-wrap {
  display: flex;
  justify-content: center;
  align-items: flex-end;
}
.logo-badge {
  background: rgba(255,255,255,0.14);
  border-radius: 14px;
  padding: 10px 20px;
  display: flex;
  align-items: center;
  box-shadow: 0 14px 34px rgba(0,0,0,0.35);
  border: 1px solid rgba(255,255,255,0.1);
  transition: transform var(--transition), background var(--transition), border-color var(--transition);
  margin-top: 8px;
}
.logo-badge:hover { transform: translateY(-1px) scale(1.03); background: rgba(255,255,255,0.18); border-color: rgba(255,255,255,0.15); }
.logo-badge img { height: 88px; width: auto; display: block; }

.nav-right { display: flex; justify-content: flex-end; align-items: center; gap: 16px; }
.social-icon {
  width: 34px; height: 34px;
  border: 1px solid var(--border);
  border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  transition: all var(--transition);
  color: var(--cream);
}
.social-icon:hover {
  border-color: var(--gold);
  color: var(--gold);
  background: var(--gold-pale);
  transform: translateY(-2px);
}
.social-icon svg { width: 14px; height: 14px; fill: currentColor; }

.nav-cta {
  background: linear-gradient(135deg, var(--crimson), var(--crimson-lt));
  color: var(--cream) !important;
  padding: 9px 22px;
  border-radius: 2px;
  font-size: 0.68rem !important;
  letter-spacing: 0.28em !important;
  text-transform: uppercase;
  transition: all var(--transition) !important;
  border: 1px solid transparent !important;
}
.nav-cta:hover {
  background: transparent !important;
  border-color: var(--crimson-lt) !important;
  color: var(--crimson-lt) !important;
}
.nav-cta::after { display: none !important; }

.hamburger {
  display: none;
  flex-direction: column;
  gap: 5px;
  cursor: pointer;
  background: none;
  border: none;
  padding: 4px;
}
.hamburger span { display: block; width: 22px; height: 1.5px; background: var(--cream); transition: all 0.3s; }
.hamburger.active span:nth-child(1) { transform: rotate(45deg) translate(4.7px, 4.7px); }
.hamburger.active span:nth-child(2) { opacity: 0; }
.hamburger.active span:nth-child(3) { transform: rotate(-45deg) translate(4.7px, -4.7px); }

.mobile-menu {
  display: none;
  position: fixed;
  top: 0; left: 0; right: 0; bottom: 0;
  background: rgba(8,6,10,0.97);
  backdrop-filter: blur(20px);
  z-index: 999;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 28px;
  opacity: 0;
  transition: opacity 0.4s;
}
.mobile-menu.open { display: flex; opacity: 1; }
.mobile-menu .logo-badge { margin-bottom: 12px; }
.mobile-menu a {
  font-family: var(--ff-display);
  font-size: 2.2rem;
  font-weight: 300;
  color: var(--cream);
  transition: color 0.3s;
}
.mobile-menu a:hover { color: var(--gold); }
.mobile-menu .m-socials { display: flex; gap: 20px; margin-top: 20px; }

/* =========================================
   SHOWCASE NOTE STRIP
   ========================================= */
.showcase-note {
  background: var(--bg-card);
  border-bottom: 1px solid var(--border);
  text-align: center;
  padding: 10px 20px;
  font-size: 0.72rem;
  letter-spacing: 0.04em;
  color: var(--cream-dim);
  position: relative;
  z-index: 5;
}
.showcase-note strong { color: var(--gold); font-weight: 500; }

/* =========================================
   HERO
   ========================================= */
.hero {
  min-height: 92svh;
  display: grid;
  grid-template-columns: 1fr 1fr;
  position: relative;
  overflow: hidden;
  padding-top: 40px;
}
.hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(circle at 50% 50%, rgba(255,255,255,0.02) 0%, transparent 35%),
    radial-gradient(ellipse 60% 80% at 70% 50%, rgba(155, 29, 58, 0.18) 0%, transparent 60%),
    radial-gradient(ellipse 50% 70% at 20% 80%, rgba(29, 94, 62, 0.12) 0%, transparent 50%),
    radial-gradient(ellipse 40% 40% at 80% 10%, rgba(201,148,58,0.08) 0%, transparent 50%),
    radial-gradient(circle at 50% 50%, transparent 55%, rgba(0,0,0,0.24) 100%);
  pointer-events: none;
}
.hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image:
    linear-gradient(rgba(201,148,58,0.04) 1px, transparent 1px),
    linear-gradient(90deg, rgba(201,148,58,0.04) 1px, transparent 1px);
  background-size: 60px 60px;
  pointer-events: none;
}

.hero-content {
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 60px 80px 60px 10%;
  position: relative;
  z-index: 2;
}

.hero-eyebrow {
  font-size: 0.65rem;
  letter-spacing: 0.32em;
  text-transform: uppercase;
  color: var(--gold);
  margin-bottom: 28px;
  display: flex;
  align-items: center;
  gap: 14px;
  animation: fadeUp 0.8s 0.2s both;
}
.hero-eyebrow::before { content: ''; width: 40px; height: 1px; background: var(--gold); }

.hero-title {
  font-family: var(--ff-display);
  font-size: clamp(2.6rem, 5vw, 5rem);
  font-weight: 400;
  line-height: 1.05;
  color: var(--cream);
  margin-bottom: 28px;
  animation: fadeUp 0.8s 0.4s both;
}
.hero-title em { font-style: italic; color: var(--gold-lt); display: block; }
.hero-title strong { font-weight: 600; display: block; }

.hero-desc {
  font-size: 0.95rem;
  color: var(--cream-dim);
  max-width: 420px;
  margin-bottom: 36px;
  line-height: 1.8;
  animation: fadeUp 0.8s 0.6s both;
}

.hero-actions { display: flex; gap: 16px; align-items: center; flex-wrap: wrap; animation: fadeUp 0.8s 0.8s both; }

.btn-primary {
  background: linear-gradient(135deg, var(--crimson) 0%, #7B1228 100%);
  color: var(--cream);
  padding: 14px 32px;
  font-size: 0.72rem;
  letter-spacing: 0.3em;
  text-transform: uppercase;
  border: none;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition: all var(--transition);
  display: inline-flex;
  align-items: center;
  gap: 10px;
}
.btn-primary::before {
  content: '';
  position: absolute;
  top: 0; left: -100%;
  width: 100%; height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
  transition: left 0.5s;
}
.btn-primary:hover::before { left: 100%; }
.btn-primary:hover { transform: translateY(-2px); box-shadow: 0 12px 40px rgba(155,29,58,0.4); }

.btn-outline {
  color: var(--cream);
  padding: 14px 32px;
  font-size: 0.72rem;
  letter-spacing: 0.3em;
  text-transform: uppercase;
  border: 1px solid var(--border);
  cursor: pointer;
  transition: all var(--transition);
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background: transparent;
}
.btn-outline:hover { border-color: var(--gold); color: var(--gold); }

.hero-visual {
  position: relative;
  z-index: 2;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 40px 10% 40px 40px;
  animation: fadeIn 1.2s 0.5s both;
}

.hero-img-frame { position: relative; width: 100%; max-width: 460px; }
.hero-img-frame::before {
  content: '';
  position: absolute;
  top: -20px; right: -20px;
  width: 100%; height: 100%;
  border: 1px solid var(--border);
  pointer-events: none;
  z-index: -1;
}
.hero-img-frame::after {
  content: '';
  position: absolute;
  bottom: -20px; left: -20px;
  width: 60%; height: 60%;
  border: 1px solid rgba(155,29,58,0.3);
  pointer-events: none;
  z-index: -1;
}

.hero-img-placeholder {
  aspect-ratio: 3/4;
  background: linear-gradient(160deg, #1A0F18 0%, #2D1520 40%, #0F1A14 100%);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 14px;
  color: var(--text-muted);
  font-size: 0.8rem;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  border: 1px solid var(--border);
  position: relative;
  overflow: hidden;
  text-align: center;
  padding: 20px;
}
.hero-img-placeholder::before {
  content: '';
  position: absolute;
  inset: 20px;
  background:
    linear-gradient(rgba(201,148,58,0.06) 1px, transparent 1px),
    linear-gradient(90deg, rgba(201,148,58,0.06) 1px, transparent 1px);
  background-size: 40px 40px;
}
.hero-img-placeholder .placeholder-icon {
  width: 60px; height: 60px;
  border: 1px solid var(--border);
  border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  font-size: 1.7rem;
  position: relative; z-index: 1;
}
.hero-img-placeholder p { position: relative; z-index: 1; }

.hero-stats {
  display: flex;
  gap: 36px;
  margin-top: 40px;
  padding-top: 30px;
  border-top: 1px solid var(--border);
  animation: fadeUp 0.8s 1.0s both;
}
.stat-num { font-family: var(--ff-display); font-size: 1.9rem; font-weight: 600; color: var(--gold); }
.stat-label { font-size: 0.63rem; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-muted); margin-top: 2px; }

.floating-badge {
  position: absolute;
  bottom: 70px; right: -10px;
  background: var(--bg-card);
  border: 1px solid var(--border);
  padding: 14px 18px;
  text-align: center;
  animation: float 3s ease-in-out infinite;
}
.floating-badge .badge-num { font-family: var(--ff-display); font-size: 1.4rem; font-weight: 600; color: var(--gold); }
.floating-badge .badge-label { font-size: 0.55rem; letter-spacing: 0.18em; text-transform: uppercase; color: var(--cream-dim); }

@keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }

/* =========================================
   HOW IT WORKS STRIP
   ========================================= */
.how-it-works {
  background: var(--bg-card);
  border-top: 1px solid var(--border);
  border-bottom: 1px solid var(--border);
  padding: 44px 10%;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
}
.hiw-step { display: flex; align-items: flex-start; gap: 16px; }
.hiw-num {
  font-family: var(--ff-display);
  font-size: 2.2rem;
  font-weight: 600;
  color: var(--gold);
  line-height: 1;
  flex-shrink: 0;
  width: 48px;
}
.hiw-title { font-family: var(--ff-display); font-size: 1.1rem; color: var(--cream); margin-bottom: 4px; }
.hiw-desc { font-size: 0.82rem; color: var(--text-muted); line-height: 1.6; }

/* =========================================
   BRANDS STRIP
   ========================================= */
.brands-strip { background: var(--bg); border-bottom: 1px solid var(--border); padding: 26px 10%; overflow: hidden; }
.brands-label { font-size: 0.6rem; letter-spacing: 0.35em; text-transform: uppercase; color: var(--text-muted); text-align: center; margin-bottom: 18px; }
.brands-scroll { display: flex; white-space: nowrap; overflow: hidden; }
.brands-inner { display: inline-flex; animation: ticker 24s linear infinite; }
.brand-tag {
  display: inline-flex; align-items: center; gap: 18px;
  padding: 0 28px;
  font-family: var(--ff-display);
  font-size: 1.05rem;
  font-weight: 500;
  letter-spacing: 0.1em;
  color: var(--cream-dim);
}
.brand-tag.self { color: var(--gold-lt); font-style: italic; }
.brand-tag .dot { width: 4px; height: 4px; background: var(--crimson); border-radius: 50%; display: inline-block; flex-shrink: 0; }
@keyframes ticker { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }

/* =========================================
   SCROLL TICKER
   ========================================= */
.ticker-wrap { background: var(--bg-card); border-bottom: 1px solid var(--border); overflow: hidden; padding: 13px 0; white-space: nowrap; }
.ticker-inner { display: inline-flex; animation: ticker 25s linear infinite; }
.ticker-item { display: inline-flex; align-items: center; gap: 20px; padding: 0 30px; font-size: 0.7rem; letter-spacing: 0.28em; text-transform: uppercase; color: var(--cream-dim); }
.ticker-dot { width: 5px; height: 5px; background: var(--gold); border-radius: 50%; display: inline-block; }

/* =========================================
   COLLECTIONS
   ========================================= */
.collections { padding: 110px 10%; position: relative; }
.collections-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr;
  grid-template-rows: auto auto;
  gap: 16px;
  margin-top: 56px;
}
.collection-card { position: relative; overflow: hidden; cursor: pointer; background: var(--bg-card); border: 1px solid var(--border); }
.collection-card:first-child { grid-row: 1 / 3; }

.card-img {
  aspect-ratio: 3/4;
  background: linear-gradient(160deg, #1A0F18, #2D1520 60%, #0F1A14);
  position: relative;
  overflow: hidden;
  transition: transform 0.6s var(--ease-silk);
  display: flex; align-items: center; justify-content: center;
  color: var(--text-muted);
}
.collection-card:first-child .card-img { aspect-ratio: auto; height: 100%; min-height: 560px; }
.collection-card:not(:first-child) .card-img { aspect-ratio: 4/5; }
.card-img::before {
  content: attr(data-label);
  font-size: 0.63rem;
  letter-spacing: 0.28em;
  text-transform: uppercase;
  color: var(--text-muted);
  border: 1px solid var(--border);
  padding: 10px 18px;
  text-align: center;
}
.card-img-overlay { position: absolute; inset: 0; background: linear-gradient(to top, rgba(8,6,10,0.9) 0%, rgba(8,6,10,0.2) 50%, transparent 100%); }
.collection-card:hover .card-img { transform: scale(1.04); }

.card-content { position: absolute; bottom: 0; left: 0; right: 0; padding: 26px; transform: translateY(8px); transition: transform var(--transition); }
.collection-card:hover .card-content { transform: translateY(0); }
.card-cat { font-size: 0.6rem; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold); margin-bottom: 8px; }
.card-title { font-family: var(--ff-display); font-size: 1.4rem; font-weight: 400; color: var(--cream); line-height: 1.2; }
.collection-card:first-child .card-title { font-size: 2.1rem; }
.card-link { margin-top: 12px; font-size: 0.65rem; letter-spacing: 0.25em; text-transform: uppercase; color: var(--gold); display: flex; align-items: center; gap: 8px; opacity: 0; transition: opacity var(--transition); }
.collection-card:hover .card-link { opacity: 1; }
.card-link::after { content: '→'; transition: transform var(--transition); }
.collection-card:hover .card-link::after { transform: translateX(4px); }

/* =========================================
   FEATURED / PRODUCTS
   ========================================= */
.featured { padding: 100px 10%; background: var(--bg-card); position: relative; }
.featured::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 1px; background: linear-gradient(90deg, transparent, var(--gold), transparent); }

.featured-header { display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 56px; flex-wrap: wrap; gap: 16px; }
.view-all { font-size: 0.68rem; letter-spacing: 0.28em; text-transform: uppercase; color: var(--gold); border-bottom: 1px solid var(--gold); padding-bottom: 2px; transition: color var(--transition); }
.view-all:hover { color: var(--gold-lt); }

.products-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; }
.product-card { background: var(--bg); border: 1px solid var(--border); transition: all var(--transition); overflow: hidden; }
.product-card:hover { border-color: rgba(201,148,58,0.35); transform: translateY(-4px); box-shadow: 0 20px 60px rgba(0,0,0,0.5); }

.product-img {
  aspect-ratio: 3/4;
  background: linear-gradient(160deg, #1A0F18, #2D1520 60%, #120F1A);
  position: relative;
  display: flex; align-items: center; justify-content: center;
  overflow: hidden;
}
.product-img-inner { color: var(--text-muted); font-size: 0.6rem; letter-spacing: 0.25em; text-transform: uppercase; text-align: center; padding: 20px; }
.product-badge {
  position: absolute; top: 14px; left: 14px;
  background: var(--crimson); color: var(--cream);
  font-size: 0.54rem; letter-spacing: 0.18em; text-transform: uppercase;
  padding: 4px 10px;
}
.product-brand-tag {
  position: absolute; top: 14px; right: 14px;
  background: rgba(201,148,58,0.15);
  border: 1px solid var(--border);
  color: var(--gold);
  font-size: 0.5rem; letter-spacing: 0.16em; text-transform: uppercase;
  padding: 4px 9px;
  max-width: 110px;
  text-align: right;
}

.product-info { padding: 18px 18px 20px; }
.product-name { font-family: var(--ff-display); font-size: 1.08rem; font-weight: 400; color: var(--cream); margin-bottom: 4px; }
.product-fabric { font-size: 0.63rem; letter-spacing: 0.14em; color: var(--text-muted); text-transform: uppercase; margin-bottom: 12px; }
.product-price { display: flex; align-items: center; gap: 10px; }
.price-main { font-family: var(--ff-display); font-size: 1.15rem; font-weight: 500; color: var(--gold); }
.price-note { font-size: 0.62rem; color: var(--text-muted); letter-spacing: 0.06em; }
.product-cta {
  width: 100%; margin-top: 14px; padding: 10px;
  background: transparent; border: 1px solid var(--border);
  color: var(--cream-dim);
  font-family: var(--ff-body); font-size: 0.64rem; letter-spacing: 0.22em; text-transform: uppercase;
  cursor: pointer; transition: all var(--transition);
}
.product-cta:hover { background: var(--crimson); border-color: var(--crimson); color: var(--cream); }

.catalog-note { text-align: center; margin-top: 44px; font-size: 0.8rem; color: var(--text-muted); }
.catalog-note strong { color: var(--gold); }

/* =========================================
   WHY US / FEATURES
   ========================================= */
.why-us { padding: 110px 10%; display: grid; grid-template-columns: 1fr 1fr; gap: 70px; align-items: center; }
.why-visual { position: relative; }
.why-img-box {
  aspect-ratio: 4/5;
  background: linear-gradient(160deg, #1A0F18, #2D1520 60%, #0F1A14);
  border: 1px solid var(--border);
  display: flex; align-items: center; justify-content: center;
  color: var(--text-muted);
  font-size: 0.7rem; letter-spacing: 0.25em; text-transform: uppercase;
  position: relative;
}
.why-img-box::after {
  content: '';
  position: absolute;
  top: 20px; right: -20px; bottom: -20px; left: 20px;
  border: 1px solid rgba(155,29,58,0.25);
  z-index: -1;
}

.features-list { display: flex; flex-direction: column; gap: 0; margin-top: 44px; }
.feature-item { padding: 26px 0; border-bottom: 1px solid var(--border); display: grid; grid-template-columns: 48px 1fr; gap: 20px; align-items: start; transition: all var(--transition); }
.feature-item:first-child { border-top: 1px solid var(--border); }
.feature-item:hover { padding-left: 8px; }
.feature-num { font-family: var(--ff-display); font-size: 1.7rem; font-weight: 300; color: var(--gold); line-height: 1; }
.feature-title { font-family: var(--ff-display); font-size: 1.15rem; font-weight: 400; color: var(--cream); margin-bottom: 6px; }
.feature-desc { font-size: 0.84rem; color: var(--cream-dim); line-height: 1.7; }

/* =========================================
   TESTIMONIALS
   ========================================= */
.testimonials { padding: 110px 10%; background: linear-gradient(180deg, var(--bg) 0%, #0F0A14 50%, var(--bg) 100%); text-align: center; position: relative; overflow: hidden; }
.testimonials::before {
  content: '"'; position: absolute; top: 40px; left: 50%; transform: translateX(-50%);
  font-family: var(--ff-display); font-size: 18rem; color: rgba(201,148,58,0.04); line-height: 1; pointer-events: none;
}
.testimonials .section-label { justify-content: center; }
.testimonials-slider { margin-top: 56px; position: relative; }
.testimonial-slide { display: none; animation: fadeIn 0.6s ease; }
.testimonial-slide.active { display: block; }
.testimonial-text {
  font-family: var(--ff-display); font-size: clamp(1.15rem, 2.4vw, 1.6rem);
  font-weight: 300; font-style: italic; color: var(--cream);
  max-width: 700px; margin: 0 auto 30px; line-height: 1.6;
}
.testimonial-author { font-size: 0.66rem; letter-spacing: 0.3em; text-transform: uppercase; color: var(--gold); }
.testimonial-location { font-size: 0.63rem; color: var(--text-muted); margin-top: 4px; letter-spacing: 0.14em; }
.slider-dots { display: flex; justify-content: center; gap: 10px; margin-top: 38px; }
.dot { width: 6px; height: 6px; border-radius: 50%; background: var(--border); cursor: pointer; transition: all 0.3s; border: none; }
.dot.active { background: var(--gold); width: 24px; border-radius: 3px; }

/* =========================================
   SOCIAL PROOF / INSTAGRAM STRIP
   ========================================= */
.social-strip { padding: 100px 10%; }
.social-strip-grid { display: grid; grid-template-columns: repeat(6, 1fr); gap: 8px; margin-top: 46px; }
.insta-tile {
  aspect-ratio: 1;
  background: linear-gradient(160deg, #1A0F18, #2D1520);
  border: 1px solid var(--border);
  display: flex; align-items: center; justify-content: center;
  overflow: hidden; cursor: pointer; position: relative; transition: all var(--transition);
}
.insta-tile:hover { border-color: var(--gold); transform: scale(0.98); }
.insta-tile::after { content: '📷'; font-size: 1.4rem; opacity: 0.3; }

/* =========================================
   VISIT STORE / CONTACT
   ========================================= */
.contact-cta {
  padding: 110px 10%;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 70px;
  background: var(--bg-card);
  border-top: 1px solid var(--border);
  border-bottom: 1px solid var(--border);
}
.cta-left .section-title { max-width: 440px; }
.cta-desc { color: var(--cream-dim); font-size: 0.92rem; line-height: 1.8; margin: 20px 0 32px; max-width: 400px; }

.order-note {
  background: var(--gold-pale);
  border: 1px solid var(--border);
  padding: 16px 20px;
  font-size: 0.82rem;
  color: var(--cream-dim);
  line-height: 1.6;
  margin-bottom: 32px;
}
.order-note strong { color: var(--gold-lt); display: block; margin-bottom: 4px; font-family: var(--ff-display); font-size: 0.95rem; }

.contact-details { margin-top: 4px; }
.contact-row { display: flex; align-items: center; gap: 16px; padding: 14px 0; border-bottom: 1px solid var(--border); font-size: 0.88rem; color: var(--cream-dim); }
.contact-row:first-child { border-top: 1px solid var(--border); }
.contact-icon { width: 36px; height: 36px; background: var(--gold-pale); border: 1px solid var(--border); display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 0.9rem; }
.contact-row a { color: var(--cream); transition: color 0.3s; }
.contact-row a:hover { color: var(--gold); }

.map-frame {
  margin-top: 28px;
  border: 1px solid var(--border);
  aspect-ratio: 16/9;
  overflow: hidden;
}
.map-frame iframe { width: 100%; height: 100%; border: 0; filter: invert(0.92) hue-rotate(180deg) contrast(0.9); }

.whatsapp-big {
  display: flex;
  align-items: center;
  gap: 16px;
  background: linear-gradient(135deg, #1F9C4F, #0E6B33);
  padding: 22px 26px;
  margin-top: 28px;
  transition: all var(--transition);
}
.whatsapp-big:hover { transform: translateY(-3px); box-shadow: 0 14px 40px rgba(31,156,79,0.35); }
.whatsapp-big-icon { width: 46px; height: 46px; background: rgba(255,255,255,0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
.whatsapp-big-icon svg { width: 24px; height: 24px; fill: white; }
.whatsapp-big-text-title { font-family: var(--ff-display); font-size: 1.15rem; color: white; font-weight: 500; }
.whatsapp-big-text-sub { font-size: 0.78rem; color: rgba(255,255,255,0.85); margin-top: 2px; }

.contact-form { display: flex; flex-direction: column; gap: 16px; }
.form-group { display: flex; flex-direction: column; gap: 6px; }
.form-label { font-size: 0.62rem; letter-spacing: 0.28em; text-transform: uppercase; color: var(--gold); }
.form-input, .form-textarea {
  background: var(--bg); border: 1px solid var(--border); color: var(--cream);
  padding: 12px 16px; font-family: var(--ff-body); font-size: 0.88rem; font-weight: 300;
  outline: none; transition: border-color var(--transition); width: 100%;
}
.form-input:focus, .form-textarea:focus { border-color: var(--gold); }
.form-textarea { height: 110px; resize: vertical; }
.form-input::placeholder, .form-textarea::placeholder { color: var(--text-muted); }

.form-success { background: rgba(29,94,62,0.2); border: 1px solid var(--emerald); color: #6DCE9A; padding: 14px 20px; font-size: 0.82rem; letter-spacing: 0.1em; }
.form-error { background: rgba(155,29,58,0.15); border: 1px solid var(--crimson); color: #E8849A; padding: 14px 20px; font-size: 0.82rem; }

.whatsapp-btn {
  position: fixed; bottom: 28px; right: 28px;
  width: 56px; height: 56px;
  background: #25D366; border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  box-shadow: 0 6px 24px rgba(37,211,102,0.4);
  z-index: 900;
  transition: transform var(--transition), box-shadow var(--transition);
}
.whatsapp-btn:hover { transform: scale(1.1); box-shadow: 0 10px 32px rgba(37,211,102,0.55); }
.whatsapp-btn svg { width: 28px; height: 28px; fill: white; }

/* =========================================
   FOOTER
   ========================================= */

footer{
    padding: 60px 8% 28px;
    background: #050408;
    position: relative;
}

footer::before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    right:0;
    height:1px;
    background:linear-gradient(
        90deg,
        transparent,
        rgba(201,168,110,.3),
        var(--gold),
        rgba(201,168,110,.3),
        transparent
    );
}

/* GRID */

.footer-grid{
    display:grid;
    grid-template-columns: 2fr 1fr 1fr 1.2fr;
    gap:64px;
    margin-bottom:42px;
    align-items:start;
}

/* BRAND COLUMN */

.footer-logo-badge{
    padding:0;

}

.footer-logo-badge img{
    width:240px;
    max-width:100%;
    height:auto;
    display:block;
    filter:
        drop-shadow(0 0 4px rgba(255,255,255,.2))
        drop-shadow(0 0 12px rgba(255,255,255,.08));
}

.footer-tagline{
    font-size:.68rem;
    letter-spacing:.35em;
    text-transform:uppercase;
    color:var(--gold);
    margin-bottom:20px;
        margin-top:0;
}

.footer-about{
    font-size:.95rem;
    line-height:1.9;
    color:rgba(255,255,255,.72);
    max-width:340px;
    margin-bottom:28px;
}

/* SOCIALS */

.footer-socials{
    display:flex;
    gap:14px;
}

.footer-socials a{
    width:42px;
    height:42px;
    border:1px solid rgba(201,168,110,.25);
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    color:var(--cream);
    transition:all .35s ease;
}

.footer-socials a:hover{
    transform:translateY(-3px);
    border-color:var(--gold);
    color:var(--gold);
    box-shadow:0 0 15px rgba(201,168,110,.15);
}

/* HEADINGS */

.footer-heading{
    font-size:.7rem;
    letter-spacing:.35em;
    text-transform:uppercase;
    color:var(--gold);
    margin-bottom:22px;
}

/* LINKS */

.footer-links{
    display:flex;
    flex-direction:column;
    gap:14px;
}

.footer-links a{
    font-size:.9rem;
    color:var(--text-muted);
    transition:all .3s ease;
    display:flex;
    align-items:center;
    gap:10px;
}

.footer-links a::before{
    content:'';
    width:10px;
    height:1px;
    background:var(--crimson);
    transition:.3s;
}

.footer-links a:hover{
    color:var(--cream);
    transform:translateX(4px);
}

.footer-links a:hover::before{
    width:16px;
}

/* CONTACT */

.footer-contact-list{
    display:flex;
    flex-direction:column;
    gap:16px;
}

.footer-contact-item{
    display:flex;
    gap:12px;
    align-items:flex-start;
    font-size:.88rem;
    color:var(--text-muted);
    line-height:1.7;
}

.footer-contact-item i{
    color:var(--gold);
    margin-top:3px;
}

.footer-contact-item a{
    color:var(--text-muted);
    transition:.3s;
}

.footer-contact-item a:hover{
    color:var(--gold);
}

/* BOTTOM BAR */

.footer-bottom{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:20px;

    padding-top:24px;
    border-top:1px solid rgba(255,255,255,.08);

    font-size:.75rem;
    color:rgba(255,255,255,.55);
    letter-spacing:.08em;
}

.footer-bottom-left,
.footer-bottom-right{
    display:flex;
    align-items:center;
    gap:20px;
}

.footer-bottom a{
    color:rgba(255,255,255,.55);
    transition:.3s;
}

.footer-bottom a:hover{
    color:var(--gold);
}

/* =========================================
   ANIMATIONS
   ========================================= */
@keyframes fadeUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
@keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }

.reveal { opacity: 0; transform: translateY(40px); transition: opacity 0.7s var(--ease-silk), transform 0.7s var(--ease-silk); }
.reveal.visible { opacity: 1; transform: none; }
.reveal-delay-1 { transition-delay: 0.1s; }
.reveal-delay-2 { transition-delay: 0.2s; }
.reveal-delay-3 { transition-delay: 0.3s; }
.reveal-delay-4 { transition-delay: 0.4s; }

/* =========================================
   RESPONSIVE
   ========================================= */
@media (max-width: 1100px) {
  .products-grid { grid-template-columns: repeat(2, 1fr); }
  .collections-grid { grid-template-columns: 1fr 1fr; }
  .collections-grid .collection-card:first-child { grid-row: auto; grid-column: 1 / -1; }
  .footer-grid { grid-template-columns: 1fr 1fr; gap: 36px; }
  .why-us { gap: 44px; }
  .how-it-works { grid-template-columns: 1fr; gap: 24px; }
}

@media (max-width: 860px) {
  .header-inner { grid-template-columns: auto 1fr auto; padding: 14px 20px; }
  .nav-links { display: none; }
  .hamburger { display: flex; }
  .nav-right .social-icon { display: none; }
  .nav-cta { display: none; }
  .logo-badge img { height: 44px; }
  .hero { grid-template-columns: 1fr; min-height: auto; }
  .hero-content { padding: 40px 24px 50px; }
  .hero-visual { display: none; }
  .hero-stats { gap: 22px; }
  .why-us { grid-template-columns: 1fr; gap: 36px; }
  .why-visual { display: none; }
  .contact-cta { grid-template-columns: 1fr; gap: 36px; }
  .social-strip-grid { grid-template-columns: repeat(3, 1fr); }
  .footer-grid { grid-template-columns: 1fr; gap: 30px; }
  .footer-bottom { flex-direction: column; gap: 12px; text-align: center; }
  .collections-grid { grid-template-columns: 1fr; }
  .featured-header { flex-direction: column; align-items: flex-start; gap: 12px; }
}

@media (max-width: 560px) {
  .hero-actions { flex-direction: column; align-items: flex-start; }
  .products-grid { grid-template-columns: 1fr; }
  .social-strip-grid { grid-template-columns: repeat(2, 1fr); }
}

body::before {
  background: radial-gradient(circle at center, transparent 58%, rgba(255,255,255,0.4) 100%);
}

.announce-bar {
  background: linear-gradient(90deg, #A8385E, #8B2D4E, #A8385E);
}

header {
  background: rgba(250,248,243,0.95);
  border-bottom-color: rgba(184,134,11,0.15);
}

header.scrolled {
  background: rgba(250,248,243,0.98);
}

.logo-badge {
  background: rgba(184,134,11,0.08);
  border-color: rgba(184,134,11,0.15);
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

.logo-badge:hover {
  background: rgba(184,134,11,0.12);
  border-color: rgba(184,134,11,0.2);
}

.social-icon {
  border-color: rgba(184,134,11,0.2);
  color: #1F1A15;
}

.social-icon:hover {
  border-color: #B8860B;
  color: #B8860B;
  background: rgba(184,134,11,0.08);
}

.hero::before {
  background:
    radial-gradient(circle at 50% 50%, rgba(255,255,255,0.03) 0%, transparent 35%),
    radial-gradient(ellipse 60% 80% at 70% 50%, rgba(168,56,94,0.12) 0%, transparent 60%),
    radial-gradient(ellipse 50% 70% at 20% 80%, rgba(46,125,92,0.1) 0%, transparent 50%),
    radial-gradient(ellipse 40% 40% at 80% 10%, rgba(184,134,11,0.08) 0%, transparent 50%),
    radial-gradient(circle at 50% 50%, transparent 55%, rgba(0,0,0,0.08) 100%);
}

.hero-desc {
  color: #6B6159;
}

.hero-img-placeholder {
  background: linear-gradient(160deg, #F5F1E8 0%, #EBE5D9 40%, #F3EEE5 100%);
}

.hero-img-placeholder::before {
  background:
    linear-gradient(rgba(184,134,11,0.08) 1px, transparent 1px),
    linear-gradient(90deg, rgba(184,134,11,0.08) 1px, transparent 1px);
}

.showcase-note {
  background: #F2EFE8;
}

.contact-cta {
  background: #F2EFE8;
}

.order-note {
  background: rgba(184,134,11,0.1);
  border-color: rgba(184,134,11,0.2);
  color: #5C5047;
}

.order-note strong {
  color: #B8860B;
}

.contact-details {
  border-color: rgba(184,134,11,0.2);
}

.contact-row {
  border-bottom-color: rgba(184,134,11,0.15);
  color: #6B6159;
}

.contact-row:first-child {
  border-top-color: rgba(184,134,11,0.15);
}

.contact-icon {
  background: rgba(184,134,11,0.1);
  border-color: rgba(184,134,11,0.18);
}

.contact-row a {
  color: #1F1A15;
}

.contact-row a:hover {
  color: #B8860B;
}

.form-input,
.form-textarea {
  background: white;
  border-color: rgba(184,134,11,0.2);
  color: #1F1A15;
}

.form-input::placeholder,
.form-textarea::placeholder {
  color: #A89B8F;
}

.form-input:focus,
.form-textarea:focus {
  border-color: #B8860B;
}

.map-frame,
.shop-photo {
  border-color: rgba(184,134,11,0.2);
}

.shop-photo {
  background: linear-gradient(180deg, rgba(250,248,243,0.9), rgba(250,248,243,0.8));
}

.shop-photo-caption {
  color: #6B6159;
}

.form-success {
  background: rgba(46,125,92,0.15);
  border-color: #2E7D5C;
  color: #1B5E3E;
}

.form-error {
  background: rgba(168,56,94,0.12);
  border-color: #A8385E;
  color: #7A2849;
}

.card-img {
  background: linear-gradient(160deg, #F3EFE6, #EBE5D9 60%, #F1ECE7);
}

.card-img::before {
  color: #6B6159;
  border-color: rgba(184,134,11,0.15);
}

.collection-card {
  background: #F2EFE8;
  border-color: rgba(184,134,11,0.15);
}

.card-overlay {
  background: linear-gradient(to top, rgba(250,248,243,0.95) 0%, rgba(250,248,243,0.3) 50%, transparent 100%);
}

.featured {
  background: #F2EFE8;
}

.featured::before {
  background: linear-gradient(90deg, transparent, #B8860B, transparent);
}

.product-card {
  background: white;
  border-color: rgba(184,134,11,0.15);
}

.product-card:hover {
  border-color: rgba(184,134,11,0.3);
  box-shadow: 0 20px 60px rgba(0,0,0,0.08);
}

.product-img {
  background: linear-gradient(160deg, #F3EFE6, #EBE5D9 60%, #F1ECE7);
}

.product-img-inner {
  color: #6B6159;
}

.product-badge {
  background: #A8385E;
}

.product-brand-tag {
  background: rgba(184,134,11,0.1);
  border-color: rgba(184,134,11,0.2);
  color: #B8860B;
}

.product-name {
  color: #1F1A15;
}

.product-fabric {
  color: #6B6159;
}

.price-main {
  color: #B8860B;
}

.price-note {
  color: #6B6159;
}

.product-cta {
  background: transparent;
  border-color: rgba(184,134,11,0.2);
  color: #5C5047;
}

.product-cta:hover {
  background: #A8385E;
  border-color: #A8385E;
  color: white;
}

.how-it-works {
  background: #F2EFE8;
  border-top-color: rgba(184,134,11,0.15);
  border-bottom-color: rgba(184,134,11,0.15);
}

.hiw-desc {
  color: #6B6159;
}

.brands-strip {
  background: #FAF8F3;
  border-bottom-color: rgba(184,134,11,0.15);
}

.brands-label {
  color: #6B6159;
}

.brand-tag {
  color: #5C5047;
}

.brand-tag.self {
  color: #D4A017;
}

.ticker-wrap {
  background: #F2EFE8;
  border-bottom-color: rgba(184,134,11,0.15);
}

.ticker-item {
  color: #6B6159;
}

.testimonials {
  background: linear-gradient(180deg, #FAF8F3 0%, #F5F1E8 50%, #FAF8F3 100%);
}

.testimonials::before {
  color: rgba(184,134,11,0.08);
}

.testimonial-text {
  color: #1F1A15;
}

.slider-dots {
  background: transparent;
}

.dot {
  background: rgba(184,134,11,0.3);
}

.dot.active {
  background: #B8860B;
}

.insta-tile {
  background: linear-gradient(160deg, #F3EFE6, #EBE5D9);
  border-color: rgba(184,134,11,0.15);
}

.insta-tile:hover {
  border-color: #B8860B;
}

footer {
  background: #F5F1E8;
}

footer::before {
  background: linear-gradient(90deg, transparent, rgba(184,134,11,0.3), rgba(168,56,94,0.2), rgba(184,134,11,0.3), transparent);
}

.footer-tagline {
  color: #B8860B;
}

.footer-about {
  color: rgba(31,26,21,0.85);
}

.footer-socials a {
  border-color: rgba(184,134,11,0.2);
  color: #1F1A15;
}

.footer-socials a:hover {
  border-color: #B8860B;
  color: #B8860B;
  box-shadow: 0 0 15px rgba(184,134,11,0.2);
}

.footer-heading {
  color: #B8860B;
}

.footer-links a {
  color: #6B6159;
}

.footer-links a:hover {
  color: #B8860B;
}

.footer-contact-item {
  color: #6B6159;
}

.footer-contact-item a {
  color: #6B6159;
}

.footer-contact-item a:hover {
  color: #B8860B;
}

.footer-bottom {
  border-top-color: rgba(255,255,255,0.2);
  color: rgba(31,26,21,0.6);
}

.footer-bottom a {
  color: rgba(31,26,21,0.6);
}

.footer-bottom a:hover {
  color: #B8860B;
}

.whatsapp-big {
  background: linear-gradient(135deg, #1B8A4A, #0F5A30);
}

.whatsapp-big:hover {
  box-shadow: 0 14px 40px rgba(31,156,79,0.25);
}
</style>
</head>
<body>

<!-- ======== ANNOUNCEMENT BAR ======== -->
<div class="announce-bar" role="banner" aria-label="Announcement">
  <span>
    ✦ New Eid & Ramadan Collection In Store Now &nbsp;&nbsp;&nbsp;
    ✦ Pakistani Brands + Our Own Signature Designs &nbsp;&nbsp;&nbsp;
    ✦ Order on WhatsApp or Visit Us in Al Ghuwair, Sharjah &nbsp;&nbsp;&nbsp;
    ✦ New Eid & Ramadan Collection In Store Now &nbsp;&nbsp;&nbsp;
    ✦ Pakistani Brands + Our Own Signature Designs &nbsp;&nbsp;&nbsp;
    ✦ Order on WhatsApp or Visit Us in Al Ghuwair, Sharjah
  </span>
</div>

<!-- ======== HEADER ======== -->
<header id="main-header">
  <div class="header-inner">
    <nav class="nav-links" aria-label="Primary navigation">
      <a href="#brands">Brands</a>
      <a href="#featured">Catalog</a>
      <a href="#about">About</a>
      <a href="#contact">Visit / Contact</a>
    </nav>

    <div class="logo-wrap">
      <a href="#" class="logo-badge" aria-label="Bin Shahzad Fashions home">
        <img src="images/logo.png" alt="Bin Shahzad Fashions logo">
      </a>
    </div>

    <div class="nav-right">
      <a href="<?= $config['instagram'] ?>" class="social-icon" target="_blank" rel="noopener" aria-label="Instagram">
        <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
      </a>
      <a href="<?= $config['facebook'] ?>" class="social-icon" target="_blank" rel="noopener" aria-label="Facebook">
        <svg viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
      </a>
      <a href="<?= $config['tiktok'] ?>" class="social-icon" target="_blank" rel="noopener" aria-label="TikTok">
        <svg viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
      </a>
      <a href="<?= $config['youtube'] ?>" class="social-icon" target="_blank" rel="noopener" aria-label="YouTube">
        <svg viewBox="0 0 24 24"><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg>
      </a>
      <a href="https://wa.me/<?= $config['whatsapp'] ?>" target="_blank" rel="noopener" class="nav-cta">Order on WhatsApp</a>
      <button class="hamburger" id="hamburger" aria-label="Menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>

<!-- Showcase note -->
<div class="showcase-note" style="margin-top:84px">
  This website is a <strong>showcase catalog</strong> — to place an order, message us on <strong>WhatsApp</strong> or visit our store in Sharjah.
</div>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu" role="dialog" aria-modal="true">
  <div class="logo-badge"><img src="images/logo.png" alt="Bin Shahzad Fashions logo" style="height:54px"></div>
  <a href="#brands"   class="mobile-link">Brands</a>
  <a href="#featured" class="mobile-link">Catalog</a>
  <a href="#about"    class="mobile-link">About</a>
  <a href="#contact"  class="mobile-link">Visit / Contact</a>
  <div class="m-socials">
    <a href="<?= $config['instagram'] ?>" class="social-icon" target="_blank" aria-label="Instagram"><svg viewBox="0 0 24 24" style="width:14px;height:14px;fill:currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
    <a href="<?= $config['facebook'] ?>" class="social-icon" target="_blank" aria-label="Facebook"><svg viewBox="0 0 24 24" style="width:14px;height:14px;fill:currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
    <a href="<?= $config['tiktok'] ?>" class="social-icon" target="_blank" aria-label="TikTok"><svg viewBox="0 0 24 24" style="width:14px;height:14px;fill:currentColor"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg></a>
    <a href="<?= $config['youtube'] ?>" class="social-icon" target="_blank" aria-label="YouTube"><svg viewBox="0 0 24 24" style="width:14px;height:14px;fill:currentColor"><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg></a>
  </div>
</div>

<!-- ======== HERO ======== -->
<section class="hero" id="home" aria-label="Hero">
  <div class="hero-content">
    <div class="hero-eyebrow">Showcase catalog — WhatsApp orders & store visits in Al Ghuwair</div>
    <h1 class="hero-title">
      <strong>Bin Shahzad</strong>
      <em>Fashions Showcase</em>
    </h1>
    <p class="hero-desc">
      Browse our favorite Pakistani brands and own signature pieces: shalwar kameez, Eid dresses, Ramadan wear, bridal and event outfits. This is a display site rather than checkout shopping — order via WhatsApp or visit the store for booking.
    </p>
    <div class="hero-actions">
      <a href="#featured" class="btn-primary">View Catalog →</a>
      <a href="https://wa.me/<?= $config['whatsapp'] ?>" target="_blank" class="btn-outline" rel="noopener">Order on WhatsApp</a>
    </div>
    <div class="hero-stats">
      <div>
        <div class="stat-num">15+</div>
        <div class="stat-label">Brands Stocked</div>
      </div>
      <div>
        <div class="stat-num">100%</div>
        <div class="stat-label">Authentic</div>
      </div>
      <div>
        <div class="stat-num">UAE</div>
        <div class="stat-label">Wide Delivery</div>
      </div>
    </div>
  </div>

  <div class="hero-visual" aria-hidden="true">
    <div class="hero-img-frame">
      <div class="hero-img-placeholder">
        <div class="placeholder-icon">👗</div>
        <p>Store / Eid Collection Photo</p>
        <p style="font-size:0.6rem;opacity:0.5">Replace with your own photo</p>
      </div>
      <div class="floating-badge">
        <div class="badge-num">Eid</div>
        <div class="badge-label">Collection Live</div>
      </div>
    </div>
  </div>
</section>

<!-- ======== HOW IT WORKS ======== -->
<div class="how-it-works" aria-label="How to order">
  <div class="hiw-step reveal reveal-delay-1">
    <div class="hiw-num">01</div>
    <div>
      <div class="hiw-title">Browse the Catalog</div>
      <div class="hiw-desc">Explore our brands, collections and bestsellers right here on the website.</div>
    </div>
  </div>
  <div class="hiw-step reveal reveal-delay-2">
    <div class="hiw-num">02</div>
    <div>
      <div class="hiw-title">Message Us on WhatsApp</div>
      <div class="hiw-desc">Tap "Enquire on WhatsApp" on any item or send us a message directly with what you're looking for.</div>
    </div>
  </div>
  <div class="hiw-step reveal reveal-delay-3">
    <div class="hiw-num">03</div>
    <div>
      <div class="hiw-title">Collect or Visit In-Store</div>
      <div class="hiw-desc">We'll confirm availability, pricing and arrange delivery — or come try it on at our Al Ghuwair store.</div>
    </div>
  </div>
</div>

<!-- ======== BRANDS STRIP ======== -->
<div class="brands-strip" id="brands" aria-label="Brands we carry">
  <p class="brands-label">Brands Available In Store</p>
  <div class="brands-scroll" aria-hidden="true">
    <div class="brands-inner">
      <?php
      $brands = ['Bin Shahzad Originals','Gul Ahmed','Khaadi','Sana Safinaz','Maria B','Sapphire','Alkaram Studio','Junaid Jamshed','Elan','Limelight','Cross Stitch','Asim Jofa','Bin Shahzad Originals','Gul Ahmed','Khaadi','Sana Safinaz','Maria B','Sapphire','Alkaram Studio','Junaid Jamshed','Elan','Limelight','Cross Stitch','Asim Jofa'];
      foreach($brands as $b): ?>
      <span class="brand-tag<?= $b === 'Bin Shahzad Originals' ? ' self' : '' ?>"><span class="dot"></span><?= $b ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- ======== TICKER ======== -->
<div class="ticker-wrap" aria-hidden="true">
  <div class="ticker-inner">
    <?php
    $items = ['Shalwar Kameez','Eid Collection','Ramadan Edit','Bridal Wear','Event Dresses','Unstitched Lawn','Self-Branded Originals','Ready-to-Wear','Formal Wear','Kids Eid Wear'];
    $repeats = array_merge($items, $items);
    foreach($repeats as $item): ?>
    <span class="ticker-item"><span class="ticker-dot"></span><?= $item ?></span>
    <?php endforeach; ?>
  </div>
</div>

<!-- ======== COLLECTIONS ======== -->
<section class="collections" id="collections" aria-label="Collections">
  <div class="reveal">
    <div class="section-label">Shop By Occasion</div>
    <h2 class="section-title">Dressed Right for<br><em>Every Moment</em></h2>
  </div>

  <div class="collections-grid">
    <div class="collection-card reveal reveal-delay-1">
      <div class="card-img" data-label="Eid Collection">
        <div class="card-img-overlay"></div>
      </div>
      <div class="card-content">
        <div class="card-cat">In Store Now</div>
        <h3 class="card-title">Eid &<br>Ramadan Edit</h3>
        <div class="card-link">View on WhatsApp</div>
      </div>
    </div>

    <div class="collection-card reveal reveal-delay-2">
      <div class="card-img" data-label="Shalwar Kameez"></div>
      <div class="card-content">
        <div class="card-cat">Everyday Essential</div>
        <h3 class="card-title">Shalwar Kameez</h3>
        <div class="card-link">View on WhatsApp</div>
      </div>
    </div>

    <div class="collection-card reveal reveal-delay-3">
      <div class="card-img" data-label="Bridal & Event"></div>
      <div class="card-content">
        <div class="card-cat">Special Occasions</div>
        <h3 class="card-title">Bridal & Event Wear</h3>
        <div class="card-link">View on WhatsApp</div>
      </div>
    </div>

    <div class="collection-card reveal reveal-delay-2">
      <div class="card-img" data-label="Bin Shahzad Originals"></div>
      <div class="card-content">
        <div class="card-cat">Our Own Label</div>
        <h3 class="card-title">Signature Originals</h3>
        <div class="card-link">View on WhatsApp</div>
      </div>
    </div>

    <div class="collection-card reveal reveal-delay-3">
      <div class="card-img" data-label="Kids Eid Wear"></div>
      <div class="card-content">
        <div class="card-cat">Little Ones</div>
        <h3 class="card-title">Kids Collection</h3>
        <div class="card-link">View on WhatsApp</div>
      </div>
    </div>
  </div>
</section>

<!-- ======== FEATURED PRODUCTS ======== -->
<section class="featured" id="featured" aria-label="Catalog highlights">
  <div class="featured-header reveal">
    <div>
      <div class="section-label">Customer Favourites</div>
      <h2 class="section-title">Frequently <em>Restocked</em></h2>
    </div>
    <a href="https://wa.me/<?= $config['whatsapp'] ?>" target="_blank" rel="noopener" class="view-all">Ask About Full Catalog →</a>
  </div>

  <div class="products-grid">
    <?php
    $products = [
      ['name'=>'Eid Signature Set','brand'=>'Bin Shahzad Originals','fabric'=>'Embroidered Lawn 3-Piece','price'=>'From AED 195','badge'=>'Bestseller'],
      ['name'=>'Gul Ahmed Summer Lawn','brand'=>'Gul Ahmed','fabric'=>'Unstitched 3-Piece','price'=>'From AED 175','badge'=>'Restocked'],
      ['name'=>'Ramadan Embroidered Suit','brand'=>'Sana Safinaz','fabric'=>'Muzlin Unstitched','price'=>'From AED 320','badge'=>'Eid Special'],
      ['name'=>'Khaadi Ready-to-Wear','brand'=>'Khaadi','fabric'=>'Stitched Pret','price'=>'From AED 250','badge'=>'Popular'],
    ];
    foreach($products as $i => $p): ?>
    <div class="product-card reveal reveal-delay-<?= $i+1 ?>">
      <div class="product-img">
        <div class="product-img-inner">
          <div style="font-size:2rem;margin-bottom:8px">👗</div>
          <div><?= $p['name'] ?></div>
          <div style="font-size:0.5rem;opacity:0.5;margin-top:4px">Add product image</div>
        </div>
        <?php if($p['badge']): ?><div class="product-badge"><?= $p['badge'] ?></div><?php endif; ?>
        <div class="product-brand-tag"><?= $p['brand'] ?></div>
      </div>
      <div class="product-info">
        <div class="product-name"><?= $p['name'] ?></div>
        <div class="product-fabric"><?= $p['fabric'] ?></div>
        <div class="product-price">
          <span class="price-main"><?= $p['price'] ?></span>
        </div>
        <div class="price-note">Final price confirmed via WhatsApp</div>
        <a href="https://wa.me/<?= $config['whatsapp'] ?>?text=Hi! I'm interested in the <?= urlencode($p['name']) ?> by <?= urlencode($p['brand']) ?>. Is it in stock?" target="_blank">
          <button class="product-cta">Enquire on WhatsApp</button>
        </a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <p class="catalog-note">These are a few of our <strong>most-loved, frequently restocked</strong> pieces — our full range is much larger. <strong>Message us on WhatsApp</strong> for the latest stock and prices.</p>
</section>

<!-- ======== WHY US ======== -->
<section class="why-us" id="about" aria-label="About us">
  <div class="why-visual reveal">
    <div class="why-img-box">
      <img src="assets/shop.png" alt="Bin Shahzad Fashions shop photo">
    </div>
  </div>

  <div>
    <div class="reveal">
      <div class="section-label">Why Shop With Us</div>
      <h2 class="section-title">Pakistani Style,<br><em>UAE Convenience</em></h2>
    </div>
    <div class="features-list">
      <div class="feature-item reveal reveal-delay-1">
        <div class="feature-num">01</div>
        <div>
          <div class="feature-title">Brands & Our Own Designs</div>
          <p class="feature-desc">We stock genuine Pakistani brands like Gul Ahmed, Khaadi and Sana Safinaz — alongside Bin Shahzad Originals, our own in-house designed shalwar kameez and event wear.</p>
        </div>
      </div>
      <div class="feature-item reveal reveal-delay-2">
        <div class="feature-num">02</div>
        <div>
          <div class="feature-title">Eid & Ramadan Specials</div>
          <p class="feature-desc">Every season we bring in dedicated Eid and Ramadan collections, plus pieces for weddings, mehndis and other events — so you're always dressed for the occasion.</p>
        </div>
      </div>
      <div class="feature-item reveal reveal-delay-3">
        <div class="feature-num">03</div>
        <div>
          <div class="feature-title">WhatsApp Ordering or In-Store Visit</div>
          <p class="feature-desc">No complicated checkout — just message us on WhatsApp with what you want, or come visit us in Al Ghuwair, Sharjah and try it on in person.</p>
        </div>
      </div>
      <div class="feature-item reveal reveal-delay-4">
        <div class="feature-num">04</div>
        <div>
          <div class="feature-title">Stitching & Alterations</div>
          <p class="feature-desc">Bring in your unstitched suit and we'll have it tailored to fit, Pakistani-style. Stitching services available for both our brands and your own fabric.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ======== TESTIMONIALS ======== -->
<section class="testimonials" aria-label="Customer reviews">
  <div class="section-label reveal">Happy Customers</div>
  <h2 class="section-title reveal">Loved Across <em>the UAE</em></h2>

  <div class="testimonials-slider reveal">
    <div class="testimonial-slide active">
      <p class="testimonial-text">"Finally a store in Sharjah that stocks genuine Gul Ahmed and Khaadi, plus their own original designs. The Eid collection sold out fast for good reason — beautiful quality."</p>
      <div class="testimonial-author">Sadia F.</div>
      <div class="testimonial-location">Sharjah, UAE</div>
    </div>
    <div class="testimonial-slide">
      <p class="testimonial-text">"I messaged them on WhatsApp about a Ramadan suit and they sent photos, confirmed price and arranged delivery same day. Highly Recommanded!"</p>
      <div class="testimonial-author">Huma R.</div>
      <div class="testimonial-location">Dubai, UAE</div>
    </div>
    <div class="testimonial-slide">
      <p class="testimonial-text">"Visited the Al Ghuwair store and tried on one of their own Bin Shahzad designs — perfect fit after a quick alteration. Will definitely be back for Eid shopping."</p>
      <div class="testimonial-author">Nadia K.</div>
      <div class="testimonial-location">Abu Dhabi, UAE</div>
    </div>
    <div class="slider-dots" role="tablist">
      <button class="dot active" data-index="0" aria-label="Review 1" aria-selected="true"></button>
      <button class="dot"        data-index="1" aria-label="Review 2" aria-selected="false"></button>
      <button class="dot"        data-index="2" aria-label="Review 3" aria-selected="false"></button>
    </div>
  </div>
</section>

<!-- ======== SOCIAL STRIP ======== -->
<section class="social-strip" id="social" aria-label="Social media">
  <div class="reveal" style="text-align:center">
    <div class="section-label" style="justify-content:center">Follow Along</div>
    <h2 class="section-title" style="text-align:center">See Us <em>@binshahzadfashion</em></h2>
    <p style="color:var(--cream-dim);font-size:0.88rem;margin-top:12px">Tag us in your looks for a feature on our page</p>
  </div>
  <div class="social-strip-grid reveal" style="margin-top:46px">
    <?php for($i=0;$i<6;$i++): ?>
    <a class="insta-tile" href="<?= $config['instagram'] ?>" target="_blank" rel="noopener" aria-label="Instagram post <?= $i+1 ?>">
      <img src="assets/insta-placeholder-<?= $i+1 ?>.png" alt="Instagram placeholder <?= $i+1 ?>">
    </a>
    <?php endfor; ?>
  </div>
  <div style="text-align:center;margin-top:28px" class="reveal">
    <a href="<?= $config['instagram'] ?>" target="_blank" rel="noopener" class="btn-outline" style="display:inline-flex;padding:12px 28px">
      <svg viewBox="0 0 24 24" style="width:15px;height:15px;fill:currentColor;margin-right:8px"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
      Follow on Instagram
    </a>
  </div>
</section>

<!-- ======== VISIT STORE / CONTACT ======== -->
<section class="contact-cta" id="contact" aria-label="Visit us or contact us">
  <div class="cta-left">
    <div class="section-label reveal">Visit Us</div>
    <h2 class="section-title reveal">Come See Us in<br><em>Al Ghuwair, Sharjah</em></h2>
    <p class="cta-desc reveal">No online checkout — just walk into our store, or send a WhatsApp message and we'll take care of the rest.</p>

    <div class="order-note reveal">
      <strong>How ordering works</strong>
      This website is a display catalog for the store. To place an order, message us on WhatsApp with the item name or visit the shop in Al Ghuwair, Sharjah. We'll confirm availability, pricing and pick-up/delivery details directly.
    </div>

    <div class="contact-details reveal">
      <div class="contact-row">
        <div class="contact-icon">📞</div>
        <a href="tel:<?= $config['phone'] ?>"><?= $config['phone'] ?></a>
      </div>
      <div class="contact-row">
        <div class="contact-icon">✉️</div>
        <a href="mailto:<?= $config['email'] ?>"><?= $config['email'] ?></a>
      </div>
      <div class="contact-row">
        <div class="contact-icon">📍</div>
        <span><?= $config['location'] ?></span>
      </div>
    </div>

    <a href="https://wa.me/<?= $config['whatsapp'] ?>?text=Hi Bin Shahzad Fashions! I'd like to know more about your collection." target="_blank" rel="noopener" class="whatsapp-big reveal">
      <div class="whatsapp-big-icon">
        <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
      </div>
      <div>
        <div class="whatsapp-big-text-title">Chat With Us Now</div>
        <div class="whatsapp-big-text-sub"><?= $config['phone'] ?> · Fastest way to order</div>
      </div>
    </a>

    <div style="display:flex;gap:12px;margin-top:24px;flex-wrap:wrap;" class="reveal">
      <a href="<?= $config['instagram'] ?>" target="_blank" rel="noopener" class="btn-outline" style="padding:10px 18px;font-size:0.62rem;gap:8px;display:inline-flex;align-items:center">
        <svg viewBox="0 0 24 24" style="width:13px;height:13px;fill:currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
        Instagram
      </a>
      <a href="<?= $config['facebook'] ?>" target="_blank" rel="noopener" class="btn-outline" style="padding:10px 18px;font-size:0.62rem;gap:8px;display:inline-flex;align-items:center">
        <svg viewBox="0 0 24 24" style="width:13px;height:13px;fill:currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
        Facebook
      </a>
      <a href="<?= $config['tiktok'] ?>" target="_blank" rel="noopener" class="btn-outline" style="padding:10px 18px;font-size:0.62rem;gap:8px;display:inline-flex;align-items:center">
        <svg viewBox="0 0 24 24" style="width:13px;height:13px;fill:currentColor"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
        TikTok
      </a>
      <a href="<?= $config['youtube'] ?>" target="_blank" rel="noopener" class="btn-outline" style="padding:10px 18px;font-size:0.62rem;gap:8px;display:inline-flex;align-items:center">
        <svg viewBox="0 0 24 24" style="width:13px;height:13px;fill:currentColor"><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg>
        YouTube
      </a>
    </div>
  </div>

  <div class="reveal">
    <div class="section-label">Send a Message</div>
    <?php if($formMessage === 'success'): ?>
      <div class="form-success">✓ Thank you! We'll get back to you within a few hours.</div>
    <?php elseif($formMessage === 'error'): ?>
      <div class="form-error">Please fill in all fields and try again.</div>
    <?php endif; ?>
    <form class="contact-form" method="POST" action="#contact" novalidate>
      <div class="form-group">
        <label class="form-label" for="name">Your Name</label>
        <input class="form-input" type="text" id="name" name="name" placeholder="Sara Ahmed" required>
      </div>
      <div class="form-group">
        <label class="form-label" for="email">Email Address</label>
        <input class="form-input" type="email" id="email" name="email" placeholder="sara@email.com" required>
      </div>
      <div class="form-group">
        <label class="form-label" for="phone_f">Phone / WhatsApp (UAE)</label>
        <input class="form-input" type="tel" id="phone_f" name="phone_f" placeholder="+971 50 000 0000">
      </div>
      <div class="form-group">
        <label class="form-label" for="message">Message</label>
        <textarea class="form-textarea" id="message" name="message" placeholder="Tell us which item, brand or occasion you're shopping for..." required></textarea>
      </div>
      <button type="submit" name="contact_submit" class="btn-primary" style="border:none;cursor:pointer;font-family:var(--ff-body)">
        Send Message →
      </button>
    </form>

    <div class="map-frame">
      <iframe
        src="https://www.google.com/maps?q=Al+Ghuwair+Sharjah+United+Arab+Emirates&output=embed"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="Bin Shahzad Fashions location map"
        aria-label="Map showing Al Ghuwair, Sharjah, United Arab Emirates">
      </iframe>
    </div>
  </div>
</section>

<!-- ======== FOOTER ======== -->
<footer>
  <div class="footer-grid">
    <div>
      <div class="footer-logo-badge"><img src="images/logo.png" alt="Bin Shahzad Fashions logo"></div>
      <div class="footer-tagline">Pakistani Brands & Signature Originals</div>
      <p class="footer-about">
        Sharjah's go-to Pakistani fashion showcase. We bring you the best of Pakistan's clothing brands and our own original designs — shalwar kameez, Eid & Ramadan wear, bridal and event dresses.
      </p>
      <div class="footer-socials">
        <a href="<?= $config['instagram'] ?>" class="social-icon" target="_blank" rel="noopener" aria-label="Instagram"><svg viewBox="0 0 24 24" style="width:14px;height:14px;fill:currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
        <a href="<?= $config['facebook'] ?>" class="social-icon" target="_blank" rel="noopener" aria-label="Facebook"><svg viewBox="0 0 24 24" style="width:14px;height:14px;fill:currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
        <a href="<?= $config['tiktok'] ?>" class="social-icon" target="_blank" rel="noopener" aria-label="TikTok"><svg viewBox="0 0 24 24" style="width:14px;height:14px;fill:currentColor"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg></a>
        <a href="<?= $config['youtube'] ?>" class="social-icon" target="_blank" rel="noopener" aria-label="YouTube"><svg viewBox="0 0 24 24" style="width:14px;height:14px;fill:currentColor"><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg></a>
      </div>
    </div>

    <div>
      <h3 class="footer-heading">Shop</h3>
      <ul class="footer-links">
        <li><a href="#featured">Catalog Highlights</a></li>
        <li><a href="#collections">Eid & Ramadan Edit</a></li>
        <li><a href="#collections">Shalwar Kameez</a></li>
        <li><a href="#collections">Bridal & Event Wear</a></li>
        <li><a href="#collections">Bin Shahzad Originals</a></li>
      </ul>
    </div>

    <div>
      <h3 class="footer-heading">Help</h3>
      <ul class="footer-links">
        <li><a href="#contact">How to Order</a></li>
        <li><a href="#contact">Stitching Service</a></li>
        <li><a href="#contact">Store Location</a></li>
        <li><a href="https://wa.me/<?= $config['whatsapp'] ?>" target="_blank" rel="noopener">WhatsApp Us</a></li>
      </ul>
    </div>

    <div>
      <h3 class="footer-heading">Reach Us</h3>
      <div class="footer-contact-list">
        <div class="footer-contact-item">📞 <a href="tel:<?= $config['phone'] ?>"><?= $config['phone'] ?></a></div>
        <div class="footer-contact-item">✉️ <a href="mailto:<?= $config['email'] ?>"><?= $config['email'] ?></a></div>
        <div class="footer-contact-item">📍 <?= $config['address'] ?></div>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <span>© <?= $config['year'] ?> <?= $config['brand_name'] ?> <?= $config['brand_name2'] ?>. All rights reserved. · <?= $config['address'] ?></span>
    <span style="display:flex;gap:20px">
      <a href="https://wa.me/<?= $config['whatsapp'] ?>" target="_blank" rel="noopener">WhatsApp</a>
      <a href="<?= $config['instagram'] ?>" target="_blank" rel="noopener">Instagram</a>
    </span>
  </div>
</footer>

<!-- WhatsApp Float Button -->
<a href="https://wa.me/<?= $config['whatsapp'] ?>?text=Hi Bin Shahzad Fashions! I found you on your website and would like to enquire about your clothes."
   class="whatsapp-btn" target="_blank" rel="noopener" aria-label="Chat on WhatsApp" title="Chat with us on WhatsApp">
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>

<script>
const header = document.getElementById('main-header');
window.addEventListener('scroll', () => { header.classList.toggle('scrolled', window.scrollY > 60); }, { passive: true });

const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobileMenu');
hamburger.addEventListener('click', () => {
  const isOpen = mobileMenu.classList.toggle('open');
  hamburger.classList.toggle('active', isOpen);
  hamburger.setAttribute('aria-expanded', isOpen);
  document.body.style.overflow = isOpen ? 'hidden' : '';
});
document.querySelectorAll('.mobile-link').forEach(link => {
  link.addEventListener('click', () => {
    mobileMenu.classList.remove('open');
    hamburger.classList.remove('active');
    hamburger.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  });
});

const slides = document.querySelectorAll('.testimonial-slide');
const dots   = document.querySelectorAll('.dot');
let current  = 0; let timer;
function goTo(idx) {
  slides[current].classList.remove('active'); dots[current].classList.remove('active'); dots[current].setAttribute('aria-selected','false');
  current = idx;
  slides[current].classList.add('active'); dots[current].classList.add('active'); dots[current].setAttribute('aria-selected','true');
}
function autoplay() { timer = setInterval(() => goTo((current + 1) % slides.length), 5000); }
dots.forEach(dot => { dot.addEventListener('click', () => { clearInterval(timer); goTo(parseInt(dot.dataset.index)); autoplay(); }); });
autoplay();

const revealEls = document.querySelectorAll('.reveal');
const observer  = new IntersectionObserver((entries) => {
  entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); observer.unobserve(e.target); } });
}, { threshold: 0.12, rootMargin: '0px 0px -50px 0px' });
revealEls.forEach(el => observer.observe(el));

// Theme Toggle
const themeToggle = document.getElementById('themeToggle');
const themeIcon = document.getElementById('themeIcon');
const htmlEl = document.documentElement;

function setTheme(isDark) {
  if (isDark) {
    document.body.classList.remove('light-mode');
    themeIcon.textContent = '☀️';
    localStorage.setItem('theme', 'dark');
  } else {
    document.body.classList.add('light-mode');
    themeIcon.textContent = '🌙';
    localStorage.setItem('theme', 'light');
  }
}

function initTheme() {
  const saved = localStorage.getItem('theme');
  const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
  const isDark = saved ? saved === 'dark' : prefersDark;
  setTheme(isDark);
}

themeToggle.addEventListener('click', () => {
  const isLight = document.body.classList.contains('light-mode');
  setTheme(isLight);
});

initTheme();
</script>
</body>
</html>