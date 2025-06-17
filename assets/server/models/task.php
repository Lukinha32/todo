<?php 
class task 
{
   public int $id;
   public string $description;
   public int $done;

   public function __construct($description, $done = 0, $id = null)

   {
    $this->id= $id;
    $this->description = $description;
    $this->done = $done;
    
   }
}