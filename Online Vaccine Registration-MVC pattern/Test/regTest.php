<?php
class regTest extends \PHPUnit\Framework\TestCase {
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
        $dose = new Controller\Models\appoccupation; 
                            
                            $result= $dose->setoccupation('doctor');
                    
                            $this->assertEquals($result->getoccupation(),'doctor' );
                        }
    public function appDate_of_Birth(){
                                $dose = new Controller\Models\appDate_of_birth; 
                                
                                $result= $dose->setDate_of_Birth('23-01-2021');
                        
                                $this->assertEquals($result->getDate_of_Birth(),'23-01-2021' );
                        }
                    
                     
    public function apppassword(){
                                    $dose = new Controller\Models\app_password; 
                                    
                                    $result= $dose->setcenter_no('12345');
                            
                                    $this->assertEquals($result->getcenter_no(),'12345' ); }
    

                                    
                    
                                    