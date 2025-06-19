<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About Me - 3D Portfolio</title>
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

    /* About Section */
    main {
      max-width: 1100px;
      margin: 4rem auto 6rem;
      padding: 0 2rem;
      display: flex;
      flex-wrap: wrap;
      gap: 3rem;
      justify-content: center;
      perspective: 1000px;
    }
    .profile-photo {
      flex: 1 1 320px;
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
    .profile-photo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: saturate(120%) contrast(1.1);
      user-select: none;
    }
    .profile-photo:hover {
      transform: rotateY(15deg) rotateX(10deg) translateZ(30px);
      box-shadow:
        0 20px 40px rgba(240,165,0,0.8),
        0 0 50px #f0a500ff;
    }
    .bio {
      flex: 2 1 500px;
      color: #eaeaea;
      text-shadow: 0 0 8px #0008 inset;
      user-select: none;
      max-width: 600px;
    }
    .bio h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
      color: #f0a500;
      text-shadow:
        0 0 15px #f0a500ee,
        0 0 25px #f0a500bb;
      transform-style: preserve-3d;
      transition: transform 0.3s ease;
      cursor: default;
    }
    .bio h1:hover {
      transform: translateZ(35px) rotateY(8deg);
      text-shadow:
        0 0 25px #f0a500ff,
        0 0 35px #ffa500ff;
    }
    .bio p {
      font-size: 1.25rem;
      line-height: 1.5;
      font-weight: 300;
    }
    /* Responsive */
    @media (max-width: 700px) {
      main {
        flex-direction: column;
        align-items: center;
      }
      .bio h1 {
        font-size: 2.25rem;
        text-align: center;
      }
      .bio p {
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
        <li><a href="/about" tabindex="2" aria-current="page">About</a></li>
        <li><a href="/projects" tabindex="3">Projects</a></li>
        <li><a href="/skills" tabindex="4">skills</a></li>
        <li><a href="/experience" tabindex="4">experience</a></li>
        <li><a href="/contact" tabindex="5">Contact</a></li>
      </ul>
    </nav>
  </header>
  <main role="main" aria-label="About me profile">
    <div class="profile-photo" aria-hidden="true">
      <img src="https://i.postimg.cc/PqDG1LDN/20250608-110842.jpg" alt="Profile photo" />
    </div>
    <div class="bio">
      <h1>About Me</h1>
      <p>Hello! I’m {{$nama}}, a web developer and designer passionate about creating immersive 3D web experiences. I have a strong background in both coding and visual design, allowing me to build digital projects that are not only functional but visually stunning. I enjoy pushing the boundaries of web technology to create engaging interactive interfaces and 3D visual storytelling. When I’m not coding, I love exploring art, photography, and 3D modeling to inspire my work.</p>
    </div>
  </main>
</body>
</html>

