<ul class="nav nav-tabs">
    {if condition="checkPath('mark/index')"}
    <li><a href="{:Url('mark/index')}">导航列表</a></li>
    {/if}
    {if condition="checkPath('mark/markAdd')"}
    <li><a href="{:Url('mark/markAdd')}">添加导航</a></li>
    {/if}
    {if condition="checkPath('mark/markEdit',['id'=>$info.id])"}
    <li class="active"><a href="{:Url('mark/markEdit',['id'=>$info.id])}">修改导航</a></li>
    {/if}
</ul>
 <form  class="form-horizontal" action="{:url('mark/markEdit',['id'=>$info.id])}" method="post">
    {include file="form:form_mark" /}
</form>
