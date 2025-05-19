<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>3D Personal Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />
  <style>
    /* Reset & basics */
    * {
      box-sizing: border-box;
      margin: 0; padding: 0; 
      font-family: 'Poppins', sans-serif;
      scroll-behavior: smooth;
    }
    body {
      background: #0f2027;  /* dark blue/black midnight gradient */
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      color: #eee;
      min-height: 100vh;
      line-height: 1.5;
    }
    a {
      color: inherit;
      text-decoration: none;
    }
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
    section {
      max-width: 1100px;
      margin: 3rem auto 5rem;
      padding: 0 2rem;
    }
    /* Hero */
    .hero {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 3rem;
      flex-wrap: wrap;
      perspective: 1000px;
    }
    .hero .photo {
      flex: 1 1 300px;
      max-width: 320px;
      border-radius: 50%;
      overflow: hidden;
      box-shadow:
        0 10px 20px rgba(0,0,0,0.8),
        0 0 30px #f0a500cc;
      transform-style: preserve-3d;
      transition: transform 0.3s ease;
      cursor: default;
    }
    .hero .photo img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: saturate(120%) contrast(1.1);
      user-select: none;
    }
    .hero .photo:hover {
      transform: rotateY(20deg) rotateX(10deg) translateZ(30px);
      box-shadow:
        0 20px 40px rgba(240,165,0,0.8),
        0 0 50px #f0a500ff;
    }
    .hero .intro {
      flex: 2 1 400px;
      color: #eaeaea;
      text-shadow: 0 0 8px #0008 inset;
      user-select: none;
      perspective: 1000px;
    }
    .hero .intro h1 {
      font-size: 3rem;
      margin-bottom: 0.5rem;
      color: #f0a500;
      text-shadow:
        0 0 15px #f0a500ee,
        0 0 25px #f0a500bb;
      transform-style: preserve-3d;
      transition: transform 0.3s ease;
      cursor: default;
    }
    .hero .intro h1:hover {
      transform: translateZ(40px) rotateY(10deg);
      text-shadow:
        0 0 25px #f0a500ff,
        0 0 35px #ffa500ff;
    }
    .hero .intro p {
      font-size: 1.25rem;
      margin-top: 0.7rem;
      font-weight: 300;
      max-width: 500px;
      line-height: 1.4;
    }

    /* Featured Projects */
    .featured-projects h2 {
      font-size: 2.75rem;
      margin-bottom: 2rem;
      text-align: center;
      color: #f0a500;
      text-shadow: 0 0 15px #f0a500cc;
      user-select: none;
    }
    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 1.8rem;
      perspective: 1200px;
    }
    .project-card {
      background: linear-gradient(145deg, #1a2a35, #12202a);
      border-radius: 18px;
      box-shadow:
        8px 8px 15px #0a121a,
        -8px -8px 15px #233544;
      overflow: hidden;
      border: 1px solid #f0a50044;
      color: #eee;
      cursor: pointer;
      transition:
        transform 0.35s cubic-bezier(0.4,0,0.2,1), 
        box-shadow 0.35s cubic-bezier(0.4,0,0.2,1);
      transform-style: preserve-3d;
    }
    .project-card:hover {
      transform: translateZ(40px) scale(1.05) rotateY(8deg);
      box-shadow:
        12px 12px 25px #f0a500aa,
        -6px -6px 15px #fff6a5cc;
      border-color: #ffc800cc;
    }
    .project-card img {
      width: 100%;
      display: block;
      object-fit: cover;
      height: 160px;
      border-bottom: 1px solid #f0a50033;
      user-select: none;
    }
    .project-card .content {
      padding: 1rem 1.2rem;
    }
    .project-card .content h3 {
      margin-bottom: 0.6rem;
      font-weight: 700;
      text-shadow: 0 0 8px #f0a500a0;
    }
    .project-card .content p {
      font-size: 0.9rem;
      font-weight: 300;
      color: #ccc;
      line-height: 1.3;
      user-select: none;
    }

    /* Skills Summary */
    .skills-summary {
      text-align: center;
      max-width: 900px;
      margin: 5rem auto;
      user-select: none;
    }
    .skills-summary h2 {
      font-size: 2.75rem;
      margin-bottom: 2rem;
      color: #f0a500;
      text-shadow: 0 0 15px #f0a500cc;
    }
    .skills-list {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 2rem;
    }
    .skill {
      background: linear-gradient(145deg, #162a3a, #0f1f2b);
      border-radius: 15px;
      box-shadow:
        6px 6px 15px #0a121a,
        -6px -6px 15px #264a7a;
      padding: 1rem 1.4rem;
      width: 130px;
      height: 130px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: #ffe066;
      font-weight: 600;
      text-shadow: 0 0 8px #ffe066cc;
      cursor: default;
      transform-style: preserve-3d;
      transition: transform 0.3s ease;
    }
    .skill:hover {
      transform: translateZ(30px) scale(1.1);
      box-shadow:
        10px 10px 20px #ffda72cc,
        -8px -8px 15px #fff29fbb;
    }
    .skill svg {
      width: 48px;
      height: 48px;
      margin-bottom: 0.6rem;
      fill: #ffd24c;
      filter: drop-shadow(0 0 3px #ffd24caa);
    }
    .skill span {
      font-size: 1.2rem;
      user-select: none;
    }

    /* Responsive */
    @media (max-width: 700px) {
      .hero {
        flex-direction: column;
      }
      .hero .intro h1 {
        font-size: 2.25rem;
        text-align: center;
      }
      .hero .intro p {
        text-align: center;
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
        <li><a href="/about" tabindex="2">About</a></li>
        <li><a href="/projects" tabindex="3">Projects</a></li>
        <li><a href="/skills" tabindex="4">skills</a></li>
        <li><a href="/experience" tabindex="4">experience</a></li>
        <li><a href="/contact" tabindex="5">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <!-- Hero / Home Section -->
    <section id="home" class="hero" aria-label="Introduction">
      <div class="photo" aria-hidden="true">
        <img src="" alt="Profile photo" />
      </div>
      <div class="intro">
        <h1>Hello im, {{$nama}}</h1>
        <p>I'm a passionate web developer and designer specializing in modern 3D experiences and interactive web design. Let's create stunning digital worlds together!</p>
      </div>
    </section>

    <!-- About Section Placeholder -->
    <section id="about" aria-label="About me" style="max-width: 1100px; margin: 5rem auto 3rem; color: #ddd;">
      <h2>About Me</h2>
      <p>I love crafting beautiful and functional web experiences with a focus on immersive 3D styles and UX excellence. With a background in design and code, I build interactive projects that stand out.</p>
    </section>

    <!-- Featured Projects Section -->
    <section id="projects" class="featured-projects" aria-label="Featured projects">
      <h2>Featured Projects</h2>
      <div class="projects-grid">
        @foreach ($projects as $project)
        <article class="project-card" tabindex="0" aria-describedby="proj{{ $project->id }}desc">
          <img src="{{ $project->image_url ?? 'https://via.placeholder.com/400x160?text=No+Image' }}" alt="{{ $project->title }} screenshot" />
          <div class="content">
            <h3>{{ $project->title }}</h3>
            <p id="proj{{ $project->id }}desc">{{ $project->description }}</p>
          </div>
        </article>
        @endforeach
      </div>
    </section>

    <!-- Skills Summary Section -->
    <section id="skills" class="skills-summary" aria-label="Skills summary">
      <h2>Skills Summary</h2>
      <div class="skills-list">
        <div class="skill" role="listitem" tabindex="0" aria-label="HTML5">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M1.5 0h21l-1.9 21.7L12 24l-8.6-2.3L1.5 0zM18.5 6.1l-.2 2.3-.1 1.1H12v-3.2h6.5zM12 10.7v3.5h4.7l-.4 3.6-4.3 1.2-4.3-1.2-.3-3.4h2.4v-2.8H6.5l.5-5.8h9.7l-.3 3.2H12z"/></svg>
          <span>HTML5</span>
        </div>
        <div class="skill" role="listitem" tabindex="0" aria-label="CSS3">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M1.5 0h21l-1.9 21.7L12 24l-8.6-2.3L1.5 0zm17.6 7.6l-.3 3h-6.7v-3h7zm-8 3H6.5l.3 3.5 3.7 1.1v-4.6zm.4-2.8v-2.6h7l-.2 2.7h-6.8z"/></svg>
          <span>CSS3</span>
        </div>
        <div class="skill" role="listitem" tabindex="0" aria-label="JavaScript">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M2 2v20h20V2H2zm17.2 16.4c-.3.9-1.7 1.4-3.2.9-.5-.2-.9-.5-1.1-1 0-.1-.2-.6-.2-.6 1.6.6 3.6.7 4.3-1 1-2.6-3.3-2-3.3-3.4,0-.7.6-1.1 1.1-1.1 1.3 0 1.9 1.3 2 1.4.4.6.6 1.3.3 2.4-.1.5-.8 1.7-2.6 1.2-.4-.1-.8-.3-1-.7l.1-.4c.3.3.5.7 1.1.7.8 0 1.3-1 1.1-1.5-.7-1.6-3.3-.7-3.3-3.6 0-1.3 1.1-1.9 2.4-1.9 1.3 0 2.3.7 2.3 2.4 0 3-3.3 2.8-3.3 4.4 0 1 .8 1.6 1.8 1.7 1 .1 1.7-.6 2-1.4l.1.1z"/></svg>
          <span>JavaScript</span>
        </div>
      </div>
    </section>

    <!-- Blog and Contact placeholders for navigation anchor points -->
    <section id="blog" aria-label="Blog" style="max-width:1100px; margin: 4rem auto; color:#ddd; user-select:none;">
      <h2>Blog</h2>
      <p>Coming soon: Articles on web development, 3D design, and interactive media!</p>
    </section>

    <section id="contact" aria-label="Contact" style="max-width:1100px; margin: 4rem auto 6rem; color:#ddd; user-select:none;">
      <h2>Contact Me</h2>
      <p>You can reach me at <a href="mailto: rakhaabdillahn@gmail.com" class="blank" style="color:#f0a500;">rakhaabdillahn@gmail.com</a> or follow me on social media.</p>
    </section>
  </main>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
