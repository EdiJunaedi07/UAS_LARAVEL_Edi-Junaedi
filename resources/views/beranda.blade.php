
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-color: red;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="display-4">Selamat Datang {{ auth()->user()->name }}</h1>
        <p class="lead">{{ auth()->user()->email }}</p>
        <a class="form-group" href="/logout">Logout</a>
    </div>

</body>
</html>