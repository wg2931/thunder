<?php
namespace app\controller;
use \core\Thunder;
class indexController extends Thunder{
    public function index(){
        $name = 'Thunder';
        $this->assign('title',$name);
        $this->assign('name',$name);
        $this->display();
    }
    public function sql(){
        $model = model('student');
//        $model = model('teacher');
        $res = $model->lists();
//        $res = $model->getOne(1);
//        $data = array('name'=>'ssssss');
//        $res = $model->setOne(1,$data);
//        $res = $model->delOne(1);
        dump($res);
    }
    public function ses(){
        $session = new \core\lib\session;
        $session->set('name','bbb');
//        $session->del('name');
    }
    public function ses1(){
        $session = new \core\lib\session;
        $res = $session->get('name');
        dump($res);
    }
    public function test1(){
        $m = model('student');
        $t1 = microtime_float();
        $res = $m->lists();
//        $res = $m->destroy(88);
        $data = [
            ['name'=>'n1'],
            ['name'=>'n2'],
            ['name'=>'n3'],
            ['name'=>'n4'],
            ['name'=>'n5'],
            ['name'=>'n6'],
            ['name'=>'n7'],
            ['name'=>'n8'],
            ['name'=>'n9'],
            ['name'=>'n10']
        ];
//        for($i = 0;$i<100;$i++){
//            $res = $m->add($data);
//        }
        dump(microtime_float()-$t1);
        dump($res);

    }
    public function fulsh(){
        $m = model('student');
        $m->flushall();
    }


}