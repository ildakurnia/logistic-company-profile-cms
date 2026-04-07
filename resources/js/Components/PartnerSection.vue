<script setup>
import { defineProps, computed } from 'vue';

const props = defineProps({
  partners: Array
});

const infinitePartners = computed(() => {
    return [...props.partners, ...props.partners, ...props.partners];
});

// Fail-safe image handler
const handleImageError = (e) => {
    e.target.src = 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=800';
    console.warn('Partner Image failed, using fail-safe.');
};
</script>

<template>
  <section class="py-20 bg-background overflow-hidden relative">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-3xl font-bold text-secondary mb-3 tracking-tight">Our Trusted Partners & Projects</h2>
        <div class="w-20 h-1 bg-primary mx-auto rounded-full"></div>
      </div>
    </div>

    <!-- Marquee Slider Container -->
    <div class="w-full relative overflow-hidden flex pb-8">
      <div class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none"></div>
      <div class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none"></div>

      <div class="flex animate-marquee gap-8 w-max items-center hover:pause pl-8">
        <div v-for="(img, idx) in infinitePartners" :key="idx" 
             class="shrink-0 w-72 md:w-80 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl border border-gray-100 group bg-white cursor-pointer transform transition-all duration-300">
          
          <div class="overflow-hidden h-48 md:h-52 relative">
             <img :src="img.src" 
                  :alt="img.alt" 
                  @error="handleImageError"
                  class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
             
             <div class="absolute inset-0 bg-secondary/0 group-hover:bg-secondary/40 transition-colors duration-500 flex items-center justify-center">
                 <div class="w-12 h-12 rounded-full bg-white text-primary flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity transform translate-y-4 group-hover:translate-y-0 duration-500 shadow-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                 </div>
             </div>
          </div>
          
          <div class="p-5 text-center font-bold text-secondary bg-white">
             {{ img.alt }}
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.animate-marquee {
  animation: marquee 40s linear infinite;
}
.hover\:pause:hover {
  animation-play-state: paused;
}
@keyframes marquee {
  0%   { transform: translateX(0); }
  100% { transform: translateX(calc(-33.33333% - 10px)); } 
}
</style>
