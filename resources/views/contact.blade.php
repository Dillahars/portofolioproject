<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact - 3D Portfolio</title>
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

    main {
      max-width: 700px;
      margin: 4rem auto 6rem;
      padding: 0 2rem;
      user-select: none;
    }
    h1 {
      font-size: 3rem;
      margin-bottom: 2rem;
      color: #f0a500;
      text-shadow: 0 0 15px #f0a500cc, 0 0 30px #f0a50099;
      text-align: center;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1.4rem;
      background: linear-gradient(145deg, #1a2a35, #12202a);
      padding: 2rem 2.5rem;
      border-radius: 18px;
      box-shadow:
        8px 8px 15px #0a121a,
        -8px -8px 15px #233544;
      border: 1px solid #f0a50044;
    }
    label {
      font-weight: 600;
      font-size: 1.05rem;
      color: #ffd54c;
    }
    input[type="text"],
    input[type="email"],
    textarea {
      background: #203a43;
      border: none;
      border-radius: 10px;
      padding: 0.8rem 1rem;
      color: #eee;
      font-size: 1rem;
      resize: vertical;
      box-shadow: inset 3px 3px 6px #12202a, inset -3px -3px 6px #2c5364;
      transition: box-shadow 0.25s ease;
    }
    input[type="text"]:focus,
    input[type="email"]:focus,
    textarea:focus {
      outline: none;
      box-shadow:
        0 0 12px #f0a500cc,
        inset 3px 3px 6px #12202a,
        inset -3px -3px 6px #2c5364;
    }
    textarea {
      min-height: 100px;
    }
    button[type="submit"] {
      background: #f0a500;
      border: none;
      border-radius: 14px;
      padding: 0.8rem 1.8rem;
      font-weight: 700;
      font-size: 1.1rem;
      cursor: pointer;
      color: #121212;
      box-shadow:
        0 0 10px #f0a500cc;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }
    button[type="submit"]:hover,
    button[type="submit"]:focus {
      background: #d18f00;
      box-shadow:
        0 0 15px #d18f00cc;
      outline: none;
    }

    .contact-info {
      margin-top: 3rem;
      text-align: center;
      color: #ccc;
    }
    .contact-info p {
      margin-bottom: 0.6rem;
      font-weight: 300;
      user-select: text;
    }
    .social-links {
      margin-top: 1rem;
      display: flex;
      justify-content: center;
      gap: 2rem;
    }
    .social-links a {
      background: #f0a500;
      width: 48px;
      height: 48px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #121212;
      font-weight: 700;
      box-shadow:
        0 0 10px #f0a500cc;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
      user-select: none;
    }
    .social-links a:hover, .social-links a:focus {
      background: #d18f00;
      box-shadow:
        0 0 15px #d18f00cc;
      outline: none;
    }
    .social-links svg {
      width: 24px;
      height: 24px;
      fill: #121212;
    }

    /* Responsive */
    @media (max-width: 600px) {
      main {
        margin: 3rem 1rem 5rem;
        padding: 0 1rem;
      }
      form {
        padding: 1.5rem 1.8rem;
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
    <h1>Contact Me</h1>
<form id="contactForm" novalidate aria-label="Contact form" method="POST" action="{{ route('admin.contact.store') }}">
      @csrf
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required aria-required="true" placeholder="Your name" autocomplete="name" />

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required aria-required="true" placeholder="your.email@example.com" autocomplete="email" />

      <label for="message">Message</label>
      <textarea id="message" name="message" required aria-required="true" placeholder="Write your message here..." rows="5"></textarea>

      <button type="submit">Send Message</button>
    </form>

    <div class="contact-info" aria-label="Additional contact information">
      <p><strong>Email:</strong> <a href="mailto:alex@example.com" style="color:#f0a500;">rakhaabdillahn@gmail.com</a></p>
      <p><strong>Phone:</strong> +62 898 1369 5939</p>

      <div class="social-links" aria-label="Social media links">
        <a href="https://github.com/Dillahars" target="_blank" rel="noopener noreferrer" aria-label="GitHub Profile">
          <svg role="img" aria-hidden="true" viewBox="0 0 24 24"><path d="M12 0a12 12 0 00-3.8 23.4c.6.1.8-.3.8-.6v-2.2c-3.3.7-4-1.6-4-1.6-.6-1.5-1.5-1.9-1.5-1.9-1.2-.8.1-.8.1-.8 1.3.1 2 1.3 2 1.3 1.2 2 3.2 1.5 4 .1.1-1 .5-1.5.8-1.8-2.7-.3-5.5-1.3-5.5-5.9 0-1.3.5-2.3 1.2-3.2-.1-.3-.5-1.4.1-2.9 0 0 1-.3 3.3 1.2a11.5 11.5 0 016 0c2.3-1.5 3.3-1.2 3.3-1.2.6 1.5.2 2.6.1 2.9.7.9 1.2 1.9 1.2 3.2 0 4.6-2.8 5.6-5.5 5.9.5.4 1 .9 1 1.9v2.8c0 .3.2.7.8.6A12 12 0 0012 0z"/></svg>
        </a>
        <a href="https://www.linkedin.com/in/rakha-abdillah-nugraha-634a13362/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn Profile">
          <svg role="img" aria-hidden="true" viewBox="0 0 24 24"><path d="M4.98 3.5A2.5 2.5 0 002.5 6v13a2.5 2.5 0 002.48 2.5h14.56A2.5 2.5 0 0022 19V6a2.5 2.5 0 00-2.5-2.5H4.98zM8 18H5.5v-7.5H8V18zM6.75 9.25A1.25 1.25 0 116 8a1.25 1.25 0 01.75 1.25zm10.75 8.75h-2.47v-3.57c0-.85-.03-1.95-1.2-1.95-1.2 0-1.38.93-1.38 1.9v3.62H9.25v-7.5h2.37v1.03h.03a2.6 2.6 0 012.34-1.28c2.51 0 2.97 1.66 2.97 3.82V18z"/></svg>
        </a>
        <a href="https://www.instagram.com/rkhaabd_/" target="_blank" rel="noopener noreferrer" aria-label="Instagram Profile">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
        </a> 
      </div>
    </div>

  <script>
    const form = document.getElementById('contactForm');
    form.addEventListener('submit', e => {
      e.preventDefault();
      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }
      alert('Thank you for your message! I will get back to you soon.');
      form.reset();
    });
  </script>
  </main>
</body>
</html>
