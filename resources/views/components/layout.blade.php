<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Event Access Codes - Photography Management</title>
  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="images/favicon/favicon.ico" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="images/favicon/favicon-32x32.png"
  />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="images/favicon/favicon-16x16.png"
  />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="images/favicon/apple-touch-icon.png"
  />
  <!-- Local FontAwesome -->
  <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css" />
  <link rel="stylesheet" href="fontawesome/css/solid.min.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="event-access.css" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <header id="header">
    <div class="header-container">
      <a href="dashboard.html" class="logo-link">
        <img src="images/logo.svg" alt="Logo" class="logo-image" />
        <span class="logo-text">Photography Management</span>
      </a>
      @if (Auth::check())
        <div class="header-user">
          <span class="welcome-text">Welcome, Admin</span>
          <form action="/logout" method="post">
            @method('DELETE')
            <button class="btn-logout">
              <i class="fa fa-sign-out-alt"></i>
              Logout
            </button>
          </form>
        </div>
      @endif
    </div>
  </header>

  <main>
    {{ $slot }}
  </main>

  <footer id="footer">
    <div class="footer-copyright">&copy; 2025 Photography Management</div>
  </footer>
</body>
</html>