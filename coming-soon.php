<?php
$config = [
    'brand'       => 'Bin Shahzad',
    'brand_sub'   => 'Fashions',
    'tagline'     => 'Pakistani Elegance · Delivered in the UAE',
    'urdu_text'   => 'پاکستانی فیشن',
    'launch_date' => '2023-09-01',      
    'whatsapp'    => '971551838486',         
    'phone'       => '+971 55 183 8486',
    'email'       => 'info@binshahzadfashion.com',
    'location'    => 'Al Ghuwair, Sharjah, United Arab Emirates',
    'instagram'   => 'https://www.instagram.com/binshahzadfashion',
    'facebook'    => 'https://www.facebook.com/BinShahzadFashions',
    'tiktok'      => 'https://tiktok.com/@bin_shahzad_uae',
    'youtube'     => 'https://www.youtube.com/@BinshahzadFashion',
];
$notify_msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['notify_email'])) {
    $email = filter_var(trim($_POST['notify_email']), FILTER_VALIDATE_EMAIL);
    $notify_msg = $email ? 'success' : 'error';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?= $config['brand'] ?> <?= $config['brand_sub'] ?> — Premium Pakistani fashion coming soon to UAE.">
<meta name="robots" content="index, follow">
<title><?= $config['brand'] ?> <?= $config['brand_sub'] ?> | Coming Soon</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Raleway:ital,wght@0,200;0,300;0,400;0,600;1,300&family=Noto+Nastaliq+Urdu:wght@400;700&display=swap" rel="stylesheet">
<style>
:root {
  --bg:        #07041A;
  --gold:      #FFB800;
  --gold-lt:   #FFD84D;
  --pink:      #FF1A6C;
  --pink-lt:   #FF6EA8;
  --teal:      #00E5CC;
  --emerald:   #00C87A;
  --purple:    #8B3FFF;
  --cream:     #FFFFFF;
  --dim:       #B8AADD;
  --muted:     #5A4E7A;
  --ff-h:      'Cinzel', serif;
  --ff-b:      'Raleway', sans-serif;
  --ff-u:      'Noto Nastaliq Urdu', serif;
  --ease:      cubic-bezier(0.25,0.46,0.45,0.94);
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{font-size:16px}
body{
  background:var(--bg);
  color:var(--cream);
  font-family:var(--ff-b);
  font-weight:300;
  min-height:100vh;
  overflow-x:hidden;
}
a{text-decoration:none;color:inherit}

/* ── CANVAS ── */
#c{position:fixed;inset:0;width:100%;height:100%;z-index:0;pointer-events:none}

/* ── COLOUR CLOUDS ── */
.clouds{
  position:fixed;inset:0;z-index:1;pointer-events:none;
  background:
    radial-gradient(ellipse 70% 60% at 50%  -5%, rgba(139,63,255,.35) 0%,transparent 60%),
    radial-gradient(ellipse 55% 50% at  0% 100%, rgba(255,26,108,.26) 0%,transparent 55%),
    radial-gradient(ellipse 55% 50% at 100% 85%,  rgba(0,229,204,.18) 0%,transparent 55%),
    radial-gradient(ellipse 45% 45% at 88%   5%,  rgba(255,184,0,.18) 0%,transparent 50%);
}

/* ── SPINNING MANDALA ── */
.mandala{
  position:fixed;inset:0;z-index:2;pointer-events:none;
  display:flex;align-items:center;justify-content:center;
}
.mandala svg{
  width:min(92vw,92vh);height:min(92vw,92vh);
  opacity:.1;animation:spin 80s linear infinite;
}
.mandala svg.i2{
  position:absolute;
  width:min(62vw,62vh);height:min(62vw,62vh);
  opacity:.08;animation:spin 45s linear infinite reverse;
}
@keyframes spin{to{transform:rotate(360deg)}}

/* ── CORNER ORNAMENTS ── */
.cn{position:fixed;width:90px;height:90px;z-index:3;pointer-events:none;opacity:.65}
.cn-tl{top:18px;left:18px}
.cn-tr{top:18px;right:18px;transform:scaleX(-1)}
.cn-bl{bottom:18px;left:18px;transform:scaleY(-1)}
.cn-br{bottom:18px;right:18px;transform:scale(-1,-1)}
.cn svg{width:100%;height:100%}

/* ── LAYOUT ── */
.page{
  position:relative;z-index:10;
  min-height:100svh;
  display:flex;flex-direction:column;
  align-items:center;justify-content:center;
  padding:60px 24px;
  text-align:center;
}

/* ── BADGE ── */
.badge{
  display:inline-flex;align-items:center;gap:10px;
  border:1px solid rgba(255,184,0,.4);
  padding:7px 22px;
  font-size:.6rem;letter-spacing:.38em;text-transform:uppercase;
  color:var(--gold-lt);
  margin-bottom:36px;
  background:rgba(255,184,0,.07);
  backdrop-filter:blur(12px);
  box-shadow:0 0 24px rgba(255,184,0,.12),inset 0 0 16px rgba(255,184,0,.04);
  animation:fadeD .8s .3s both;
}
.flag{font-size:1rem}
.live-dot{
  width:7px;height:7px;
  background:var(--emerald);border-radius:50%;
  box-shadow:0 0 10px var(--emerald);
  animation:pulse 2s ease-in-out infinite;
}
@keyframes pulse{
  0%,100%{transform:scale(1);box-shadow:0 0 10px var(--emerald)}
  50%{transform:scale(.65);box-shadow:0 0 4px var(--emerald)}
}

/* ── BRAND ── */
.brand{animation:fadeU 1s .5s both;margin-bottom:6px}
.urdu{
  font-family:var(--ff-u);
  font-size:clamp(.9rem,2vw,1.2rem);
  color:var(--gold-lt);opacity:.9;
  display:block;margin-bottom:12px;
  text-shadow:0 0 20px rgba(255,216,77,.6);
}
.name{
  font-family:var(--ff-h);
  font-size:clamp(2.6rem,7vw,6.2rem);
  font-weight:700;letter-spacing:.12em;line-height:1;
  background:linear-gradient(90deg,#fff 0%,var(--gold-lt) 22%,#fff 38%,var(--pink-lt) 54%,#fff 68%,var(--gold-lt) 84%,#fff 100%);
  background-size:260% auto;
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;
  background-clip:text;
  animation:shimmer 4s linear infinite;
  text-shadow:none;
  filter:drop-shadow(0 0 28px rgba(255,184,0,.35));
}
@keyframes shimmer{from{background-position:260% center}to{background-position:-260% center}}
.name::before,.name::after{
  content:'✦';font-size:.32em;
  background:none;-webkit-text-fill-color:var(--pink);
  text-shadow:0 0 14px var(--pink);
  margin:0 14px;vertical-align:middle;
}
.sub{
  font-family:var(--ff-h);
  font-size:clamp(.9rem,2.5vw,1.9rem);
  font-weight:400;letter-spacing:.52em;
  color:var(--gold);display:block;margin-top:5px;
  text-shadow:0 0 30px rgba(255,184,0,.55);
}

/* ── DIVIDER ── */
.div-line{
  display:flex;align-items:center;gap:14px;
  width:min(480px,90vw);margin:26px auto;
  animation:fadeU .8s .7s both;
}
.div-line::before{content:'';flex:1;height:1px;background:linear-gradient(to right,transparent,var(--pink),var(--gold),transparent)}
.div-line::after {content:'';flex:1;height:1px;background:linear-gradient(to left, transparent,var(--pink),var(--gold),transparent)}
.dia {width:8px;height:8px;background:var(--gold); transform:rotate(45deg);box-shadow:0 0 12px var(--gold)}
.dia2{width:4px;height:4px;border:1px solid var(--pink);transform:rotate(45deg);box-shadow:0 0 7px var(--pink)}

/* ── LABELS ── */
.cs-label{
  font-size:clamp(.58rem,1.4vw,.72rem);
  letter-spacing:.55em;text-transform:uppercase;
  color:var(--teal);
  text-shadow:0 0 18px rgba(0,229,204,.55);
  animation:fadeU .8s .85s both;margin-bottom:10px;
}
.tagline{
  font-size:clamp(.88rem,2vw,1.12rem);
  font-style:italic;color:var(--dim);letter-spacing:.07em;
  animation:fadeU .8s .95s both;margin-bottom:50px;
}

/* ── COUNTDOWN ── */
.cd{
  display:flex;gap:10px;align-items:stretch;justify-content:center;
  flex-wrap:wrap;margin-bottom:50px;
  animation:fadeU .8s 1.1s both;
}
.cb{
  position:relative;min-width:88px;
  background:rgba(8,5,26,.75);
  border:1px solid rgba(255,184,0,.28);
  padding:20px 14px 13px;
  backdrop-filter:blur(18px);
  display:flex;flex-direction:column;align-items:center;
  transition:border-color .4s,box-shadow .4s;
}
.cb::before{
  content:'';position:absolute;top:0;left:0;right:0;height:2px;
  background:linear-gradient(90deg,var(--pink),var(--gold),var(--teal));
}
.cb:hover{border-color:var(--gold);box-shadow:0 0 28px rgba(255,184,0,.2)}
.cn-num{
  font-family:var(--ff-h);
  font-size:clamp(1.9rem,5vw,3rem);font-weight:600;line-height:1;
  color:var(--gold-lt);text-align:center;min-width:2ch;
  text-shadow:0 0 28px rgba(255,216,77,.65);
}
.cn-num.flip{animation:flip .4s var(--ease)}
@keyframes flip{from{transform:translateY(-8px);opacity:0}to{transform:translateY(0);opacity:1}}
.cn-lbl{font-size:.52rem;letter-spacing:.35em;text-transform:uppercase;color:var(--dim);margin-top:8px}
.sep{
  font-family:var(--ff-h);font-size:2rem;
  color:var(--pink);align-self:center;padding-bottom:12px;
  text-shadow:0 0 14px var(--pink);
  animation:blink 1.8s ease-in-out infinite;
}
@keyframes blink{0%,100%{opacity:.7}50%{opacity:.15}}

/* ── NOTIFY FORM ── */
.notify{width:100%;max-width:480px;margin-bottom:50px;animation:fadeU .8s 1.3s both}
.n-lbl{font-size:.62rem;letter-spacing:.3em;text-transform:uppercase;color:var(--gold-lt);display:block;margin-bottom:14px}
.n-form{
  display:flex;
  border:1px solid rgba(255,184,0,.38);overflow:hidden;
  background:rgba(8,5,26,.7);backdrop-filter:blur(14px);
  transition:border-color .4s,box-shadow .4s;
}
.n-form:focus-within{border-color:var(--gold);box-shadow:0 0 28px rgba(255,184,0,.22)}
.n-input{
  flex:1;background:transparent;border:none;
  padding:14px 18px;font-family:var(--ff-b);font-size:.85rem;font-weight:300;
  color:var(--cream);outline:none;
}
.n-input::placeholder{color:var(--muted)}
.n-btn{
  background:linear-gradient(135deg,var(--pink),#B5004C);
  border:none;color:#fff;
  padding:14px 22px;
  font-family:var(--ff-b);font-size:.62rem;font-weight:600;
  letter-spacing:.28em;text-transform:uppercase;
  cursor:pointer;transition:all .3s;white-space:nowrap;
}
.n-btn:hover{background:linear-gradient(135deg,var(--pink-lt),var(--pink));box-shadow:0 0 22px rgba(255,26,108,.45)}
.n-ok{margin-top:12px;font-size:.75rem;color:var(--teal);letter-spacing:.1em;text-shadow:0 0 10px rgba(0,229,204,.45)}
.n-err{margin-top:12px;font-size:.75rem;color:var(--pink-lt);letter-spacing:.08em}

/* ── SOCIALS ── */
.socials{
  display:flex;gap:10px;justify-content:center;flex-wrap:wrap;
  margin-bottom:22px;animation:fadeU .8s 1.5s both;
}
.sb{
  display:flex;align-items:center;gap:8px;
  padding:10px 18px;
  border:1px solid rgba(255,255,255,.13);
  background:rgba(255,255,255,.05);
  backdrop-filter:blur(8px);
  font-size:.6rem;letter-spacing:.22em;text-transform:uppercase;
  color:rgba(255,255,255,.6);
  transition:all .35s var(--ease);
}
.sb:hover{transform:translateY(-4px)}
.sb.ig:hover{border-color:#E1306C;color:#E1306C;background:rgba(225,48,108,.1);box-shadow:0 8px 24px rgba(225,48,108,.28)}
.sb.fb:hover{border-color:#4A90E2;color:#4A90E2;background:rgba(74,144,226,.1);box-shadow:0 8px 24px rgba(74,144,226,.28)}
.sb.tt:hover{border-color:#69C9D0;color:#69C9D0;background:rgba(105,201,208,.1);box-shadow:0 8px 24px rgba(105,201,208,.28)}
.sb.yt:hover{border-color:#FF4444;color:#FF4444;background:rgba(255,68,68,.1);  box-shadow:0 8px 24px rgba(255,68,68,.28)}
.sb svg{width:14px;height:14px;fill:currentColor;flex-shrink:0}

/* ── WHATSAPP CTA ── */
.wa-cta{
  display:inline-flex;align-items:center;gap:10px;
  padding:13px 28px;margin-bottom:44px;margin-top:14px;
  background:linear-gradient(135deg,#00C853,#007B33);
  color:#fff;font-family:var(--ff-b);font-size:.65rem;font-weight:600;
  letter-spacing:.25em;text-transform:uppercase;
  border:1px solid rgba(0,200,83,.3);
  box-shadow:0 0 32px rgba(0,200,83,.22);
  transition:all .35s;animation:fadeU .8s 1.62s both;
}
.wa-cta:hover{transform:translateY(-3px);box-shadow:0 14px 40px rgba(0,200,83,.42)}
.wa-cta svg{width:16px;height:16px;fill:#fff}

/* ── FOOTER INFO ── */
.finfo{display:flex;flex-direction:column;align-items:center;gap:6px;animation:fadeU .8s 1.75s both}
.floc{
  display:flex;align-items:center;gap:8px;
  font-size:.68rem;letter-spacing:.2em;text-transform:uppercase;color:var(--muted);
}
.floc span{color:rgba(255,255,255,.4)}
.fdiv{color:var(--gold);opacity:.55}
.fcopy{font-size:.58rem;color:var(--muted);letter-spacing:.15em;margin-top:3px}

/* ── FLOATING WA ── */
.wa-float{
  position:fixed;bottom:26px;right:26px;
  width:52px;height:52px;
  background:linear-gradient(135deg,#00C853,#007B33);
  border-radius:50%;display:flex;align-items:center;justify-content:center;
  z-index:100;
  box-shadow:0 6px 26px rgba(0,200,83,.45);
  transition:transform .3s var(--ease),box-shadow .3s;
  animation:popIn .6s 2.2s both;
}
.wa-float:hover{transform:scale(1.12);box-shadow:0 12px 40px rgba(0,200,83,.6)}
.wa-float svg{width:26px;height:26px;fill:#fff}
@keyframes popIn{from{transform:scale(0);opacity:0}to{transform:scale(1);opacity:1}}

/* ── ANIMS ── */
@keyframes fadeU{from{opacity:0;transform:translateY(22px)}to{opacity:1;transform:translateY(0)}}
@keyframes fadeD{from{opacity:0;transform:translateY(-14px)}to{opacity:1;transform:translateY(0)}}

/* ── RESPONSIVE ── */
@media(max-width:600px){
  .page{padding:50px 20px}
  .cb{min-width:70px;padding:14px 10px 10px}
  .sep{display:none}
  .cn{width:60px;height:60px}
  .name::before,.name::after{margin:0 7px}
  .sb .sl{display:none}
  .sb{padding:10px 13px}
}
</style>
</head>
<body>

<canvas id="c"></canvas>
<div class="clouds" aria-hidden="true"></div>

<!-- Spinning mandala -->
<div class="mandala" aria-hidden="true">
  <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
    <polygon points="100,4 119,46 157,18 143,59 188,56 163,87 200,100 163,113 188,144 143,141 157,182 119,154 100,196 81,154 43,182 57,141 12,144 37,113 0,100 37,87 12,56 57,59 43,18 81,46" stroke="#FFB800" stroke-width=".6" fill="none"/>
    <polygon points="100,18 116,54 150,32 138,70 176,69 155,96 190,100 155,104 176,131 138,130 150,168 116,146 100,182 84,146 50,168 62,130 24,131 45,104 10,100 45,96 24,69 62,70 50,32 84,54" stroke="#FF1A6C" stroke-width=".4" fill="none"/>
    <circle cx="100" cy="100" r="88" stroke="#FFB800" stroke-width=".4"/>
    <circle cx="100" cy="100" r="68" stroke="#00E5CC" stroke-width=".3"/>
    <circle cx="100" cy="100" r="48" stroke="#FF1A6C" stroke-width=".25"/>
    <circle cx="100" cy="100" r="28" stroke="#FFB800" stroke-width=".25"/>
    <line x1="12" y1="100" x2="188" y2="100" stroke="#FFB800" stroke-width=".2"/>
    <line x1="100" y1="12" x2="100" y2="188" stroke="#FFB800" stroke-width=".2"/>
    <line x1="28" y1="28" x2="172" y2="172" stroke="#00E5CC" stroke-width=".2"/>
    <line x1="172" y1="28" x2="28" y2="172" stroke="#00E5CC" stroke-width=".2"/>
  </svg>
  <svg class="i2" viewBox="0 0 200 200" fill="none">
    <polygon points="100,12 114,48 148,28 136,66 174,64 152,92 188,100 152,108 174,136 136,134 148,172 114,152 100,188 86,152 52,172 64,134 26,136 48,108 12,100 48,92 26,64 64,66 52,28 86,48" stroke="#8B3FFF" stroke-width=".7" fill="none"/>
    <circle cx="100" cy="100" r="78" stroke="#FF1A6C" stroke-width=".4"/>
    <circle cx="100" cy="100" r="38" stroke="#FFB800" stroke-width=".3"/>
  </svg>
</div>

<!-- Corners -->
<?php $csn = '<svg viewBox="0 0 90 90" fill="none"><path d="M6 6 L6 38 M6 6 L38 6" stroke="#FFB800" stroke-width="1.6"/><path d="M6 16 L6 32 M16 6 L32 6" stroke="#FF1A6C" stroke-width=".5" opacity=".7"/><circle cx="6" cy="6" r="2.5" fill="#FFB800"/><path d="M18 18 L18 48 Q18 58 28 58 L58 58" stroke="#00E5CC" stroke-width=".7" fill="none"/><rect x="16" y="16" width="4" height="4" fill="none" stroke="#FFB800" stroke-width=".6" transform="rotate(45 18 18)"/></svg>'; ?>
<div class="cn cn-tl" aria-hidden="true"><?= $csn ?></div>
<div class="cn cn-tr" aria-hidden="true"><?= $csn ?></div>
<div class="cn cn-bl" aria-hidden="true"><?= $csn ?></div>
<div class="cn cn-br" aria-hidden="true"><?= $csn ?></div>

<!-- ===== PAGE ===== -->
<main class="page" role="main">

  <div class="badge" aria-label="Pakistani fashion in UAE">
    <span class="flag">🇵🇰</span>
    Pakistani Fashion
    <span class="live-dot" aria-hidden="true"></span>
    <span class="flag">🇦🇪</span>
    Dubai, UAE
  </div>

  <div class="brand">
    <span class="urdu" aria-hidden="true"><?= $config['urdu_text'] ?></span>
    <h1 class="name"><?= strtoupper($config['brand']) ?></h1>
    <span class="sub"><?= strtoupper($config['brand_sub']) ?></span>
  </div>

  <div class="div-line" aria-hidden="true">
    <span class="dia2"></span><span class="dia"></span><span class="dia2"></span>
  </div>

  <p class="cs-label">Something Extraordinary is Coming</p>
  <p class="tagline"><?= $config['tagline'] ?></p>

  <div class="cd" id="cd" role="timer" aria-label="Countdown to launch">
    <div class="cb"><div class="cn-num" id="d">00</div><div class="cn-lbl">Days</div></div>
    <div class="sep" aria-hidden="true">:</div>
    <div class="cb"><div class="cn-num" id="h">00</div><div class="cn-lbl">Hours</div></div>
    <div class="sep" aria-hidden="true">:</div>
    <div class="cb"><div class="cn-num" id="m">00</div><div class="cn-lbl">Minutes</div></div>
    <div class="sep" aria-hidden="true">:</div>
    <div class="cb"><div class="cn-num" id="s">00</div><div class="cn-lbl">Seconds</div></div>
  </div>

  <div class="notify">
    <span class="n-lbl">Notify me when we launch</span>
    <?php if($notify_msg==='success'): ?>
      <p class="n-ok" role="alert">✓ &nbsp;You're on the list! We'll notify you on launch day.</p>
    <?php else: ?>
    <form class="n-form" method="POST" action="#">
      <input class="n-input" type="email" name="notify_email" placeholder="Your email address" required autocomplete="email">
      <button class="n-btn" type="submit">Notify Me</button>
    </form>
    <?php if($notify_msg==='error'): ?><p class="n-err" role="alert">Please enter a valid email.</p><?php endif; ?>
    <?php endif; ?>
  </div>

  <div class="socials" aria-label="Follow us">
    <a href="<?= $config['instagram'] ?>" target="_blank" rel="noopener" class="sb ig" aria-label="Instagram">
      <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
      <span class="sl">Instagram</span>
    </a>
    <a href="<?= $config['facebook'] ?>" target="_blank" rel="noopener" class="sb fb" aria-label="Facebook">
      <svg viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
      <span class="sl">Facebook</span>
    </a>
    <a href="<?= $config['tiktok'] ?>" target="_blank" rel="noopener" class="sb tt" aria-label="TikTok">
      <svg viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
      <span class="sl">TikTok</span>
    </a>
    <a href="<?= $config['youtube'] ?>" target="_blank" rel="noopener" class="sb yt" aria-label="YouTube">
      <svg viewBox="0 0 24 24"><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg>
      <span class="sl">YouTube</span>
    </a>
  </div>

  <a href="https://wa.me/<?= $config['whatsapp'] ?>?text=Hi Bin Shahzad Fashions! I saw your coming soon page and would love to know more about your Pakistani clothes."
     target="_blank" rel="noopener" class="wa-cta" aria-label="Chat on WhatsApp">
    <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    Chat With Us · <?= $config['phone'] ?>
  </a>

  <div class="finfo">
    <div class="floc">
      <span><?= $config['location'] ?></span>
      <span class="fdiv">✦</span>
      <span>Pakistani Origin Clothing</span>
    </div>
    <p class="fcopy">© <?= date('Y') ?> <?= $config['brand'] ?> <?= $config['brand_sub'] ?>. All rights reserved.</p>
  </div>

</main>

<!-- Floating WhatsApp -->
<a href="https://wa.me/<?= $config['whatsapp'] ?>" target="_blank" rel="noopener" class="wa-float" aria-label="WhatsApp">
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>

<script>
/* ── STARS ── */
(function(){
  const cv=document.getElementById('c'),cx=cv.getContext('2d');
  let st=[],W,H;
  function rs(){W=cv.width=innerWidth;H=cv.height=innerHeight}
  function mk(n){
    st=[];
    for(let i=0;i<n;i++) st.push({
      x:Math.random()*W, y:Math.random()*H,
      r:Math.random()*1.5+.2,
      a:Math.random()*.7+.1,
      sp:Math.random()*.35+.04,
      dr:(Math.random()-.5)*.1,
      ph:Math.random()*Math.PI*2,
      /* random colour class: 0=white, 1=gold, 2=pink, 3=teal */
      cl:Math.floor(Math.random()*10)<1?1:Math.floor(Math.random()*10)<1?2:Math.floor(Math.random()*10)<1?3:0
    });
  }
  function draw(){
    cx.clearRect(0,0,W,H);
    st.forEach(s=>{
      s.ph+=.017;
      const a=s.a*(.55+.45*Math.sin(s.ph));
      cx.beginPath();cx.arc(s.x,s.y,s.r,0,Math.PI*2);
      if(s.cl===1) cx.fillStyle=`rgba(255,184,0,${a})`;
      else if(s.cl===2) cx.fillStyle=`rgba(255,26,108,${a*0.8})`;
      else if(s.cl===3) cx.fillStyle=`rgba(0,229,204,${a*0.7})`;
      else{const v=190+Math.floor(65*Math.sin(s.ph*.4));cx.fillStyle=`rgba(${v},${Math.floor(v*.88)},${Math.floor(v*.75)},${a})`}
      cx.fill();
      s.y-=s.sp; s.x+=s.dr;
      if(s.y<-2){s.y=H+2;s.x=Math.random()*W}
      if(s.x<0)s.x=W; if(s.x>W)s.x=0;
    });
    requestAnimationFrame(draw);
  }
  rs();mk(260);draw();
  window.addEventListener('resize',()=>{rs();mk(260)},{passive:true});
})();

/* ── COUNTDOWN ── */
(function(){
  const launch=new Date('<?= $config['launch_date'] ?>T00:00:00').getTime();
  const els={d:document.getElementById('d'),h:document.getElementById('h'),m:document.getElementById('m'),s:document.getElementById('s')};
  let prev={d:null,h:null,m:null,s:null};
  function pad(n){return String(n).padStart(2,'0')}
  function flip(el,v){el.textContent=v;el.classList.remove('flip');void el.offsetWidth;el.classList.add('flip')}
  function tick(){
    const diff=launch-Date.now();
    if(diff<=0){Object.values(els).forEach(e=>e.textContent='00');return}
    const v={
      d:pad(Math.floor(diff/86400000)),
      h:pad(Math.floor(diff%86400000/3600000)),
      m:pad(Math.floor(diff%3600000/60000)),
      s:pad(Math.floor(diff%60000/1000))
    };
    if(v.d!==prev.d)flip(els.d,v.d);
    if(v.h!==prev.h)flip(els.h,v.h);
    if(v.m!==prev.m)flip(els.m,v.m);
    if(v.s!==prev.s)flip(els.s,v.s);
    prev=v;
  }
  tick();setInterval(tick,1000);
})();
</script>
</body>
</html>
