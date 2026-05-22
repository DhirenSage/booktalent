<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>BookTalent – India's Finest Talent, On Demand</title>
<style>
  *{margin:0;padding:0;box-sizing:border-box}
  :root{
    --gold:#D4AF37;--gold-light:#F0D060;--purple:#7C3AED;--purple-dark:#5B21B6;
    --dark:#0A0A0F;--dark2:#111118;--dark3:#1A1A26;--dark4:#22223A;
    --text:#F0EFF8;--text2:#A09EC0;--text3:#6B699A;
    --border:rgba(255,255,255,0.08);
  }
  html{scroll-behavior:smooth}
  body{background:var(--dark);color:var(--text);font-family:'Segoe UI',system-ui,sans-serif;line-height:1.6;overflow-x:hidden}

  nav{position:fixed;top:0;width:100%;z-index:100;background:rgba(10,10,15,0.85);backdrop-filter:blur(12px);border-bottom:1px solid var(--border);padding:0 5%}
  .nav-inner{max-width:1100px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;height:64px}
  .logo{font-size:22px;font-weight:700;color:var(--gold);letter-spacing:-0.5px}
  .logo span{color:var(--text)}
  .nav-links{display:flex;gap:28px;list-style:none}
  .nav-links a{color:var(--text2);text-decoration:none;font-size:14px;transition:color 0.2s}
  .nav-links a:hover{color:var(--gold)}
  .nav-cta{background:var(--gold);color:#0A0A0F;padding:8px 20px;border-radius:8px;font-size:14px;font-weight:600;text-decoration:none;transition:background 0.2s}
  .nav-cta:hover{background:var(--gold-light)}

  .hero{min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;padding:100px 5% 60px;position:relative;overflow:hidden}
  .hero-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(212,175,55,0.12);border:1px solid rgba(212,175,55,0.3);border-radius:100px;padding:6px 16px;font-size:13px;color:var(--gold);margin-bottom:28px}
  .hero h1{font-size:clamp(36px,6vw,72px);font-weight:800;line-height:1.1;letter-spacing:-2px;max-width:800px;margin-bottom:20px}
  .hero h1 em{color:var(--gold);font-style:normal}
  .hero p{font-size:clamp(16px,2vw,20px);color:var(--text2);max-width:560px;margin-bottom:40px}
  .hero-btns{display:flex;gap:16px;flex-wrap:wrap;justify-content:center}
  .btn-primary{background:var(--gold);color:#0A0A0F;padding:14px 32px;border-radius:10px;font-size:16px;font-weight:700;text-decoration:none;transition:all 0.2s}
  .btn-primary:hover{background:var(--gold-light);transform:translateY(-1px)}
  .btn-secondary{background:transparent;color:var(--text);padding:14px 32px;border-radius:10px;font-size:16px;font-weight:600;text-decoration:none;border:1px solid var(--border);transition:all 0.2s}
  .btn-secondary:hover{border-color:var(--gold);color:var(--gold)}
  .hero-stats{display:flex;gap:40px;margin-top:64px;flex-wrap:wrap;justify-content:center}
  .stat{text-align:center}
  .stat-num{font-size:32px;font-weight:800;color:var(--gold)}
  .stat-label{font-size:13px;color:var(--text3);margin-top:2px}
  .glow-orb{position:absolute;border-radius:50%;filter:blur(80px);pointer-events:none;z-index:-1}
  .orb1{width:500px;height:500px;background:rgba(124,58,237,0.15);top:-100px;right:-100px}
  .orb2{width:400px;height:400px;background:rgba(212,175,55,0.08);bottom:0;left:-100px}

  section{padding:100px 5%}
  .container{max-width:1100px;margin:0 auto}
  .section-tag{display:inline-block;background:rgba(212,175,55,0.1);border:1px solid rgba(212,175,55,0.25);color:var(--gold);font-size:12px;font-weight:600;letter-spacing:1.5px;text-transform:uppercase;padding:4px 14px;border-radius:100px;margin-bottom:16px}
  .section-title{font-size:clamp(28px,4vw,44px);font-weight:800;letter-spacing:-1px;line-height:1.15;margin-bottom:16px}
  .section-sub{font-size:18px;color:var(--text2);max-width:520px}
  .text-center{text-align:center}
  .text-center .section-sub{margin:0 auto}

  .problem-bg{background:var(--dark2)}
  .problem-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;margin-top:56px}
  .problem-card{background:var(--dark3);border:1px solid var(--border);border-radius:16px;padding:28px;position:relative;overflow:hidden}
  .problem-card::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:linear-gradient(90deg,#E24B4A,#f09595)}
  .problem-icon{font-size:32px;margin-bottom:16px}
  .problem-card h3{font-size:18px;font-weight:700;margin-bottom:10px}
  .problem-card p{font-size:14px;color:var(--text2);line-height:1.7}

  .steps{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:0;margin-top:56px;position:relative}
  .step{text-align:center;padding:0 24px;position:relative}
  .step:not(:last-child)::after{content:'→';position:absolute;right:-12px;top:28px;color:var(--gold);font-size:24px;font-weight:300}
  .step-num{width:56px;height:56px;border-radius:50%;background:rgba(212,175,55,0.12);border:2px solid var(--gold);display:flex;align-items:center;justify-content:center;font-size:22px;font-weight:800;color:var(--gold);margin:0 auto 20px}
  .step h3{font-size:20px;font-weight:700;margin-bottom:10px}
  .step p{font-size:14px;color:var(--text2)}

  .features-bg{background:var(--dark2)}
  .features-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:20px;margin-top:56px}
  .feature-card{background:var(--dark3);border:1px solid var(--border);border-radius:16px;padding:28px;transition:border-color 0.3s}
  .feature-card:hover{border-color:rgba(212,175,55,0.3)}
  .feature-icon{width:44px;height:44px;border-radius:10px;background:rgba(212,175,55,0.12);display:flex;align-items:center;justify-content:center;margin-bottom:16px;font-size:20px}
  .feature-card h3{font-size:17px;font-weight:700;margin-bottom:8px}
  .feature-card p{font-size:14px;color:var(--text2);line-height:1.7}

  .market-grid{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center;margin-top:56px}
  .market-number{font-size:clamp(48px,8vw,96px);font-weight:900;color:var(--gold);letter-spacing:-3px;line-height:1}
  .market-desc{font-size:18px;color:var(--text2);margin-top:12px;max-width:360px}
  .segments{display:grid;grid-template-columns:1fr 1fr;gap:16px}
  .segment{background:var(--dark3);border:1px solid var(--border);border-radius:14px;padding:20px}
  .segment-label{font-size:12px;color:var(--text3);text-transform:uppercase;letter-spacing:1px;margin-bottom:6px}
  .segment-name{font-size:18px;font-weight:700}
  .segment-icon{font-size:28px;margin-bottom:10px}

  .traction-bg{background:var(--dark2)}
  .traction-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:20px;margin-top:56px}
  .traction-card{background:var(--dark3);border:1px solid var(--border);border-radius:16px;padding:32px;text-align:center}
  .traction-num{font-size:48px;font-weight:900;color:var(--gold);letter-spacing:-2px}
  .traction-label{font-size:14px;color:var(--text2);margin-top:6px}

  .phases{display:flex;flex-direction:column;gap:0;margin-top:56px;max-width:640px;margin-left:auto;margin-right:auto}
  .phase{display:flex;gap:24px;align-items:flex-start;padding-bottom:40px;position:relative}
  .phase:not(:last-child)::after{content:'';position:absolute;left:23px;top:48px;bottom:0;width:2px;background:linear-gradient(180deg,var(--gold),rgba(212,175,55,0.1))}
  .phase-circle{width:48px;height:48px;border-radius:50%;background:rgba(212,175,55,0.12);border:2px solid var(--gold);display:flex;align-items:center;justify-content:center;font-weight:800;color:var(--gold);font-size:16px;flex-shrink:0}
  .phase-content h3{font-size:18px;font-weight:700;margin-bottom:4px}
  .phase-content p{font-size:14px;color:var(--text2)}
  .phase-tag{display:inline-block;background:rgba(212,175,55,0.1);color:var(--gold);font-size:11px;font-weight:600;padding:2px 10px;border-radius:100px;margin-top:8px;letter-spacing:0.5px}

  footer{background:var(--dark);border-top:1px solid var(--border);padding:40px 5%;text-align:center}
  .footer-logo{font-size:20px;font-weight:700;color:var(--gold);margin-bottom:8px}
  footer p{font-size:13px;color:var(--text3)}

  @media(max-width:768px){
    .market-grid{grid-template-columns:1fr}
    .step:not(:last-child)::after{display:none}
    .nav-links{display:none}
    .segments{grid-template-columns:1fr 1fr}
  }
