<?php
//echo "welcome to first page success";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
</html>
<body>
<form action="/create" method="post">
    Name<input type="text" name="userName">
    <select name="userType">
        <option>Admin</option>
        <option>other</option>
    </select>
    <input type="submit">
</form>

</body>