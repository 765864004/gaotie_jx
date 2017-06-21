<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent"  style="height:280px;overflow-y:auto;">
    <table id="UserListTable" class="list" style="width:100%;">
        <tbody>
            <tr>
                <td align="left" width='100'>
					<?php if(is_array($userList)): $i = 0; $__LIST__ = $userList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$userPo): $mod = ($i % 2 );++$i; echo ($userPo['truename']); ?><br/><?php endforeach; endif; else: echo "" ;endif; ?>
				</td>
            </tr>
        </tbody>
    </table>
    </form>
</div><!-- pageContent end -->