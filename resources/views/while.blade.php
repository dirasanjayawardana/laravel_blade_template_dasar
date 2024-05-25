<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>While Loop</title>
</head>

<body>
    @while ($value <= 3)
        The current value is {{ $value }}
        @php
            $value++;
        @endphp
    @endwhile
</body>

</html>
