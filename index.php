<?php
/**
 * SupperBanquet — Official Culinary Portal & Evening Feasting Showcase
 * @package SupperBanquet
 * @version 3.8.0
 */
declare(strict_types=1);

$siteTitle = "SupperBanquet | Artisanal Evening Banquets & Communal Feasting";
$metaDescription = "Heirloom evening suppers, wood-fired hearth roasts, stone-ground grain loaves, and zero-proof botanical infusions crafted at 181 Mercer Street.";
$canonicalUrl = "https://supperbanquet.com/";
$currentYear = (int)date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($siteTitle); ?></title>
  <meta name="description" content="<?= htmlspecialchars($metaDescription); ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($siteTitle); ?>">
  <meta property="og:description" content="<?= htmlspecialchars($metaDescription); ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:image" content="assets/images/hero_banquet_supper_table.jpg">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" href="favicon.ico">
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

<header class="site-header">
  <div class="reading-progress-bar"></div>
  <div class="container header-inner">
    <a href="index.php" class="site-logo">
      <div class="logo-symbol">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 2a10 10 0 0 0-10 10c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.87 1.52 2.34 1.07 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2z"/></svg>
      </div>
      <span>SupperBanquet</span>
    </a>
    <nav class="site-nav">
      <a href="index.php" class="nav-link active">Home</a>
      <a href="about.html" class="nav-link ">Culinary Salon</a>
      <a href="index.php#feasts" class="nav-link">Feasting Menus</a>
      <a href="index.php#philosophy" class="nav-link">Hearth Craft</a>
      <a href="index.php#service" class="nav-link">Banquet Service</a>
      <a href="blog.html" class="nav-link ">Gastronomy Journal</a>
      <a href="contact.html" class="nav-link ">Reservations</a>
    </nav>
    <div class="header-actions">
      <a href="contact.html" class="btn btn-primary btn-sm">Reserve Banquet</a>
      <button class="mobile-toggle" aria-label="Toggle Menu">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
      </button>
    </div>
  </div>
</header>
<div class="drawer-backdrop"></div>
<div class="mobile-drawer">
  <div>
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:1.5rem;">
      <span style="font-weight:800;font-size:1.2rem;font-family:var(--font-heading);">SupperBanquet</span>
      <button class="mobile-drawer-close" style="background:none;border:none;cursor:pointer;" aria-label="Close">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
    <div style="display:flex;flex-direction:column;gap:1rem;">
      <a href="index.php" class="nav-link">Home</a>
      <a href="about.html" class="nav-link">Culinary Salon</a>
      <a href="index.php#feasts" class="nav-link">Feasting Menus</a>
      <a href="index.php#philosophy" class="nav-link">Hearth Craft</a>
      <a href="index.php#service" class="nav-link">Banquet Service</a>
      <a href="blog.html" class="nav-link">Gastronomy Journal</a>
      <a href="contact.html" class="nav-link">Reservations</a>
      <hr style="border:none;border-top:1px solid #e2e8f0;margin:0.5rem 0;">
      <a href="privacy-policy.html" style="font-size:0.85rem;color:#64748b;">Privacy Policy</a>
      <a href="terms-and-conditions.html" style="font-size:0.85rem;color:#64748b;">Terms of Service</a>
      <a href="disclaimer.html" style="font-size:0.85rem;color:#64748b;">Dining Disclaimer</a>
      <a href="cookie-policy.html" style="font-size:0.85rem;color:#64748b;">Cookie Policy</a>
    </div>
  </div>
</div>

