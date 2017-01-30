<?php 

class Second {
  protected $seconds;

  public function __construct($seconds)
  {
    $this->seconds = $seconds;
  }
}

function cache($data, Second $seconds)
{

}

//Better for your future self
cache([], new Second(50));

// Reasons for Primitives
// 1. Does it bring clarity
// 2. is there behavior?
// 3. Does it accept validation (Consistency)
// 4. Important domain concept

// ref 3
class EmailAddress {
  public function __construct($email)
  {
    if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
      throw new Exception InvalidArgrumentException;
    }

    $this->email = $email;
  }
}

// ref 4
class Location {
  public function __construct($latitude, $longitude)
  {
    
  }
}

class Weight {
  protected $weight;

  public function __construct($weight)
  {
    $this->weight = $weight;
  }

  public function gain($pounds)
  {
    Immutable
    return new static($this->weight += $pounds);
  }

  public function lose($pounds)
  {
    return new static($this->weight -= $pounds);
  }
}

class WorkoutPlaceMember {
  public function __construct($name, Weight $weight)
  {
    $weight->gain(5);
  }

  public function workoutFor(TimeLength $length)
  {
    $length->inSeconds();
    $length->inHours();
  }
}

$najibu = new WorkoutPlaceMember("Najibu", new Weight(160));

$najibu->workoutFor(TimeLength::fromHours(3));

class TimeLength {
  protected $seconds;

  private function __construct($seconds)
  {
    $this->seconds = $seconds;
  }

  public static function fromMinutes($minutes)
  {
    return new static($minutes * 60);
  }

  public static function fromHours($hours)
  {
    return new static($hours * 60 * 60);
  }

  public function inSeconds()
  {
    return $this->seconds;
  }

  public function inHours()
  {
    return $this->seconds / 60 / 60;
  }
}