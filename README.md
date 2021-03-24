# symfony_authenticator_voter_permissions_test

## Installation
1. git clone https://github.com/bastien70/symfony_authenticator_voter_permissions_test.git myProject
2. cd myProject
3. composer install
4. symfony serve
5. go to /test1 page, you will be redirected to login page (it's the @Security annotation)
6. go to /test2 page, it works (it's the @IsGranted annotation)

## Files

### Voter : /security/voter/HomeVoter.php
### Controller : /controller/HomeController.php
