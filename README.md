
# Laravel package for Facebook Campaign creation API integration. 
>NOTE: This is not a official doc

## Installation
- Run below command to install package in your laravel project.

```
composer require laravel-sdk/facebook
```
- After installation Go to project config/app.php file and add below line in provider section

```
Facebook\FacebookServiceProvider::class,
```

## SDK

```
We are using official facebook sdk in api integration.
```

# Routes
* [getcampaign] 
```
POST REQUEST
BODY(dummy data):
{
  "account_id":"act_28551629",
  "app_id": "3625301234398636",
  "app_secret":"09b96be6a15963bjfgdfm44b6cbf81cc3405596",
  "access_token":"GJDAAGk5XdmvawBALc8mZAWE62LcxOPguIQNz7hIM4rRTTudLP0bhPvYnGCG4K5fiBIewzNqLKdxj1SZBTJ3n1aF1TecrY3Cc4hjffjk55gdg4gfg5dnZB1NES1oIcdcah65hyADFSDK"
}
```