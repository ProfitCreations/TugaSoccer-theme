<!doctype html>
<html @php language_attributes() @endphp>
  @include('partials.head')
  <body @php body_class() @endphp>

  <!-- Top nav info -->
  <div class="container-fluid top-info-nav">
    <div class="row">
      <div class="col">
        <p>Hello and welcome</p>
      </div>
      <div class="col"></div>
      <div class="col"></div>
    </div>
  </div>
  <!-- ./Top nav info -->
  
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap container" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
