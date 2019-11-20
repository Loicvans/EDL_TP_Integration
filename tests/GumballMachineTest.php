<?php

require 'GumballMachine.php';

class GumballMachineTest extends PHPUnit_Framework_TestCase
{
    public $gumballMachineInstance;
    //prof
    private $nom="x_test_tp"; // a changer
    private $prenom="y_test_tp"; // a changer
    private $date_naissance="0000-00-00"; // a changer
    private $lieu_naissance="XY"; // a changer
    //prof1
    private $nom1="XXX1"; // a changer
    private $prenom1="YYY1"; // a changer
    private $date_naissance1="1980-09-29"; // a changer
    private $lieu_naissance1="ZZZ1"; // a changer
    //prof2
    private $nom2="XXX2"; // a changer
    private $prenom2="YYY2"; // a changer
    private $date_naissance2="1981-10-30"; // a changer
    private $lieu_naissance2="ZZZ2"; // a changer
    //prof3
    private $nom3="XXX3"; // a changer
    private $prenom3="YYY3"; // a changer
    private $date_naissance3="1982-12-31"; // a changer
    private $lieu_naissance3="ZZZ3"; 
    // cours
    private $intitule="***"; //a remplir
    private $duree="***";    //a remplir
    // cours1
    private $intitule1="IOT"; //a remplir
    private $duree1="10";    //a remplir
    private $id_prof1="XXX2 YYY2";
    // cours2
    private $intitule2="IA"; //a remplir
    private $duree2="12";    //a remplir
    private $id_prof2="XXX1 YYY1";
    // cours3
    private $intitule3="C++"; //a remplir
    private $duree3="18";    //a remplir
    private $id_prof3="XXX3 YYY3";
    // cours4
    private $intitule4="EDL"; //a remplir
    private $duree4="30";    //a remplir
    private $id_prof4="XXX3 YYY3";
    
        
    public function setUp()
    {
        $this->gumballMachineInstance = new GumballMachine();
    }
    
    public function testAffichageProfAVI()
    {
        $this->assertEquals(true,$this->gumballMachineInstance->AffichageProf("Before Insertion of Professors"));
    }
    public function testInsertP()
    {
        $max__id1=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom1,$this->prenom1,$this->date_naissance1,$this->lieu_naissance1));
        $this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom2,$this->prenom2,$this->date_naissance2,$this->lieu_naissance2));
        $this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom3,$this->prenom3,$this->date_naissance3,$this->lieu_naissance3));
        $max__id2=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals($max__id1+3,$max__id2);
    }
    public function testAffichageProfAPI()
    {
        /*� completer*/
    }
     
    
    public function testAffichageCoursAVI()
    {
        /*� completer*/
    }
    public function testInsertC()
    {
       
        //$max__id1=$this->gumballMachineInstance->GetLastIDP();
        //$this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom1,$this->prenom1,$this->date_naissance1,$this->lieu_naissance1));
        //$this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom2,$this->prenom2,$this->date_naissance2,$this->lieu_naissance2));
        //$this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom3,$this->prenom3,$this->date_naissance3,$this->lieu_naissance3));
        //$this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom3,$this->prenom3,$this->date_naissance3,$this->lieu_naissance3));
        //$max__id2=$this->gumballMachineInstance->GetLastIDP();
        //$this->assertEquals($max__id1+3,$max__id2);
        
    }
    public function testAffichageCoursAPI()
    {
        /*� completer*/
    }

   
}
