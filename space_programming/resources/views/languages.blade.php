<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=language-details.blade.php, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($languages as $language)
    <div>
        <p>{{ $language->name }}</p>
        <p>{{ $language->iconSvg }}</p>
        <p>{{ $language->description }}</p>
    </div>
@endforeach
</body>
</html>