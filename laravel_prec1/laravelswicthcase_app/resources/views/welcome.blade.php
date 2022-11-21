<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
    @switch($number)
@case(1)
    First case...
    @break
@case(2)
    Second case...
    @break
@default
    Default case...
@endswitch
    </body>
</html>
