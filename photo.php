<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Resume with Photo</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        header {
            text-align: center;
        }
        header h1 {
            color: #3498db;
        }
        header p {
            color: #777;
        }
        img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            border-radius: 50%;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #3498db;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        button {
            background-color: #3498db;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <div class="container">
        <header>
            <img src="data:image/jpeg;base64,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"alt="Your Photo">
            <h1>Wazmi Ali</h1>
            <p>Web Developer</p>
        </header>

        <form action="#" method="post">
            <!-- ... (rest of the form fields) ... -->
            <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>
