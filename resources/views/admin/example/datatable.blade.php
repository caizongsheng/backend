@include('admin.public.header')
<link href="{{URL::asset('static/js/libs/bootstrap-table/bootstrap-table.min.css')}}" rel="stylesheet">
<body>
<div class="container-fluid p-t-15">
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header"><h4>bootstrap-table简单示例</h4></div>
        <div class="card-body">
          
          <div id="toolbar" class="toolbar-btn-action">
            <button id="btn_add" type="button" class="btn btn-primary m-r-5">
              <span class="mdi mdi-plus" aria-hidden="true"></span>新增
            </button>
            <button id="btn_edit" type="button" class="btn btn-success m-r-5">
              <span class="mdi mdi-check" aria-hidden="true"></span>启用
            </button>
            <button id="btn_edit" type="button" class="btn btn-warning m-r-5">
              <span class="mdi mdi-block-helper" aria-hidden="true"></span>禁用
            </button>
            <button id="btn_delete" type="button" class="btn btn-danger">
              <span class="mdi mdi-window-close" aria-hidden="true"></span>删除
            </button>
          </div>
          <table id="tb_departments"></table>
 
        </div>
      </div>
    </div>
    
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>TreeGrid使用</h4>
        </div>
        <div class="card-body">
          
          <div id="toolbar2" class="toolbar-btn-action">
            <button type="button" class="btn btn-primary m-r-5" onclick="test()">返回选中行</button>
          </div>
          
          <table class="tree-table"></table>
        </div>
      </div>
    </div>
    
  </div>
  
</div>


<script type="text/javascript" src="{{URL::asset('static/js/perfect-scrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('static/js/libs/bootstrap-table/bootstrap-table.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('static/js/libs/bootstrap-table/bootstrap-table-zh-CN.min.js')}}"></script>

<!--行内编辑插件-->
<link href="{{URL::asset('static/js/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.min.css')}}" rel="stylesheet">
<script type="text/javascript" src="{{URL::asset('static/js/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('static/js/libs/bootstrap-table/extensions/editable/bootstrap-table-editable.min.js')}}"></script>

<script type="text/javascript" src="js/main.min.js"></script>
<script type="text/javascript">
$('#tb_departments').bootstrapTable({
    classes: 'table table-bordered table-hover table-striped',
    url: 'http://www.bixiaguangnian.com/index/test/getExampleJson',
    method: 'get',
    dataType : 'jsonp',        // 因为本示例中是跨域的调用,所以涉及到ajax都采用jsonp,
    uniqueId: 'id',
    idField: 'id',             // 每行的唯一标识字段
    toolbar: '#toolbar',       // 工具按钮容器
    //clickToSelect: true,     // 是否启用点击选中行
    showColumns: true,         // 是否显示所有的列
    showRefresh: true,         // 是否显示刷新按钮
    
    //showToggle: true,        // 是否显示详细视图和列表视图的切换按钮(clickToSelect同时设置为true时点击会报错)
  
    pagination: true,                    // 是否显示分页
    sortOrder: "asc",                    // 排序方式
    queryParams: function(params) {
        var temp = {
            limit: params.limit,         // 每页数据量
            offset: params.offset,       // sql语句起始索引
            page: (params.offset / params.limit) + 1,
            sort: params.sort,           // 排序的列名
            sortOrder: params.order      // 排序方式'asc' 'desc'
        };
        return temp;
    },                                   // 传递参数
    sidePagination: "server",            // 分页方式：client客户端分页，server服务端分页
    pageNumber: 1,                       // 初始化加载第一页，默认第一页
    pageSize: 10,                        // 每页的记录行数
    pageList: [10, 25, 50, 100],         // 可供选择的每页的行数
    //search: true,                      // 是否显示表格搜索，此搜索是客户端搜索
    
    //showExport: true,        // 是否显示导出按钮, 导出功能需要导出插件支持(tableexport.min.js)
    //exportDataType: "basic", // 导出数据类型, 'basic':当前页, 'all':所有数据, 'selected':选中的数据
  
    columns: [{
        checkbox: true    // 是否显示复选框
    }, {
        field: 'id',
        title: 'ID',
        sortable: true    // 是否排序
    }, {
        field: 'author',
        title: '作者'
    }, {
        field: 'dynasty',
        title: '朝代',
    }, {
        field: 'nationality',
        title: '国籍'
    }, {
        field: 'opus',
        title: '作品'
    }, {
        field: 'category',
        title: '分类'
    }, {
        field: 'status',
        title: '状态',
        editable: {
            type: 'select',
            title: "状态",
            pk: 1,
            source: [
                { value: 0, text: '禁用'},
                { value: 1, text: '正常'}
            ],
            noeditFormatter: function (value, row, index) {
                var result;
                if (value == '0' || value == '禁用') {
                    result = { filed: "status", value: "禁用", class: "label label-danger" };
                } else if (value == '1' || value == '正常') {
                    result = { filed: "status", value: "正常", class: "label label-success" };
                }
                
                return result; // 这里对bootstrap-table-editable.min.js做了一些修改，让其能接收class
            },
            // 可以按列分开做保存，也可以用后面的onEditableSave
            url: 'http://www.bixiaguangnian.com/index/test/testEditJson',
            ajaxOptions: {
                type: 'get',
                dataType: 'jsonp'
            }, // 默认是post方式提交,这里因为跨域,改成get
            success: function(response, newValue) {
                if (response.code == '200') {
                    // 这里的状态显示有自定义样式区分，做单元格更新
                    $('#tb_departments').bootstrapTable('updateCellById', {id: response.id, field: 'status', value: newValue});
                } else {
                    return response.msg;
                }
            },
            highlight: false
        }
    }, {
        field: 'operate',
        title: '操作',
        formatter: btnGroup,  // 自定义方法
        events: {
            'click .edit-btn': function (event, value, row, index) {
                editUser(row.id);
            },
            'click .del-btn': function (event, value, row, index) {
                delUser(row.id);
            },
            'click .show-btn': function (event, value, row, index) {
                showUser(row);
            }
        }
    }],
    /*
    onEditableSave: function (field, row, oldValue, $el) {
        $.ajax({
            type: "get",
            url: "http://www.bixiaguangnian.com/index/test/testEditTwo",
            data: row,
            dataType: 'jsonp',
            success: function (data, status) {
                if (data.code == '200') {
                    // 这里的状态显示有自定义样式区分，做单行的更新
                    $('.example-table').bootstrapTable('updateRow', {index: row.id, row: row});
                } else {
                    alert(data.msg);
                }
            },
            error: function () {
                alert('修改失败，请稍后再试');
            }
        });
    }
    */
    onLoadSuccess: function(data){
        $("[data-toggle='tooltip']").tooltip();
    }
});

