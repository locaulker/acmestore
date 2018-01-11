<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Panel - @yield('title')</title>
  <link rel="stylesheet" href="/css/bundle.css">
</head>
<body>
  
  <div class="off-canvas position-left reveal-for-large" id="offCanvas" data-off-canvas>
    <!-- Sidebar Menu starts -->
    <ul class="vertical menu">
      <li><a href="#">Foundation</a></li>
      <li><a href="#">Dot</a></li>
      <li><a href="#">ZURB</a></li>
      <li><a href="#">Com</a></li>
      <li><a href="#">Slash</a></li>
      <li><a href="#">Sites</a></li>
    </ul>
    <!-- Sidebar Menu ends -->
  </div>

  <div class="off-canvas-content" data-off-canvas-content>
    <!-- Your page content lives here -->

  <!-- Top Navbar -->
  <div class="title-bar">
    <div class="title-bar-left">
      <button class="menu-icon hide-for-large" type="button" data-open="offCanvas"></button>
      <span class="title-bar-title">{{ getenv('APP_NAME') }}</span>
    </div>
  </div>

    @yield('content')
  </div>


  <script async src="/js/bundle.js"></script>
</body>
</html>