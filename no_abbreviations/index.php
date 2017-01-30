<?php 

// Don't do this
class Trnslt {
  
}

// Do this
class Translator {
  
}

// Don't do this
foreach ($x in $people) {
  $x->name;
}

// Do this
foreach ($person in $people) {
  return $person->name;
}

// Don't do this
class UserRepo {
  
}

// Do this
class UserRepository {
  //Don't do this 
  public function fetch($billingId)
  {
    
  }

  // Do this
  public function fetchByBillinId($id)
  {
    
  }  
}

class Order {
  public function process ()
  {
    
  }
  
  //Being too specific
  public function shipOrder()
  {
    
  }

  //Use 
  public function ship()
  {
    
  }
}