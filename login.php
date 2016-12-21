<?php session_start() ?>
<?php 
    $users = json_decode(file_get_contents('credentials.json'), true);
    echo '<pre>'; 
    print_r($users);
    echo '</pre>';
?>

<html>

<head>
</head>

</body>
    <h2>Login:</h2>
    <form method="POST" action="">
        <input name="username" type="input" placeholder="username" />
        <br /><br />
        <input name="password" type="password" />
        <br /><br />
        <input type="submit" value="Submit" />
    </form>

    <hr />
    <?php if (isset($_POST['username']) && isset($_POST['password'])): ?>
    <?php

        $credenditals = null;
        foreach($users as $user) {
            if ($user['user'] == $_POST['username'] && $user['password'] == $_POST['password']) {
                $credenditals = array(
                    'user' => $_POST['username'],
                    'pass' => $_POST['password'],
                );

                $_SESSION['credentials'] = $credenditals;
            }
        }

        if ($credenditals == null) {
            echo "Sai username hoặc password";
        } else {
            header('location: /index.php');
        }
    ?>
    <?php else: ?>
        
        
        <pre>
        request: <?php print_r($_REQUEST); ?> <br />

        POST: <?php print_r($_POST); ?> <br />

        GET: <?php print_r($_GET); ?> <br />
        </pre>
    <?php endif; ?>

</body>
</html>
