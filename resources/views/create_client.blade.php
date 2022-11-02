<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER CLIENT</title>
</head>
<body>
    <form method="post" action="http://127.0.0.1:8000/users/">
       <h1>Name</h1> <input type="text" placeholder="name" name="name">
       <h1>Last name</h1> <input type="text" placeholder="lastname" name="lastname">
       <h1>E-Mail</h1><input type="email" placeholder="email" name="email">
       <h1>Password</h1><input type="password" placeholder="password" name="password">
        <button type="submit">Save</button>
    </form>
</body>
</html