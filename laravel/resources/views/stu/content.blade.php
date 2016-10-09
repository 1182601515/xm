{extends file='stu/index.html'}
{block name='content'}
<!-- Content -->
    <section id="content" class="container">
        <!-- Deafult Table -->
            <div class="block-area" id="defaultStyle">
                <h3 class="block-title">用户管理</h3>
                <table class="table tile">
                    <thead>
                        <tr>
                            <th>序列号</th>
                            <th>姓名</th>
                            <th>性别</th>
                            <th>年龄</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $list as $v}
                        <tr>
                        	<td>{$v.id}</td>
                        	<td>{$v.name}</td>
                        	<td>{$v.sex}</td>
                        	<td>{$v.age}</td>
                        	<td>
                        		<a class="btn btn-sm btn-alt m-r-5" href="index.php?m=stu&a=del&id={$v.id}">删除</a>
                        		<a class="btn btn-sm btn-alt m-r-5" href="index.php?m=stu&a=edit&id={$v.id}">修改</a>
                        	</td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
    </section>
{/block}