<html>
    <head>
        <title>My Docker 101 Playground</title>
    </head>

    <body>
        <h1>Welcome to my docker playground</h1>
        <ul>
            <?php
                $json = file_get_contents('http://app/');
                $obj = json_decode($json);
                $messages = $obj->message;
                foreach ($messages as $messageValue) {
                    echo "<li>$messageValue</li>";
                }
            ?>
        </ul>
    </body>
</html>