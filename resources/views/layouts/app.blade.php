<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')

  <body @php(body_class())>

    <div class="slide__content">

      <header class="header header--js" id="top">
    @php(do_action('get_header'))
    @include('partials.header')
      </header>

      <main id="main" class="main">
        <div class="main__inner">
          @yield('content')
        </div>
      </main>
      <!-- /.main -->

    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>

</html>
