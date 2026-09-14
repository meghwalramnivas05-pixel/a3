<?php
  // FuzzyStocking homepage — dynamically stamps the current year
  $site_year = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FuzzyStocking — Soft-Knit Socks Made in Small Batches</title>
<meta name="description" content="FuzzyStocking knits everyday crew, ankle, wool, and novelty socks from combed cotton and brushed wool blends. Free U.S. shipping over $40 and a 30-day comfort guarantee.">
<link rel="canonical" href="https://www.fuzzystocking.com/">
<meta property="og:title" content="FuzzyStocking — Soft-Knit Socks Made in Small Batches">
<meta property="og:description" content="FuzzyStocking knits everyday crew, ankle, wool, and novelty socks from combed cotton and brushed wool blends. Free U.S. shipping over $40 and a 30-day comfort guarantee.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.fuzzystocking.com/">
<meta property="og:image" content="https://www.fuzzystocking.com/assets/images/og-share.svg">
<meta name="twitter:card" content="summary_large_image">
<meta name="robots" content="index, follow">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,600;1,9..144,500&family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-0LY0HY7L01');
</script>
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header">
  <div class="inner">
    <a class="logo" href="index.php"><span class="dot"></span> FuzzyStocking</a>
    <nav class="nav-links" aria-label="Primary">
      <a href="index.php" aria-current="page">Home</a>
      <a href="about.html">About</a>
      <a href="blog.html">Blog</a>
      <a href="size-guide.html">Size Guide</a>
      <a href="contact.html">Contact</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="index.php#bestsellers">Shop Bestsellers</a>
      <button class="nav-toggle" aria-label="Toggle menu" aria-expanded="false">&#9776;</button>
    </div>
  </div>
</header>

<main id="main">

<!-- 1. HERO -->
<section class="hero">
  <div class="inner">
    <div class="hero-copy">
      <p class="eyebrow">Small-batch knit socks</p>
      <h1>Socks that feel like<br>a warm mug in sock form.</h1>
      <p class="lead">FuzzyStocking knits everyday socks from breathable combed cotton and brushed wool blends, tested on real feet for real weeks before they ever reach a drawer.</p>
      <div style="display:flex; gap:14px; flex-wrap:wrap; margin-top:10px;">
        <a href="#bestsellers" class="btn btn-primary">Shop Bestsellers</a>
        <a href="#categories" class="btn btn-outline">Browse Categories</a>
      </div>
      <div class="hero-stats">
        <div><strong>40,000+</strong><span>Pairs knitted this year</span></div>
        <div><strong>4.8/5</strong><span>Average customer rating</span></div>
        <div><strong>30-day</strong><span>Comfort guarantee</span></div>
      </div>
    </div>
    <div class="hero-art">
      <img src="assets/images/hero-cozy-socks.svg" alt="Illustration of a cozy pair of FuzzyStocking crew socks" width="700" height="500" loading="eager">
      <div class="badge">Knit weekly<br>in small batches</div>
    </div>
  </div>
  <div class="hero-divider" aria-hidden="true"></div>
</section>

<!-- 2. USP STRIP -->
<section class="section-dark" aria-label="Why shop with us">
  <div class="container" style="padding:36px 24px; display:grid; grid-template-columns:repeat(4,1fr); gap:24px; text-align:center;">
    <div><h3 style="margin-bottom:6px; font-size:1.05rem;">Free shipping $40+</h3><p style="font-size:0.88rem; opacity:0.85; margin:0;">On every U.S. order, no code needed.</p></div>
    <div><h3 style="margin-bottom:6px; font-size:1.05rem;">30-day comfort guarantee</h3><p style="font-size:0.88rem; opacity:0.85; margin:0;">Wear them. Wash them. Still not right? We'll fix it.</p></div>
    <div><h3 style="margin-bottom:6px; font-size:1.05rem;">Small-batch knitting</h3><p style="font-size:0.88rem; opacity:0.85; margin:0;">Short runs, tighter quality checks.</p></div>
    <div><h3 style="margin-bottom:6px; font-size:1.05rem;">Reinforced heel &amp; toe</h3><p style="font-size:0.88rem; opacity:0.85; margin:0;">Built to survive laundry day after day.</p></div>
  </div>
</section>

