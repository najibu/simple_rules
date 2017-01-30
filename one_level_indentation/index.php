 <?php 

 class BankAccounts {
  protected $accounts; 

  public function __construct($accounts)
  { 
    $this->accounts = $accounts;
  }

  // public function filterBy($accountType)
  // {
  //   $filtered = [];
  //   //0
  //   foreach ($this->accounts as $account) {
  //     //1
  //     if ($account->type() == $accountType) {
  //       //2
  //        if ($account->isActive()) {
  //         //3
  //          $filtered[] = $account;
  //        }
  //     }
  //   }

    // Refactor
    public function filterBy($accountType)
    {
      //0
     return array_filter($this->accounts, function($account) use ($accountType){
        return $account->isOfType($accountType);
      });
  }

 }

 class Account {
   protected $type; 

  private function __construct($type)
  { 
    $this->type = $type;
  }

  public static function open($type)
  {
    return new static($type);
  }

  public function isOfType($accountType)
  {
    return $this->type() == $accountType && $this->isActive();
  }

  private function type()
  {
    return $this->type;
  }

  private function isActive()
  {
    return true; 
  }
 }

 $accounts = [
    Account::open('checking'),
    Account::open('savings'),
    Account::open('checking'),
    Account::open('savings'),
 ];

$accounts = new BankAccounts($accounts);

$savings = $accounts->filterBy('checking');

var_dump($savings);