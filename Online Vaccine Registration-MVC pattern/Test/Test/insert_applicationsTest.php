<?php
class insert_applicantsTest extends \PHPUnit\Framework\TestCase {
    public function appnid(){
        $dose = new Controller\Models\appnid; 
        
        $result= $dose->setnid('187363828736');

        $this->assertEquals($result->getnid(),'187363828736' );
    }
    public function appaddress(){
            $dose = new Controller\Models\appaddress; 
            
            $result= $dose->setaddress('Dhaka');
    
            $this->assertEquals($result->getaddress(),'Dhaka' );
    }

 
    public function appname(){
                $dose = new Controller\Models\appname; 
                
                $result= $dose->setname('Bob');
        
                $this->assertEquals($result->getname(),'Bob' ); }

    public function appage(){
                    $dose = new Controller\Models\appage; 
                    
                    $result= $dose->setage('35');
            
                    $this->assertEquals($result->getage(),'35' ); 


              
                    

    public function appoccupation(){
        $dose = new Controller\appoccupation; 
                            
                            $result= $dose->setoccupation('doctor');
                    
                            $this->assertEquals($result->getoccupation(),'doctor' );
                        }
    public function appreg_date(){
                                $dose = new Controller\Models\appreg_date; 
                                
                                $result= $dose->setreg_date('23-01-2021');
                        
                                $this->assertEquals($result->getreg_date(),'23-01-2021' );
                        }
                    
                     
    public function appcenter_no(){
                                    $dose = new Controller\app_center_no; 
                                    
                                    $result= $dose->setcenter_no('Dhaka');
                            
                                    $this->assertEquals($result->getcenter_no(),'Dhaka' ); }
                    
    
                                        
                                  
                                            