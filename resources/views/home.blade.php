<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>Responsive Navbar</title>
  </head>
  <body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="#">Web Develop PBL</a></div>
            <ul class="links">
                <li><a href="hero">home</a></li>
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
            <a href="#" class="action_btn">Login</a>
            <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown_menu">
          <li><a href="hero">home</a></li>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="about">About</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="#" class="action_btn">Login</a></li>
        </div>
    </header>

    <main>
      <section id="hero">
        <h1>Welcome</h1>
        <p>Lorem ipsum dolor sit amet consectetur <br /> adipisicing elit. Impedit, earum nihil voluptatem ex molestiae incidunt totam temporibus. Esse aliquid fugiat cum id saepe, voluptatum ut molestias minima, itaque voluptatibus dolorem.</p>
      </section>
    </main>

    <script>
      const toggleBtn = document.querySelector('.toggle_btn')
      const toggleBtnIcon = document.querySelector('.toggle_btn i')
      const dropdownMenu = document.querySelector('.dropdown_menu')

      toggleBtn.onclick = function () {
        dropdownMenu.classList.toggle('open')
        const isOpen = dropdownMenu.classList.contains('open')

        toggleBtnIcon.classList = isOpen
        ? 'fa-solid fa-xmark'
        : 'fa-solid fa-bars'
      }
    </script>
  </body>
</html>
