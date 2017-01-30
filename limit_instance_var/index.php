<?php 
// Original
class UserController {
  protected $userService;

  protected $userRepository;

  protected $stripe;

  protected $mailer;

  protected $userEventRepository;

  protected $logger;

  public function __construct(
    UserService $userService,
    userRepository $userRepository,
    Stripe $stripe,
    Mailer $mailer,
    userEventRepository $userEventRepository,
    Logger $logger
  )
  {
    
  }
}


  //refactor 
class UserController {
  protected $userService;

  public function __construct(
    UserService $userService,
  )
  {
    
  }
}


class userService {
  protected $userRepository;

  public function __construct(
    userRepository $userRepository, 
    userEventRepository $userEventRepository
  )
  {
    $this->userRepository = $userRepository;
    $this->userEventRepository = $userEventRepository;
  }
}

class AuthController {
  protected $registrationService;

  public function __construct(
    RegistrationService $registrationService
  )
  {
    $this->registrationService = $registrationService;
  }
}
