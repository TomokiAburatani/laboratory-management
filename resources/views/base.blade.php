<!DOCTYPE html>
<html lang="ja">
  <head>
    @yield('head')
  </head>
  <body>
    @yield('header')
    @yield('login-form')
    <div class="container">
      
      <div class="col-md-12">
	@yield('main')
	
      </div>
    </div>
    @yield('footer')
  </body>
</html>
