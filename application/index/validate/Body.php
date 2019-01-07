<?php
namespace app\index\validate;
use think\Validate;
class Body extends Validate{
	protected $rule=[
	    'tired'=>'require',
	    'sex'=>'require',
	    'age'=>'require',
	    'facecolor'=>'require',
	    'eye'=>'require',
	    'mouthcolor'=>'require',
	    'face'=>'require',
	    'duzi'=>'require',
	    'etou'=>'require',
	    'upeye'=>'require',
	    'noze'=>'require',
	    'skin'=>'require',
	    'skincolor'=>'require',
	    'energy'=>'require',
	    'nervous'=>'require',
	    'speak'=>'require',
	    'kouku'=>'require',
	    'drink'=>'require',
	    'xiongmen'=>'require',
	    'body'=>'require',
	    'hand'=>'require',
	    'guomin'=>'require',
	];
	protected $message=[
	    'tired.require'=>'请选择是否经常四肢乏力',
	    'sex.require'=>'请选择您的性别',
	    'age.require'=>'请选择您的年龄',
	    'facecolor.require'=>'请选择您是否面部晦暗',
	    'eye.require'=>'请选择您的黑眼圈情况',
	    'mouthcolor.require'=>'请选择您的口唇颜色情况',
	    'face.require'=>'请选择您的皮肤情况',
	    'duzi.require'=>'请选择您的腹部是否肥满松软',
	    'etou.require'=>'请选择您的额头情况',
	    'upeye.require'=>'请选择您的上眼脸情况',
	    'noze.require'=>'请选择您的鼻子出油情况',
	    'skin.require'=>'请选择您的皮肤状态',
	    'skincolor.require'=>'请选择您的皮肤是否一抓就红',
	    'energy.require'=>'请选择您的精力充沛情况',
	    'nervous.require'=>'请选择您的精神紧张的状态',
	    'speak.require'=>'请选择您说话声音的情况',
	    'kouku.require'=>'请选择您口苦的情况',
	    'drink.require'=>'请选择您口干的情况',
	    'xiongmen.require'=>'请选择您胸闷的情况',
	    'body.require'=>'请选择您身体沉重的情况',
	    'hand.require'=>'请选择您手脚心发热的情况',
	    'guomin.require'=>'请选择您的过敏情况',
	];
	protected $scene=[
	    'add'=>['tired','sex','age','facecolor','eye','mouthcolor','face','duzi','etou','upeye','noze','skin','skincolor','energy','nervous','speak','kouku','drink','xiongmen','body','hand','guomin'],
	];
}
?>