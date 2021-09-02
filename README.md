# fitt Socialite Provider

```bash
composer require psych-ai/fitt-socialite-provider
```

## Installation & Basic Usage

Please see the [Base Installation Guide](https://socialiteproviders.com/usage/), then follow the provider specific instructions below.

### Add configuration to `config/services.php`

```php
'fitt' => [    
  'client_id' => env('FITT_CLIENT_ID'),  
  'client_secret' => env('FITT_CLIENT_SECRET'),  
  'redirect' => env('FITT_REDIRECT_URI') 
],
```

### Add provider event listener

Configure the package's listener to listen for `SocialiteWasCalled` events.

Add the event to your `listen[]` array in `app/Providers/EventServiceProvider`. See the [Base Installation Guide](https://socialiteproviders.com/usage/) for detailed instructions.

```php
protected $listen = [
    \SocialiteProviders\Manager\SocialiteWasCalled::class => [
        // ... other providers
        'Psychai\\FittSocialiteProvider\\FittExtendSocialite@handle',
    ],
];
```

### Usage

You should now be able to use the provider like you would regularly use Socialite (assuming you have the facade installed):

```php
return Socialite::driver('fitt')->redirect();
```

### Returned User fields

- ``id``
- ``nickname`` (same as ``name``)
- ``name``
- ``avatar``
