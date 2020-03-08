<?php

namespace MMSEBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MMSEBundle extends Bundle
{
    public function getParent()
    {
	return 'FOSUserBundle';
    }
}
