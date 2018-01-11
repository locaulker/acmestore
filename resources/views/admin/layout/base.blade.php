<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Panel - @yield('title')</title>

  <link rel="stylesheet" href="/css/bundle.css">
  <script src="https://use.fontawesome.com/702e01aec3.js"></script>
</head>
<body>
  
  @include('includes.admin-sidebar')

  <div class="off-canvas-content admin-title-bar" data-off-canvas-content>
    <!-- Your page content lives here -->

  <!-- Top title brand bar -->
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