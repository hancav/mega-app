{{-- Footer Scripts --}}
<!-- {{ "#versions#:".app('helpers.versions')->showVersions()}} -->

{{-- disable scripts ... if request comes from election results page--}}
@if(request()->isRequestFromElectionResults())
  @section('footer-scripts-schemaOrg','')
  @section('footer-scripts-floatingPlayer','')
  @section('footer-scripts-timeago','') 
  @section("footer-scripts-3rdparty-dfp",'')
  @section("footer-scripts-3rdparty-onesignal",'')
  @section("footer-scripts-3rdparty-sharethis",'')
  @section("footer-scripts-3rdparty-gemius",'')
  @section("footer-scripts-3rdparty-jira",'')
  @section("footer-scripts-3rdparty-printthis",'')
@endif 

{{-- disable scripts ... if request comes from app --}}
@if(request()->isRequestFromApp())
  @section('footer-scripts-floatingPlayer','')
  @section("footer-scripts-3rdparty-onesignal",'')
  @section("footer-scripts-3rdparty-sharethis",'')
  @section("footer-scripts-3rdparty-analytics",'')
  @section("footer-scripts-3rdparty-gemius",'')
  @section("footer-scripts-3rdparty-printthis",'')
@endif 

{{--== Base Scripts ==--}}
{{-- enable and show footer scripts --}}
@section('footer-scripts-fontawesome')
{{-- Fontawesome Pro CDN --}}
{{--  <script src="https://kit.fontawesome.com/e9303fd82e.js" crossorigin="anonymous"></script>  --}}
{{--  <script src="{{ asset('js/vendor/fontawesome/all.min.js') }}"></script>  --}}
  <script src="{{ asset('js/vendor/fontawesome/brands.js') }}"></script>
  <script src="{{ asset('js/vendor/fontawesome/light.js') }}"></script>
  <script src="{{ asset('js/vendor/fontawesome/solid.js') }}"></script>
  <script src="{{ asset('js/vendor/fontawesome/duotone.js') }}"></script>
  <script src="{{ asset('js/vendor/fontawesome/fontawesome.min.js') }}"></script>
@show

@section('footer-scripts-bootstrap')
{{-- Bootstrap CDN --}}
  <script src="{{ asset('js/vendor/bootstrap-4-1-3/bootstrap.min.js') }}"></script>
@show

{{--== Custom Scripts ==--}}
{{-- Schema Org - noticias custom js--}}
@section('footer-scripts-schemaOrg')
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "NewsMediaOrganization",
    "name": "RTP",
    "alternateName": "RTP Notícias",
    "url": "https://www.rtp.pt/noticias/",
    "logo": "https://cdn-images.rtp.pt/common/img/channels/logos/gray-negative-short/horizontal/rtp.png?w=120&q=100&fm=png32",
    "sameAs": [
      "https://www.facebook.com/rtpnoticias/",
      "https://twitter.com/RTPNoticias",
      "https://www.rtp.pt/noticias/"
    ]
  }
  </script>
@show

{{-- Floating Players - noticias custom js--}}
@section('footer-scripts-floatingPlayer')
  <script src="{{ asset('js/rtp/floatingPlayer.js') }}?v={{config('scripts.floating-player.version')}}"></script>
@show

{{--==== Date / Time - timeago ====--}}
@section('footer-scripts-timeago')
  <script src="{{ asset('js/vendor/timeago/jquery.timeago.js') }}"></script>
  {{-- Timeago Plugin jQuery - pt translation --}}
  <script src="{{ asset('js/vendor/timeago/jquery.timeago.pt.js') }}"></script>
  {{-- Timeago Plugin jQuery - Human Date --}}
  <script src="{{ asset('js/rtp/humanDate.js') }}?v={{config('scripts.human-date.version')}}"></script>
  <script>
  // Timeago Plugin - apply Human Date
  jQuery(document).ready(function() {
    jQuery("time.timeago").humanDate();
  });
  </script>
@show

{{--==== 3rd Party Scripts ====--}}
{{-- Analytics + Chartbeat + EBU Pipe - rgpd validated --}}
@section('footer-scripts-3rdparty-analytics')
  @if (config('scripts.analytics.enabled'))
  <script src="//{{config('rtp.javascript_common.domain')}}/analytics.js?v={{config('scripts.analytics.version')}}"></script>
  @endif
