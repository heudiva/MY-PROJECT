<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Divas</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/d6d651f030.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="./images/divalogo.png">
    <link rel="stylesheet" href="entry.4RZ6yaPD.css">
    <link rel="stylesheet" href="{{ asset('assets/css/website.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
	<style>
		.my-name{
			aline-time: center;
			text-aline: center;
			margin-top: 10px;
		}
	</style>
  </head>
  <body>
    <header class="top-page">
      <nav class="navigation container-width">
        <div class="logo">
          <a href="#">
            <img src="{{ asset('uploads/divalogo.png') }}" alt="" />
            <h1>DIVAS</h1>
          </a>
        </div>
        <span class="icon-toggler">
          <i class="fa-solid fa-bars-staggered"></i>
        </span>
        <ul class="nav-lists">
          <li><a href="#">Home</a></li>
          <li><a href="#">Find designers</a></li>
          <li><a href="#">Find Project</a></li>
          <li><a href="#">Inspiration</a></li>
        </ul>
        <div class="auth-buttons">
          <a href="#">Log in</a>
          <a href="#">Sign up</a>
        </div>
      </nav>
    </header>
    <main>
      <section class="hero ">
        <h1>The Project's destination for design</h1>
        <p>
          Get inspired by the work of millions of top-rated designers & agencies
          around the world.
        </p>
        <!-- <a href="https://t.me/heudiva" class="get-started" role="button"><span class="text">Get started <i class='bx bxl-telegram'></i></span></a> -->
       <div class="hero-logo">
         <img class="hero-img" src="{{ asset('uploads/hero/free_style.png') }}" alt="">
       </div>
      <div class="info-hero">
        <a href="https://t.me/heudiva" class="get-started" role="button"><span class="text">Get started <i class='bx bxl-telegram'></i></span></a>
      </div>
			<!-- <h1 class="my-name">HEU<\>DIVA</h1> -->
      </section>
      <section class="designers grid grid-1x5">
        <div class="designer-card">
          <img
            src="https://content.yav.ai/wp-content/uploads/2023/07/ai-website.png"
            alt="Designer 1"
          />
          <div class="designer-info">
            <h2>Develop</h2>
                <h3>websites for the modern age</h3>
                <p>Experience seamless navigation, responsive layouts, and optimised performance with our custom web development solutions</p>
          </div>
          <div class="btn-info">
            <a  href="#">Web Development</a>
          </div>
        </div>
        <div class="designer-card">
          <img
            src="https://content.yav.ai/wp-content/uploads/2023/07/gen-ai-image.png"
            alt="Designer 2"
          />
          <div class="designer-info">
            <h2>Generate</h2>
              <h3>where machines become artists</h3>
              <p>Discover the intersection of technology and creativity, and unlock a world where imagination knows no boundaries</p>
          </div>
          <div class="btn-info">
            <a  href="#">Web Development</a>
          </div>
        </div>
        <div class="designer-card">
          <img
            src="https://content.yav.ai/wp-content/uploads/2023/07/personalisation-image.png"
            alt="Designer 3"
          />
          <div class="designer-info">
              <h2>Develop</h2>
              <h3>websites for the modern age</h3>
              <p>Experience seamless navigation, responsive layouts, and optimised performance with our custom web development solutions</p>
          </div>
          <div class="btn-info">
            <a  href="#">Web Development</a>
          </div>
        </div>
        <div class="designer-card">
          <img
            src="https://content.yav.ai/wp-content/uploads/2023/07/ai-machine.png"
            alt="Designer 4"
          />
          <div class="designer-info">
            <h2>Personalise</h2>
            <h3>a unique experience for everyone</h3>
            <p>We believe in creating meaningful connections between businesses and their users by delivering tailored experiences</p>
          </div>
          <div class="btn-info">
            <a  href="#">Web Development</a>
          </div>
        </div>
        <div class="designer-card">
          <img
            src="https://content.yav.ai/wp-content/uploads/2023/07/ai-office.png"
            alt="Designer 5"
          />
          <div class="designer-info">
            <h2>Personalise</h2>
            <h3>a unique experience for everyone</h3>
            <p>We believe in creating meaningful connections between businesses and their users by delivering tailored experiences</p>
          </div>
          <div class="btn-info">
            <a  href="#">Web Development</a>
          </div>
        </div>
      </section>

      <!-- <section class="project">
        <h2>Project</h2>
          <div class="personal-project container-width">
            <h3>Personal Project</h3>
            <div class="pro-course grid grid-1x5 ">
              <article class="pro-card">

              </article>
              <article class="pro-card">

              </article>
              <article class="pro-card">

              </article>
              <article class="pro-card">

              </article>
              <article class="pro-card">

              </article>
            </div>
          </div>
      </section> -->
    </main>

    <footer>
      <div class="footer-container">
          <div class="footer-column">
              <h2>DIVA.ME PERSONAL</h2>
              <address>
                  Studio 2,<br>
                  02 Rutland Street,<br>
                  Newtown, Victoria - 3220,<br>
                  Cambodia.<br><br>
                  TEL 855 963 7744 364<br>
                  ACLIDA 096 377 4384
              </address>
          </div>
          <div class="footer-column">
              <h3>COMPANY</h3>
              <ul>
                  <li><a href="">About</a></li>
                  <li><a href="">Careers</a></li>
                  <li><a href="">Contact</a></li>
                  <li><a href="">Open Source</a></li>
                  <li><a href="">Services</a></li>
                  <li><a href="">Terms of use</a></li>
                  
              </ul>
          </div>
          <div class="footer-column">
              <h3>SERVICES</h3>
              <ul>
                  <li><a href="#">AI Automation</a></li>
                  <li><a href="#">Consulting</a></li>
                  <li><a href="#">Generative AI</a></li>
                  <li><a href="#">Hosting & Security</a></li>
                  <li><a href="#">Personalisation</a></li>
                  <li><a href="#">Research Agents</a></li>
                  <li><a href="#">Web Development</a></li>
              </ul>
          </div>
          <div class="footer-column">
              <h3>EXPERIMENTS</h3>
              <ul>
                  <li><a href="#">Astro AI</a></li>
                  <li><a href="#">Emojiser</a></li>
                  <li><a href="#">imaGenie</a></li>
                  <li><a href="#">Spiritual AI</a></li>
                  <li><a href="#">Warehouse Bot</a></li>
              </ul>
          </div>
      </div>
      <div class="footer-bottom">
          <p>Copyright © 2024 | HEU DIVA | All Rights Reserved</p>
      </div>
  </footer>
  <script>
        const menuToggler= document.querySelector(".icon-toggler");
        const navLists = document.querySelector(".nav-lists");
        const btnShow = document.querySelector(".btn-log");
        const btnAuth = document.querySelector(".auth-buttons");
        menuToggler.addEventListener("click", ()=>{
          navLists.classList.toggle("show");
        });
        menuToggler.addEventListener("click", ()=>{
          btnShow.classList.toggle("show")
        });
        menuToggler.addEventListener("click", ()=>{
          btnShow.classList.toggle("show")
        });
        btnAuth.addEventListener("click", ()=>{
          btnShow.classList.toggle("show")
        });
  </script>
  </body>
</html>