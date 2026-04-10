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
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div id="cart-items" class="flex-1 overflow-y-auto px-6 py-2">
            <p class="font-crimson italic text-plum-500 text-center py-12 text-lg">
                Your cart is empty.<br />
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