<!-- 3. CATEGORIES -->
<section class="section" id="categories">
  <div class="container">
    <div class="section-header center">
      <p class="eyebrow" style="justify-content:center;">Shop by category</p>
      <h2>Find the pair for your day</h2>
      <p style="color:#4a443c;">From early runs to late meetings, every category is knit with a specific kind of day in mind.</p>
    </div>
    <div class="cat-grid">
      <a class="cat-card" href="#bestsellers">
        <img src="assets/images/cat-crew-socks.svg" alt="Crew socks category illustration" width="300" height="300" loading="lazy">
        <h3>Crew Socks</h3>
        <span>Everyday mid-calf comfort</span>
      </a>
      <a class="cat-card" href="#bestsellers">
        <img src="assets/images/cat-ankle-socks.svg" alt="Ankle socks category illustration" width="300" height="300" loading="lazy">
        <h3>Ankle Socks</h3>
        <span>Low-cut, sneaker-ready</span>
      </a>
      <a class="cat-card" href="#bestsellers">
        <img src="assets/images/cat-wool-boot-socks.svg" alt="Wool and boot socks category illustration" width="300" height="300" loading="lazy">
        <h3>Wool &amp; Boot Socks</h3>
        <span>Heavier knit for cold days</span>
      </a>
      <a class="cat-card" href="#bestsellers">
        <img src="assets/images/cat-novelty-socks.svg" alt="Novelty and fun pattern socks category illustration" width="300" height="300" loading="lazy">
        <h3>Novelty &amp; Fun</h3>
        <span>Patterns with a sense of humor</span>
      </a>
    </div>
  </div>
</section>

<!-- 4. BESTSELLERS -->
<section class="section" id="bestsellers" style="background: var(--cream-2);">
  <div class="container">
    <div class="section-header center">
      <p class="eyebrow" style="justify-content:center;">Customer favorites</p>
      <h2>The three pairs people reorder most</h2>
    </div>
    <div class="product-row">
      <div class="product-card">
        <img src="assets/images/best-classic-crew.svg" alt="The Classic Crew sock illustration" width="350" height="280" loading="lazy">
        <div class="p-body">
          <span class="tag">Bestseller</span>
          <h3>The Classic Crew</h3>
          <p style="font-size:0.92rem; color:#4a443c;">Combed cotton, reinforced heel, a fit that doesn't slouch by noon.</p>
          <span class="price">$14.00 / pair</span>
        </div>
      </div>
      <div class="product-card">
        <img src="assets/images/best-cloud-wool.svg" alt="Cloud Wool sock illustration" width="350" height="280" loading="lazy">
        <div class="p-body">
          <span class="tag">Cold-weather pick</span>
          <h3>Cloud Wool</h3>
          <p style="font-size:0.92rem; color:#4a443c;">A brushed merino blend for the days your feet get to the door first.</p>
          <span class="price">$19.00 / pair</span>
        </div>
      </div>
      <div class="product-card">
        <img src="assets/images/best-patterned-set.svg" alt="Patterned fun sock set illustration" width="350" height="280" loading="lazy">
        <div class="p-body">
          <span class="tag">Gift favorite</span>
          <h3>Patterned Fun Set</h3>
          <p style="font-size:0.92rem; color:#4a443c;">Three playful prints, boxed together for a gift that gets opened first.</p>
          <span class="price">$32.00 / set of 3</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 5. CRAFTSMANSHIP -->
<section class="section">
  <div class="container split">
    <img class="split-img" src="assets/images/craftsmanship-knit.svg" alt="Illustration of yarn and knitting detail representing FuzzyStocking's craft" width="450" height="310" loading="lazy">
    <div>
      <p class="eyebrow">How they're made</p>
      <h2>Knit in small runs, checked by hand</h2>
      <p style="color:#4a443c;">Every FuzzyStocking order comes from a run of a few hundred pairs, not a few hundred thousand. That means a real person checks the heel, the toe seam, and the cuff elasticity before it ever gets folded into a box.</p>
      <ul class="check-list">
        <li>Combed cotton and brushed wool-blend yarns, sourced from mills we've actually visited.</li>
        <li>Reinforced heel and toe panels, the two spots that wear out first.</li>
        <li>A flat-knit toe seam, so there's nothing to feel inside your shoe.</li>
      </ul>
    </div>
  </div>
</section>

