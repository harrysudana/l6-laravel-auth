<?php

namespace SocialiteProviders\Sso;

use SocialiteProviders\Manager\SocialiteWasCalled;

class SsoExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('sso', __NAMESPACE__.'\Provider');
    }
}
