<?php if (!defined('THINK_PATH')) exit();?><div style="height:420px;overflow-y:auto;">
    <form  class="pageForm required-validate"  action="<?php echo U('admin/task_manage/educationEdit');?>" onsubmit="return validateCallback(this,dialogAjaxDone)" method="post" >
    <table id="UserListTable" class="list" style="width:100%;">
        <tbody>
			<!--
            <tr>
                <td align="center"  width='160'><label>自定义教学名称</label></td>
                <td align="left"><input type='text' name='name'  class="required" style='width:550px;' value="<?php echo ($taskstuPo['name']); ?>"/></td>
            </tr>
			-->
            <tr id="codetaskid">
                <td align="center" ><label>任务编号(名称)</label></td>
                <td align="left">
                    <select name="taskid" class="required" id="taskid">
                        <option value="0">请选择</option>
                    <?php if(is_array($taskBasePos)): $i = 0; $__LIST__ = $taskBasePos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['autoid']); ?>" <?php if($vo['autoid'] == $taskstuPo['taskid']):?>selected<?php endif;?>><?php echo ($vo['autoid']); ?>（<?php echo ($vo['taskname']); ?>）</option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </td>
            </tr>
            <?php echo ($str); ?>
            <tr>
                <td align="center"><label>工具挪到热点上显示的文字</label></td>
                <td align="left">
                    <input type='text' name='tooltip'  class="required"  value="<?php echo ($taskstuPo['tooltip']); ?>"/>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td colspan='2' align='right'><input type='submit' value='提交' /><input type='reset' value='重置' /></td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="id" value="<?php echo ($taskstuPo['autoid']); ?>"/>
    </form>
</div><!-- pageContent end -->
<script>
$(function(){
     $("#taskid").change(function(){
            var val = $(this).val();
            var str = "";
            if(val == 0){
                $(".taststucont").remove();
            }else{
                var url = "<?php echo U('admin/task_manage/ajaxgettaskinfobyid');?>";
                $.post(url, {'taskid':val}, function(data){
                    $(".taststucont").remove();
                    var taskInfo = data.data;  
                    $("#codetaskid").after(taskInfo); 
                },'json');
            }
        })
})
</script>