</style>
</head>
<body>

<!-- NAV -->
<nav>
  <div class="nav-inner">
    <div class="logo">Book<span>Talent</span></div>
    <ul class="nav-links">
      <li><a href="#problem">Problem</a></li>
      <li><a href="#how">How it works</a></li>
      <li><a href="#features">Features</a></li>
      <li><a href="#market">Market</a></li>
    </ul>
    <a href="mailto:sakshi@booktalent.in" class="nav-cta">Get in touch</a>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="glow-orb orb1"></div>
  <div class="glow-orb orb2"></div>
  <div class="hero-badge">🇮🇳 Launching in Delhi NCR</div>
  <h1>India's Finest Talent,<br/><em>On Demand</em></h1>
  <p>Book top-tier artists for your wedding, event, or brand — instantly, transparently, without middlemen.</p>
  <div class="hero-btns">
    <a href="mailto:sakshi@booktalent.in" class="btn-primary">Book Talent Now</a>
    <a href="mailto:sakshi@booktalent.in" class="btn-secondary">Join as an Artist</a>
  </div>
  <div class="hero-stats">
    <div class="stat"><div class="stat-num">0</div><div class="stat-label">Hidden fees, ever</div></div>
    <div class="stat"><div class="stat-num">₹5L+ Cr</div><div class="stat-label">Market opportunity</div></div>
    <div class="stat"><div class="stat-num">Delhi NCR</div><div class="stat-label">Launching first</div></div>
  </div>
