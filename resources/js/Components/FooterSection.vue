<template>
  <footer class="bg-secondary text-white/60 pt-24 pb-12 font-sans border-t border-white/5">
    
    <!-- Main Footer Grid (4 Columns) -->
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-16 mb-20">
      
      <!-- Column 1: Brand Authority -->
      <div class="space-y-8">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center text-secondary font-black text-xl shadow-lg shadow-primary/20">
             G
          </div>
          <h2 class="text-2xl font-bold text-white tracking-tight uppercase">Great Group</h2>
        </div>
        <p class="text-sm leading-relaxed max-w-xs">
          Empowering global industries through sustainable logistics, innovative palm oil derivatives, and precision agricultural technology. Establishing excellence since 2019.
        </p>
        <div class="flex gap-4">
           <!-- Modern Social Icons -->
           <a v-for="social in ['linkedin', 'twitter', 'instagram']" :key="social" href="#" 
              class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-white/50 hover:bg-primary hover:text-secondary hover:-translate-y-1 transition-all duration-300">
              <span class="text-[10px] font-black uppercase tracking-tighter">{{ social.slice(0,2) }}</span>
           </a>
        </div>
      </div>

      <!-- Column 2: Quick Navigation -->
      <div>
        <h4 class="text-white font-bold text-lg mb-10 relative inline-block">
          Explore
          <span class="absolute -bottom-3 left-0 w-8 h-1 bg-primary rounded-full"></span>
        </h4>
        <ul class="space-y-4">
          <li v-for="item in ['Home', 'About Our Group', 'Latest Insights', 'Sustainability Report', 'Global Careers', 'Industry Partners']" :key="item">
            <a href="#" class="text-white/60 hover:text-primary transition-all flex items-center group text-sm">
              <svg class="w-4 h-4 mr-2 opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all font-bold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
              {{ item }}
            </a>
          </li>
        </ul>
      </div>

      <!-- Column 3: Official HQ Address -->
      <div>
        <h4 class="text-white font-bold text-lg mb-10 relative inline-block">
          Official Office
          <span class="absolute -bottom-3 left-0 w-8 h-1 bg-primary rounded-full"></span>
        </h4>
        <div class="space-y-6">
          <div class="flex items-start gap-4 group">
            <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center shrink-0 border border-white/10 text-primary transition-transform group-hover:scale-110">
               <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            </div>
            <div>
                <p class="text-white font-bold text-sm mb-1 uppercase tracking-wider">Batam, Indonesia (HQ)</p>
                <p class="text-xs leading-relaxed text-white/50 font-medium">
                  Graha Pena Building, 8th Floor,<br />
                  Suite 805-1AD, Jl. Raya Batam Center,<br />
                  Batam 29444, Indonesia
                </p>
            </div>
          </div>
          
          <div class="flex flex-col gap-4 pl-1 text-sm font-bold">
            <a href="tel:+62778460090" class="flex items-center gap-3 text-white/70 hover:text-primary transition-colors">
              <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
              (62) 778 460090
            </a>
            <a href="mailto:info@greatgroup.id" class="flex items-center gap-3 text-white/70 hover:text-primary transition-colors">
              <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
              info@greatgroup.id
            </a>
          </div>
        </div>
      </div>

      <!-- Column 4: Location Discovery (With Map) -->
      <div>
        <h4 class="text-white font-bold text-lg mb-10 relative inline-block">
          Find Us
          <span class="absolute -bottom-3 left-0 w-8 h-1 bg-primary rounded-full"></span>
        </h4>
        <div class="relative w-full h-48 rounded-[1.5rem] overflow-hidden shadow-2xl border-4 border-white/5 bg-neutral-800">
           <iframe 
                src="https://maps.google.com/maps?q=Graha%20Pena%20Batam&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <p class="mt-4 text-[10px] text-white/30 uppercase tracking-[0.2em] font-bold text-center">Graha Pena Building • Batam Center</p>
      </div>

    </div>

    <!-- Bottom Copyright & Compliance -->
    <div class="max-w-7xl mx-auto px-6 pt-12 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-8">
      <div class="flex flex-col items-center md:items-start gap-2">
        <p class="text-[10px] font-black uppercase tracking-[0.3em] text-white/40">© 2026 Great Group Indonesia. All Rights Reserved.</p>
        <p class="text-[9px] text-white/20 uppercase tracking-[0.1em]">Integrated logistics & sustainable industry solutions.</p>
      </div>
      
      <div class="flex gap-10 text-[10px] font-black uppercase tracking-widest text-white/40">
        <a href="#" class="hover:text-primary transition-colors">Legal Terms</a>
        <a href="#" class="hover:text-primary transition-colors">Privacy Policy</a>
        <a href="#" class="hover:text-primary transition-colors">Compliance</a>
      </div>
    </div>
  </footer>
</template>

<style scoped>
/* High-Authority Typography Polish */
h4 {
    letter-spacing: 0.05em;
    text-transform: uppercase;
}
</style>
