<?php

namespace Psychai\FittSocialiteProvider;

use SocialiteProviders\Manager\SocialiteWasCalled;

class FittExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('fitt', Provider::class);
    }
}
