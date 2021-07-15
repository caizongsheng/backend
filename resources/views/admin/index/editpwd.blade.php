@include('admin.public.header')
<body>
<div class="container-fluid p-t-15">
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          
          <form method="post" action="#!" class="site-form">
            <div class="form-group">
              <label for="old-password">旧密码</label>
              <input type="password" class="form-control" name="oldpwd" id="old-password" placeholder="输入账号的原登录密码">
            </div>
            <div class="form-group">
              <label for="new-password">新密码</label>
              <input type="password" class="form-control" name="newpwd" id="new-password" placeholder="输入新的密码">
            </div>
            <div class="form-group">
              <label for="confirm-password">确认新密码</label>
              <input type="password" class="form-control" name="confirmpwd" id="confirm-password" placeholder="请输入正确的邮箱地址">
            </div>
            <button type="submit" class="btn btn-primary">修改密码</button>
          </form>
 
        </div>
      </div>
    </div>
    
  </div>
  
</div>
</body>
</html>