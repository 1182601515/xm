{extends file='stu/index.html'}
{block name='content'}
    <!-- Content -->
        <section id="content" class="container">
            <!-- Multi Column -->
                <div class="block-area" id="multi-column">
                    <h3 class="block-title">修改用户</h3>
                    <form class="row form-columned" role="form" method='post' action='index.php?m=stu&a=update'>
                        <input type='hidden' name='id' value="{$user.id}">
                        <div class="col-md-4">
                            <input name='name' type="text" class="form-control input-sm m-b-10" placeholder="用户" value="{$user.name}">
                        </div>
                        <div class="col-md-4">
                            <input name='age' type="text" class="form-control input-sm m-b-10" placeholder="年龄" value="{$user.age}">
                        </div>
                        <div class="col-md-4 m-b-10">
                            <select class="select" name='sex'>
                                <option value='1' {if $user.sex==1}selected{/if}>男</option>
                                <option value='0' {if $user.sex==0}selected{/if}>女</option>
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
                            <input type="password" class="form-control input-sm m-b-10" placeholder="Password">
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control m-b-10" placeholder="Description"></textarea>
                        </div>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-sm">提交</button>
                        </div>
                    </form>
                </div>
        </section>
{/block}