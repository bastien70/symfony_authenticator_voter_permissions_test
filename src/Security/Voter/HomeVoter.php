<?php

namespace App\Security\Voter;

use Symfony\Component\Security\Core\Authentication\Token\NullToken;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class HomeVoter extends Voter
{
    public const HOME_TEST_PAGE= 'home_test_page';

    protected $attributes = [
        self::HOME_TEST_PAGE,
    ];

    protected function supports($attribute, $subject)
    {
        if (!in_array($attribute, $this->attributes)) {
            return false;
        }

        return true;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        // No need auth attributes
        if($token instanceof NullToken)
        {
            switch ($attribute) {
                case 'home_test_page':
                    return true;
            }

            return false;
        }

        $user = $token->getUser();
        // if the user is anonymous, do not grant access
        if (!$user instanceof UserInterface) {
            return false;
        }

        // ... (check conditions and return true to grant permission) ...
        switch ($attribute) {
            case '...':
                return true;
        }

        return false;
    }
}
