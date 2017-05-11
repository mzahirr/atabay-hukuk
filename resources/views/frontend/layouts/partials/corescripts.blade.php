<script src="/js/vendor/jquery-1.11.3.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.themepunch.revolution.min.js"></script>
<script src="/js/jquery.themepunch.tools.min.js"></script>
<script src="/js/vendor/modernizr-2.8.3.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.appear.js"></script>
<script src="/js/jquery.countTo.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/main.js"></script>
<script src="/assets/global/scripts/pnotify.custom.min.js" type="text/javascript"></script>
<!-- Pnotify Global Error -->
@if(count($errors->all()) > 0)
    <script type="text/javascript">
        @foreach($errors->all() as $error)
            new PNotify({
            title: '{{trans('frontend.error')}}',
            text: '{{$error}}',
            type: 'error'
        });
        @endforeach
    </script>
@endif
<!-- Pnotify Global Error -->

<!-- Pnotify Global Success -->
@if(session('notify'))
    <script type="text/javascript">
        new PNotify({
            title: '{{trans('frontend.success')}}',
            text: '{{session('notify')}}',
            type: 'success'
        });
    </script>
@endif
<!-- Pnotify Global Success -->
@stack('scripts')