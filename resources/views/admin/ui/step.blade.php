@include('admin.public.header')
<body>
<div class="container-fluid p-t-15">

  <div class="alert alert-info" role="alert">
    实际应用中，给a标签加上 <code>data-toggle="tab"</code> ，可查看示例页面中的 表单向导。
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header"><h4>步骤</h4></div>
        <div class="card-body">
          
          <ul class="nav-step step-dots">
            <li class="nav-step-item active">
              <span>步骤一</span>
              <a class="active" href="#"></a>
            </li>

            <li class="nav-step-item">
              <span>步骤三</span>
              <a href="#"></a>
            </li>

            <li class="nav-step-item">
              <span>步骤四</span>
              <a href="#"></a>
            </li>

            <li class="nav-step-item">
              <span>步骤五</span>
              <a href="#"></a>
            </li>
          </ul>
          
          <ul class="nav-step step-dots">
            <li class="nav-step-item complete">
              <span>步骤一</span>
              <a class="active" href="#"></a>
            </li>

            <li class="nav-step-item active">
              <span>步骤三</span>
              <a href="#"></a>
            </li>

            <li class="nav-step-item">
              <span>步骤四</span>
              <a href="#"></a>
            </li>

            <li class="nav-step-item">
              <span>步骤五</span>
              <a href="#"></a>
            </li>
          </ul>
          
          <ul class="nav-step step-anchor">
            <li class="nav-step-item active">
              <a href="#step-1">
                <h6>步骤一</h6>
                <p class="m-0">步骤一说明</p>
              </a>
            </li>
            <li class="nav-step-item">
              <a href="#step-2">
                <h6>步骤二</h6>
                <p class="m-0">步骤二说明</p>
              </a>
            </li>
            <li class="nav-step-item">
              <a href="#step-3">
                <h6>步骤三</h6>
                <p class="m-0">步骤三说明</p>
              </a>
            </li>
            <li class="nav-step-item">
              <a href="#step-4">
                <h6>步骤四</h6>
                <p class="m-0">步骤四说明</p>
              </a>
            </li>
          </ul>
          
          <ul class="nav-step step-anchor">
            <li class="nav-step-item complete">
              <a href="#step-1">
                <h6>步骤一</h6>
                <p class="m-0">步骤一说明</p>
              </a>
            </li>
            <li class="nav-step-item active">
              <a href="#step-2">
                <h6>步骤二</h6>
                <p class="m-0">步骤二说明</p>
              </a>
            </li>
            <li class="nav-step-item">
              <a href="#step-3">
                <h6>步骤三</h6>
                <p class="m-0">步骤三说明</p>
              </a>
            </li>
            <li class="nav-step-item">
              <a href="#step-4">
                <h6>步骤四</h6>
                <p class="m-0">步骤四说明</p>
              </a>
            </li>
          </ul>
          
        </div>
      </div>
    </div>
  </div>
  <!-- .row --> 
  
</div>


<script type="text/javascript" src="{{URL::asset('static/js/perfect-scrollbar.min.js')}}"></script>

</body>
</html>