@show

{{-- AD Server DFP - rgpd validated  --}}
@section('footer-scripts-3rdparty-dfp')
  @if (config('scripts.dfp.enabled'))
  <script src="//{{config('rtp.javascript_common.domain')}}/dfp.js?v={{config('scripts.dfp.version')}}"></script>
  @endif
@show

{{-- Onesignal SDK+JS - w/ rgpd --}}
@section('footer-scripts-3rdparty-onesignal')
  @DisplayForWeb()
  <script async src="https://cdn.onesignal.com/sdks/OneSignalSDK.js"></script>
  <script src="{{asset('js/rtp/onesignal/v2/OneSignalLoader.js')}}?v={{config('scripts.onesignal-loader.version')}}"></script>
    @env('production')
    <script src="{{asset('js/rtp/onesignal/v2/OneSignalModule.js')}}?v={{config('scripts.onesignal-module.version')}}"></script>
      <script>
        oneSignalLib.init();
        oneSignalLib.src("{{ asset('js/rtp/onesignal/v2/OneSignalSetup.js')}}?v={{config('scripts.onesignal-setup.version')}} "); // v2
        oneSignalLib.run({{config('scripts.onesignal-setup.enabled')}});
      </script>
      @include('components.3rdparty.onesignal.onesignal_subscribe')
    @else
      {{-- <script src="{{ asset('js/rtp/onesignal/v2/OneSignalModule.js') }}?v={{config('scripts.onesignal-module.version')}}"></script> --}}
      {{-- <script src="{{ asset('js/rtp/onesignal/v2/OneSignalSetup.js') }}?v={{config('scripts.onesignal-setup.version')}}"></script> --}}
      {{-- <script type='text/javascript'> $(function(){ oneSignalSetup("staging"); }); </script> --}}
      <script src="{{ asset('js/rtp/onesignal/v2/OneSignalSetupStaging.js') }}?v={{config('scripts.onesignal-setup-staging.version')}}"></script>
      @include('components.3rdparty.onesignal.onesignal_subscribe')
    @endenv
  @endDisplayForWeb
@show

{{-- ShareThis Area - w/ rgpd --}}
@section('footer-scripts-3rdparty-sharethis')
  @DisplayForWeb()
  <script src="{{ asset('js/vendor/shareThis/shareThis.js') }}?v={{config('scripts.sharethis.version')}}"></script>
  <script>
    shareThisLib.init();
    shareThisLib.run({{config('scripts.sharethis.enabled')}});
  </script>   
  @endDisplayForWeb
@show

{{-- Gemius Area w/ rgpd --}}
@section('footer-scripts-3rdparty-gemius')
  @if (config('scripts.gemius.enabled'))
    @php
    if(empty($gemius_area)){
      $gemius_area=app("helpers.base_gemius_areas")->base();
    }
    @endphp
  {!! app("gemius")->MKT_GEMIUS_TAG(array("gemius_area"=>$gemius_area)); !!}
  @endif
@show

{{-- JIRA plugin  --}}
@section('footer-scripts-3rdparty-jira')
{{--  
<script type="text/javascript" src="https://rtp-multimedia.atlassian.net/s/d41d8cd98f00b204e9800998ecf8427e-T/-w863gw/b/11/a44af77267a987a660377e5c46e0fb64/_/download/batch/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector.js?locale=en-US&collectorId=7ce6e9e6"></script>
 --}}
@show

{{-- printThis --}}
@section('footer-scripts-3rdparty-printthis')
  @DisplayForWeb()
  <script src="{{ asset('js/vendor/printThis/printThis.js') }}"></script>
  @endDisplayForWeb
@show

{{-- Teads - Comercial --}}
@section('footer-scripts-3rdparty-teads')
  <script type="text/javascript" class="teads" async="true" src="//a.teads.tv/page/82399/tag"></script>
@show

{{-- @section('footer-scripts-3rdparty-owlcarousel') <script src="{{ asset('js/vendor/OwlCarousel2/dist/owl.carousel.min.js') }}"></script> @show --}}