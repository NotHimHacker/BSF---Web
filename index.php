<?php
$site = [
    'name' => 'Bin Shahzad Fashions',
    'legal_name' => 'Shahzad Saleem Trading L.L.C. SP',
    'url' => 'https://binshahzadfashion.com/',
    'phone' => '+971 55 183 8486',
    'whatsapp' => '971551838486',
    'email' => 'info@binshahzadfashion.com',
    'address' => 'Al Ghuwair, Sharjah, United Arab Emirates',
    'instagram' => 'https://www.instagram.com/binshahzadfashion',
    'facebook' => 'https://www.facebook.com/BinShahzadFashions',
    'youtube' => 'https://www.youtube.com/@BinshahzadFashion',
    'tiktok' => 'https://tiktok.com/@bin_shahzad_uae',
    'directions' => 'https://www.google.com/maps/search/?api=1&query=Shahzad+Saleem+Trading+Al+Ghuwair+Sharjah',
];

$collections = [
    ['title' => 'Shalwar Kameez', 'note' => 'Everyday & elevated', 'image' => 'assets/collections/shalwar-kameez.webp', 'message' => 'Hello! I would like to see your latest shalwar kameez styles.'],
    ['title' => 'Eid Edit', 'note' => 'Festive dressing', 'image' => 'assets/collections/eid.webp', 'message' => 'Hello! Please share your current Eid collection.'],
    ['title' => 'Signature Originals', 'note' => 'Our own designs', 'image' => 'assets/collections/originals.webp', 'message' => 'Hello! I would like to see Bin Shahzad signature originals.'],
    ['title' => 'Kids Occasionwear', 'note' => 'Little celebrations', 'image' => 'assets/collections/kids-eid.webp', 'message' => 'Hello! Please share your available kids occasionwear.'],
    ['title' => 'Bridal & Events', 'note' => 'Statement pieces', 'image' => 'assets/collections/bridal-event.webp', 'message' => 'Hello! I am looking for bridal or event wear.'],
];

$highlights = [
    ['name' => 'Summer Lawn Edit', 'brand' => 'Gul Ahmed', 'detail' => 'Printed lawn · 3-piece look', 'image' => 'assets/products/gul-ahmed-summer-lawn.webp'],
    ['name' => 'Ready-to-Wear Edit', 'brand' => 'Khaadi', 'detail' => 'Easy eastern wear · seasonal', 'image' => 'assets/products/khaadi-ready-to-wear.webp'],
    ['name' => 'Embroidered Suit', 'brand' => 'Ramadan Edit', 'detail' => 'Embroidered · occasion-ready', 'image' => 'assets/products/ramadan-embroidered-suit.webp'],
    ['name' => 'Floral Signature Set', 'brand' => 'Bin Shahzad Original', 'detail' => 'Co-ordinated set · limited style', 'image' => 'assets/products/eid-signature-set.webp'],
];

function wa_link(string $number, string $message): string {
    return 'https://wa.me/' . $number . '?text=' . rawurlencode($message);
}

$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'WebSite',
            '@id' => $site['url'] . '#website',
            'url' => $site['url'],
            'name' => $site['name'],
            'alternateName' => 'Bin Shahzad',
            'inLanguage' => 'en-AE',
        ],
        [
            '@type' => 'ClothingStore',
            '@id' => $site['url'] . '#store',
            'name' => $site['name'],
            'legalName' => $site['legal_name'],
            'url' => $site['url'],
            'image' => $site['url'] . 'assets/shop.webp',
            'logo' => $site['url'] . 'images/logo.png',
            'telephone' => $site['phone'],
            'email' => $site['email'],
            'description' => 'Pakistani ladies clothing shop in Al Ghuwair, Sharjah, offering branded eastern wear, shalwar kameez, occasion dresses, kids styles, signature originals and selected wholesale enquiries.',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Al Ghuwair',
                'addressLocality' => 'Sharjah',
                'addressRegion' => 'Sharjah',
                'addressCountry' => 'AE',
            ],
            'areaServed' => ['Sharjah', 'Dubai', 'Ajman', 'United Arab Emirates'],
            'currenciesAccepted' => 'AED',
            'sameAs' => [$site['instagram'], $site['facebook'], $site['youtube'], $site['tiktok']],
        ],
    ],
];
?>
<!doctype html>
<html lang="en-AE">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pakistani Clothes in Sharjah | Bin Shahzad Fashions</title>
    <meta name="description" content="Visit Bin Shahzad Fashions in Al Ghuwair, Sharjah for Pakistani ladies clothes, shalwar kameez, Eid and event wear, kids styles and selected wholesale enquiries. Check availability on WhatsApp.">
    <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
    <meta name="theme-color" content="#211917">
    <link rel="canonical" href="<?= htmlspecialchars($site['url']) ?>">
    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel="manifest" href="site.webmanifest">

    <meta property="og:locale" content="en_AE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= htmlspecialchars($site['name']) ?>">
    <meta property="og:title" content="Pakistani Clothes in Sharjah | Bin Shahzad Fashions">
    <meta property="og:description" content="Discover Pakistani eastern wear and signature styles at our Al Ghuwair shop. Visit in person or check availability on WhatsApp.">
    <meta property="og:url" content="<?= htmlspecialchars($site['url']) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($site['url']) ?>assets/hero-photo.webp">
    <meta property="og:image:alt" content="A model wearing a red Pakistani shalwar kameez from Bin Shahzad Fashions">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="assets/css/site.css?v=2">
    <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?></script>