<main>
  <!-- SECTION 1: HERO -->
  <section class="hero-section" id="hero">
    <div class="container">
      <div class="hero-grid">
        <div>
          <div class="section-kicker">Evening Communal Gastronomy</div>
          <h1 class="hero-title">The Grand Evening Table.<br><span class="text-highlight">Artisanal Supper</span> Banquets.</h1>
          <p class="hero-desc">Gathering epicureans around twenty-foot solid oak tables. Slow-roasted heritage meats, ember-charred autumn roots, wild forest mushrooms, and botanical zero-proof infusions crafted with wood-fired hearth reverence.</p>
          <div class="hero-actions">
            <a href="#feasts" class="btn btn-primary btn-lg">Explore Feasting Menus</a>
            <a href="#philosophy" class="btn btn-secondary btn-lg">Our Hearth Philosophy</a>
          </div>
          <div class="hero-stats">
            <div class="stat-item">
              <div class="stat-num">7<span>Courses</span></div>
              <div class="stat-label">Heirloom Tasting Sequence</div>
            </div>
            <div class="stat-item">
              <div class="stat-num">800<span>°F</span></div>
              <div class="stat-label">Hardwood Hearth Embers</div>
            </div>
            <div class="stat-item">
              <div class="stat-num">100<span>%</span></div>
              <div class="stat-label">Organic Farm-to-Table Origin</div>
            </div>
          </div>
        </div>
        <div>
          <div class="hero-image-wrapper">
            <img src="assets/images/hero_banquet_supper_table.jpg" alt="Grand evening communal supper banquet table" width="600" height="520">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: THE PHILOSOPHY OF COMMUNAL SUPPERS -->
  <section class="section section-alt" id="philosophy">
    <div class="container">
      <div class="hero-grid">
        <div>
          <div class="section-kicker">Communal Heritage</div>
          <h2>The Resurgence of the Shared Evening Supper</h2>
          <p>For centuries before modern dining fragmented into isolated two-top café tables, the evening meal was humanity's central communal ritual. Villages gathered around long trestle tables to break hot stone-baked loaves, share roasted platters, and celebrate seasonal harvests.</p>
          <div class="callout-box">
            "A banquet is not an exhibition of solitary luxury; it is a shared sacred gathering where conversation flourishes across shared cedar boards and steaming iron tureens."
          </div>
          <p>SupperBanquet reclaims this convivial heritage. In our candlelit Mercer Street dining salon, long communal banquets bring twenty-four guests together for an unhurried, multi-course gastronomic journey orchestrated with seasonal reverence.</p>
        </div>
        <div>
          <div style="border-radius:var(--radius-xl);overflow:hidden;box-shadow:var(--shadow-lg);">
            <img src="assets/images/communal_dining_hall.jpg" alt="Atmospheric communal dining hall" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: 5-POINT ANATOMY OF HEARTH GASTRONOMY -->
  <section class="section" id="anatomy">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Culinary Pillars</div>
        <h2 class="section-title">Five pillars of Banquet Curation</h2>
        <p class="section-subtitle">From regenerative agricultural sourcing to live-fire ember manipulation, every banquet adheres to five essential culinary standards.</p>
      </div>
      <div class="anatomy-grid">
        <div class="anatomy-card">
          <span class="anatomy-number">01</span>
          <h3>Live-Fire Hearth Cooking</h3>
          <p>We cook exclusively with split white oak, applewood, and sugar maple hardwood coals. Live embers impart gentle smoke notes without scorching delicate garden vegetables.</p>
        </div>
        <div class="anatomy-card">
          <span class="anatomy-number">02</span>
          <h3>Stone-Ground Heritage Grains</h3>
          <p>Ancient einkorn, spelt, and red fife wheats stone-milled within forty-eight hours of baking, leavened through wild seventy-year-old sourdough cultures.</p>
        </div>
        <div class="anatomy-card">
          <span class="anatomy-number">03</span>
          <h3>Zero-Proof Botanical Elixirs</h3>
          <p>Complex, tannin-rich infusions crafted from cold-pressed orchard fruits, bitter pine needles, smoked herbs, and fermented kombuchas designed to pair seamlessly with roasts.</p>
        </div>
        <div class="anatomy-card">
          <span class="anatomy-number">04</span>
          <h3>Whole-Harvest Sourcing</h3>
          <p>We work directly with certified organic regenerative farms in New York's Hudson Valley, utilizing every leaf, stem, root, and marrow bone in rich stocks and sauces.</p>
        </div>
        <div class="anatomy-card">
          <span class="anatomy-number">05</span>
          <h3>Handcrafted Ceramic Tableware</h3>
          <p>Every dish is served upon custom wood-fired stoneware platters and bowls thrown by local ceramicists, enhancing the tactile warmth of the evening meal.</p>
        </div>
        <div class="anatomy-card" style="background:var(--color-obsidian);color:var(--color-white);">
          <span class="anatomy-number" style="color:rgba(255,255,255,0.2);">ISO</span>
          <h3 style="color:var(--color-white);">Convivial Table Choreography</h3>
          <p style="color:var(--color-slate-300);">Courses are presented family-style on heavy wooden carving boards, prompting natural table interaction, carving, and passing among dinner guests.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: SEASONAL FEASTING MENUS -->
  <section class="section section-alt" id="feasts">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Curated Menus</div>
        <h2 class="section-title">Seasonal Evening Banquet Editions</h2>
        <p class="section-subtitle">Seven-course communal tasting menus designed around the micro-seasons of the Northeastern agrarian calendar.</p>
      </div>
      <div class="collections-grid">
        <div class="collection-card">
          <div class="card-image-wrap">
            <img src="assets/images/gourmet_culinary_entree.jpg" alt="Autumn Hearth Roast Feast" loading="lazy">
            <span class="card-badge">Autumn Service</span>
          </div>
          <div class="card-body">
            <h3>Autumn Hearth Roast</h3>
            <p style="font-size:0.9rem;color:var(--color-slate-600);margin:0.75rem 0;">Cider-braised heritage pork belly, roasted honeynut squash with charred sage, and cast-iron parsnip puree with wild berry reduction.</p>
            <div class="card-footer">
              <span style="font-weight:800;font-size:1.15rem;">$135 / Guest</span>
              <a href="contact.html" class="btn btn-outline btn-sm">Reserve</a>
            </div>
          </div>
        </div>

        <div class="collection-card">
          <div class="card-image-wrap">
            <img src="assets/images/seafood_banquet_spread.jpg" alt="Coastal Tides Banquet" loading="lazy">
            <span class="card-badge">Maritime Feast</span>
          </div>
          <div class="card-body">
            <h3>Coastal Tides Banquet</h3>
            <p style="font-size:0.9rem;color:var(--color-slate-600);margin:0.75rem 0;">Oak-roasted Montauk striped bass, wood-steamed littoral clams with tarragon broth, and charred winter leeks with roasted seaweed butter.</p>
            <div class="card-footer">
              <span style="font-weight:800;font-size:1.15rem;">$145 / Guest</span>
              <a href="contact.html" class="btn btn-outline btn-sm">Reserve</a>
            </div>
          </div>
        </div>

        <div class="collection-card">
          <div class="card-image-wrap">
            <img src="assets/images/roasted_root_vegetables.jpg" alt="Forager Woodland Supper" loading="lazy">
            <span class="card-badge">Woodland Feast</span>
          </div>
          <div class="card-body">
            <h3>Forager Woodland Supper</h3>
            <p style="font-size:0.9rem;color:var(--color-slate-600);margin:0.75rem 0;">Pan-roasted chanterelles and hen-of-the-woods mushrooms over slow-cooked flint corn polenta, with black walnut sauce and crisp herbs.</p>
            <div class="card-footer">
              <span style="font-weight:800;font-size:1.15rem;">$120 / Guest</span>
              <a href="contact.html" class="btn btn-outline btn-sm">Reserve</a>
            </div>
          </div>
        </div>

        <div class="collection-card">
          <div class="card-image-wrap">
            <img src="assets/images/handcrafted_pasta_dish.jpg" alt="Heirloom Grain Winter Feast" loading="lazy">
            <span class="card-badge">Grain & Truffle</span>
          </div>
          <div class="card-body">
            <h3>Heirloom Grain Feast</h3>
            <p style="font-size:0.9rem;color:var(--color-slate-600);margin:0.75rem 0;">Hand-cut einkorn tagliatelle tossed with aged cave-ripened farmstead cheese, roasted pine nuts, and winter black truffles.</p>
            <div class="card-footer">
              <span style="font-weight:800;font-size:1.15rem;">$140 / Guest</span>
              <a href="contact.html" class="btn btn-outline btn-sm">Reserve</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: HEIRLOOM HARVEST & GRAIN MATRIX -->
  <section class="section" id="materials">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Agrarian Sourcing</div>
        <h2 class="section-title">Heirloom Grain & Seasonal Harvest Matrix</h2>
        <p class="section-subtitle">We partner with independent agrarian seed savers and grain farmers preserving historic biodiversity.</p>
      </div>
      <div class="matrix-container">
        <table class="matrix-table">
          <thead>
            <tr>
              <th>Agrarian Variety</th>
              <th>Botanical Heritage</th>
              <th>Culinary Application</th>
              <th>Flavor Profile</th>
              <th>Nutritional Character</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Einkorn (Triticum monococcum)</strong></td>
              <td>Ancient Fertile Crescent (10,000 BC)</td>
              <td>Stone-hearth boules, fresh rustic pasta</td>
              <td>Rich nutty honey, toasted hazelnut</td>
              <td>High carotenoids, gentle gluten structure</td>
            </tr>
            <tr>
              <td><strong>Red Fife Wheat</strong></td>
              <td>19th-century Canadian heirloom landrace</td>
              <td>Slow-fermented banquet baguettes</td>
              <td>Herbal, deep caramel, mild cinnamon</td>
              <td>High mineral retention, rich bran oils</td>
            </tr>
            <tr>
              <td><strong>Flint Floriani Red Corn</strong></td>
              <td>Heritage Alpine Italian heirloom</td>
              <td>Ember-cooked coarse polenta</td>
              <td>Earthy butter, sweet roasted corn</td>
              <td>Dense anthocyanin antioxidants</td>
            </tr>
            <tr>
              <td><strong>Hubbard Blue Squash</strong></td>
              <td>New England heirloom (1840s)</td>
              <td>Salt-crusted hearth roasting</td>
              <td>Chestnut sweetness, velvety dense flesh</td>
              <td>Vitamins A & C, soluble prebiotic fibers</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- SECTION 6: WOOD-FIRED HEARTH THERMODYNAMICS -->
  <section class="section section-alt" id="hearth">
    <div class="container">
      <div class="hero-grid">
        <div>
          <div class="section-kicker">Live-Fire Science</div>
          <h2>The Thermodynamics of Radiant Wood Embers</h2>
          <p>Modern commercial restaurant ranges rely on enclosed blue-flame natural gas burners, delivering rapid conductive heat that often boils or dries out cellular vegetable moisture. Live-fire hearth cooking operates via radiant infrared wavelengths and circulating woodsmoke aromatics.</p>
          <p>By managing a deep coal bed of seasoned oak and applewood embers at 800°F (425°C), our cooks achieve deep caramelization and the Maillard reaction along meat and root surfaces while gently preserving the moist tenderness of the interior core.</p>
        </div>
        <div>
          <div style="border-radius:var(--radius-xl);overflow:hidden;box-shadow:var(--shadow-xl);">
            <img src="assets/images/woodfired_sourdough_crust.jpg" alt="Artisanal wood-fired sourdough loaf" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: LABORATORY OF BOTANICAL ZERO-PROOF INFUSIONS -->
  <section class="section section-dark" id="botanicals">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker" style="background:rgba(217,119,6,0.2);color:#fde68a;border-color:rgba(217,119,6,0.4);">Apothecary Lab</div>
        <h2 class="section-title">Zero-Proof Botanical Elixirs</h2>
        <p class="section-subtitle">We believe fine evening dining should never require ethanol. Our liquid pairings are complex botanical distillations designed to elevate food flavors.</p>
      </div>
      <div class="telemetry-grid">
        <div class="telemetry-card">
          <div class="telemetry-metric">72 Hrs</div>
          <div style="font-weight:700;margin-bottom:0.5rem;">Cold-Macerated Shrubs</div>
          <p style="font-size:0.85rem;">Heirloom orchard apples, raw cider vinegar, and wild foraged juniper berries steeped for crisp, palate-cleansing acidity.</p>
        </div>
        <div class="telemetry-card">
          <div class="telemetry-metric">20+ Herbs</div>
          <div style="font-weight:700;margin-bottom:0.5rem;">Wild Forest Bitters</div>
          <p style="font-size:0.85rem;">Gentian root, roasted chicory, angelica, and pine needles extracted to balance rich roasted banquet dishes.</p>
        </div>
        <div class="telemetry-card">
          <div class="telemetry-metric">100%</div>
          <div style="font-weight:700;margin-bottom:0.5rem;">Organic Botanicals</div>
          <p style="font-size:0.85rem;">Locally foraged blossoms, garden mint, lemon verbena, and organic citrus oils blended into sparkling tonics.</p>
        </div>
        <div class="telemetry-card">
          <div class="telemetry-metric">0.0% ABV</div>
          <div style="font-weight:700;margin-bottom:0.5rem;">Pure Sensory Clarity</div>
          <p style="font-size:0.85rem;">Tannic body derived from mountain teas and grape skins delivering pure sensory brightness and morning vitality.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: PATRON & EPICUREAN TESTIMONIALS -->
  <section class="section" id="reviews">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Dining Reflections</div>
        <h2 class="section-title">Words from Our Banquet Guests</h2>
        <p class="section-subtitle">Read reflections from patrons who have shared our communal table at 181 Mercer Street.</p>
      </div>
      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars">★★★★★</div>
            <p>"Sitting at the twenty-foot oak table with strangers who quickly became friends over hot sourdough and roasted root vegetables was the most memorable dining experience of my year. The zero-proof elderberry shrub was extraordinary."</p>
          </div>
          <div style="margin-top:1.5rem;padding-top:1rem;border-top:1px solid var(--color-cream);">
            <strong>Eleanor Vance</strong><br>
            <span style="font-size:0.8rem;color:#78716c;">Culinary Historian & Author, Manhattan</span>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars">★★★★★</div>
            <p>"The wood-fired striped bass and black truffle tagliatelle were cooked to sheer perfection. The warmth of the live hearth coals fills the entire room with an inviting aroma that takes you back to an earlier, more grounded era."</p>
          </div>
          <div style="margin-top:1.5rem;padding-top:1rem;border-top:1px solid var(--color-cream);">
            <strong>Dr. Thomas Sterling</strong><br>
            <span style="font-size:0.8rem;color:#78716c;">Agronomist & Slow Food Advocate, Boston</span>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars">★★★★★</div>
            <p>"SupperBanquet proves that dinner can be celebratory, luxurious, and convivial with zero-proof botanical clarity. The botanical pairings were sophisticated, tannic, and nuanced. An absolute culinary triumph."</p>
          </div>
          <div style="margin-top:1.5rem;padding-top:1rem;border-top:1px solid var(--color-cream);">
            <strong>Miriam Chen</strong><br>
            <span style="font-size:0.8rem;color:#78716c;">Architectural Designer, Brooklyn</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 9: BANQUET SERVICE CALIBRATION -->
  <section class="section section-alt" id="service">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Table Service</div>
        <h2 class="section-title">Evening Feasting Service Protocols</h2>
        <p class="section-subtitle">Our communal suppers are orchestrated with unhurried precision to allow dialogue and appreciation to unfold naturally.</p>
      </div>
      <div class="matrix-container">
        <table class="sizing-table">
          <thead>
            <tr>
              <th>Course Stage</th>
              <th>Presentation Style</th>
              <th>Culinary Focus</th>
              <th>Table Ritual</th>
              <th>Approximate Timing</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Stage 1: Gathering & Hearth Bread</strong></td>
              <td>Warm terracotta platters</td>
              <td>Stone-milled sourdough with cultured herb butter</td>
              <td>Breaking bread together, table introductions</td>
              <td>7:00 PM – 7:30 PM</td>
            </tr>
            <tr>
              <td><strong>Stage 2: Harvest Garden Courses</strong></td>
              <td>Communal ceramic bowls</td>
              <td>Heirloom root roasts, bitter greens, wild fungi</td>
              <td>Passing bowls family-style across the oak board</td>
              <td>7:30 PM – 8:15 PM</td>
            </tr>
            <tr>
              <td><strong>Stage 3: The Grand Hearth Roast</strong></td>
              <td>Large hand-carved boards</td>
              <td>Slow-roasted heritage meats, wild fish, rich jus</td>
              <td>Table carving, sharing center platters</td>
              <td>8:15 PM – 9:15 PM</td>
            </tr>
            <tr>
              <td><strong>Stage 4: Orchard Desserts & Teas</strong></td>
              <td>Individual stoneware plates</td>
              <td>Spiced fruit galettes, wildflower honey, herbal infusions</td>
              <td>Quiet fireside conversation, closing toasts</td>
              <td>9:15 PM – 10:00 PM</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- SECTION 10: GASTRONOMY JOURNAL -->
  <section class="section" id="journal">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Gastronomy Journal</div>
        <h2 class="section-title">Heirloom Recipes & Culinary Science</h2>
        <p class="section-subtitle">Explore technical culinary publications exploring wood-fired hearth heat, stone grain milling, and zero-proof pairing craft.</p>
      </div>
      <div class="blog-grid">
        <div class="blog-card">
          <div class="blog-card-media">
            <img src="assets/images/woodfired_sourdough_crust.jpg" alt="Science of Wood-Fired Sourdough Fermentation" loading="lazy">
          </div>
          <div class="blog-card-body">
            <div style="font-size:0.8rem;color:#c25e38;font-weight:700;margin-bottom:0.5rem;">BAKING SCIENCE • 10 MIN READ</div>
            <h3 style="font-size:1.25rem;margin-bottom:0.5rem;"><a href="blog/the-science-of-wood-fired-sourdough-fermentation-and-hearth-baking.html">The Science of Wood-Fired Sourdough Fermentation and Hearth Baking</a></h3>
            <p style="font-size:0.9rem;color:#57534e;margin-bottom:1rem;">How wild lactobacillus bacteria, long cold proofing, and 800°F hearth steam produce deeply caramelized artisanal crusts.</p>
            <a href="blog/the-science-of-wood-fired-sourdough-fermentation-and-hearth-baking.html" style="color:#c25e38;font-weight:700;font-size:0.9rem;">Read Treatise &rarr;</a>
          </div>
        </div>

        <div class="blog-card">
          <div class="blog-card-media">
            <img src="assets/images/roasted_root_vegetables.jpg" alt="Thermodynamics of Live-Fire Hearth Cooking" loading="lazy">
          </div>
          <div class="blog-card-body">
            <div style="font-size:0.8rem;color:#c25e38;font-weight:700;margin-bottom:0.5rem;">LIVE-FIRE CULINARY • 9 MIN READ</div>
            <h3 style="font-size:1.25rem;margin-bottom:0.5rem;"><a href="blog/thermodynamics-of-live-fire-hearth-cooking-and-ember-roasting.html">Thermodynamics of Live-Fire Hearth Cooking and Ember Roasting</a></h3>
            <p style="font-size:0.9rem;color:#57534e;margin-bottom:1rem;">Infrared radiant wavelengths, hardwood coal beds, and the physics of the Maillard reaction in whole-vegetable roasting.</p>
            <a href="blog/thermodynamics-of-live-fire-hearth-cooking-and-ember-roasting.html" style="color:#c25e38;font-weight:700;font-size:0.9rem;">Read Treatise &rarr;</a>
          </div>
        </div>

        <div class="blog-card">
          <div class="blog-card-media">
            <img src="assets/images/ambient_supper_salon.jpg" alt="The Cultural History of the Communal Supper Table" loading="lazy">
          </div>
          <div class="blog-card-body">
            <div style="font-size:0.8rem;color:#c25e38;font-weight:700;margin-bottom:0.5rem;">CULINARY ANTHROPOLOGY • 9 MIN READ</div>
            <h3 style="font-size:1.25rem;margin-bottom:0.5rem;"><a href="blog/the-cultural-history-of-the-communal-supper-table.html">The Cultural History of the Communal Supper Table</a></h3>
            <p style="font-size:0.9rem;color:#57534e;margin-bottom:1rem;">From medieval hall feasts to modern slow-food salons: how shared tables foster human connection and empathy.</p>
            <a href="blog/the-cultural-history-of-the-communal-supper-table.html" style="color:#c25e38;font-weight:700;font-size:0.9rem;">Read Treatise &rarr;</a>
          </div>
        </div>
      </div>
      <div style="text-align:center;margin-top:2.5rem;">
        <a href="blog.html" class="btn btn-secondary">Explore All 6 Research Publications &rarr;</a>
      </div>
    </div>
  </section>

  <!-- SECTION 11: ACCORDION FAQ -->
  <section class="section section-alt" id="faq">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Patron Questions</div>
        <h2 class="section-title">Frequently Asked Questions</h2>
        <p class="section-subtitle">Everything you need to know about seating arrangements, dietary accommodations, and reservation protocols.</p>
      </div>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question">
            <span>How does communal banquet seating work?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Our dining salon features two magnificent twenty-foot handcrafted solid white oak banquet tables seating twelve guests on each side. Seating is assigned with thoughtful care to encourage engaging conversations, with dishes served family-style on shared carving boards to inspire organic sharing and warmth.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question">
            <span>Can SupperBanquet accommodate plant-based or gluten-sensitive diets?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Yes. With advance notice during your online reservation, our culinary team prepares parallel seasonal plant-based dishes utilizing wood-roasted forest mushrooms, sprouted heirloom legumes, and gluten-free ancient grains like Floriani flint corn polenta cooked in dedicated clay pots.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question">
            <span>What are zero-proof botanical pairings?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Our beverage pairings are house-crafted non-alcoholic distillations, cold-pressed fruit shrubs, fermented wild kombuchas, and herbal teas designed to mirror the complex acidity, bitterness, and tannins of fine dining pairings with complete sensory clarity and botanical depth.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 12: RESERVATION CTA -->
  <section class="section">
    <div class="container">
      <div class="cta-banner">
        <div class="section-kicker" style="background:rgba(255,255,255,0.15);color:#fff;border-color:rgba(255,255,255,0.3);">Mercer Street Dining Salon</div>
        <h2>Reserve Your Place at the Evening Table</h2>
        <p>Reservations for our seasonal supper banquets open on the first day of each month. Join our private guest register for advance booking access and seasonal menu dispatches.</p>
        <form class="cta-form">
          <input type="email" class="cta-input" required aria-label="Email address" value="epicure@supperbanquet.com">
          <button type="submit" class="btn btn-primary">Join Guest Register</button>
        </form>
      </div>
    </div>
  </section>
