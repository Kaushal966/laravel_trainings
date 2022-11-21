<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        </head>
    <body>
        @if($number == 10)
            Number is 10
        @elseif($number > 10)
            Number is > 10
        @else
           Number is < 10
        @endif   
    </body>
</html>
