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
      @include("website.nav-bar")
    </header>
    <main>
      @include("website.main")
    </main>

    @include('website.footer')
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