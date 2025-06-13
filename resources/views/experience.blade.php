<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Experience - 3D Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&amp;display=swap" rel="stylesheet" />
  <style>
    /* Reset & basics */
    * {
      box-sizing: border-box;
      margin:0; padding:0;
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
      background: rgba(15,32,39,0.85);
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

    /* Main content */
    main {
      max-width: 1100px;
      margin: 4rem auto 6rem;
      padding: 0 2rem;
    }
    h1 {
      font-size: 3rem;
      margin-bottom: 3rem;
      color: #f0a500;
      text-shadow: 0 0 15px #f0a500cc, 0 0 30px #f0a50099;
      user-select: none;
      text-align: center;
    }

    /* Timeline */
    .timeline {
      position: relative;
      margin: 2rem 0 4rem;
      padding-left: 30px;
      border-left: 4px solid #f0a500cc;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
    }
    .timeline-event {
      position: relative;
      margin-bottom: 3rem;
      padding: 1rem 1.5rem;
      background: linear-gradient(145deg, #1a2a35, #12202a);
      border-radius: 18px;
      box-shadow: 8px 8px 15px #0a121a, -8px -8px 15px #233544;
      border: 1px solid #f0a50044;
      transform-style: preserve-3d;
      transition: transform 0.3s ease;
      cursor: default;
    }
    .timeline-event:focus-within,
    .timeline-event:hover {
      transform: translateZ(25px) scale(1.05);
      box-shadow:
        12px 12px 25px #f0a500cc,
        -6px -6px 15px #fff29fbb;
      outline: none;
    }
    .timeline-event::before {
      content: '';
      position: absolute;
      left: -18px;
      top: 15px;
      width: 20px;
      height: 20px;
      background: #f0a500;
      border-radius: 50%;
      box-shadow: 0 0 12px #f0a500cc;
      border: 3px solid #12202a;
      transform-style: preserve-3d;
    }
    .timeline-event h3 {
      font-size: 1.5rem;
      margin-bottom: 0.3rem;
      color: #f0a500;
      text-shadow: 0 0 8px #f0a500bb;
      user-select: none;
    }
    .timeline-event p {
      font-weight: 300;
      line-height: 1.4;
      user-select: none;
    }
    /* Contact Section */
    .contact-info {
      max-width: 500px;
      margin: 0 auto;
      padding: 2rem 1.8rem;
      background: linear-gradient(145deg, #1a2a35, #12202a);
      border-radius: 18px;
      box-shadow: 8px 8px 15px #0a121a, -8px -8px 15px #233544;
      border: 1px solid #f0a50044;
      color: #eee;
      transform-style: preserve-3d;
      user-select: none;
    }
    .contact-info h2 {
      color: #f0a500;
      font-size: 2rem;
      margin-bottom: 1rem;
      text-shadow: 0 0 12px #f0a500cc;
      text-align: center;
    }
    /* Responsive */
    @media (max-width: 700px){
      .timeline {
        padding-left: 20px;
      }
      .timeline-event::before {
        left: -15px;
        top: 10px;
        width: 15px;
        height: 15px;
        border-width: 2px;
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
    <h1>My Experience</h1>

    <section class="timeline" aria-label="Work Experience and Education Timeline">
      @foreach ($experiences as $experience)
      <article class="timeline-event" tabindex="0">
        <h3>{{ $experience->company_name }}</h3>
        <img src="{{ $experience->image_path }}" alt="{{ $experience->company_name }} image" class="max-w-full max-h-40 object-contain mb-2 rounded" />
        <p>{{ $experience->position }}</p>
      </article>
      @endforeach
    </section>

    <section class="contact-info" aria-label="Contact information">
      <h2>Contact Info</h2>
      <p><strong>Address:</strong> PPC, B 37 House.</p>
      <p><strong>Phone:</strong> +62 812 3456 7890</p>
    </section>
  </main>
</body>
</html>
