<!DOCTYPE html>
<html lang="en">
<?php include('/assets/includes/connection.php'); ?>

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
                            950: '#0d0014', 900: '#1a0028', 800: '#2d0045',
                            700: '#450068', 600: '#6b21a8', 500: '#9333ea',
                            400: '#c084fc', 300: '#d8b4fe',
                        },
                        gold: { DEFAULT: '#c9a84c', light: '#e8c97a', pale: '#f5e6b8' },
                    },
                    fontFamily: {
                        cinzel:  ['"Cinzel Decorative"', 'serif'],
                        crimson: ['"Crimson Pro"', 'serif'],
                    },
                    keyframes: {
                        fadeUp: {
                            '0%':   { opacity: '0', transform: 'translateY(36px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        fadeIn: {
                            '0%':   { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                    },
                    animation: {
                        'fade-up':   'fadeUp 1s ease forwards',
                        'fade-up-2': 'fadeUp 1s ease 0.2s forwards',
                        'fade-up-3': 'fadeUp 1s ease 0.4s forwards',
                        'fade-up-4': 'fadeUp 1s ease 0.6s forwards',
                        'fade-up-5': 'fadeUp 1s ease 0.8s forwards',
                        'fade-in':   'fadeIn 1.4s ease forwards',
                    },
                },
            },
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Crimson+Pro:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
    <?php include('./assets/includes/js.js'); ?>
</head>

<body class="bg-plum-950 text-gold-pale font-crimson overflow-x-hidden">

    <!-- WINKELWAGEN SIDEBAR (buiten alle pages, altijd aanwezig) -->
    <!-- overlay -->
    <div id="cart-overlay" onclick="closeCart()" class="hidden fixed inset-0 bg-plum-950/70 backdrop-blur-sm z-40"></div>

    <!-- sidebar -->
    <div id="cart-sidebar" class="fixed top-0 right-0 h-full w-full max-w-md bg-plum-900 border-l border-gold/20 z-50 flex flex-col translate-x-full transition-transform duration-300 ease-in-out">
        <div class="flex items-center justify-between px-6 py-5 border-b border-gold/15">
            <div>
                <h2 class="font-cinzel text-gold text-lg tracking-widest">Your Order</h2>
                <p class="font-crimson italic text-plum-500 text-sm">Ваша Поруџбина</p>
            </div>
            <button onclick="closeCart()" class="text-plum-400 hover:text-gold transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <div id="cart-items" class="flex-1 overflow-y-auto px-6 py-2">
            <p class="font-crimson italic text-plum-500 text-center py-12 text-lg">
                Your cart is empty.<br/>
                <span class="text-sm text-plum-600">Корпа је празна.</span>
            </p>
        </div>

        <div class="px-6 py-6 border-t border-gold/15 space-y-4">
            <div class="flex items-center justify-between">
                <span class="font-cinzel text-plum-300 text-sm tracking-widest">TOTAL</span>
                <span id="cart-total" class="font-cinzel text-gold text-xl">€0.00</span>
            </div>
            <p class="font-crimson italic text-plum-600 text-xs">* Bestelling verwerkt via checkout.php</p>
            <button id="cart-checkout-btn"
                onclick="alert('Koppel aan checkout.php')"
                class="w-full py-4 bg-gold text-plum-950 font-cinzel text-sm tracking-widest hover:bg-gold-light transition-all duration-300 opacity-40"
                disabled>
                Checkout &nbsp;·&nbsp; <span class="font-crimson italic font-normal opacity-75">Наруџбина</span>
            </button>
        </div>
    </div>

   <!-- home -->
    <?php include('./assets/includes/home.php'); ?>

    <!-- login -->
    <?php include('./assets/includes/login.php'); ?>

    <!-- admin -->
    <?php include('./assets/includes/admin.php'); ?>

    <!-- admin -->
    <?php include('./assets/includes/about.php'); ?>

        <!-- admin -->
    <?php include('./assets/includes/gallery.php'); ?>

        <!-- admin -->
    <?php include('./assets/includes/menu.php'); ?>

        <!-- admin -->
    <?php include('./assets/includes/reservation.php'); ?>

        <!-- admin -->
    <?php include('./assets/includes/contact.php'); ?>

        <!-- admin -->
    <?php include('./assets/includes/footer.php'); ?>

</body>
</html>