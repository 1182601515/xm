@extends("admin.base.base")
@section('content')
	<!-- Content -->
        <section id="content" class="container">
            <!-- Multi Column -->
                <div class="block-area" id="multi-column">
                    <h3 class="block-title">添加用户的信息</h3>
                    <form class="row form-columned" role="form" method='post' action='/admin/user'>
                     <input type='hidden' name='_token' value="{{ csrf_token() }}">
                        <div class="col-md-4">
                            <input name='name' type="text" class="form-control input-sm m-b-10" placeholder="你好,请在此输入用户名">
                        </div>
                        <div class="col-md-4">
                            <input name='age' type="text" class="form-control input-sm m-b-10" placeholder="你好,请在此输入年龄">
                        </div>
                        <div class="col-md-4 m-b-10">
                            <select class="select" name='sex'>
                                <option value='1'>男</option>
                                <option value='0'>女</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-4">
                            <input type="tel" class="form-control input-sm m-b-10" placeholder="Contact Number">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control input-sm m-b-10" placeholder="City">
                        </div>
                        <div class="col-md-4">
                            <input name="password" class="form-control input-sm m-b-10" placeholder="你好,请在此输入密码">
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control m-b-10" placeholder="Description"></textarea>
                        </div>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-sm">确认添加</button>
                            <button type="reset" class="btn btn-sm">取消添加</button>

                        </div>
                    </form>
                </div>
        </section>
@endsection