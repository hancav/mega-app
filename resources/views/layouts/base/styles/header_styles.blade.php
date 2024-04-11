{{--== vendor-styles ==--}}
{{--disable styles ... if request comes from election results page--}}
{{-- @section("header-styles-fonts-google-css",'') --}}

{{-- enable and show styles --}}
{{--fonts-google--}}
@section("header-styles-fonts-google-css")
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet" type="text/css">
@show

{{--bootstrap-4.0.0-local--}}
@section("header-styles-app-css")
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@show
{{--ico-moon-icons-local --}}
@section("header-styles-icomoon-css")
  <link href="{{asset('css/icomoon.css')}}?v={{config('styles.icomoon.version')}}" rel="stylesheet">
@show
{{--general-styles--}}
@section("header-styles-estilos-css")
  <link href="{{asset('css/estilos.css')}}?v={{config('styles.estilos.version')}}" rel="stylesheet">
@show
{{--general-styles--}}
@section("header-styles-style-css")
  <link href="{{asset('css/style.css')}}?v={{config('styles.style.version')}}" rel="stylesheet">
@show
