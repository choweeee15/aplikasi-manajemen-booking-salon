<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .message-container {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background: #fff;
            max-width: 400px;
        }
        .message-container.success {
            border-left: 5px solid #28a745;
        }
        .message-container.error {
            border-left: 5px solid #dc3545;
        }
        h1 {
            font-size: 1.5rem;
            margin: 0 0 10px;
        }
        p {
            margin: 0;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="message-container <?= $type ?>">
        <h1><?= ucfirst($type) ?></h1>
        <p><?= $message ?></p>
    </div>
</body>
</html>
