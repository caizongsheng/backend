@include('admin.public.header')
<link rel="stylesheet" href="{{URL::asset('static/js/libs/bootstrap-multitabs/multitabs.min.css')}}">
<body>
    <div class="lyear-layout-web">
        <div class="lyear-layout-container">
           @include('admin.public.left')
           @include('admin.public.head')
            <!--页面主要内容-->
            <main class="lyear-layout-content">
                <div id="iframe-content"></div>
            </main>
            <!--End 页面主要内容-->
        </div>
    </div>
    <script src="{{URL::asset('static/js/libs/perfect-scrollbar.min.js')}}"></script>
    <script src="{{URL::asset('static/js/libs/bootstrap-multitabs/multitabs.js')}}"></script>
    <script src="{{URL::asset('static/js/libs/index.min.js')}}"></script>
</body>
</html>