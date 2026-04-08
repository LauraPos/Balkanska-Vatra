<?php
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: ./index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include('./connection.php'); ?>  <!-- ✅ FIX: ./connection.php (same folder) -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel | Balkanska Vatra</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        plum: {
                            950: '#0d0014',
                            900: '#1a0028',
                            800: '#2d0045',
                            700: '#450068',
                            600: '#6b21a8',
                            500: '#9333ea',
                            400: '#c084fc',
                            300: '#d8b4fe',
                        },
                        gold: {
                            DEFAULT: '#c9a84c',
                            light: '#e8c97a',
                            pale: '#f5e6b8'
                        },
                    },
                    fontFamily: {
                        cinzel: ['"Cinzel Decorative"', 'serif'],
                        crimson: ['"Crimson Pro"', 'serif'],
                    },
                },
            },
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Crimson+Pro:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
</head>

<body class="bg-plum-950 text-gold-pale font-crimson">

<?php include('./admin.php'); ?>  <!-- ✅ FIX: ./admin.php (same folder) -->

<script src="./js.js"></script>  <!-- ✅ FIX: ./js.js (same folder) -->
</body>
</html>