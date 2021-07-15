@include('admin.public.header')
<link href="{{URL::asset('static/css/login3.css')}}" rel="stylesheet">
<body>
    <div class="row lyear-wrapper" style="background-image: url({{URL::asset('static/images/login-bg-3.jpg')}}); background-size: cover;">
        <div class="lyear-login">
            <div class="login-center">
                <div class="login-header text-center">
                    <span style="font-size:2rem;color:#ccc;padding-bottom:1rem;display:block;">后台管理系统</span>
                </div>
                <form action="#!" method="post">
                    <div class="form-group has-feedback feedback-left">
                        <input type="text" placeholder="请输入您的用户名" class="form-control" name="username" id="username" />
                        <span class="mdi mdi-account form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group has-feedback feedback-left">
                        <input type="password" placeholder="请输入密码" class="form-control" id="password" name="password" />
                        <span class="mdi mdi-lock form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group has-feedback feedback-left row">
                        <div class="col-xs-7">
                            <input type="text" name="captcha" class="form-control" placeholder="验证码" id="captcha">
                            <span class="mdi mdi-check-all form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="col-xs-5">
                            <img src="{{ captcha_src('math') }}" class="pull-right" style="cursor: pointer;" onclick="this.src=this.src+'?d='+Math.random();" title="点击刷新" alt="captcha">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="lyear-checkbox checkbox-primary m-t-10 text-white">
            <input type="checkbox"><span>5天内自动登录</span>
          </label>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="button" onclick="login()">立即登录</button>
                    </div>
                </form>
                <footer class="col-sm-12 text-center text-white">
                    <p class="m-b-0">Copyright © 2020 <a href="http://lyear.itshubao.com">IT书包</a>. All right reserved</p>
                </footer>
            </div>
        </div>
    </div>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function login()
        {
            let username = document.querySelector('#username').value;
            let password = document.querySelector('#password').value;
            let captcha = document.querySelector("#captcha").value;
            if(!username){
                toastr.error('请输入用户名');
                return;
            }
            if(!password){
                toastr.error('请输入密码');
                return;
            }
            if(!captcha){
                toastr.error('请输入验证码');
                return;
            }
            $.post("{{url('admin/dologin')}}",{username:username,password:password,captcha:captcha},function(res){
                if(res.success){
                    toastr.success(res.msg,function(){
                        setTimeout(function(){
                           location.href = "{{url('admin/index')}}";
                        },2500);
                    });
                }else{
                    toastr.error(res.msg);
                }
            },'json');
        }
    </script>
</body>

</html>