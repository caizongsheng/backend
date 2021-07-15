 <!--左侧导航-->
 <aside class="lyear-layout-sidebar">

<!-- logo -->
<div id="logo" class="sidebar-header" style="min-height:64px">
    <a href="{{url('admin/index')}}"><span style="line-height:64px;font-weight:bold;">后台管理系统</span></a>
</div>
<div class="lyear-layout-sidebar-scroll">

    <nav class="sidebar-main">
        <ul class="nav nav-drawer">
            <li class="nav-item active"> <a class="multitabs" href="{{url('admin/main')}}"><i class="mdi mdi-home"></i> <span>后台首页</span></a> </li>
            <li class="nav-item nav-item-has-subnav">
                <a href="javascript:void(0)"><i class="mdi mdi-palette"></i> <span>UI 元素</span></a>
                <ul class="nav nav-subnav">
                    <li> <a class="multitabs" href="{{url('admin/buttons')}}">按钮</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/cards')}}">卡片</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/grid')}}">格栅</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/icons')}}">图标</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/tables')}}">表格</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/modals')}}">模态框</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/popover')}}">提示 / 弹出框</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/alerts')}}">警告框</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/pagination')}}">分页</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/progress')}}">进度条</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/tabs')}}">标签页</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/typography')}}">排版</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/step')}}">步骤</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/other')}}">其他</a> </li>
                </ul>
            </li>
            <li class="nav-item nav-item-has-subnav">
                <a href="javascript:void(0)"><i class="mdi mdi-format-align-justify"></i> <span>表单</span></a>
                <ul class="nav nav-subnav">
                    <li> <a class="multitabs" href="{{url('admin/elements')}}">基本元素</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/radio')}}">单选框</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/checkbox')}}">复选框</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/switch')}}">开关</a> </li>
                </ul>
            </li>
            <li class="nav-item nav-item-has-subnav">
                <a href="javascript:void(0)"><i class="mdi mdi-file-outline"></i> <span>示例页面</span></a>
                <ul class="nav nav-subnav">
                    <li> <a class="multitabs" href="{{url('admin/doc')}}">文档列表</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/gallery')}}">图库列表</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/config')}}">网站配置</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/rabc')}}">设置权限</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/adddoc')}}">新增文档</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/guide')}}">表单向导</a> </li>
                    <li> <a class="multitabs" href="{{url('admin/datatable')}}">表格插件</a> </li>
                    <li> <a href="{{url('admin/error')}}" target="_blank">错误页面</a> </li>
                </ul>
            </li>
           
            <li class="nav-item nav-item-has-subnav">
                <a href="javascript:void(0)"><i class="mdi mdi-menu"></i> <span>多级菜单</span></a>
                <ul class="nav nav-subnav">
                    <li> <a href="#!">一级菜单</a> </li>
                    <li class="nav-item nav-item-has-subnav">
                        <a href="#!">一级菜单</a>
                        <ul class="nav nav-subnav">
                            <li> <a href="#!">二级菜单</a> </li>
                            <li class="nav-item nav-item-has-subnav">
                                <a href="#!">二级菜单</a>
                                <ul class="nav nav-subnav">
                                    <li> <a href="#!">三级菜单</a> </li>
                                    <li> <a href="#!">三级菜单</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li> <a href="#!">一级菜单</a> </li>
                </ul>
            </li>
        </ul>
    </nav>

    <div class="sidebar-footer">
        <p class="copyright">Copyright &copy; 2019. <a target="_blank" href="http://lyear.itshubao.com">IT书包</a> All rights reserved.</p>
    </div>
</div>

</aside>
<!--End 左侧导航-->