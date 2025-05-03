<!DOCTYPE html>
<html lang="id">>

<head>
    <title>Pesan Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #f8f9fa;
            padding: 10px;
            text-align: center;
        }

        .content {
            padding: 20px;
        }

        .footer {
            margin-top: 20px;
            padding: 10px;
            text-align: center;
            font-size: 12px;
            color: #6c757d;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Pesan Baru dari Kontak Form</h2>
        </div>

        <div class="content">
            <p><strong>Nama:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Pesan:</strong></p>
            <p>{{ $userMessage }}</p>
        </div>

        <div class="footer">
            <p>Email ini dikirim secara otomatis, harap tidak membalas email ini.</p>
        </div>
    </div>
</body>

</html>