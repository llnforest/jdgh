<ul class="nav nav-tabs">
    {if condition="checkPath('yangguang/index')"}
    <li><a href="{:Url('yangguang/index')}">信息列表</a></li>
    {/if}
    {if condition="checkPath('yangguang/contentAdd')"}
    <li class="active"><a href="{:Url('yangguang/contentAdd')}">添加信息</a></li>
    {/if}
    
</ul>
<form  class="form-horizontal" action="{:url('yangguang/contentAdd')}" method="post">
    {include file="form:form_yangguang" /}
</form>
