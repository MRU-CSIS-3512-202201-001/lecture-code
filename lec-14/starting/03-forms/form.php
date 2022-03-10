<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        form {
            width: 50%;
        }

        ul {
            list-style-type: none;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        li {
            display: flex;
            flex-direction: column;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <form action="form-handler.php" method="get">
        <ul>
            <li>
                <label for="name">Name:</label>
                <input type="text" id="name" name="user_name">
            </li>
            <li>
                <label for="mail">E-mail:</label>
                <input type="email" id="mail" name="user_email">
            </li>
            <li>
                <label for="msg">Message:</label>
                <textarea id="msg" name="user_message"></textarea>
            </li>
            <li>
                <button type="submit">Send</button>
            </li>
        </ul>
    </form>
</body>

</html>