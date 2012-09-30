<?php
	    class TestAction extends Action {
        public function test(){ 
            $this->name = 'thinkphp'; // 进行模板变量赋值
            $this->display();
        }
    }
?>