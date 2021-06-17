API BTS FOR USERS
=======================================================

[![Release](https://img.shields.io/github/v/release/jchdezperez/bts_api_user.svg)](https://github.com/jchdezperez/bts_api_user)
[![Issues](https://img.shields.io/github/issues/jchdezperez/bts_api_user)](https://github.com/jchdezperez/bts_api_user)
[![Forks](https://img.shields.io/github/forks/jchdezperez/bts_api_user)](https://github.com/jchdezperez/bts_api_user)
[![Stars](https://img.shields.io/github/stars/jchdezperez/bts_api_user)](https://github.com/jchdezperez/bts_api_user)


# Official documentation

In this link you can read the documentation about this API: [Documentation](https://docs.braintechsystem.com/api/user/)

# Description

API connection for the creation and tokenization of users in BrainTechSystem. This API is basic to be able to access the rest of the APIs
that are developing in BTS. 

## To connect against the API 

If you are developing with a framework or with native code, I recommend that you use this client to connect against the API. However, in the resources you will find all the basic calls that you have to make in order to store or extract the necessary information. 

#### Application to do tests from your PC

[Postman](https://www.postman.com/)

#### Client for PHP

[guzzlephp](https://docs.guzzlephp.org/en/stable/)

- To install GuzzlePhp, you need to have Composer installed. 

```PHP
curl -sS https://getcomposer.org/installer | php
```

- Then you need to add Guzzle to your dependencies 

```PHP
composer require guzzlehttp/guzzle:^7.0
```
