<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Projects - 3D Portfolio</title>
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
    }

    /* Projects Grid */
    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit,minmax(320px, 1fr));
      gap: 2rem;
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
      cursor: default;
      transition:
        transform 0.35s cubic-bezier(0.4,0,0.2,1),
        box-shadow 0.35s cubic-bezier(0.4,0,0.2,1);
      transform-style: preserve-3d;
      display: flex;
      flex-direction: column;
    }
    .project-card:hover, .project-card:focus-within {
      transform: translateZ(40px) scale(1.04) rotateY(8deg);
      box-shadow:
        12px 12px 25px #f0a500cc,
        -6px -6px 15px #fff29fbb;
      border-color: #ffc800cc;
      outline: none;
    }
    .project-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-bottom: 1px solid #f0a50033;
      user-select: none;
    }
    .project-card .content {
      padding: 1rem 1.5rem;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .project-card .content h2 {
      font-weight: 700;
      margin-bottom: 0.7rem;
      text-shadow: 0 0 8px #f0a50099;
      font-size: 1.5rem;
      user-select: none;
    }
    .project-card .content p {
      font-weight: 300;
      font-size: 1rem;
      color: #ccc;
      margin-bottom: 1rem;
      line-height: 1.3;
      user-select: none;
      flex-grow: 1;
    }
    .btn-github {
      align-self: flex-start;
      display: inline-flex;
      gap: 0.5rem;
      background: #f0a500;
      color: #121212;
      padding: 0.5rem 1rem;
      border-radius: 8px;
      font-weight: 600;
      text-shadow: none;
      box-shadow:
        0 0 6px #f0a500cc;
      transition: background-color 0.3s ease;
    }
    .btn-github:hover, .btn-github:focus {
      background: #d18f00;
      outline: none;
      box-shadow:
        0 0 10px #d18f00cc;
      cursor: pointer;
    }
    .btn-github svg {
      fill: #121212;
      width: 20px;
      height: 20px;
    }

    /* Skills tags */
    .skills-tags {
      margin-top: 1.3rem;
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
    }
    .skill-tag {
      background: #f0a500aa;
      color: #121212;
      padding: 0.3rem 0.8rem;
      border-radius: 14px;
      font-size: 0.85rem;
      font-weight: 600;
      user-select: none;
      box-shadow:
        0 0 5px #f0a500bb;
      cursor: default;
      transition: transform 0.25s ease;
    }
    .skill-tag:hover {
      transform: translateZ(15px);
      box-shadow:
        0 0 10px #ffd54ccc;
    }

    /* Responsive */
    @media (max-width: 600px) {
      .project-card {
        flex-direction: column;
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
    <h1>My Projects</h1>
    <section class="projects-grid" aria-label="Project listings">
  @if($projects->isEmpty())
    <p>No projects found.</p>
  @else
    @foreach($projects as $project)
      <article class="project-card" tabindex="0" aria-describedby="desc{{ $project->id }}">
          @if($project->image_url)
          <img src="{{ asset($project->image_url) }}" alt="{{ $project->name }} screenshot" />
          @else
          <img src="https://via.placeholder.com/640x180?text=No+Image" alt="No image available" />
          @endif
        <div class="content">
          <h2>{{ $project->name }}</h2>
          <p id="desc{{ $project->id }}">{{ $project->description }}</p>
          @if($project->github_url)
            <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer" class="btn-github" aria-label="GitHub repository for {{ $project->name }}">
              <svg role="img" aria-hidden="true" viewBox="0 0 24 24"><path d="M12 0a12 12 0 00-3.8 23.4c.6.1.8-.3.8-.6v-2.2c-3.3.7-4-1.6-4-1.6-.6-1.5-1.5-1.9-1.5-1.9-1.2-.8.1-.8.1-.8 1.3.1 2 1.3 2 1.3 1.2 2 3.2 1.5 4 .1.1-1 .5-1.5.8-1.8-2.7-.3-5.5-1.3-5.5-5.9 0-1.3.5-2.3 1.2-3.2-.1-.3-.5-1.4.1-2.9 0 0 1-.3 3.3 1.2a11.5 11.5 0 016 0c2.3-1.5 3.3-1.2 3.3-1.2.6 1.5.2 2.6.1 2.9.7.9 1.2 1.9 1.2 3.2 0 4.6-2.8 5.6-5.5 5.9.5.4 1 .9 1 1.9v2.8c0 .3.2.7.8.6A12 12 0 0012 0z"/></svg>
              GitHub
            </a>
          @endif
          <div class="skills-tags" aria-label="Related skills">
            @foreach($project->skills ?? [] as $skill)
              <span class="skill-tag" title="{{ $skill }}">{{ $skill }}</span>
            @endforeach
          </div>
        </div>
      </article>
    @endforeach
  @endif
