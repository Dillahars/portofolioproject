<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Skills - 3D Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&amp;display=swap" rel="stylesheet" />
  <style>
    /* Reset & basics */
    * {
      box-sizing: border-box;
      margin: 0; padding: 0;
      font-family: 'Poppins', sans-serif;
      scroll-behavior: smooth;
    }
    body {
      background: #0f2027;
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      color: #eee;
      min-height: 100vh;
      line-height: 1.5;
    }
    a {
      color: inherit;
      text-decoration: none;
    }
    /* Header and Navigation */
    header {
      position: sticky;
      top: 0;
      background: rgba(15, 32, 39, 0.85);
      backdrop-filter: saturate(180%) blur(10px);
      box-shadow: 0 0 5px rgba(255,255,255,0.1);
      z-index: 1000;
    }
    nav {
      max-width: 1100px;
      margin: 0 auto;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      perspective: 800px;
    }
    nav .logo {
      font-weight: 700;
      font-size: 1.5rem;
      user-select: none;
      color: #f0a500;
      text-shadow: 0 0 6px #f0a500cc;
    }
    nav ul {
      list-style: none;
      display: flex;
      gap: 2rem;
    }
    nav li {
      font-weight: 500;
      font-size: 1rem;
      position: relative;
      cursor: pointer;
      transform-style: preserve-3d;
      transition: transform 0.25s ease, color 0.25s ease;
    }
    nav li:hover, nav li:focus-within {
      color: #f0a500;
      transform: translateZ(20px);
      text-shadow: 0 0 8px #f0a500bb;
    }

    /* Page Title */
    main {
      max-width: 1100px;
      margin: 4rem auto 6rem;
      padding: 0 2rem;
    }
    h1 {
      font-size: 3rem;
      margin-bottom: 3rem;
      color: #f0a500;
      text-shadow:
        0 0 15px #f0a500cc,
        0 0 30px #f0a50099;
      user-select: none;
      text-align: center;
    }
    section.skills-category {
      margin-bottom: 4rem;
    }
    section.skills-category h2 {
      font-size: 2.25rem;
      color: #f0a500;
      margin-bottom: 1.5rem;
      text-shadow: 0 0 15px #f0a500cc;
      user-select: none;
      text-align: center;
    }
    .cards-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 2rem;
    }
    .skill-card {
      background: linear-gradient(145deg, #1a2a35, #12202a);
      border-radius: 18px;
      box-shadow:
        8px 8px 15px #0a121a,
        -8px -8px 15px #233544;
      width: 140px;
      height: 140px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      color: #ffe066;
      font-weight: 600;
      user-select: none;
      cursor: default;
      transform-style: preserve-3d;
      transition: transform 0.3s ease;
      text-align: center;
      padding: 1rem;
    }
    .skill-card:hover, .skill-card:focus-within {
      transform: translateZ(25px) scale(1.08);
      box-shadow:
        12px 12px 25px #ffdd55cc,
        -8px -8px 18px #fff799bb;
      outline: none;
    }
    .skill-card svg {
      width: 48px;
      height: 48px;
      margin-bottom: 0.6rem;
      fill: #ffd24c;
      filter: drop-shadow(0 0 3px #ffd24caa);
    }
    .skill-card span {
      font-size: 1.1rem;
    }

    /* Responsive */
    @media (max-width: 600px) {
      .cards-container {
        justify-content: center;
      }
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <div class="logo">My3DPortfolio</div>
      <ul>
      <li><a href="/" tabindex="1">Home</a></li>
        <li><a href="/about" tabindex="2" aria-current="page">About</a></li>
        <li><a href="/projects" tabindex="3">Projects</a></li>
        <li><a href="/skills" tabindex="4">skills</a></li>
        <li><a href="/experience" tabindex="4">experience</a></li>
        <li><a href="/contact" tabindex="5">Contact</a></li>
      </ul>
    </nav>
  </header>
  
  <main>
    <h1>My Skills</h1>

    <section class="skills-category" aria-label="Frontend skills">
      <h2>Frontend</h2>
      <div class="cards-container">
        <div class="skill-card" tabindex="0" aria-label="HTML5">
          <svg role="img" aria-hidden="true" viewBox="0 0 24 24"><path d="M1.5 0h21l-1.9 21.7L12 24l-8.6-2.3L1.5 0zM18.5 6.1l-.2 2.3-.1 1.1H12v-3.2h6.5zM12 10.7v3.5h4.7l-.4 3.6-4.3 1.2-4.3-1.2-.3-3.4h2.4v-2.8H6.5l.5-5.8h9.7l-.3 3.2H12z"/></svg>
          <span>HTML5</span>
        </div>
        <div class="skill-card" tabindex="0" aria-label="CSS3">
          <svg role="img" aria-hidden="true" viewBox="0 0 24 24"><path d="M1.5 0h21l-1.9 21.7L12 24l-8.6-2.3L1.5 0zm17.6 7.6l-.3 3h-6.7v-3h7zm-8 3H6.5l.3 3.5 3.7 1.1v-4.6zm.4-2.8v-2.6h7l-.2 2.7h-6.8z"/></svg>
          <span>CSS3</span>
        </div>
        <div class="skill-card" tabindex="0" aria-label="JavaScript">
          <svg role="img" aria-hidden="true" viewBox="0 0 24 24"><path d="M2 2v20h20V2H2zm17.2 16.4c-.3.9-1.7 1.4-3.2.9-.5-.2-.9-.5-1.1-1 0-.1-.2-.6-.2-.6 1.6.6 3.6.7 4.3-1 1-2.6-3.3-2-3.3-3.4,0-.7.6-1.1 1.1-1.1 1.3 0 1.9 1.3 2 1.4.4.6.6 1.3.3 2.4-.1.5-.8 1.7-2.6 1.2-.4-.1-.8-.3-1-.7l.1-.4c.3.3.5.7 1.1.7.8 0 1.3-1 1.1-1.5-.7-1.6-3.3-.7-3.3-3.6 0-1.3 1.1-1.9 2.4-1.9 1.3 0 2.3.7 2.3 2.4 0 3-3.3 2.8-3.3 4.4 0 1 .8 1.6 1.8 1.7 1 .1 1.7-.6 2-1.4l.1.1z"/></svg>
          <span>JavaScript</span>
        </div>
        </div>
      </div>
    </section>

    <section class="skills-category" aria-label="Backend skills">
      <h2>Backend</h2>
      <div class="cards-container">
        <div class="skill-card" tabindex="0" aria-label="Node.js">
          <svg role="img" aria-hidden="true" viewBox="0 0 24 24" fill="#8cc84b" width="48" height="48" style="margin-bottom: 0.6rem; filter: drop-shadow(0 0 3px #8cc84baa);"><path d="M11.984 0L7.107 2.121v7.167l4.87 2.802 4.916-2.775V2.129zm0 9.214L8.741 7.563v2.934l3.242 1.813 3.251-1.807V7.576zm7.88 12.605-7.86 3.634-7.843-3.635v-7.49l7.84-4.35 7.865 4.353zm-7.86-3.823-4.92-2.72v2.733l4.92 2.807 4.924-2.822v-2.733zm13.94-7.753l-8.91 4.868V3.217l7.838-4.29 7.867 4.284v9.612zm-15.06-2.423v-2.64l4.927-2.835v2.697zm6.914-2.885-6.271 3.594v-2.753l6.271-3.564z"/></svg>
          <span>Node.js</span>
        </div>
        <div class="skill-card" tabindex="0" aria-label="Laravel">
        <svg class="icon icon-lg" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path d="M3.938 6.497a6.958 6.958 0 0 0-.702 1.694L0 9v2l3.236.809c.16.6.398 1.169.702 1.694l-1.716 2.861 1.414 1.414 2.86-1.716a6.958 6.958 0 0 0 1.695.702L9 20h2l.809-3.236a6.96 6.96 0 0 0 1.694-.702l2.861 1.716 1.414-1.414-1.716-2.86a6.958 6.958 0 0 0 .702-1.695L20 11V9l-3.236-.809a6.958 6.958 0 0 0-.702-1.694l1.716-2.861-1.414-1.414-2.86 1.716a6.958 6.958 0 0 0-1.695-.702L11 0H9l-.809 3.236a6.96 6.96 0 0 0-1.694.702L3.636 2.222 2.222 3.636l1.716 2.86zM10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" fill-rule="evenodd">
    </path>
</svg>
          <span>Laravel</span>
        </div>
      </div>
    </section>

    <section class="skills-category" aria-label="Tools skills">
      <h2>Tools</h2>
      <div class="cards-container">
        <div class="skill-card" tabindex="0" aria-label="Git">
          <svg role="img" aria-hidden="true" viewBox="0 0 24 24" width="48" height="48" fill="#f05032" style="margin-bottom: 0.6rem; filter: drop-shadow(0 0 3px #f05032aa)"><path d="M10.35 13.05v-2.1h-4.2v-2.1h4.2V6.75l3.15 3.15-3.15 3.15v-1.65h-3.15v-.15zM12 2.04c-5.46 0-9.95 4.5-9.95 10.05a10 10 0 001.4 5.18l1.38-1.38a7.4 7.4 0 01-1.54-4.19c0-4.1 3.27-7.4 7.25-7.4s7.26 3.29 7.26 7.4-3.26 7.4-7.26 7.4a7.58 7.58 0 01-4.99-1.95l-1.43 1.36a9.84 9.84 0 006.39 2.33c5.46 0 9.95-4.49 9.95-10.04S17.46 2.04 12 2.04z"/></svg>
          <span>Git</span>
        </div>
        <div class="skill-card" tabindex="0" aria-label="VS Code">
          <svg role="img" aria-hidden="true" viewBox="0 0 24 24" width="48" height="48" fill="#007ACC" style="margin-bottom:0.6rem; filter: drop-shadow(0 0 3px #007ACCAA)"><path d="M18.4 2.2 7.38 12l11.02 9.8-5.7.8-2.9-2.5-2.92 2.5-5.7-.8L16.6 12 4.18 3.18l5.7-.72 2.92 2.52 2.9-2.54z"/></svg>
          <span>VS Code</span>
        </div>
        <div class="skill-card" tabindex="0" aria-label="Webpack">
          <svg role="img" aria-hidden="true" viewBox="0 0 24 24" width="48" height="48" fill="#8ed6fb" style="margin-bottom:0.6rem; filter: drop-shadow(0 0 3px #8ed6fbaa)"><path d="M12 2l9.93 5.67v11.33L12 22l-9.93-6v-11zM16.07 14.79h1.6v-5.6h-1.6c-.07-.35-.1-.77-.05-1.04h-.23A7.41 7.41 0 0012 10.75a7.4 7.4 0 00-4.49-2.6 8 8 0 00-2.19.1v1.87a6.54 6.54 0 012.57-.39 6.81 6.81 0 015.34 2.86l1 1.1z"/></svg>
          <span>Webpack</span>
        </div>
        <div class="skill-card" tabindex="0" aria-label="Figma">
          <svg role="img" aria-hidden="true" viewBox="0 0 24 24" width="48" height="48" fill="#f24e1e" style="margin-bottom:0.6rem; filter: drop-shadow(0 0 3px #f24e1eaa)"><path d="M10.5 12c0-1.8-1.5-3.3-3.3-3.3h-3.6v3.3h3.6a3.3 3.3 0 013.3-3.3zm4.5-3.3h-1.8v6.6h1.8a3.3 3.3 0 100-6.6zm-7.5 6.6H9v-6.6h-1.5a4.5 4.5 0 000 6.6zm7.5 0H12v-6.6h3a3.3 3.3 0 013 3.3 3.3 3.3 0 01-3 3.3zm-3-10.2v-3a3.3 3.3 0 013-3.3h3a3.3 3.3 0 013 3.3v3z"/></svg>
          <span>Figma</span>
        </div>
      </div>
    </section>

  </main>
</body>
</html>
