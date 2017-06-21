<?php if (!defined('THINK_PATH')) exit();?><div style="height:520px;overflow-y:auto;">
    <form  class="pageForm required-validate"  action="<?php echo U('admin/task_manage/taskEdit');?>" onsubmit="return validateCallback(this,dialogAjaxDone)" method="post" >
    <table id="UserListTable" class="list">
        <tbody>
            <tr>
                <td align="center" width='200'><label>车型</label></td>
                <td align="left">
                     <select name="CRH" id='CRH' class="required">
                     <?php if(is_array($crh)): $i = 0; $__LIST__ = $crh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>" <?php if($taskPo['CRH'] == $key):?>selected<?php endif;?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                     </select>
                </td>
            </tr>
           <tr>
                <td align="center"><label>检修级别</label></td>
                <td align="left">
                    <?php if(is_array($JXTypeArr)): $i = 0; $__LIST__ = $JXTypeArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Jxvo): $mod = ($i % 2 );++$i;?><input type="radio" name="level" value="<?php echo ($key); ?>" <?php if(($taskPo['level'] & $key) == $key):?>checked<?php endif;?>><?php echo ($Jxvo); endforeach; endif; else: echo "" ;endif; ?>
                </td>
            </tr>
            <tr>
                <td align="center"><label>任务部位</label></td>
                <td align="left">
                    <?php if(is_array($BWTypeArr)): $i = 0; $__LIST__ = $BWTypeArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Bwvo): $mod = ($i % 2 );++$i;?><input name="area" value="<?php echo ($key); ?>" type="radio" <?php if(($taskPo['level'] & $key) == $key):?>checked<?php endif;?> class="partpoint"><?php echo ($Bwvo); endforeach; endif; else: echo "" ;endif; ?>
                </td>
            </tr>
            <tr>
                <td align="center"><label>检修部件</label></td>
                <td align="left">
                    <select name="unit" id="partcont">
                        <?php if(is_array($unitList)): $i = 0; $__LIST__ = $unitList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$unitvo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($unitvo['id']); ?>" <?php if($taskPo['unit'] == $unitvo['id']):?>selected<?php endif;?>><?php echo ($unitvo['unitname']); endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="center"><label>内部子任务序号</label></td>
                <td align="left"><input type='text' name='childid' value="<?php echo ($taskPo['childid']); ?>"/></td>
            </tr>
            <tr>
                <td align="center"><label>操作题型</label></td>
                <td align="left">
                     <input type="radio" name="opttype" value="1"  <?php if($taskPo['opttype'] == 1):?>checked<?php endif;?>/>选择题
                     <input type="radio" name="opttype" value="2"  <?php if($taskPo['opttype'] == 2):?>checked<?php endif;?>/>填空题
                     <input type="radio" name="opttype" value="2"  <?php if($taskPo['opttype'] == 3):?>checked<?php endif;?>/>操作题                     
                </td>
            </tr>
            <tr>
                <td align="center"><label>任务名称</label></td>
                <td align="left"><input type='text' name='taskname' style="width:600px;" value="<?php echo ($taskPo['taskname']); ?>"/></td>
            </tr>
            <tr>
                <td align="center"><label>检修编号部位</label></td>
                <td align="left">
                    <select name="unitid" id="positioncont">
                        <?php if(is_array($redianList)): $i = 0; $__LIST__ = $redianList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$redian): $mod = ($i % 2 );++$i;?><option value="<?php echo ($redian['id']); ?>" <?php if($taskPo['modelid'] == $redian['id']):?>selected<?php endif;?>><?php echo ($redian['tipname']); endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="center"><label>接任务后的系统提示</label></td>
                <td align="left"><input type='text' name='txttip' style="width:600px;" value="<?php echo ($taskPo['txttip']); ?>"/></td>
            </tr>
             <tr>
                <td align="center"><label>考试时的的系统提示</label></td>
                <td align="left"><input type='text' name='txtkstip' style="width:600px;" value="<?php echo ($taskPo['txtkstip']); ?>"/></td>
            </tr>
            <tr>
                <td align="center"><label>帮助文字</label></td>
                <td align="left"><input type='text' name='helptxt' style="width:600px;" value="<?php echo ($taskPo['helptxt']); ?>"/></td>
            </tr>
            <tr id="jobnum">
                <td align="center"><label>答题框数量</label></td>
                <td align="left">
                    <select name="tnum" id="tnum">
                        <option value='0'>请选择</option>
                        <option value='1' <?php if($taskPo['tnum'] == 1):?>selected<?php endif;?>>1</option>
                        <option value='2' <?php if($taskPo['tnum'] == 2):?>selected<?php endif;?>>2</option>
                        <option value='3' <?php if($taskPo['tnum'] == 3):?>selected<?php endif;?>>3</option>
                        <option value='4' <?php if($taskPo['tnum'] == 4):?>selected<?php endif;?>>4</option>
                        <option value='5' <?php if($taskPo['tnum'] == 5):?>selected<?php endif;?>>5</option>
                        <option value='6' <?php if($taskPo['tnum'] == 6):?>selected<?php endif;?>>6</option>
                        <option value='7' <?php if($taskPo['tnum'] == 7):?>selected<?php endif;?>>7</option>
                        <option value='8' <?php if($taskPo['tnum'] == 8):?>selected<?php endif;?>>8</option>
                        <option value='9' <?php if($taskPo['tnum'] == 9):?>selected<?php endif;?>>9</option>
                        <option value='10' <?php if($taskPo['tnum'] == 10):?>selected<?php endif;?>>10</option>
                    </select>
                </td>
            </tr>
            <?php if($taskPo['tnum'] > 0):?>
            <?php for($i=1;$i<=$taskPo['tnum'];$i++):?>
                <tr class='jobcont'>
	               <td align='center'><label>答案<?php echo $i?></label></td>
	               <td align='left'>
	               		<input type='text' name='txt<?php echo $i?>' style='width:150px;' value="<?php echo $taskPo['txt'.$i];?>"/>&nbsp;&nbsp;
	               		贴图<?php echo $i?>&nbsp;<input type='text' name='pic<?php echo $i?>' style='width:150px;' value="<?php echo $taskPo['pic'.$i];?>">&nbsp;&nbsp;
	               		属性<?php echo $i?>&nbsp;
	               			<select name="retstate<?php echo $i?>">
	               				<option value='0' <?php if($taskPo['retstate'.$i] == 0):?>selected<?php endif;?>>正常
	               				<option value='1' <?php if($taskPo['retstate'.$i] == 1):?>selected<?php endif;?>>故障
	               				<option value='2' <?php if($taskPo['retstate'.$i] == 2):?>selected<?php endif;?>>干扰
	               			</select>
	               	</td>
	            </tr>
	        <?php endfor;?>
            <?php endif;?>
            <!-- 
            <?php if($taskPo['tnum'] > 0):?>
            <?php for($i=1;$i<=$taskPo['tnum'];$i++):?>
                <tr class='jobcont'>
                   <td align='center'><label>贴图<?php echo $i?></label></td>
                   <td align='left'><input type='text' name='pic<?php echo $i?>' style='width:600px;' value="<?php echo $taskPo['pic'.$i];?>"/></td>
                </tr>
            <?php endfor;?>
            <?php endif;?>
             -->
            <tr>
                <td align="center"><label>检修工具</label></td>
                <td align="left">
                    <select name="tool"  id="partcont">
                        <?php if(is_array($toollist)): $i = 0; $__LIST__ = $toollist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$toolvo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($toolvo['id']); ?>" <?php if($taskPo['tool'] == $toolvo['id']):?>selected<?php endif;?>><?php echo ($toolvo['tipname']); endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center"><label>检修材料</label></td>
                <td align="left">
                    <select name="material">
                        <option value="0">请选择</option>
                        <?php if(is_array($materialList)): $i = 0; $__LIST__ = $materialList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$materialvo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($materialvo['id']); ?>" <?php if($taskPo['material'] == $materialvo['id']):?>selected<?php endif;?>><?php echo ($materialvo['tipname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td align="center"><label>答题得分</label></td>
                <td align="left"><input type='text' name='pow' value="<?php echo ($taskPo['pow']); ?>"/></td>
            </tr>
            <tr>
                <td align="center"><label>操作得分</label></td>
                <td align="left"><input type='text' name='hold1' value="<?php echo ($taskPo['hold1']); ?>"/></td>
            </tr>
            <tr>
                <td align="center"><label>选工具得分</label></td>
                <td align="left"><input type='text' name='hold2' value="<?php echo ($taskPo['hold2']); ?>"/></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td colspan='2' align='right'><input type='submit' value='提交' /><input type='reset' value='重置' /></td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="id" value="<?php echo ($taskPo['autoid']); ?>"/>
    </form>