<!-- 6. SUSTAINABILITY -->
<section class="section" style="background: var(--cream-2);">
  <div class="container split reverse">
    <div>
      <p class="eyebrow">Made with less waste</p>
      <h2>Fewer synthetics, less packaging, longer socks</h2>
      <p style="color:#4a443c;">We lean on natural fibers because they wear in better and break down faster at the end of a sock's life. Our mailers are recycled paperboard, and offcut yarn from every run gets spun back into our novelty patterns instead of the bin.</p>
      <ul class="check-list">
        <li>Recycled and recyclable shipping mailers, no plastic bags.</li>
        <li>Offcut yarn reused in limited novelty runs rather than discarded.</li>
        <li>Dye lots batched to cut down on water use per pair.</li>
      </ul>
    </div>
    <img class="split-img" src="assets/images/sustainability-leaf.svg" alt="Leaf illustration representing FuzzyStocking's lower-waste materials" width="450" height="310" loading="lazy">
  </div>
</section>

<!-- 7. SIZE GUIDE TEASER -->
<section class="section">
  <div class="container split">
    <img class="split-img" src="assets/images/sizeguide-ruler.svg" alt="Ruler illustration for sock sizing" width="450" height="310" loading="lazy">
    <div>
      <p class="eyebrow">Before you order</p>
      <h2>Not sure between Medium and Large?</h2>
      <p style="color:#4a443c;">Sock sizing runs differently from shoe sizing, and it trips up more first-time orders than anything else. Our size guide walks through foot length, calf comfort for crew styles, and how our stretch knit behaves after the first few washes.</p>
      <a href="size-guide.html" class="btn btn-outline">Read the Size Guide</a>
    </div>
  </div>
</section>

<!-- 8. TESTIMONIALS -->
<section class="section section-dark" aria-label="Customer testimonials">
  <div class="container">
    <div class="section-header">
      <p class="eyebrow">What customers say</p>
      <h2>40,000 pairs later, here's what keeps them reordering</h2>
    </div>
    <div class="testi-track">
      <div class="testi-card">
        <div class="stars">★★★★★</div>
        <p>"I run a lot of my errands on foot and these are the first crew socks that haven't gone thin at the heel after three months."</p>
        <div class="testi-who">
          <img src="assets/images/avatar-01.svg" alt="" width="44" height="44">
          <div><strong>Priya N.</strong><br><span style="font-size:0.82rem; opacity:0.8;">Verified buyer</span></div>
        </div>
      </div>
      <div class="testi-card">
        <div class="stars">★★★★★</div>
        <p>"Bought the Cloud Wool pair for winter mornings and they're the only socks that make my desk job's freezing office bearable."</p>
        <div class="testi-who">
          <img src="assets/images/avatar-02.svg" alt="" width="44" height="44">
          <div><strong>Marcus D.</strong><br><span style="font-size:0.82rem; opacity:0.8;">Verified buyer</span></div>
        </div>
      </div>
      <div class="testi-card">
        <div class="stars">★★★★★</div>
        <p>"Got the Patterned Fun Set as a gift for my brother and ended up ordering myself a set within the week."</p>
        <div class="testi-who">
          <img src="assets/images/avatar-03.svg" alt="" width="44" height="44">
          <div><strong>Elena R.</strong><br><span style="font-size:0.82rem; opacity:0.8;">Verified buyer</span></div>
        </div>
      </div>
      <div class="testi-card">
        <div class="stars">★★★★★</div>
        <p>"The sizing guide actually matched reality, which after two bad online sock orders elsewhere was a nice surprise."</p>
        <div class="testi-who">
          <img src="assets/images/avatar-04.svg" alt="" width="44" height="44">
          <div><strong>Owen T.</strong><br><span style="font-size:0.82rem; opacity:0.8;">Verified buyer</span></div>
        </div>
      </div>
    </div>
    <div style="display:flex; gap:12px; margin-top:20px;">
      <button class="btn btn-light" data-testi-prev aria-label="Previous testimonials">&larr;</button>
      <button class="btn btn-light" data-testi-next aria-label="Next testimonials">&rarr;</button>
    </div>
  </div>
</section>

<!-- 9. GALLERY -->
<section class="section" aria-label="Gallery">
  <div class="container">
    <div class="section-header center">
      <p class="eyebrow" style="justify-content:center;">From the knitting floor</p>
      <h2>A peek behind the socks</h2>
    </div>
    <div class="gallery-strip">
      <img src="assets/images/gallery-01.svg" alt="Studio illustration one from the FuzzyStocking workshop" loading="lazy">
      <img src="assets/images/gallery-02.svg" alt="Studio illustration two from the FuzzyStocking workshop" loading="lazy">
      <img src="assets/images/gallery-03.svg" alt="Studio illustration three from the FuzzyStocking workshop" loading="lazy">
      <img src="assets/images/gallery-04.svg" alt="Studio illustration four from the FuzzyStocking workshop" loading="lazy">
    </div>
  </div>
