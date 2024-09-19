<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Ensure the page takes up the full height */
        html,
        body {
            height: 70%;
            margin: 0;
        }

        /* Flexbox layout to push the footer to the bottom */
        .content-wrapper {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
        }

        footer {
            /* Stick the footer to the bottom */
            width: 100%;
        }
    </style>
    <title>Page with Footer</title>
</head>

<body>
    <div class="content-wrapper">
        <div class="content">

        </div>

        <footer class="bg-light text-center">

            <div class="text-center p-2 bg-dark text-white">
                &copy; 2024 Your Store. All rights reserved.
            </div>
        </footer>
    </div>
</body>

</html>