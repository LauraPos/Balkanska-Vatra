let cartItems = [];

// ── PAGE ROUTER ──
function showPage(id) {
    document.querySelectorAll('.page').forEach(p => p.classList.add('hidden'));
    const page = document.getElementById(id);
    if(page) page.classList.remove('hidden');
}

// ── CART ──
function openCart() {
    document.getElementById("cart-sidebar").style.transform = "translateX(0)";
    document.getElementById("cart-overlay").classList.remove("hidden");
}

function closeCart() {
    document.getElementById("cart-sidebar").style.transform = "translateX(100%)";
    document.getElementById("cart-overlay").classList.add("hidden");
}

function updateCartDisplay() {
    const cart = document.getElementById("cart-items");
    const badge = document.getElementById("cart-badge");
    const total = cartItems.reduce((sum, item) => sum + item.price, 0);

    if(cartItems.length === 0) {
        cart.innerHTML = '<p class="text-center py-12">Your cart is empty</p>';
        badge.classList.add("hidden");
    } else {
        cart.innerHTML = cartItems.map((item, i) => `
            <div class="flex justify-between p-2 border-b">
                <span>${item.name} - €${item.price.toFixed(2)}</span>
                <button onclick="removeFromCart(${i})">✕</button>
            </div>
        `).join('');
        badge.innerText = cartItems.length;
        badge.classList.remove("hidden");
    }

    document.getElementById("cart-total").innerText = "€" + total.toFixed(2);
}

function addToCart(name, price) {
    cartItems.push({name, price: parseFloat(price)});
    updateCartDisplay();
    openCart();
}

function removeFromCart(index) {
    cartItems.splice(index, 1);
    updateCartDisplay();
}

// ── MENU FILTER ──
function filterMenu(category) {
    document.querySelectorAll('.menu-card').forEach(card => {
        card.style.display = (category === 'all' || card.dataset.gang === category) ? 'block' : 'none';
    });

    document.querySelectorAll('.cat-btn').forEach(btn => {
        btn.classList.remove('bg-gold', 'text-plum-950');
        btn.classList.add('text-plum-300', 'border-gold/25');
    });

    const active = document.querySelector(`.cat-btn[data-cat="${category}"]`);
    if(active){
        active.classList.add('bg-gold', 'text-plum-950');
        active.classList.remove('text-plum-300', 'border-gold/25');
    }
}

// ── INIT ──
document.addEventListener('DOMContentLoaded', () => {
    showPage('page-main');

    document.querySelectorAll('.cat-btn').forEach(btn => {
        btn.addEventListener('click', () => filterMenu(btn.dataset.cat));
    });
    filterMenu('all');

    updateCartDisplay();

    document.querySelectorAll('.cart-add-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            addToCart(btn.dataset.naam, parseFloat(btn.dataset.prijs));
        });
    });
});