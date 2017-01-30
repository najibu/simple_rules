<?php 
//Orignal
public function store()
{
  $input = Request::all();
  $validation = Validator::make($input, ['username' => 'required']);

  if (date('l') !== 'Friday') {
    if ($validation->passes()) {
      Post::create($input);

      return  redirect('home');
    } else {
      return redirect()->back();
    }
  } else {
    throw new Exception("We do not work on Fridays!!");
    
  }
}

//Refactor
public function store()
{
  $input = Request::all();

  $this->validator->validate($input);

  Post::create($input);

  return  redirect('home');      
  }
}

// Example 2
function signUp($subscription){
  if ($subscription == 'monthly') {
    $this->createMonthlySubscription();
  }
  elseif ($subscription == 'forever') {
    $this->createForeverSubscription();
  }
}

//Refactor
function signUp(Subscription $subscription){
  $subscription->create();
}

function getSubscriptionType($type) 
{
  if ($type == 'forever') {
    return new ForeverSubscription;
  }

  return new MonthlySubscription;
}

$subscription = getSubscriptionType($type);
signUp($subscription);