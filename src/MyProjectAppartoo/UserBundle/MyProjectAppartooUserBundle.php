<?php

namespace MyProjectAppartoo\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MyProjectAppartooUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