</section>

<!-- PROBLEM -->
<section class="problem-bg" id="problem">
  <div class="container">
    <div class="section-tag">The problem</div>
    <h2 class="section-title">Booking artists is broken</h2>
    <p class="section-sub">The current system wastes everyone's time — and money.</p>
    <div class="problem-grid">
      <div class="problem-card">
        <div class="problem-icon">📱</div>
        <h3>WhatsApp chaos</h3>
        <p>Fragmented conversations, missed messages, and no record keeping. Bookings get lost, misunderstood, and fall apart at the last minute.</p>
      </div>
      <div class="problem-card">
        <div class="problem-icon">🚫</div>
        <h3>No transparent pricing</h3>
        <p>You never know what you'll actually pay. Vague quotes lead to confusion, distrust, and painful renegotiations before your big event.</p>
      </div>
      <div class="problem-card">
        <div class="problem-icon">🧑‍💼</div>
        <h3>Middlemen inflate costs</h3>
        <p>Agents add layers of friction and commission. Artists earn less, clients pay more. There's no direct relationship — just noise.</p>
      </div>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section id="how">
  <div class="container">
    <div class="text-center">
      <div class="section-tag">How it works</div>
      <h2 class="section-title">Discover → Compare → Book</h2>
      <p class="section-sub">Three steps. No calls. No agents. No drama.</p>
    </div>
    <div class="steps">
      <div class="step">
        <div class="step-num">1</div>
        <h3>Discover</h3>
        <p>Browse artists through immersive video-first profiles — see their style, energy, and performance before you commit.</p>
      </div>
      <div class="step">
        <div class="step-num">2</div>
        <h3>Compare</h3>
        <p>Side-by-side pricing tiers, real availability calendars, and verified reviews — all in one place.</p>
      </div>
      <div class="step">
        <div class="step-num">3</div>
        <h3>Book instantly</h3>
        <p>Lock in your talent in minutes. No follow-ups. No negotiations. Your event is confirmed.</p>
      </div>
    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="features-bg" id="features">
  <div class="container">
    <div class="text-center">
      <div class="section-tag">Platform features</div>
      <h2 class="section-title">Built for artists & clients</h2>
      <p class="section-sub">Everything you need — nothing you don't.</p>
    </div>
    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon">🎬</div>
        <h3>Video-first discovery</h3>
        <p>Every artist profile leads with high-quality video. See exactly who you're hiring before a single rupee changes hands.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">💰</div>
        <h3>Transparent pricing</h3>
        <p>Multiple tiers clearly displayed upfront — budget, standard, premium. Know your cost before you click Book.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">📅</div>
        <h3>Real-time calendar</h3>
        <p>Live availability so you never waste time on an artist who's already booked on your date.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">⭐</div>
        <h3>Verified reviews</h3>
        <p>Genuine feedback from real clients. Make confident decisions backed by community experience.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">🔗</div>
        <h3>Direct artist access</h3>
        <p>No agents, no intermediaries. Communicate directly with the talent you're hiring.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">🚀</div>
        <h3>Artist dashboard</h3>
        <p>Artists manage bookings, update availability, set pricing, and grow their audience — all in one place.</p>
      </div>
    </div>
  </div>
