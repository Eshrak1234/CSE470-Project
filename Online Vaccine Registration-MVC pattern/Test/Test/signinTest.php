<?php
class signinTest extends \PHPUnit\Framework\TestCase {
    public function appnid(){
        $dose = new Controller\Models\appnid; 
        
        $result= $dose->setnid('187363828736');

        $this->assertEquals($result->getnid(),'187363828736' );
    }
    public function apppassword(){
            $dose = new Controller\Models\apppassword; 
            
            $result= $dose->setaddress('123456');
    
            $this->assertEquals($result->getaddress(),'123456' );
    }

    
