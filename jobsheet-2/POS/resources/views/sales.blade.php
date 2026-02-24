<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan - POS System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            border-bottom: 3px solid #9C27B0;
            padding-bottom: 10px;
        }
        .breadcrumb {
            margin-bottom: 20px;
            color: #666;
        }
        .breadcrumb a {
            color: #9C27B0;
            text-decoration: none;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #9C27B0;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .total {
            margin-top: 20px;
            text-align: right;
            font-size: 20px;
            font-weight: bold;
            color: #9C27B0;
        }
        .status {
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 12px;
        }
        .status-success {
            background-color: #4CAF50;
            color: white;
        }
        .status-pending {
            background-color: #FF9800;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="breadcrumb">
            <a href="/">Home</a> / Penjualan
        </div>

        <h1>Halaman Transaksi Penjualan</h1>

        <p>Daftar transaksi penjualan hari ini</p>

        <table>
            <thead>
                <tr>
                    <th>No. Transaksi</th>
                    <th>Tanggal</th>
                    <th>Customer</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>TRX-001</td>
                    <td>24 Feb 2026 10:30</td>
                    <td>John Doe</td>
                    <td>Rp 150.000</td>
                    <td><span class="status status-success">Selesai</span></td>
                </tr>
                <tr>
                    <td>TRX-002</td>
                    <td>24 Feb 2026 11:15</td>
                    <td>Jane Smith</td>
                    <td>Rp 275.000</td>
                    <td><span class="status status-success">Selesai</span></td>
                </tr>
                <tr>
                    <td>TRX-003</td>
                    <td>24 Feb 2026 12:00</td>
                    <td>Bob Johnson</td>
                    <td>Rp 89.000</td>
                    <td><span class="status status-pending">Pending</span></td>
                </tr>
                <tr>
                    <td>TRX-004</td>
                    <td>24 Feb 2026 13:45</td>
                    <td>Alice Brown</td>
                    <td>Rp 320.000</td>
                    <td><span class="status status-success">Selesai</span></td>
                </tr>
            </tbody>
        </table>

        <div class="total">
            Total Penjualan: Rp 834.000
        </div>

        <div style="margin-top: 30px;">
            <a href="/" style="color: #9C27B0; text-decoration: none;">← Kembali ke Home</a>
        </div>
    </div>
</body>
</html>