// 操作按钮
function btnGroup ()
{
    let html =
        '<a href="#!" class="btn btn-xs btn-default m-r-5 edit-btn" title="编辑" data-toggle="tooltip"><i class="mdi mdi-pencil"></i></a>' +
        '<a href="#!" class="btn btn-xs btn-default m-r-5 show-btn" title="查看" data-toggle="tooltip"><i class="mdi mdi-eye"></i></a>' +
        '<a href="#!" class="btn btn-xs btn-default del-btn" title="删除" data-toggle="tooltip"><i class="mdi mdi-window-close"></i></a>';
    return html;
}

// 操作方法 - 编辑
function editUser()
{
    alert('编辑信息跳转');
}
// 操作方法 - 删除
function delUser()
{
    alert('信息删除成功');
}
// 操作方法 - 查看
function showUser()
{
    alert('查看详细');
}
</script>

<!--以下是tree-grid的使用示例-->
<link href="{{URL::asset('static/js/libs/jquery-treegrid/jquery.treegrid.min.css')}}" rel="stylesheet">
<script type="text/javascript" src="{{URL::asset('static/js/libs/jquery-treegrid/jquery.treegrid.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('static/js/libs/bootstrap-table/extensions/treegrid/bootstrap-table-treegrid.min.js')}}"></script>
<script type="text/javascript">
// tree-grid使用
var data = JSON.parse(
        '[{"id":1, "pid":0, "status":1, "name":"用户管理", "permissionValue":"open:user:manage"},' +
        '{"id":2, "pid":0, "status":1, "name":"系统管理", "permissionValue":"open:system:manage"},' +
        '{"id":3, "pid":1, "status":1, "name":"新增用户", "permissionValue":"open:user:add"},' +
        '{"id":4, "pid":1, "status":1, "name":"修改用户", "permissionValue":"open:user:edit"},' +
        '{"id":5, "pid":1, "status":0, "name":"删除用户", "permissionValue":"open:user:del"},' +
        '{"id":6, "pid":2, "status":1, "name":"系统配置管理", "permissionValue":"open:systemconfig:manage"},' +
        '{"id":7, "pid":6, "status":1, "name":"新增配置", "permissionValue":"open:systemconfig:add"},' +
        '{"id":8, "pid":6, "status":1, "name":"修改配置", "permissionValue":"open:systemconfig:edit"},' +
        '{"id":9, "pid":6, "status":0, "name":"删除配置", "permissionValue":"open:systemconfig:del"},' +
        '{"id":10, "pid":2,"status":1, "name":"系统日志管理", "permissionValue":"open:log:manage"},' +
        '{"id":11, "pid":10,"status":1, "name":"新增日志", "permissionValue":"open:log:add"},' +
        '{"id":12, "pid":10,"status":1, "name":"修改日志", "permissionValue":"open:log:edit"},' +
        '{"id":13, "pid":10,"status":0, "name":"删除日志", "permissionValue":"open:log:del"}]');

