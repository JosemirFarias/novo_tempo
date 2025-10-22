<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>{{ $title }} - {{ $type }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            color: #000;
            margin: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 10px;
        }

        h4 {
            text-align: center;
            margin-bottom: 20px;
            color: #666;
        }

        .content {
            font-size: 14px;
            line-height: 1.6;
            white-space: pre-wrap;
        }
    </style>
</head>

<body>
    <h2>{{ $title }}</h2>
    <h4>{{ $version }}</h4>
    <div class="content">
        {{ $content }}
    </div>
</body>

</html>
