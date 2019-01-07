<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"E:\WWW\zhongyi\public/../application/admin\view\gov\file.html";i:1523869313;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>下载文件</title>
</head>
<body>
<div>
	111
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>文件名1</th>
				<th>文件名2</th>
				<th>上传时间</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "<p class='nulltext'>暂无相关信息</p>" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				<tr>
					<td><?php echo $v['id']; ?></td>
					<td><?php echo $v['file']; ?></td>
					<td><?php echo $v['filename']; ?></td>
					<td><?php echo $v['time']; ?></td>
					<td><a href="<?php echo url('Gov/download',array('id'=>$v['id'])); ?>">下载</a></td>
					<!-- __APP__/File/download/id/{} -->
					<!-- <td><a href="__ROOT__<?php echo $v['filename']; ?>" download="">下载</a></td> -->
				</tr>
			<?php endforeach; endif; else: echo "<p class='nulltext'>暂无相关信息</p>" ;endif; ?>
		</tbody>
	</table>
</div>
</body>
</html>