var $treeTable = $('.tree-table');
$treeTable.bootstrapTable({
    data: data,
    idField: 'id',
    uniqueId: 'id',
    dataType: 'jsonp',
    toolbar: '#toolbar2',
    columns: [
        {
            field: 'check',
            checkbox: true
        },
        {
            field: 'name',
            title: '名称'
        },
        {
            field: 'status',
            title: '状态',
            sortable: true,
            /*
             * 可以选择采用开关来处理状态显示
             * 或者采用上个示例的处理方式
             */
            formatter: function (value, row, index) {
                if (value == 0) {
                    is_checked = '';
                } else if (value == 1){
                    is_checked = 'checked="checked"';
                }
                result = '<label class="lyear-switch switch-primary lyear-status"><input type="checkbox" '+ is_checked +'><span  onClick="updateStatus('+ row.id +', '+ value +')"></span></label>';
                return result;
            },
        },
        {
            field: 'permissionValue',
            title: '权限值'
        },
        {
            field: 'operate',
            title: '操作',
            align: 'center',
            events : {
                'click .role-add': function (e, value, row, index) {
                    add(row.id);
                },
                'click .role-delete': function (e, value, row, index) {
                    del(row.id);
                },
                'click .role-edit': function (e, value, row, index) {
                    update(row.id);
                }
            },
            formatter: operateFormatter
        }
    ],
    
    treeShowField: 'name',
    parentIdField: 'pid',
    
    onResetView: function(data) {
        $treeTable.treegrid({
            initialState: 'collapsed', // 所有节点都折叠
            treeColumn: 1,
            //expanderExpandedClass: 'mdi mdi-folder-open',  // 可自定义图标样式
            //expanderCollapsedClass: 'mdi mdi-folder',
            onChange: function() {
                $treeTable.bootstrapTable('resetWidth');
            }
        });
        
        // 只展开树形的第一集节点
        $treeTable.treegrid('getRootNodes').treegrid('expand');
    },
    onCheck: function(row) {
        var datas = $treeTable.bootstrapTable('getData');
        
        selectChilds(datas, row, 'id', 'pid', true); // 选择子类
        
        selectParentChecked(datas, row, 'id', 'pid'); // 选择父类
        
        $treeTable.bootstrapTable('load', datas);
    },
    
    onUncheck: function(row) {
        var datas = $treeTable.bootstrapTable('getData');
        selectChilds(datas, row, 'id', 'pid', false);
        $treeTable.bootstrapTable('load', datas);
    },
});
  
// 操作按钮
function operateFormatter(value, row, index) {
    return [
        '<a type="button" class="role-add btn btn-xs btn-default m-r-5" title="编辑" data-toggle="tooltip"><i class="mdi mdi-plus"></i></a>',
        '<a type="button" class="role-edit btn btn-xs btn-default m-r-5" title="修改" data-toggle="tooltip"><i class="mdi mdi-pencil"></i></a>',
        '<a type="button" class="role-delete btn btn-xs btn-default" title="删除" data-toggle="tooltip"><i class="mdi mdi-delete"></i></a>'
    ].join('');
}

/**
 * 选中父项时，同时选中子项
 * @param datas 所有的数据
 * @param row 当前数据
 * @param id id 字段名
 * @param pid 父id字段名
 */
function selectChilds(datas,row,id,pid,checked) {
    for(var i in datas){
        if(datas[i][pid] == row[id]){
            datas[i].check=checked;
            selectChilds(datas,datas[i],id,pid,checked);
        };
    }
}

function selectParentChecked(datas,row,id,pid){
    for(var i in datas){
        if(datas[i][id] == row[pid]){
            datas[i].check=true;
            selectParentChecked(datas,datas[i],id,pid);
        };
    }
}

function add(id) {
    alert("add 方法 , id = " + id);
}
function del(id) {
    alert("del 方法 , id = " + id);
}
function update(id) {
    alert("update 方法 , id = " + id);
}
function updateStatus(id, state) {
    var newstate = (state == 1) ? 0 : 1; // 发送参数值跟当前参数值相反
    $.ajax({
        type: "get",
        url: "http://www.bixiaguangnian.com/index/test/testGridJson",
        data: {id: id, state: newstate},
        dataType: 'jsonp',
        success: function (data, status) {
            if (data.code == '200') {
                $treeTable.bootstrapTable('updateCellById', {id: id, field: 'status', value: newstate});
            } else {
                alert(data.msg);
                $treeTable.bootstrapTable('updateCellById', {id: id, field: 'status', value: state}); // 因开关点击后样式是变的，失败也重置下
            }
        },
        error: function () {
            alert('修改失败，请稍后再试');
        }
    });
}

function test() {
    var selRows = $treeTable.bootstrapTable("getSelections");
    if(selRows.length == 0){
        alert("请至少选择一行");
        return;
    }
	console.log(selRows);

    var postData = "";
    $.each(selRows,function(i) {
        postData +=  this.id;
        if (i < selRows.length - 1) {
            postData += "， ";
        }
    });
    alert("你选中行的 id 为："+postData);
}
</script>
</body>
</html>