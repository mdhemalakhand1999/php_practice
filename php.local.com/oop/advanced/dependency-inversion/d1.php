<?php
// dependency inversion principal
// bad prectice
// class Authenticators {
//     function authenticate($username, $password, $external=false, $external_service = false) {
//         if($external == true && 'Google' == $external_service) {
//             $ga = new GoogleAuthenticator();
//             $ga->authenticate();
//         } elseif($external == true && 'Github' == $external_service) {
//             $gh = new GitHubAuthenticator();
//             $gh->authenticate();

//         } else {
//             $la = new LocalAuthenticate();
//             $la->authenticate();

//         }
//     }
// }

class Authenticate {
    private $authServiceProvider;
    function __construct(ServiceProviderInterface $asp) {
        $this->authServiceProvider = $asp;
    }
    function authenticate() {
        $this->authServiceProvider->authenticate();
    }
}
interface ServiceProviderInterface {
    function authenticate();
}
class GithubAuthenticator implements ServiceProviderInterface {
    function authenticate(){}
}

$ga = new GithubAuthenticator();
$auth = new Authenticate($ga);

$auth->authenticate();