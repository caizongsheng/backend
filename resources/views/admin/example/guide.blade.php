@include('admin.public.header')
  
<body>
<div class="container-fluid p-t-15">
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header"><h4>表单向导</h4></div>
        <div class="card-body">
          
          <form action="lyear_pages_guide.html" method="post" class="guide-box" data-navigateable="true">
            <ul class="nav-step step-dots">
              <li class="nav-step-item active">
                <span>步骤一</span>
                <a class="active" data-toggle="tab" href="#step-1"></a>
              </li>

              <li class="nav-step-item">
                <span>步骤三</span>
                <a data-toggle="tab" href="#step-2"></a>
              </li>

              <li class="nav-step-item">
                <span>步骤四</span>
                <a data-toggle="tab" href="#step-3"></a>
              </li>

              <li class="nav-step-item">
                <span>步骤五</span>
                <a data-toggle="tab" href="#step-4"></a>
              </li>
            </ul>
            <!--对应内容-->
            <div class="nav-step-content">
              <div class="nav-step-pane hidden active" id="step-1">
                <div class="form-group">
                  <label>姓名</label>
                  <input class="form-control" type="text">
                </div>
              </div>

              <div class="nav-step-pane hidden" id="step-2">
                <div class="form-group">
                  <label>邮箱地址</label>
                  <input class="form-control" type="text">
                </div>
              </div>

              <div class="nav-step-pane hidden" id="step-3">
                <div class="form-group">
                  <label>设置密码</label>
                  <input class="form-control" type="password">
                </div>
              </div>

              <div class="nav-step-pane hidden" id="step-4">
                <div class="form-group">
                  <label>备注</label>
                  <input class="form-control" type="text">
                </div>
              </div>
            </div>
            <!--End 对应内容-->
            <hr>
            <div class="nav-step-button">
              <button class="btn btn-secondary disabled" data-wizard="prev" type="button">上一步</button>
              <button class="btn btn-secondary" data-wizard="next" type="button">下一步</button>
              <button class="btn btn-primary hidden" data-wizard="finish" type="submit">完成</button>
            </div>
          </form>
 
        </div>
      </div>
    </div>
    
  </div>
  
</div>

<!--向导插件-->
<script type="text/javascript" src="{{URL::asset('static/js/jquery.bootstrap.wizard.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.guide-box').bootstrapWizard({
        'tabClass': 'nav-step',
        'nextSelector': '[data-wizard="next"]',
        'previousSelector': '[data-wizard="prev"]',
        'finishSelector': '[data-wizard="finish"]',
        'onTabClick': function(e, t, i) {
            if (!$('.guide-box').is('[data-navigateable="true"]')) return ! 1
        },
        'onTabShow': function(e, t, i) {
            t.children(":gt(" + i + ").complete").removeClass("complete");
            t.children(":lt(" + i + "):not(.complete)").addClass("complete");
        },
        'onFinish': function(e, t, i) {
            // 点击完成后处理提交
        }
    });
});
</script>
</body>
</html>