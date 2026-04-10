<!DOCTYPE html>
<html lang="en">
<?php 
include('./assets/includes/connection.php'); 
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Balkanska Vatra | Балканска Ватра</title>
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
                    animation: {
                        'fade-in':   'fadeIn 1s ease 0s forwards',
                        'fade-up':   'fadeUp 1s ease 0.2s forwards',
                        'fade-up-2': 'fadeUp 1s ease 0.4s forwards',
                        'fade-up-3': 'fadeUp 1s ease 0.6s forwards',
                        'fade-up-4': 'fadeUp 1s ease 0.8s forwards',
                        'fade-up-5': 'fadeUp 1s ease 1s forwards',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%':   { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        fadeUp: {
                            '0%':   { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                    },
                },
            },
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Crimson+Pro:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
</head>

<body class="bg-plum-950 text-gold-pale font-crimson overflow-x-hidden">

<?php include('./assets/includes/home.php'); ?>
<script src="./assets/includes/js.js"></script>
</body>
</html>