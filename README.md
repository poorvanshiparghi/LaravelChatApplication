
## Laravel Chat Application

Chat module implemented using Pusher as the mechanism
In this Laravel chat application, users can send and receive messages in real-time, creating a seamless and interactive chat experience.

### Requirements

- PHP v8.1
- Composer v2.5.5
- Web Server (HTTPS)

### Setup
- composer create-project laravel/laravel LaravelChatApplication
- cd LaravelChatApplication
- composer require pusher/pusher-php-server
- php artisan make:controller PusherController
- php artisan make:event PusherBroadcast

### Code
- routes/web.php

- app/Http/Controllers/PusherController.php

    - index()
    - broadcast()
    - receive()

- app/Events/PusherBroadcast.php

- Code

    - resources/views/index.blade.php
    - resources/views/broadcast.blade.php
    - resources/views/receive.blade.php
      
## [www.pusher.com](www.pusher.com)

- Create Account
- Create App
- Copy API Keys
  
### Env

Copy .env.example and name .env and populate the following API keys

- BROADCAST_DRIVER

- PUSHER_APP_ID

- PUSHER_APP_KEY

- PUSHER_APP_SECRET

- PUSHER_APP_CLUSTER