</head>
<body>
    <a class="skip-link" href="#main">Skip to main content</a>

    <div class="topbar">
        <p><span>Al Ghuwair, Sharjah</span><span aria-hidden="true">·</span><span>Retail & selected wholesale enquiries</span></p>
        <a href="<?= htmlspecialchars($site['directions']) ?>" target="_blank" rel="noopener">Get directions <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a>
    </div>

    <header class="site-header" id="site-header">
        <a class="wordmark" href="#home" aria-label="Bin Shahzad Fashions home">
            <span>Bin Shahzad</span>
            <small>Fashions · Sharjah</small>
        </a>
        <nav class="desktop-nav" aria-label="Main navigation">
            <a href="#collections">Collections</a>
            <a href="#new-arrivals">Highlights</a>
            <a href="#wholesale">Wholesale</a>
            <a href="#visit">Visit us</a>
        </nav>
        <a class="header-cta" href="<?= htmlspecialchars(wa_link($site['whatsapp'], 'Hello Bin Shahzad Fashions! I found your website and would like to check what is available.')) ?>" target="_blank" rel="noopener">
            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> WhatsApp
        </a>
        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-nav" aria-label="Open menu">
            <span></span><span></span>
        </button>
        <nav class="mobile-nav" id="mobile-nav" aria-label="Mobile navigation">
            <a href="#collections">Collections</a>
            <a href="#new-arrivals">Highlights</a>
            <a href="#wholesale">Wholesale</a>
            <a href="#visit">Visit us</a>
            <a href="<?= htmlspecialchars(wa_link($site['whatsapp'], 'Hello! I would like to ask about your current collection.')) ?>" target="_blank" rel="noopener">Chat on WhatsApp</a>
        </nav>
    </header>

    <main id="main">
        <section class="hero" id="home">
            <div class="hero-copy reveal">
                <p class="eyebrow"><span></span> Pakistani fashion in Sharjah</p>
                <h1>Style that feels<br><em>like home.</em></h1>
                <p class="hero-intro">Discover Pakistani ladies wear, festive looks and signature originals at our Al Ghuwair shop—curated for everyday elegance and every celebration.</p>
                <div class="hero-actions">
                    <a class="button button-primary" href="#collections">Explore collections <i class="fa-solid fa-arrow-down" aria-hidden="true"></i></a>
                    <a class="text-link" href="<?= htmlspecialchars(wa_link($site['whatsapp'], 'Hello Bin Shahzad Fashions! Please show me your latest arrivals.')) ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> Ask for latest arrivals</a>
                </div>
                <div class="hero-proof" aria-label="What we offer">
                    <div><strong>Retail</strong><span>Visit our Sharjah shop</span></div>
                    <div><strong>Wholesale</strong><span>Selected bulk enquiries</span></div>
                    <div><strong>WhatsApp</strong><span>Stock & price enquiries</span></div>
                </div>
            </div>
            <div class="hero-gallery reveal">
                <figure class="hero-main-image">
                    <img src="assets/hero-photo.webp" alt="Woman in a red embroidered Pakistani shalwar kameez" width="800" height="1200" fetchpriority="high">
                </figure>
                <figure class="hero-shop-image">
                    <img src="assets/shop.webp" alt="Entrance of Shahzad Saleem Trading ladies garments shop in Al Ghuwair, Sharjah" width="900" height="1144">
                    <figcaption><i class="fa-solid fa-location-dot" aria-hidden="true"></i><span><strong>Come in & browse</strong>Al Ghuwair, Sharjah</span></figcaption>
                </figure>
                <div class="hero-stamp" aria-hidden="true"><span>Sharjah</span><strong>UAE</strong><span>Eastern wear</span></div>
            </div>
        </section>

        <section class="brand-ribbon" aria-label="Brands and categories">
            <p>Pakistani favourites</p><i class="fa-solid fa-diamond" aria-hidden="true"></i><p>Signature originals</p><i class="fa-solid fa-diamond" aria-hidden="true"></i><p>Festive edits</p><i class="fa-solid fa-diamond" aria-hidden="true"></i><p>Kids styles</p><i class="fa-solid fa-diamond" aria-hidden="true"></i><p>Wholesale enquiries</p>
        </section>

        <section class="section collections" id="collections">
            <div class="section-heading reveal">
                <div>
                    <p class="eyebrow"><span></span> Curated for your wardrobe</p>
                    <h2>Find your next<br><em>favourite look.</em></h2>
                </div>
                <p>From everyday shalwar kameez to festive outfits, explore the styles customers visit us for. Availability changes often—message us for today’s selection.</p>
            </div>
            <div class="collection-grid">
                <?php foreach ($collections as $index => $collection): ?>
                    <a class="collection-card reveal" href="<?= htmlspecialchars(wa_link($site['whatsapp'], $collection['message'])) ?>" target="_blank" rel="noopener" aria-label="Ask about <?= htmlspecialchars($collection['title']) ?> on WhatsApp">
                        <img src="<?= htmlspecialchars($collection['image']) ?>" alt="<?= htmlspecialchars($collection['title']) ?> available to enquire about at Bin Shahzad Fashions" loading="lazy" width="900" height="1200">
                        <div class="collection-overlay"></div>
                        <div class="collection-content">
                            <span>0<?= $index + 1 ?> · <?= htmlspecialchars($collection['note']) ?></span>
                            <h3><?= htmlspecialchars($collection['title']) ?></h3>
                            <p>Check availability <i class="fa-brands fa-whatsapp" aria-hidden="true"></i></p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="service-band" aria-label="Shopping options">
            <article class="reveal">
                <i class="fa-solid fa-store" aria-hidden="true"></i>
                <div><h3>Visit the collection in person</h3><p>See colours, fabrics and details at our physical shop in Al Ghuwair.</p></div>
            </article>
            <article class="reveal">
                <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                <div><h3>Check before you visit</h3><p>Ask about styles, sizes, prices and current availability on WhatsApp.</p></div>
            </article>
            <article class="reveal">
                <i class="fa-solid fa-boxes-stacked" aria-hidden="true"></i>
                <div><h3>Buying for a business?</h3><p>Selected lines may be available for quantity and wholesale enquiries.</p></div>
            </article>
        </section>

        <section class="section highlights" id="new-arrivals">
            <div class="section-heading compact reveal">
                <div>
                    <p class="eyebrow"><span></span> Shop highlights</p>
                    <h2>Styles worth<br><em>asking about.</em></h2>
                </div>
                <a class="text-link" href="<?= htmlspecialchars(wa_link($site['whatsapp'], 'Hello! What are your newest arrivals this week?')) ?>" target="_blank" rel="noopener">Ask what’s new <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
            </div>
            <div class="product-grid">
                <?php foreach ($highlights as $product): ?>
                    <?php $productMessage = 'Hello! I saw the ' . $product['name'] . ' (' . $product['brand'] . ') on your website. Is something similar available?'; ?>
                    <article class="product-card reveal">
                        <a class="product-image" href="<?= htmlspecialchars(wa_link($site['whatsapp'], $productMessage)) ?>" target="_blank" rel="noopener" aria-label="Enquire about <?= htmlspecialchars($product['name']) ?>">
                            <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?> Pakistani outfit" loading="lazy" width="850" height="1230">
                            <span>Enquire <i class="fa-brands fa-whatsapp" aria-hidden="true"></i></span>
                        </a>
                        <p class="product-brand"><?= htmlspecialchars($product['brand']) ?></p>
                        <h3><?= htmlspecialchars($product['name']) ?></h3>
                        <p class="product-detail"><?= htmlspecialchars($product['detail']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
            <p class="availability-note"><i class="fa-solid fa-circle-info" aria-hidden="true"></i> Images represent our style range. Stock, sizes and prices are confirmed directly by our shop team.</p>
        </section>

        <section class="wholesale" id="wholesale">
            <div class="wholesale-image reveal">
                <img src="assets/collections/originals.webp" alt="Blue Pakistani outfit from the Bin Shahzad signature collection" loading="lazy" width="900" height="1200">
                <span>Retail favourites.<br>Business quantities.</span>
            </div>
            <div class="wholesale-copy reveal">
                <p class="eyebrow"><span></span> For boutiques & resellers</p>
                <h2>Let’s talk<br><em>wholesale.</em></h2>
                <p>Looking for Pakistani ladies garments in quantity? Tell us the styles and approximate quantities you need. Our team will confirm which selected lines are currently available for wholesale enquiries.</p>
                <ul>
                    <li><i class="fa-solid fa-check" aria-hidden="true"></i> Selected ready-to-wear and signature styles</li>
                    <li><i class="fa-solid fa-check" aria-hidden="true"></i> Availability and pricing confirmed personally</li>
                    <li><i class="fa-solid fa-check" aria-hidden="true"></i> UAE and international business enquiries welcome</li>
                </ul>
                <a class="button button-light" href="<?= htmlspecialchars(wa_link($site['whatsapp'], 'Hello! I have a wholesale enquiry. Please let me know which collections are available in quantity.')) ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> Start a wholesale enquiry</a>
            </div>
        </section>

        <section class="section story">
            <div class="story-title reveal">
                <p class="eyebrow"><span></span> The Bin Shahzad edit</p>
                <h2>Pakistani style,<br><em>chosen for the UAE.</em></h2>
            </div>
            <div class="story-copy reveal">
                <p class="lead">We bring together familiar Pakistani brands and our own signature pieces in one welcoming Sharjah shop.</p>
                <p>Whether you need an easy everyday suit, an Eid look, a statement event outfit or styles for your boutique, our team helps you find the right option without the guesswork.</p>
                <a class="text-link" href="#visit">Plan your visit <i class="fa-solid fa-arrow-down" aria-hidden="true"></i></a>
            </div>
            <div class="story-urdu reveal" lang="ur" dir="rtl">آپ کا اپنا انداز</div>
        </section>

        <section class="social-section" aria-labelledby="social-title">
            <div class="social-heading reveal">
                <div><p class="eyebrow"><span></span> Follow the latest looks</p><h2 id="social-title">From our feed<br><em>to your wardrobe.</em></h2></div>
                <a class="text-link" href="<?= htmlspecialchars($site['instagram']) ?>" target="_blank" rel="noopener"><i class="fa-brands fa-instagram" aria-hidden="true"></i> @binshahzadfashion</a>
            </div>
            <div class="social-grid">
                <?php for ($i = 1; $i <= 6; $i++): ?>
                    <a href="<?= htmlspecialchars($site['instagram']) ?>" target="_blank" rel="noopener" class="social-tile reveal" aria-label="View Bin Shahzad Fashions on Instagram">
                        <img src="assets/instagram/post-<?= $i ?>.webp" alt="Pakistani fashion inspiration from Bin Shahzad Fashions" loading="lazy" width="480" height="820">
                        <span><i class="fa-brands fa-instagram" aria-hidden="true"></i></span>
                    </a>
                <?php endfor; ?>
            </div>
        </section>

        <section class="visit" id="visit">
            <div class="visit-photo reveal">
                <img src="assets/shop.webp" alt="Bin Shahzad Fashions physical shopfront in Al Ghuwair, Sharjah" loading="lazy" width="900" height="1144">
            </div>
            <div class="visit-card reveal">
                <p class="eyebrow"><span></span> Your local fashion stop</p>
                <h2>Visit us in<br><em>Al Ghuwair.</em></h2>
                <p>Browse the full selection at our physical shop, or message ahead and our team can help you check current styles, sizes and prices.</p>
                <address>
                    <div><i class="fa-solid fa-location-dot" aria-hidden="true"></i><span><small>Find us</small><?= htmlspecialchars($site['address']) ?></span></div>
                    <div><i class="fa-solid fa-phone" aria-hidden="true"></i><span><small>Call or WhatsApp</small><a href="tel:+971551838486"><?= htmlspecialchars($site['phone']) ?></a></span></div>
                </address>
                <div class="visit-actions">
                    <a class="button button-primary" href="<?= htmlspecialchars($site['directions']) ?>" target="_blank" rel="noopener"><i class="fa-solid fa-diamond-turn-right" aria-hidden="true"></i> Get directions</a>
                    <a class="button button-outline" href="<?= htmlspecialchars(wa_link($site['whatsapp'], 'Hello! I plan to visit your Al Ghuwair shop. Could you please help me with directions and current availability?')) ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> Message the shop</a>
                </div>
                <p class="showcase-note">This website showcases our physical shop collection. Product availability and purchase details are confirmed directly with our shop team.</p>
            </div>
        </section>

        <section class="section faq" aria-labelledby="faq-title">
            <div class="faq-heading reveal"><p class="eyebrow"><span></span> Helpful to know</p><h2 id="faq-title">Before you<br><em>visit or message.</em></h2></div>
            <div class="faq-list">
                <details class="reveal"><summary>Where is Bin Shahzad Fashions located?<i class="fa-solid fa-plus" aria-hidden="true"></i></summary><p>Our physical ladies garments shop is in Al Ghuwair, Sharjah, United Arab Emirates. Use the directions button above to open the shop location search in Google Maps.</p></details>
                <details class="reveal"><summary>Can I buy directly from this website?<i class="fa-solid fa-plus" aria-hidden="true"></i></summary><p>The website is a showcase rather than an online checkout. Visit the shop to browse, or contact our team on WhatsApp to ask about availability, prices and purchase arrangements.</p></details>
                <details class="reveal"><summary>Do you stock Pakistani brands and original designs?<i class="fa-solid fa-plus" aria-hidden="true"></i></summary><p>Yes. Our range includes selected Pakistani fashion brands alongside Bin Shahzad signature originals. Stock changes, so message us for the latest selection.</p></details>
                <details class="reveal"><summary>Do you accept wholesale enquiries?<i class="fa-solid fa-plus" aria-hidden="true"></i></summary><p>Yes, for selected styles and quantities. Share what you need on WhatsApp and the team will confirm current wholesale availability and pricing.</p></details>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="footer-top">
            <div><a class="wordmark footer-wordmark" href="#home"><span>Bin Shahzad</span><small>Fashions · Sharjah</small></a><p>Pakistani fashion, signature originals and selected wholesale enquiries from our Al Ghuwair shop.</p></div>
            <div><h2>Explore</h2><a href="#collections">Collections</a><a href="#new-arrivals">Highlights</a><a href="#wholesale">Wholesale</a><a href="#visit">Visit us</a></div>
            <div><h2>Contact</h2><a href="tel:+971551838486"><?= htmlspecialchars($site['phone']) ?></a><a href="mailto:<?= htmlspecialchars($site['email']) ?>"><?= htmlspecialchars($site['email']) ?></a><span><?= htmlspecialchars($site['address']) ?></span></div>
            <div><h2>Follow</h2><div class="social-links"><a href="<?= htmlspecialchars($site['instagram']) ?>" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a><a href="<?= htmlspecialchars($site['facebook']) ?>" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a><a href="<?= htmlspecialchars($site['tiktok']) ?>" target="_blank" rel="noopener" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a><a href="<?= htmlspecialchars($site['youtube']) ?>" target="_blank" rel="noopener" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a></div></div>
        </div>
        <div class="footer-bottom"><span>© <?= date('Y') ?> <?= htmlspecialchars($site['legal_name']) ?>. All rights reserved.</span><span>Physical shop showcase · Sharjah, UAE</span></div>
    </footer>

    <a class="floating-whatsapp" href="<?= htmlspecialchars(wa_link($site['whatsapp'], 'Hello Bin Shahzad Fashions! I found your website and would like some help.')) ?>" target="_blank" rel="noopener" aria-label="Chat with Bin Shahzad Fashions on WhatsApp"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i><span>Ask the shop</span></a>

    <script src="assets/js/site.js?v=2" defer></script>
</body>
</html>
