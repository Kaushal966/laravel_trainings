<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
      uppercase latter : {{ strtoupper('kaushal') }}
      <br>
      random number: {{ rand(199,296) }}
    </body>
</html>
