<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Data Mikrotik ke .rsc</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: auto;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"],
        input[type="number"],
        select {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Export Data Mikrotik</h2>
        <form action="export.php" method="POST">
            <label for="ip">IP Mikrotik:</label>
            <input type="text" id="ip" name="ip" value="192.168.88.1" required>

            <label for="port">Port API:</label>
            <input type="number" id="port" name="port" value="8728" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="admin" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="" placeholder="Kosongkan jika tidak ada">

            <label for="data_type">Pilih Data yang Diekspor:</label>
            <select id="data_type" name="data_type">
                <option value="/ip/hotspot/user">Hotspot User</option>
                <option value="/ip/hotspot/user/profile">Hotspot Profile</option>
                <!-- <option value="/ip/address">IP Address</option> -->
                <!-- <option value="/interface/getall">Interface</option> -->
                <option value="/ppp/secret">PPP Secret</option>
                <option value="/ppp/profile">PPP Profile</option>
                <!-- <option value="/system/identity">System Identity</option>
                <option value="/queue/simple">Simple Queue</option> -->
            </select>

            <button type="submit">Export ke .rsc</button>
        </form>

        <?php
        if (isset($_GET['status'])) {
            if ($_GET['status'] === 'success') {
                echo '<div class="message success">Data berhasil diekspor. File .rsc sedang diunduh.</div>';
            } elseif ($_GET['status'] === 'error') {
                echo '<div class="message error">Terjadi kesalahan: ' . htmlspecialchars($_GET['message']) . '</div>';
            }
        }
        ?>
    </div>
</body>

</html>