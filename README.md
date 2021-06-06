API BTS PARA ALTA DE USUARIOS/API BTS FOR USERS
=======================================================

[![Release](https://img.shields.io/github/v/release/jchdezperez/bts_api_user.svg)](https://github.com/jchdezperez/bts_api_user)
[![Issues](https://img.shields.io/github/issues/jchdezperez/bts_api_user)](https://github.com/jchdezperez/bts_api_user)
[![Forks](https://img.shields.io/github/forks/jchdezperez/bts_api_user)](https://github.com/jchdezperez/bts_api_user)
[![Stars](https://img.shields.io/github/stars/jchdezperez/bts_api_user)](https://github.com/jchdezperez/bts_api_user)


# Descripción/Description

ES: API de conexión para la creación y tokenización de usuarios en BrainTechSystem. Esta API es básica para poder acceder al resto de las APIs 
que se van desarrollando en BTS.

EN: API connection for the creation and tokenization of users in BrainTechSystem. This API is basic to be able to access the rest of the APIs
that are developing in BTS. 

## Para conectarte contra la API/To connect against the API 

ES: Si estás desarrollando con un framework o con código nativo, te recomiendo que uses este cliente para conectarte contra la API. No obstante, en los recursos encontrarás todas las llamadas básicas que has de realizar para poder almacenar o extraer la información necesaria.

EN: If you are developing with a framework or with native code, I recommend that you use this client to connect against the API. However, in the resources you will find all the basic calls that you have to make in order to store or extract the necessary information. 

#### Aplicación para hacer pruebas desde tu PC

[Postman](https://www.postman.com/)

#### Cliente para PHP

[guzzlephp](https://docs.guzzlephp.org/en/stable/)

1. Para instalar GuzzlePhp, necesitas tener instalado Composer.
1. To install GuzzlePhp, you need to have Composer installed. 

```PHP
curl -sS https://getcomposer.org/installer | php
```

2. Después necesitas añadir Guzzle a tus dependencias
2. Then you need to add Guzzle to your dependencies 

```PHP
composer require guzzlehttp/guzzle:^7.0
```
