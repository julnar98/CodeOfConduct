<?php

//Use of the Dependency injection where an object was injected through a class constructor 

   class SoftwareEngineer {
      private $skills;
      public function __construct($skills){
         $this->skills = $skills;
      }
      public function totalSkills(){
         return count($this->skills);
      }
   }
   $createskills = array("PHP", "JQuery", "JavaScript");
   $p = new SoftwareEngineer($createskills);
   echo $p->totalSkills();
?>