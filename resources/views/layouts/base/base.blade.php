<!DOCTYPE html>
<html lang="pt">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    @section('metadata')
      <title>MS11</title>
    @show

    {{--     
    @section('base-header-styles')  
      @include('layouts.base.styles.header_styles')
      @stack('header-styles') 
    @show
    @section('base-header-scripts') 
      @include('layouts.base.scripts.header_scripts')
      @stack('header-scripts')  
    @show 
    --}}
  </head>

  <body class="@yield('body-classes')" itemscope itemtype="https://schema.org/WebPage">

    <div id="@yield('id-base-type')" class="@yield('class-base-type')">

      @section('base-header')
        @include('layouts.base.header.header')
      @show

      <div class="container main-content margin-top">

        @section('base-content')
          @yield('content')
        @show

      </div>
      {{-- add footer --}}
      {{-- @section('base-footer') @include('layouts.base.footer.footer') @show --}}

    </div>

    {{-- 
    @section('base-footer-scripts')
      @include('layouts.base.scripts.footer_scripts')
      @stack('footer-scripts')
    @show
    --}}

  </body>
</html>