</main>

<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="index.php" class="site-logo">
          <div class="logo-symbol">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 2a10 10 0 0 0-10 10c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.87 1.52 2.34 1.07 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2z"/></svg>
          </div>
          <span>SupperBanquet</span>
        </a>
        <p>SupperBanquet celebrates the timeless rituals of communal evening feasting, heirloom stone-milled grains, wood-fired hearth roasts, and zero-proof botanical elixirs. Artisanal dinner gastronomy hosted at 181 Mercer Street.</p>
      </div>
      <div class="footer-col">
        <h4>Evening Feasts</h4>
        <ul class="footer-links">
          <li><a href="index.php">Grand Salon Home</a></li>
          <li><a href="about.html">Culinary Philosophy</a></li>
          <li><a href="index.php#feasts">Seven-Course Feasts</a></li>
          <li><a href="index.php#materials">Heirloom Harvest</a></li>
          <li><a href="index.php#service">Service Protocols</a></li>
          <li><a href="blog.html">Gastronomy Journal</a></li>
          <li><a href="contact.html">Salon Reservations</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Legal Standards</h4>
        <ul class="footer-links">
          <li><a href="privacy-policy.html">Privacy Policy</a></li>
          <li><a href="terms-and-conditions.html">Terms and Conditions</a></li>
          <li><a href="disclaimer.html">Dining Disclaimer</a></li>
          <li><a href="cookie-policy.html">Cookie Policy</a></li>
          <li><a href="sitemap.xml">XML Sitemap</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Dining Atelier</h4>
        <div style="margin-bottom:0.75rem;font-size:0.9rem;">
          <strong>Address:</strong><br>
          181 Mercer Street, New York, NY 10012, United States
        </div>
        <div style="margin-bottom:0.75rem;font-size:0.9rem;">
          <strong>Telephone Concierge:</strong><br>
          +1-888-777-5845
        </div>
        <div style="font-size:0.9rem;">
          <strong>Reservations:</strong><br>
          table@supperbanquet.com
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2026 SupperBanquet. All rights reserved. Artisanal communal dining and evening gastronomy.</p>
      <div style="display:flex;gap:1.5rem;">
        <a href="privacy-policy.html">Privacy</a>
        <a href="terms-and-conditions.html">Terms</a>
        <a href="disclaimer.html">Disclaimer</a>
        <a href="cookie-policy.html">Cookies</a>
      </div>
    </div>
  </div>
</footer>
<script src="assets/js/main.js"></script>

</body>
</html>