</div><!-- pageContent end -->
<script>
$(function(){
	
    $(".partpoint").die().live('change', function(){
        var CRH = $("#CRH").val();
        var value = $(this).val();
        var url="<?php echo U('admin/task_manage/ajaxGetPositionByType');?>";
        $.post(url,{'type':value,'CRH':CRH},function(data){
            $("#partcont").html(data.data);
        },'json')
    });
    
    $(":input[name=unit]").die().live('change', function(){
        var unitId = $(this).val();
        var url="<?php echo U('admin/task_manage/ajaxGetPositionByUnitId');?>";
        $.post(url,{'unitId':unitId},function(data){
            $("#positioncont").html(data.data);
        },'json')
    });
    
    $("#tnum").change(function(){
        var val = $(this).val();
        var str = "";
        if(val == 0){
            $(".jobcont").remove();
        }else{
            $(".jobcont").remove();
            for(i=1; i<= val;i++){
				str +="<tr class='jobcont'>";
				str +="<td align='center'><label>答案"+i+"</label></td>";
				str +="<td align='left'><input type='text' name='txt"+i+"' style='width:150px;' class='required'/>&nbsp;&nbsp;";
				str +="显示贴图名称"+i+"&nbsp;<input type='text' name='pic"+i+"'  style='width:150px;' class='required'/>&nbsp;&nbsp; 属性"+i+"&nbsp;<select name='retstate"+i+"'><option value='0'>正常<option value='1'>故障<option value='2'>干扰</select>";
				str +="</td>";
				str +="</tr>";
			}
            $("#jobnum").after(str); 
        }
    })
})
</script>