<ul class="nav nav-tabs">
    {if condition="checkPath('mark/index')"}
    <li><a href="{:Url('mark/index')}">导航列表</a></li>
    {/if}
    {if condition="checkPath('mark/markAdd')"}
    <li class="active"><a href="{:Url('mark/markAdd')}">添加导航</a></li>
    {/if}
    
</ul>
 <form  class="form-horizontal" action="{:url('mark/markAdd')}" method="post">
    {include file="form:form_mark" /}
</form>
