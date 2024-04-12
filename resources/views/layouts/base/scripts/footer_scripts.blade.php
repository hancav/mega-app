{{-- Footer Scripts --}}
<!-- {{ "#versions#:".app('helpers.versions')->showVersions()}} -->

{{--== Base Scripts ==--}}
{{-- enable and show footer scripts --}}
@section('footer-scripts-fontawesome')
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

{{--==== Date / Time - timeago ====--}}
@section('footer-scripts-timeago')
  <script src="{{ asset('js/vendor/timeago/jquery.timeago.js') }}"></script>
  {{-- Timeago Plugin jQuery - pt translation --}}
  <script src="{{ asset('js/vendor/timeago/jquery.timeago.pt.js') }}"></script>
  {{-- Timeago Plugin jQuery - Human Date --}}
  <script src="{{ asset('js/vendor/timeago/humanDate.js') }}?v={{config('scripts.human-date.version')}}"></script>
  <script>
  // Timeago Plugin - apply Human Date
  jQuery(document).ready(function() {
    jQuery("time.timeago").humanDate();
  });
  </script>
@show

{{-- Analytics rgpd validated --}}
@section('footer-scripts-3rdparty-analytics')
  @if (config('scripts.analytics.enabled'))
  <script src="{{ asset('js/vendor/analytics/analytics.js') }}?v={{config('scripts.analytics.version')}}"></script>
  @endif
@show
