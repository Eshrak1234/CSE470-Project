<?php
class doseTest extends \PHPUnit\Framework\TestCase {
    public function dosenid(){
        $dose = new Controller\dosenid; 
        
        $result= $dose->setnid('187363828736');

        $this->assertEquals($result->getnid(),'187363828736' );
    }
    public function dose11status(){
            $dose = new Controller\dose11status; 
            
            $result= $dose->setdose1('no');
    
            $this->assertEquals($result->getdose11(),'no' );
    }

 
    public function dose2status(){
                $dose = new Controller\dose2status; 
                
                $result= $dose->setdose2('yes');
        
                $this->assertEquals($result->getdose2(),'yes' ); }

    public function dose22status(){
                    $dose = new Controller\dose22status; 
                    
                    $result= $dose->setdose22('no');
            
                    $this->assertEquals($result->getdose22(),'no' ); 
                    
              
            
            


    }
}