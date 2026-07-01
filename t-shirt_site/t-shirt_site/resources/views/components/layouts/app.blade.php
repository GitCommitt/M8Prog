<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <x-header.logo></x-header.logo>
        <x-header.nav></x-header.nav>
    </header>
    
    {{$content}}

    <footer>
        <x-footer.contact></x-footer.contact>
        <x-footer.information></x-footer.information>
    </footer>
</body>
</html>