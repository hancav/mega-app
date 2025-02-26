<!DOCTYPE html>
<html lang="pt">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- iOS icon meta tags -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <meta name="apple-mobile-web-app-title" content="{{ config('app.name') }}">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="theme-color" content="#ffffff">

    @section('metadata')
      <title>{{ config('app.name') }}</title>
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