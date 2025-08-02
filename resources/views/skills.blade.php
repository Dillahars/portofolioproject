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
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M128 96L162.9 491.8L319.5 544L477.1 491.8L512 96L128 96zM436.2 223.9L252.4 223.9L256.5 273.3L432.1 273.3L418.5 421.7L320.6 448.7L320.6 449L319.5 449L220.8 421.7L214.8 345.9L262.5 345.9L266 384L319.5 398.5L373.2 384L379.2 321.8L212.3 321.8L199.5 176.2L440.6 176.2L436.2 223.9z"/></svg>
          <span>HTML5</span>
        </div>
        <div class="skill-card" tabindex="0" aria-label="CSS3">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free v5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M480 32l-64 368-223.3 80L0 400l19.6-94.8h82l-8 40.6L210 390.2l134.1-44.4 18.8-97.1H29.5l16-82h333.7l10.5-52.7H56.3l16.3-82H480z"/></svg>
          <span>CSS3</span>
        </div>
        <div class="skill-card" tabindex="0" aria-label="JavaScript">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
          <path fill="#ffd600" d="M6,42V6h36v36H6z"></path><path fill="none" stroke="#000001" stroke-miterlimit="10" stroke-width="3.3" d="M23.783,22.352v9.819 c0,3.764-4.38,4.022-6.283,0.802"></path><path fill="none" stroke="#000001" stroke-miterlimit="10" stroke-width="3.3" d="M34.69,25.343 c-1.739-2.727-5.674-2.345-5.84,0.558c-0.214,3.757,6.768,2.938,6.247,7.107c-0.365,2.92-4.874,3.858-7.193-0.065"></path>
          </svg>
          <span>JavaScript</span>
        </div>
        </div>
      </div>
    </section>

    <section class="skills-category" aria-label="Backend skills">
      <h2>Backend</h2>
      <div class="cards-container">
        <div class="skill-card" tabindex="0" aria-label="Node.js">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
            <path fill="#21a366" d="M24.007,45.419c-0.574,0-1.143-0.15-1.646-0.44l-5.24-3.103c-0.783-0.438-0.401-0.593-0.143-0.682	c1.044-0.365,1.255-0.448,2.369-1.081c0.117-0.067,0.27-0.043,0.39,0.028l4.026,2.389c0.145,0.079,0.352,0.079,0.486,0l15.697-9.061	c0.145-0.083,0.24-0.251,0.24-0.424V14.932c0-0.181-0.094-0.342-0.243-0.432L24.253,5.446c-0.145-0.086-0.338-0.086-0.483,0	L8.082,14.499c-0.152,0.086-0.249,0.255-0.249,0.428v18.114c0,0.173,0.094,0.338,0.244,0.42l4.299,2.483	c2.334,1.167,3.76-0.208,3.76-1.591V16.476c0-0.255,0.2-0.452,0.456-0.452h1.988c0.248,0,0.452,0.196,0.452,0.452v17.886	c0,3.112-1.697,4.9-4.648,4.9c-0.908,0-1.623,0-3.619-0.982l-4.118-2.373C5.629,35.317,5,34.216,5,33.042V14.928	c0-1.179,0.629-2.279,1.646-2.861L22.36,3.002c0.994-0.562,2.314-0.562,3.301,0l15.694,9.069C42.367,12.656,43,13.753,43,14.932	v18.114c0,1.175-0.633,2.271-1.646,2.861L25.66,44.971c-0.503,0.291-1.073,0.44-1.654,0.44"></path><path fill="#21a366" d="M28.856,32.937c-6.868,0-8.308-3.153-8.308-5.797c0-0.251,0.203-0.452,0.455-0.452h2.028	c0.224,0,0.413,0.163,0.448,0.384c0.306,2.066,1.218,3.108,5.371,3.108c3.308,0,4.715-0.747,4.715-2.502	c0-1.01-0.401-1.76-5.54-2.263c-4.299-0.424-6.955-1.371-6.955-4.809c0-3.167,2.672-5.053,7.147-5.053	c5.026,0,7.517,1.745,7.831,5.493c0.012,0.13-0.035,0.255-0.122,0.35c-0.086,0.09-0.208,0.145-0.334,0.145h-2.039	c-0.212,0-0.397-0.149-0.44-0.354c-0.491-2.173-1.678-2.868-4.904-2.868c-3.611,0-4.031,1.257-4.031,2.2	c0,1.143,0.495,1.477,5.367,2.122c4.825,0.64,7.116,1.544,7.116,4.935c0,3.418-2.853,5.379-7.827,5.379"></path>
            </svg>
          <span>Node.js</span>
        </div>
      <div class="skill-card" tabindex="0" aria-label="Laravel">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M568.6 179.8C568.5 179.6 568.4 179.3 568.3 179.1C568.2 178.7 568 178.3 567.8 177.9C567.6 177.7 567.5 177.4 567.3 177.2C567.1 176.9 566.8 176.6 566.6 176.3C566.4 176.1 566.1 175.9 565.8 175.7C565.5 175.5 565.2 175.2 564.9 175L468.6 119.5C467.4 118.8 466 118.4 464.6 118.4C463.2 118.4 461.8 118.8 460.6 119.5L364.3 175C364 175.2 363.7 175.4 363.4 175.7C363.1 175.9 362.9 176.1 362.6 176.3C362.3 176.6 362.1 176.9 361.9 177.2C361.7 177.4 361.5 177.6 361.4 177.9C361.2 178.3 361 178.7 360.9 179.1C360.8 179.3 360.7 179.5 360.6 179.8C360.4 180.5 360.3 181.2 360.3 181.9L360.3 287.1L280.1 333.3L280.1 127.4C280.1 126.7 280 126 279.8 125.3C279.7 125.1 279.6 124.9 279.5 124.6C279.4 124.2 279.2 123.8 279 123.4C278.9 123.1 278.6 122.9 278.5 122.7C278.3 122.4 278 122.1 277.8 121.8C277.6 121.6 277.3 121.4 277 121.2C276.7 121 276.4 120.7 276.1 120.5L179.8 65.1C178.6 64.4 177.2 64 175.8 64C174.4 64 173 64.4 171.8 65.1L75.5 120.5C75.2 120.7 74.9 120.9 74.6 121.2C74.3 121.4 74.1 121.6 73.8 121.8C73.5 122.1 73.3 122.4 73.1 122.7C72.9 123 72.7 123.2 72.5 123.4C72.3 123.8 72.1 124.2 72 124.6C71.9 124.8 71.8 125 71.7 125.3C71.5 126 71.4 126.7 71.4 127.4L71.4 457.1C71.4 458.5 71.8 459.9 72.5 461.1C73.2 462.3 74.2 463.3 75.4 464L268 574.9C268.4 575.1 268.9 575.3 269.3 575.4C269.5 575.5 269.7 575.6 269.9 575.7C271.2 576.1 272.7 576.1 274 575.7C274.2 575.6 274.4 575.5 274.6 575.5C275.1 575.3 275.6 575.2 276 574.9L468.6 464.1C469.8 463.4 470.8 462.4 471.5 461.2C472.2 460 472.6 458.6 472.6 457.2L472.6 351.9L564.8 298.8C566 298.1 567 297.1 567.7 295.8C568.4 294.5 568.8 293.2 568.8 291.8L568.8 182C568.8 181.3 568.7 180.6 568.6 179.9zM175.8 81.3L256 127.4L175.8 173.6L95.6 127.4L175.8 81.2zM264 141.3L264 342.6C230.8 361.7 204.1 377.1 183.8 388.8L183.8 187.5C217 168.4 243.7 153 264 141.3zM264 554.1L87.5 452.5L87.5 141.3C107.8 153 134.6 168.4 167.7 187.5L167.7 402.7C167.7 403 167.8 403.3 167.8 403.6C167.8 404 167.9 404.4 168 404.8C168.1 405.1 168.2 405.4 168.4 405.7C168.5 406 168.7 406.4 168.8 406.7C169 407 169.2 407.2 169.4 407.5C169.6 407.8 169.8 408.1 170.1 408.3C170.3 408.5 170.6 408.7 170.9 408.9C171.2 409.1 171.5 409.4 171.8 409.6L264 461.8L264.1 554.2zM272 447.9L192 402.6C246.7 371.1 305.5 337.3 368.3 301.1L448.4 347.2C419 364 360.2 397.5 272 447.9zM456.5 452.5L280 554.1L280 461.8C381.4 404 440.2 370.4 456.5 361L456.5 452.4zM456.5 333.4C436.2 321.8 409.4 306.4 376.3 287.3L376.3 195.9C396.6 207.6 423.4 223 456.5 242.1L456.5 333.4zM464.5 228.1L384.3 181.9L464.5 135.7L544.7 181.8L464.5 228zM472.5 333.4L472.5 242.1C505.7 223 532.5 207.6 552.8 195.9L552.8 287.3L472.5 333.5z"/></svg>
          <span>Laravel</span>
        </div>
      </div>
    </section>

    <section class="skills-category" aria-label="Tools skills">
      <h2>Tools</h2>
      <div class="cards-container">
        <div class="skill-card" tabindex="0" aria-label="Git">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M237.9 461.4C237.9 463.4 235.6 465 232.7 465C229.4 465.3 227.1 463.7 227.1 461.4C227.1 459.4 229.4 457.8 232.3 457.8C235.3 457.5 237.9 459.1 237.9 461.4zM206.8 456.9C206.1 458.9 208.1 461.2 211.1 461.8C213.7 462.8 216.7 461.8 217.3 459.8C217.9 457.8 216 455.5 213 454.6C210.4 453.9 207.5 454.9 206.8 456.9zM251 455.2C248.1 455.9 246.1 457.8 246.4 460.1C246.7 462.1 249.3 463.4 252.3 462.7C255.2 462 257.2 460.1 256.9 458.1C256.6 456.2 253.9 454.9 251 455.2zM316.8 72C178.1 72 72 177.3 72 316C72 426.9 141.8 521.8 241.5 555.2C254.3 557.5 258.8 549.6 258.8 543.1C258.8 536.9 258.5 502.7 258.5 481.7C258.5 481.7 188.5 496.7 173.8 451.9C173.8 451.9 162.4 422.8 146 415.3C146 415.3 123.1 399.6 147.6 399.9C147.6 399.9 172.5 401.9 186.2 425.7C208.1 464.3 244.8 453.2 259.1 446.6C261.4 430.6 267.9 419.5 275.1 412.9C219.2 406.7 162.8 398.6 162.8 302.4C162.8 274.9 170.4 261.1 186.4 243.5C183.8 237 175.3 210.2 189 175.6C209.9 169.1 258 202.6 258 202.6C278 197 299.5 194.1 320.8 194.1C342.1 194.1 363.6 197 383.6 202.6C383.6 202.6 431.7 169 452.6 175.6C466.3 210.3 457.8 237 455.2 243.5C471.2 261.2 481 275 481 302.4C481 398.9 422.1 406.6 366.2 412.9C375.4 420.8 383.2 435.8 383.2 459.3C383.2 493 382.9 534.7 382.9 542.9C382.9 549.4 387.5 557.3 400.2 555C500.2 521.8 568 426.9 568 316C568 177.3 455.5 72 316.8 72zM169.2 416.9C167.9 417.9 168.2 420.2 169.9 422.1C171.5 423.7 173.8 424.4 175.1 423.1C176.4 422.1 176.1 419.8 174.4 417.9C172.8 416.3 170.5 415.6 169.2 416.9zM158.4 408.8C157.7 410.1 158.7 411.7 160.7 412.7C162.3 413.7 164.3 413.4 165 412C165.7 410.7 164.7 409.1 162.7 408.1C160.7 407.5 159.1 407.8 158.4 408.8zM190.8 444.4C189.2 445.7 189.8 448.7 192.1 450.6C194.4 452.9 197.3 453.2 198.6 451.6C199.9 450.3 199.3 447.3 197.3 445.4C195.1 443.1 192.1 442.8 190.8 444.4zM179.4 429.7C177.8 430.7 177.8 433.3 179.4 435.6C181 437.9 183.7 438.9 185 437.9C186.6 436.6 186.6 434 185 431.7C183.6 429.4 181 428.4 179.4 429.7z"/></svg>
          <span>Git</span>
        </div>
        <div class="skill-card" tabindex="0" aria-label="VS Code">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
          <path fill="#29b6f6" d="M44,11.11v25.78c0,1.27-0.79,2.4-1.98,2.82l-8.82,4.14L34,33V15L33.2,4.15l8.82,4.14 C43.21,8.71,44,9.84,44,11.11z"></path><path fill="#0277bd" d="M9,33.896L34,15V5.353c0-1.198-1.482-1.758-2.275-0.86L4.658,29.239 c-0.9,0.83-0.849,2.267,0.107,3.032c0,0,1.324,1.232,1.803,1.574C7.304,34.37,8.271,34.43,9,33.896z"></path><path fill="#0288d1" d="M9,14.104L34,33v9.647c0,1.198-1.482,1.758-2.275,0.86L4.658,18.761 c-0.9-0.83-0.849-2.267,0.107-3.032c0,0,1.324-1.232,1.803-1.574C7.304,13.63,8.271,13.57,9,14.104z"></path>
          </svg>
          <span>VS Code</span>
        </div>
        <div class="skill-card" tabindex="0" aria-label="Figma">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
          <path fill="#e64a19" d="M26,17h-8c-3.866,0-7-3.134-7-7v0c0-3.866,3.134-7,7-7h8V17z"></path><path fill="#7c4dff" d="M25,31h-7c-3.866,0-7-3.134-7-7v0c0-3.866,3.134-7,7-7h7V31z"></path><path fill="#66bb6a" d="M18,45L18,45c-3.866,0-7-3.134-7-7v0c0-3.866,3.134-7,7-7h7v7C25,41.866,21.866,45,18,45z"></path><path fill="#ff7043" d="M32,17h-7V3h7c3.866,0,7,3.134,7,7v0C39,13.866,35.866,17,32,17z"></path><circle cx="32" cy="24" r="7" fill="#29b6f6"></circle>
          </svg>
          <span>Figma</span>
        </div>
      </div>
    </section>

  </main>
</body>
</html>
