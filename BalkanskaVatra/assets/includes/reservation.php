<!-- RESERVATIONS -->
  <section id="reservations" class="py-32 bg-plum-950 relative">
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-gold/25 to-transparent"></div>
    <div class="max-w-3xl mx-auto px-6">
      <div class="text-center mb-16">
        <p class="font-crimson italic text-gold/60 tracking-[0.2em] mb-3">Book a Table &nbsp;·&nbsp; <span class="text-gold/40">Резервишите Сто</span></p>
        <h2 class="font-cinzel text-5xl text-gold mb-2">Reservations</h2>
        <p class="font-cinzel text-3xl text-plum-400 mb-8">Резервације</p>
        <div class="flex items-center justify-center gap-4">
          <div class="h-px w-16 bg-gradient-to-r from-transparent to-gold/40"></div>
          <span class="text-gold/50">✦</span>
          <div class="h-px w-16 bg-gradient-to-l from-transparent to-gold/40"></div>
        </div>
      </div>
      <form action="./assets/includes/savereservation.php" method="POST" class="space-y-6">
        <div class="grid md:grid-cols-2 gap-6">
          <div>
            <label class="block font-cinzel text-[11px] text-gold/70 tracking-widest mb-2">Name <span class="font-crimson italic text-gold/40">/ Ime</span></label>
            <input type="text" name="name" placeholder="Your full name" class="w-full bg-plum-900/70 border border-gold/20 focus:border-gold/60 outline-none px-5 py-3 text-plum-200 font-crimson text-base placeholder:text-plum-700 transition-colors duration-300">
          </div>
          <div>
            <label class="block font-cinzel text-[11px] text-gold/70 tracking-widest mb-2">Email <span class="font-crimson italic text-gold/40">/ Мejl</span></label>
            <input type="email" name="email" placeholder="your@email.com" class="w-full bg-plum-900/70 border border-gold/20 focus:border-gold/60 outline-none px-5 py-3 text-plum-200 font-crimson text-base placeholder:text-plum-700 transition-colors duration-300">
          </div>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
          <div>
            <label class="block font-cinzel text-[11px] text-gold/70 tracking-widest mb-2">Date <span class="font-crimson italic text-gold/40">/ Датум</span></label>
            <input type="date" name="date" class="w-full bg-plum-900/70 border border-gold/20 focus:border-gold/60 outline-none px-5 py-3 text-plum-200 font-crimson text-base transition-colors duration-300">
          </div>
          <div>
            <label class="block font-cinzel text-[11px] text-gold/70 tracking-widest mb-2">Time <span class="font-crimson italic text-gold/40">/ Време</span></label>
            <select name="time" class="w-full bg-plum-900/70 border border-gold/20 focus:border-gold/60 outline-none px-5 py-3 text-plum-200 font-crimson text-base transition-colors duration-300">
              <option value="">Select / Одаберите</option>
              <option>12:00</option><option>13:00</option><option>14:00</option>
              <option>17:00</option><option>18:00</option><option>19:00</option>
              <option>20:00</option><option>21:00</option>
            </select>
          </div>
        </div>
        <div>
          <label class="block font-cinzel text-[11px] text-gold/70 tracking-widest mb-2">Guests <span class="font-crimson italic text-gold/40">/ Гости</span></label>
          <select name="guests" class="w-full bg-plum-900/70 border border-gold/20 focus:border-gold/60 outline-none px-5 py-3 text-plum-200 font-crimson text-base transition-colors duration-300">
            <option>1 person</option><option>2 people</option><option>3 people</option>
            <option>4 people</option><option>5+ people</option>
          </select>
        </div>
        <div>
          <label class="block font-cinzel text-[11px] text-gold/70 tracking-widest mb-2">Special Wishes <span class="font-crimson italic text-gold/40">/ Посебне Жеље</span></label>
          <textarea name="notes" rows="4" placeholder="Allergies, special occasions..." class="w-full bg-plum-900/70 border border-gold/20 focus:border-gold/60 outline-none px-5 py-3 text-plum-200 font-crimson text-base placeholder:text-plum-700 resize-none transition-colors duration-300"></textarea>
        </div>
        <div class="pt-4 text-center">
          <button type="submit" class="px-14 py-4 bg-gold text-plum-950 font-cinzel text-sm tracking-widest hover:bg-gold-light hover:shadow-[0_8px_30px_rgba(201,168,76,0.4)] hover:-translate-y-0.5 transition-all duration-300">
            Confirm Reservation &nbsp;·&nbsp; <span class="font-crimson italic font-normal opacity-80">Потврди</span>
          </button>
        </div>
      </form>
    </div>
  </section>