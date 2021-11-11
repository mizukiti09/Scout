<?php
return [
  'line_notify' => [
    'token_url' => 'https://notify-bot.line.me/oauth/token',//固定
    'client_id' => 'G3VCnS7uNh7LvDyazUX8zm',
    'client_secret' => 'pYIuB1M7mtjb9Xjm0Lf8iD6nZYzA8ARC1BgSBeQZytm',
    'callback_url' => env('APP_URL').'/line/callback',
    'csrf' => 'tokentest'//適当
  ],
];
