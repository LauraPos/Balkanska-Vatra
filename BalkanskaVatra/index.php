<!DOCTYPE html>
<html lang="en">
<?php include('./assets/includes/connection.php'); ?>

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
                    keyframes: {
                        fadeUp: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(36px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            },
                        },
                        fadeIn: {
                            '0%': {
                                opacity: '0'
                            },
                            '100%': {
                                opacity: '1'
                            },
                        },
                    },
                    animation: {
                        'fade-up': 'fadeUp 1s ease forwards',
                        'fade-up-2': 'fadeUp 1s ease 0.2s forwards',
                        'fade-up-3': 'fadeUp 1s ease 0.4s forwards',
                        'fade-up-4': 'fadeUp 1s ease 0.6s forwards',
                        'fade-up-5': 'fadeUp 1s ease 0.8s forwards',
                        'fade-in': 'fadeIn 1.4s ease forwards',
                    },
                },
            },
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Crimson+Pro:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
    <?php include('./assets/includes/js.js'); ?>
</head>

<body class="bg-plum-950 text-gold-pale font-crimson overflow-x-hidden">

    <!-- home -->
    <?php include('./assets/includes/home.php'); ?>

    <!-- login -->
    <?php include('./assets/includes/login.php'); ?>

    <!-- admin -->
    <?php include('./assets/includes/admin.php'); ?>

    <!-- about -->
    <?php include('./assets/includes/about.php'); ?>

    <!-- gallery -->
    <?php include('./assets/includes/gallery.php'); ?>

    <!-- menu -->
    <?php include('./assets/includes/menu.php'); ?>

    <!-- reservation -->
    <?php include('./assets/includes/reservation.php'); ?>

    <!-- contact -->
    <?php include('./assets/includes/contact.php'); ?>

    <!-- footer -->
    <?php include('./assets/includes/footer.php'); ?>

    <!-- javascript -->
    <?php include('./assets/includes/js.js'); ?>

</body>

</html>