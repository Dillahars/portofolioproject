<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Super 3D Portfolio Homepage</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />
  <style>
    /* Reset and base styles */
    *, *::before, *::after {
      box-sizing: border-box;
    }
    body {
      margin: 0; padding: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      color: #eee;
      min-height: 100vh;
      overflow-x: hidden;
      perspective: 1500px;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      user-select:none;
    }
    a {
      color: inherit;
      text-decoration: none;
    }

    header {
      position: sticky;
      top: 0;
      background: rgba(15,32,39,0.9);
      backdrop-filter: saturate(180%) blur(10px);
      box-shadow: 0 0 12px #f0a500cc;
      z-index: 1010;
      padding: 1rem 2rem;
      transform-style: preserve-3d;
    }
    nav {
      max-width: 1100px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transform-style: preserve-3d;
      user-select:none;
    }
    nav .logo {
      font-size: 2rem;
      font-weight: 700;
      color:rgb(230, 211, 172);
      text-shadow: 0 0 20px #f0a500cc;
      cursor: default;
      transform-style: preserve-3d;
      transition: transform 0.3s ease;
    }
    nav .logo:hover {
      transform: translateZ(40px) rotateY(12deg);
      text-shadow: 0 0 35px #f0a500ff;
    }
    nav ul {
      list-style: none;
      display: flex;
      gap: 2.5rem;
    }
    nav li {
      font-weight: 600;
      font-size: 1.05rem;
      cursor: pointer;
      transform-style: preserve-3d;
      transition: transform 0.3s ease, color 0.3s ease;
      user-select:none;
    }
    nav li:hover, nav li:focus-within {
      color: #f0a500;
      transform: translateZ(20px);
      text-shadow: 0 0 15px #f0a500cc;
      outline:none;
    }

    main {
      max-width: 1100px;
      margin: 3rem auto 6rem;
      padding: 0 2rem;
      transform-style: preserve-3d;
    }

    /* Hero Section */
    .hero {
      display: flex;
      flex-wrap: wrap;
      gap: 3rem;
      justify-content: center;
      align-items: center;
      perspective: 1500px;
      transform-style: preserve-3d;
      padding-bottom: 3.5rem;
      user-select:none;
    }
    .hero .photo {
      flex: 1 1 320px;
      max-width: 320px;
      border-radius: 50%;
      overflow: hidden;
      box-shadow:

      transform-style: preserve-3d;
      transition: box-shadow 0.4s ease;
      will-change: transform;
      cursor: default;
      background: #222a33;
      position: relative;
      transform-origin: center center;
      filter: drop-shadow(0 0 8px #f0a500aa);
      /* subtle slow floating */
      animation: floatUpDown 6s ease-in-out infinite;
    }
    .hero .photo img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: contrast(1.15) saturate(1.3);
      pointer-events:none;
      backface-visibility: hidden;
      user-select:none;
      transform-style: preserve-3d;
    }

    .hero .intro {
      flex: 2 1 420px;
      color: #eaeaea;
      perspective: 1500px;
      text-shadow: 0 0 15px #000a inset;
      user-select:none;
      transform-style: preserve-3d;
    }
    .hero .intro h1 {
      font-size: 3.5rem;
      margin-bottom: 0.8rem;
      color:rgb(231, 231, 231);
      text-shadow:
      cursor: default;
      transition: transform 0.5s cubic-bezier(0.4,0,0.2,1), text-shadow 0.5s ease;
      transform-style: preserve-3d;
    }
    .hero .intro h1:hover {
      transform: translateZ(70px) rotateY(15deg);
      text-shadow:
        0 0 45px #f0a500ff,
        0 0 60px #ffb400ff;
    }
    .hero .intro p {
      font-size: 1.3rem;
      font-weight: 300;
      max-width: 550px;
      line-height: 1.5;
      letter-spacing: 0.02em;
      transform-style: preserve-3d;
      filter: drop-shadow(0 0 4px rgba(0,0,0,0.6));
      user-select:none;
    }

    /* About Section */
    #about {
      margin-bottom: 5rem;
      user-select:none;
      transform-style: preserve-3d;
      text-shadow: 0 0 9px #000a;
      color: #ddd;
    }
    #about h2 {
      font-size: 3rem;
      margin-bottom: 1rem;
      color:rgb(255, 255, 255);
      text-shadow: 0 0 18px #f0a500cc;
      user-select:none;
    }
    #about p {
      font-size: 1.15rem;
      max-width: 740px;
      line-height: 1.6;
      font-weight: 300;
    }

    /* Projects Section */
    .featured-projects {
      margin-bottom: 6rem;
      user-select:none;
    }
    .featured-projects h2 {
      color:rgb(255, 244, 244);
      font-size: 2.9rem;
      text-align: center;
      margin-bottom: 2.5rem;
      text-shadow: 0 0 18pxrgba(247, 247, 247, 0.86);
      user-select:none;
    }
    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit,minmax(300px,1fr));
      gap: 2.2rem;
      perspective: 1500px;
      transform-style: preserve-3d;
    }
    .project-card {
      background: linear-gradient(145deg, #1a2a35, #12202a);
      border-radius: 20px;
      overflow: hidden;
      box-shadow:
        inset 0 0 10px #f0a50030,
        18px 18px 40px #0a121a,
        -18px -18px 40px #233544;
      border: 1px solid #f0a50033;
      color: #eee;
      cursor: pointer;
      user-select:none;
      transform-style: preserve-3d;
      transition: transform 0.5s cubic-bezier(0.4,0,0.2,1), box-shadow 0.5s ease, border-color 0.4s ease;
      will-change: transform;
      position: relative;
      perspective: 1500px;
    }
    .project-card img {
      width: 100%;
      height: 160px;
      object-fit: cover;
      border-bottom: 1px solid #f0a50044;
      user-select:none;
      transform-style: preserve-3d;
      pointer-events:none;
      backface-visibility: hidden;
    }
    .project-card .content {
      padding: 1.5rem 1.8rem;
    }
    .project-card .content h3 {
      font-weight: 700;
      margin-bottom: 0.7rem;
      text-shadow: 0 0 15px #f0a500bb;
      transform-style: preserve-3d;
      user-select:none;
    }
    .project-card .content p {
      font-size: 0.94rem;
      color: #ccc;
      font-weight: 300;
      line-height: 1.35;
      user-select:none;
      transform-style: preserve-3d;
    }
    .project-card:focus-visible {
      outline: none;
      box-shadow:
        0 0 25px 3px #f0a500cc,
        inset 0 0 20px #f0a500a0;
      border-color: #ffcc0077;
    }

    /* Project Links */
    .project-link {
      display: block;
      color: inherit;
      text-decoration: none;
    }
    .project-link:hover .project-card,
    .project-link:focus .project-card {
      transform: translateZ(40px) scale(1.07);
      box-shadow:
        20px 20px 45px #f0a500cc,
        -15px -15px 45px #fff4a5cc,
        inset 0 0 15px #f0a500cc;
    }

    /* Skills Section */
    #skills {
      text-align: center;
      margin-bottom: 6rem;
      user-select:none;
      transform-style: preserve-3d;
    }
    #skills h2 {
      font-size: 2.9rem;
      margin-bottom: 2rem;
      color: #f0a500;
      text-shadow: 0 0 15px #f0a500cc;
    }
    .skills-list {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 2rem;
      perspective: 1500px;
      transform-style: preserve-3d;
    }
    .skill {
      background: linear-gradient(145deg, #162a3a, #0f1f2b);
      border-radius: 18px;
      box-shadow:
        inset 0 0 12px #ffe06644,
        10px 10px 25px #0e1c27,
        -10px -10px 25px #294969;
      padding: 1.1rem 1.6rem;
      width: 140px;
      height: 140px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: #ffe066;
      font-weight: 700;
      text-shadow: 0 0 12px #ffe066cc;
      cursor: default;
      user-select:none;
      transform-style: preserve-3d;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      will-change: transform;
      position: relative;
      perspective: 1200px;
    }
    .skill:hover,
    .skill:focus-visible {
      outline: none;
      transform: translateZ(40px) scale(1.15);
      box-shadow:
        0 0 30px #ffdd70ee,
        20px 20px 40px #ffe66bcc,
        -15px -15px 30px #fff59ecc;
    }
    .skill svg {
      width: 48px;
      height: 48px;
      margin-bottom: 0.6rem;
      fill: #ffd24c;
      filter: drop-shadow(0 0 6px #ffd24cbb);
      transform-style: preserve-3d;
    }
    .skill span {
      font-size: 1.3rem;
      user-select:none;
      transform-style: preserve-3d;
    }

    /* Contact Section */
    #contact {
      color: #ddd;
      text-align: center;
      user-select:none;
      margin-top: 4rem;
      margin-bottom: 2rem;
      transform-style: preserve-3d;
    }
    #contact h2 {
      color: #f0a500;
      font-size: 3rem;
      margin-bottom: 0.8rem;
      text-shadow: 0 0 18px #f0a500cc;
      user-select:none;
    }
    #contact p {
      font-weight: 300;
      font-size: 1.1rem;
      user-select:text;
    }
    #contact a {
      color: #f0a500;
      font-weight: 600;
      text-shadow: 0 0 12px #f0a500cc;
      transition: color 0.3s ease;
      user-select:text;
    }
    #contact a:hover,
    #contact a:focus {
      color: #ffbf00;
      text-shadow: 0 0 18px #ffbf00ff;
      outline: none;
    }

    /* Floating animation */
    @keyframes floatUpDown {
      0%, 100% {
        transform: translate3d(0, 0, 0);
      }
      50% {
        transform: translate3d(0, 10px, 0);
      }
    }

    /* Teks Berjalan */
    .marquee {
      width: 100%;
      overflow: hidden;
      white-space: nowrap;
      box-sizing: border-box;
      position: relative;
      /* background: rgba(15, 32, 39, 0.8); */
      color: #f0a500;
      font-size: 1.5rem;
      padding: 10px 0;
    }
    .marquee span {
      display: inline-block;
      padding-left: 100%;
      animation: marquee 15s linear infinite;
    }
    @keyframes marquee {
      0% { transform: translate(0, 0); }
      100% { transform: translate(-100%, 0); }
    }

    /* Responsive */
    @media (max-width: 720px) {
      .hero {
        flex-direction: column;
        padding-bottom: 2rem;
      }
      .hero .intro h1 {
        font-size: 2.75rem;
        text-align: center;
      }
      .hero .intro p {
        text-align: center;
      }
      nav ul {
        gap: 1.2rem;
        font-size: 0.92rem;
      }
      #about p, #contact p {
        font-size: 1rem;
      }
      .projects-grid {
        grid-template-columns: 1fr;
      }
      .skills-list {
        justify-content: center;
        gap: 1.5rem;
      }
      .skill {
        width: 120px;
        height: 120px;
      }
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <div class="logo" aria-label="Website Logo">MyPortfolio</div>
      <ul role="menu" aria-label="Main Navigation">
  <li><a href="/" tabindex="1">Home</a></li>
  <li><a href="/about" tabindex="2">About</a></li>
  <li><a href="/projects" tabindex="3">Projects</a></li>
  <li><a href="/skills" tabindex="4">skills</a></li>
  <li><a href="/experience" tabindex="4">experience</a></li> 
  <li><a href="/contact" tabindex="5">Contact</a></li> 
      </ul>
    </nav>
  </header>

  <main>
    <!-- Hero Section -->
    <section id="home" class="hero" aria-label="Introduction">
      <div class="photo" aria-hidden="true" id="heroPhoto">
        <img src="https://i.postimg.cc/PqDG1LDN/20250608-110842.jpg" alt="Profile photo of portfolio owner" />
      </div>
      <div class="intro marquee" id="heroIntro">
        <span><h1>Hello, I'm Rakha Abdillah Nugraha</h1></span>
            <!-- Teks Berjalan -->
    <!-- <div class="marquee">
      <span>Selamat datang di portfolio saya! Saya seorang pengembang web dan desainer.</span>
    </div> -->
        
      </div>
      <p>
          I'm a passionate web developer and designer specializing in modern 3D experiences and interactive web design. Let's create stunning digital worlds together!
        </p>
    </section>  

    <!-- About Section -->
    <section id="about" aria- ="About Me">
      <h2>About Me</h2>
      <p>
        I love crafting beautiful and functional web experiences with a focus on immersive 3D styles and UX excellence.
        With a background in design and code, I build interactive projects that stand out from the crowd.
      </p>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="featured-projects" aria-label="Featured Projects">
      <h2>Featured Projects</h2>
      <div class="projects-grid" id="projectsGrid">
         @foreach ($projects as $project)
         <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer" class="project-link">
         <article class="project-card" tabindex="0" aria-describedby="proj{{ $project->id }}desc" data-tilt>
           <img src="{{ asset($project->image_url) }}" alt="{{ $project->name }} screenshot" />
           <div class="content">
             <h3>{{ $project->nama }}</h3>
            <p id="proj{{ $project->id }}desc">{{ $project->deskripsi }}</p>
          </div>
        </article>
        </a>
        @endforeach
      </div>
    </section>

    

    <!-- Experiences Section -->
    <section id="experiences" class="featured-experiences" aria-label="Work Experiences">
      <h2>Work Experiences</h2>
      <div class="experiences-list" id="experiencesList" style="max-width: 700px; margin: 0 auto;">
        @foreach ($experiences as $experience)
        <article class="experience-card" tabindex="0" style="background: linear-gradient(145deg, #1a2a35, #12202a); border-radius: 20px; padding: 1rem 1.5rem; margin-bottom: 1.5rem; color: #eee; box-shadow: inset 0 0 10px #f0a50030, 18px 18px 40px #0a121a, -18px -18px 40px #233544;">
          <h3>{{ $experience->company_name }}</h3>
          <p>{{ $experience->position }}</p>
        </article>
        @endforeach
      </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" aria-label="Skills Summary">
      <h2>Skills Summary</h2>
      <div class="skills-list">
        <div class="skill" role="listitem" tabindex="0" aria-label="HTML5">
          <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M1.5 0h21l-1.9 21.7L12 24l-8.6-2.3L1.5 0zM18.5 6.1l-.2 2.3-.1 1.1H12v-3.2h6.5zM12 10.7v3.5h4.7l-.4 3.6-4.3 1.2-4.3-1.2-.3-3.4h2.4v-2.8H6.5l.5-5.8h9.7l-.3 3.2H12z"/></svg>
          <span>HTML5</span>
        </div>
        <div class="skill" role="listitem" tabindex="0" aria-label="CSS3">
          <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M1.5 0h21l-1.9 21.7L12 24l-8.6-2.3L1.5 0zm17.6 7.6l-.3 3h-6.7v-3h7zm-8 3H6.5l.3 3.5 3.7 1.1v-4.6zm.4-2.8v-2.6h7l-.2 2.7h-6.8z"/></svg>
          <span>CSS3</span>
        </div>
        <div class="skill" role="listitem" tabindex="0" aria-label="JavaScript">
          <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M2 2v20h20V2H2zm17.2 16.4c-.3.9-1.7 1.4-3.2.9-.5-.2-.9-.5-1.1-1 0-.1-.2-.6-.2-.6 1.6.6 3.6.7 4.3-1 1-2.6-3.3-2-3.3-3.4,0-.7.6-1.1 1.1-1.1 1.3 0 1.9 1.3 2 1.4.4.6.6 1.3.3 2.4-.1.5-.8 1.7-2.6 1.2-.4-.1-.8-.3-1-.7l.1-.4c.3.3.5.7 1.1.7.8 0 1.3-1 1.1-1.5-.7-1.6-3.3-.7-3.3-3.6 0-1.3 1.1-1.9 2.4-1.9 1.3 0 2.3.7 2.3 2.4 0 3-3.3 2.8-3.3 4.4 0 1 .8 1.6 1.8 1.7 1 .1 1.7-.6 2-1.4l.1.1z"/></svg>
          <span>JavaScript</span>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" aria-label="Contact Me">
      <h2>Contact Me</h2>
      <p>You can reach me at <a href="mailto:rakhaabdillahn@gmail.com" target="_blank" rel="noopener noreferrer">rakhaabdillahn@gmail.com</a> or follow me on social media.</p>
    </section>
  </main>

  <script>
    // 3D interactive tilt effect for hero photo and project cards

    // Utility to clamp values between min and max
    function clamp(num, min, max) {
      return Math.min(Math.max(num, min), max);
    }

    // Hero photo and intro 3D rotation on mousemove
    const heroPhoto = document.getElementById('heroPhoto');
    const heroIntro = document.getElementById('heroIntro');
    const heroSection = document.querySelector('.hero');

    heroSection.addEventListener('mousemove', e => {
      const rect = heroSection.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;

      const rotateX = clamp(-(y - centerY) / centerY * 10, -10, 10);
      const rotateY = clamp((x - centerX) / centerX * 12, -12, 12);

      heroPhoto.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(60px)`;
      heroIntro.style.transform = `rotateX(${rotateX / 3}deg) rotateY(${rotateY / 3}deg) translateZ(30px)`;
    });

    heroSection.addEventListener('mouseleave', e => {
      heroPhoto.style.transform = 'rotateX(0deg) rotateY(0deg) translateZ(0)';
      heroIntro.style.transform = 'rotateX(0deg) rotateY(0deg) translateZ(0)';
    });

    // 3D Tilt effect for all project cards
    const projectLinks = document.querySelectorAll('.project-link');
    projectLinks.forEach(link => {
      const card = link.querySelector('.project-card');
      if (card) {
        card.style.transformStyle = 'preserve-3d';
        card.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';

        link.addEventListener('mousemove', e => {
          const rect = card.getBoundingClientRect();
          const x = e.clientX - rect.left;
          const y = e.clientY - rect.top;
          const centerX = rect.width / 2;
          const centerY = rect.height / 2;

          // Calculate rotation degree around center with limits
          const rotateX = clamp(-(y - centerY) / centerY * 12, -15, 15);
          const rotateY = clamp((x - centerX) / centerX * 15, -15, 15);

          card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(40px) scale(1.07)`;
          card.style.boxShadow = `
            20px 20px 45px #f0a500cc,
            -15px -15px 45px #fff4a5cc,
            inset 0 0 15px #f0a500cc
          `;
        });

        link.addEventListener('mouseleave', e => {
          card.style.transform = '';
          card.style.boxShadow = '';
        });
      }
    });

    // Skills hover subtle floating effect can be handled by CSS only
    // (already applied with transform and transition)

  </script>
</body>
</html>