</section>

<!-- MARKET -->
<section id="market">
  <div class="container">
    <div class="market-grid">
      <div>
        <div class="section-tag">Market opportunity</div>
        <h2 class="section-title">A massive, untapped market</h2>
        <div class="market-number">₹5L+<br/>Cr</div>
        <p class="market-desc">India's talent booking market spans weddings, corporate events, and the booming creator economy.</p>
      </div>
      <div class="segments">
        <div class="segment">
          <div class="segment-icon">💍</div>
          <div class="segment-label">Segment</div>
          <div class="segment-name">Weddings</div>
        </div>
        <div class="segment">
          <div class="segment-icon">🎤</div>
          <div class="segment-label">Segment</div>
          <div class="segment-name">Events</div>
        </div>
        <div class="segment">
          <div class="segment-icon">📸</div>
          <div class="segment-label">Segment</div>
          <div class="segment-name">Creators</div>
        </div>
        <div class="segment" style="border-color:rgba(212,175,55,0.3)">
          <div class="segment-icon">📈</div>
          <div class="segment-label">Trend</div>
          <div class="segment-name" style="font-size:15px">Creator economy boom</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHERE WE ARE -->
<section class="traction-bg">
  <div class="container">
    <div class="text-center">
      <div class="section-tag">Where we are</div>
      <h2 class="section-title">Built from a real insight</h2>
      <p class="section-sub" style="margin-top:12px">BookTalent is in its idea stage — born from firsthand frustration with how talent booking works in India. We're building the platform we wish existed.</p>
    </div>
    <div class="traction-grid" style="margin-top:48px">
      <div class="traction-card">
        <div class="traction-num">💡</div>
        <div class="traction-label">Concept validated through market research</div>
      </div>
      <div class="traction-card">
        <div class="traction-num">🛠️</div>
        <div class="traction-label">Platform in early development</div>
      </div>
      <div class="traction-card">
        <div class="traction-num">Delhi</div>
        <div class="traction-label">NCR targeted as launch market</div>
      </div>
    </div>
  </div>
</section>

<!-- ROLLOUT -->
<section>
  <div class="container">
    <div class="text-center">
      <div class="section-tag">Go-to-market</div>
      <h2 class="section-title">A phased rollout across India</h2>
    </div>
    <div class="phases">
      <div class="phase">
        <div class="phase-circle">1</div>
        <div class="phase-content">
          <h3>Delhi NCR</h3>
          <p>Launch with early artists, validate the product, build community and trust.</p>
          <span class="phase-tag">Starting here</span>
        </div>
      </div>
      <div class="phase">
        <div class="phase-circle">2</div>
        <div class="phase-content">
          <h3>Tier 1 cities</h3>
          <p>Expand to Mumbai, Bengaluru, Hyderabad, and Pune. Scale supply and demand simultaneously.</p>
          <span class="phase-tag">Phase 2</span>
        </div>
      </div>
      <div class="phase">
        <div class="phase-circle">3</div>
        <div class="phase-content">
          <h3>All of India</h3>
          <p>Become the definitive talent infrastructure for every city, event, and creator in India.</p>
          <span class="phase-tag">Phase 3</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-logo">BookTalent</div>
  <p>India's finest talent, on demand &nbsp;·&nbsp; Launching Delhi NCR</p>
  <p style="margin-top:16px;font-size:14px;color:var(--text2)">Interested in BookTalent? Get in touch:</p>
  <p style="margin-top:6px;font-size:14px">
    <a href="mailto:sakshi@booktalent.in" style="color:var(--gold);text-decoration:none">sakshi@booktalent.in</a>
    &nbsp;·&nbsp;
    <a href="tel:+918120067025" style="color:var(--gold);text-decoration:none">+91-8120067025</a>
  </p>
  <p style="margin-top:12px">© 2025 BookTalent. All rights reserved.</p>
</footer>

</body>
</html>