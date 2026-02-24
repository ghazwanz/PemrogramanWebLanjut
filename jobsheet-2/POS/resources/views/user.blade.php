<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - {{ $name }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            border-bottom: 3px solid #FF9800;
            padding-bottom: 10px;
        }
        .profile-info {
            margin-top: 30px;
        }
        .info-row {
            display: flex;
            padding: 15px;
            border-bottom: 1px solid #eee;
        }
        .info-label {
            font-weight: bold;
            width: 150px;
            color: #666;
        }
        .info-value {
            color: #333;
        }
        .breadcrumb {
            margin-bottom: 20px;
            color: #666;
        }
        .breadcrumb a {
            color: #FF9800;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="breadcrumb">
            <a href="/">Home</a> / User Profile
        </div>

        <h1>Profil Pengguna</h1>

        <div class="profile-info">
            <div class="info-row">
                <div class="info-label">User ID:</div>
                <div class="info-value">{{ $id }}</div>
            </div>
            <div class="info-row">
                <div class="info-label">Nama:</div>
                <div class="info-value">{{ $name }}</div>
            </div>
            <div class="info-row">
                <div class="info-label">Status:</div>
                <div class="info-value">Active</div>
            </div>
            <div class="info-row">
                <div class="info-label">Role:</div>
                <div class="info-value">Customer</div>
            </div>
        </div>

        <div style="margin-top: 30px;">
            <a href="/" style="color: #FF9800; text-decoration: none;">← Kembali ke Home</a>
        </div>
    </div>
</body>
</html>
