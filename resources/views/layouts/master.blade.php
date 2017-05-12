<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('css/ie6-style.css')}}" type="text/css" media="all" />

    @yield('style')
</head>
<body>
<!-- Page -->
<div id="page" class="shell">
  <!-- Header -->
  <div id="header">
    <!-- Logo -->
    <div id="logo">
      <h1><a href="#">game<span>award</span></a></h1>
      <p class="description">your game rating zone</p>
    </div>
    <!-- / Logo -->
    <div class="cl">&nbsp;</div>
    <!-- Sort Navigation -->
    <div id="sort-nav">
      <div class="bg-right">
        <div class="bg-left">
          <div class="cl">&nbsp;</div>
          <ul>
            <li class="first active first-active"><a href="#">Home</a><span class="sep">&nbsp;</span></li>
            <li><a href="#">Top Types</a><span class="sep">&nbsp;</span></li>
            <li><a href="#">Top Games</a><span class="sep">&nbsp;</span></li>
            <li><a href="#">All Games</a><span class="sep">&nbsp;</span></li>
            <li><a href="#">Event</a><span class="sep">&nbsp;</span></li>
            <li><a href="#">Prize</a><span class="sep">&nbsp;</span></li>
          </ul>
          <div class="cl">&nbsp;</div>
        </div>
      </div>
    </div>
    <!-- / Sort Navigation -->
  </div>
  <!-- / Header -->
  <!-- Main -->
  <div id="main">
    <div id="main-bot">
      <div class="cl">&nbsp;</div>
      <!-- Content -->
      <div id="content">
        @yield('content')
      </div>
    </div>
    <!-- / Content -->
    <!--  -->
    <div id="sidebar">
      @yield('sidebar')
    <div class="cl">&nbsp;</div>
    <!-- Footer -->
    <div id="footer">
      <div class="navs">
        <!-- <div class="navs-bot">
          <div class="cl">&nbsp;</div>
          <ul>
            <li><a href="#">community</a></li>
            <li><a href="#">forum</a></li>
            <li><a href="#">video</a></li>
            <li><a href="#">cheats</a></li>
            <li><a href="#">features</a></li>
            <li><a href="#">downloads</a></li>
            <li><a href="#">sports</a></li>
            <li><a href="#">tech</a></li>
          </ul>
          <ul>
            <li><a href="#">pc</a></li>
            <li><a href="#">xbox</a></li>
            <li><a href="#">360</a></li>
            <li><a href="#">wii</a></li>
            <li><a href="#">ps3</a></li>
            <li><a href="#">ps2</a></li>
            <li><a href="#">psp</a></li>
            <li><a href="#">ds</a></li>
          </ul>
          <div class="cl">&nbsp;</div>
        </div> -->
      </div>
      <p class="copy">&copy; HUST Design by <a href="http://chocotemplates.com">Hoang Manh Duy</a></p>
    </div>
    <!-- / Footer -->
  </div>
</div>
<!-- / Main -->
</div>
<!-- / Page -->

    <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
    <script src="js/fns.js" type="text/javascript"></script>
    @yield('script')
</body>
</html>