</section>

<!-- 10. FAQ -->
<section class="section" style="background: var(--cream-2);" id="faq">
  <div class="container">
    <div class="section-header center">
      <p class="eyebrow" style="justify-content:center;">Good to know</p>
      <h2>Frequently asked questions</h2>
    </div>
    <div class="faq-list">
      <details class="faq-item">
        <summary>How long does shipping take?</summary>
        <div class="faq-a"><p>Most U.S. orders leave our workshop within two business days and arrive within 3–6 business days after that, depending on your location. You'll get a tracking link by email as soon as your order ships.</p></div>
      </details>
      <details class="faq-item">
        <summary>What if the fit isn't right?</summary>
        <div class="faq-a"><p>Our 30-day comfort guarantee covers exactly this. If a pair doesn't fit the way you expected after a wear and a wash, contact us and we'll sort out an exchange or refund.</p></div>
      </details>
      <details class="faq-item">
        <summary>Are your socks true to size?</summary>
        <div class="faq-a"><p>Yes, and our <a href="size-guide.html">size guide</a> is written to match the actual stretch of our knit rather than a generic chart, since sock sizing behaves differently from shoe sizing.</p></div>
      </details>
      <details class="faq-item">
        <summary>Do you offer gift packaging?</summary>
        <div class="faq-a"><p>Our Patterned Fun Set and seasonal bundles ship in a fold-out box designed to be given as-is. Single pairs ship in a simple recycled mailer.</p></div>
      </details>
      <details class="faq-item">
        <summary>How do I keep the wool blends from shrinking?</summary>
        <div class="faq-a"><p>Cold wash, low or no heat in the dryer, and they'll hold their shape for years. Our <a href="blog/sock-washing-and-care-guide.html">care guide</a> covers this in more detail.</p></div>
      </details>
    </div>
  </div>
</section>

<!-- 11. NEWSLETTER / CTA -->
<section class="section">
  <div class="container">
    <div class="cta-banner">
      <div>
        <p class="eyebrow" style="color:#fbe9e2;">Join the warm list</p>
        <h2 style="color:#fff;">Get 10% off your first order</h2>
        <p style="color:#fbe9e2;">Restock alerts, seasonal colorways, and the occasional care tip — no spam, unsubscribe anytime.</p>
        <form class="newsletter-form" data-inline-feedback data-static="true" action="#" method="post">
          <label for="newsletter-email" style="display:none;">Email address</label>
          <input id="newsletter-email" type="email" name="email" placeholder="you@example.com" required>
          <button class="btn" style="background:var(--charcoal); color:#fff;" type="submit">Get my code</button>
        </form>
        <p class="form-note" style="margin-top:10px; font-size:0.85rem;"></p>
      </div>
      <img src="assets/images/newsletter-envelope.svg" alt="Envelope illustration for the FuzzyStocking newsletter" width="420" height="260" loading="lazy">
    </div>
  </div>
</section>

</main>
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div>
        <a class="logo" href="index.php" style="color:#F7ECDA;"><span class="dot"></span> FuzzyStocking</a>
        <p style="margin-top:14px; max-width:280px; font-size:0.92rem;">Small-batch, soft-knit socks designed for everyday comfort — from the first coffee of the morning to the last mile of the day.</p>
      </div>
      <div>
        <h4>Shop</h4>
        <ul>
          <li><a href="index.php#categories">Crew Socks</a></li>
          <li><a href="index.php#categories">Ankle Socks</a></li>
          <li><a href="index.php#categories">Wool &amp; Boot Socks</a></li>
          <li><a href="index.php#categories">Novelty &amp; Fun</a></li>
        </ul>
      </div>
      <div>
        <h4>Company</h4>
        <ul>
          <li><a href="about.html">About Us</a></li>
          <li><a href="blog.html">Journal</a></li>
          <li><a href="size-guide.html">Size Guide</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
      <div>
        <h4>Legal</h4>
        <ul>
          <li><a href="privacy-policy.html">Privacy Policy</a></li>
          <li><a href="terms-and-conditions.html">Terms &amp; Conditions</a></li>
          <li><a href="disclaimer.html">Disclaimer</a></li>
          <li><a href="cookie-policy.html">Cookie Policy</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; <?php echo $site_year; ?> FuzzyStocking. All rights reserved.</span>
      <span>181 Mercer Street, New York, NY 10012, United States &middot; +1-888-777-5845</span>
    </div>
  </div>
</footer>
<script src="assets/js/main.js"></script>
</body>
</html>
