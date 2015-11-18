<?php
namespace Admin\Controller;
use Think\Controller;
class MeslistController extends Controller {
public function index(){
$USERNAME=session('USERNAME');

		$this->assign('name',$USERNAME);
$User = M('Message'); // 实例化User对象
$count      = $User->where('MAIL="'.$USERNAME.'"')->count();// 查询满足要求的总记录数
//dump($count);
$Page       = new \Think\Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数(25)
$show       = $Page->show();// 分页显示输出
//dump($show);
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
$list = $User->where('MAIL="'.$USERNAME.'"')->order('MID')->limit($Page->firstRow.','.$Page->listRows)->select();
$this->assign('list',$list);// 赋值数据集
$this->assign('page',$show);// 赋值分页输出
$this->display();

}
	public function delete(){
		$MID=I('post.mid','','htmlspecialchars'); //工作经验
$User= M('Message');
$User->where('MID="'.$MID.'"')->delete(); 
		
		
	}
}