<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import PrimaryButton from './UI/PrimaryButton.vue';
import SecondaryButton from './UI/SecondaryButton.vue';

// Using ONLY PROVEN IDs that showed up in the user screenshot for 100% reliability
const slides = ref([
  {
    image: 'https://images.unsplash.com/photo-1494412651409-8963ce7935a7?auto=format&fit=crop&w=1600',
    title: 'Leading the Future of',
    highlight: 'Sustainable Industry',
    desc: 'Great Group Indonesia is defining industry standards through innovation in palm oil production, global maritime logistics, and sustainable agricultural technology.',
  },
  {
    image: 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=1600',
    title: 'Driving Global',
    highlight: 'Trade Forward',
    desc: 'Connecting continents with our advanced container tracking and efficient maritime transport network.',
  },
  {
    image: 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?auto=format&fit=crop&w=1600',
    title: 'Cultivating Change with',
    highlight: 'Agricultural Innovation',
    desc: 'Leveraging precision agriculture and automated harvesting technologies to ensure sustainable and high-yield production.',
  }
]);

const currentIndex = ref(0);
const scrollOffset = ref(0);
const isVisible = ref(false);
let intervalId = null;
let ticking = false;

const next = () => {
  currentIndex.value = (currentIndex.value + 1) % slides.value.length;
};

const prev = () => {
  currentIndex.value = (currentIndex.value - 1 + slides.value.length) % slides.value.length;
};

const goTo = (index) => {
  currentIndex.value = index;
};

const handleScroll = () => {
    if (!ticking) {
        window.requestAnimationFrame(() => {
            scrollOffset.value = window.scrollY;
            ticking = false;
        });
        ticking = true;
    }
};

// Error handling to show clean background if and image fails to load
const handleImageError = (e) => {
    e.target.src = 'https://images.unsplash.com/photo-1494412651409-8963ce7935a7?auto=format&fit=crop&w=1600';
    console.error('Hero Image Load Failed, switched to fallback');
};

onMounted(() => {
  intervalId = setInterval(next, 7000); // Slower for premium feel
  window.addEventListener('scroll', handleScroll, { passive: true });
  setTimeout(() => { isVisible.value = true; }, 100);
});

onUnmounted(() => {
  clearInterval(intervalId);
  window.removeEventListener('scroll', handleScroll);
});
</script>

<template>
  <section class="relative h-screen w-full flex items-center justify-center overflow-hidden bg-neutral-900 font-sans">
    
    <!-- Fail-Safe Background Implementation -->
    <div class="absolute inset-0 z-0 bg-neutral-900">
      <transition name="fade">
        <div :key="currentIndex" class="absolute inset-0">
          <img :src="slides[currentIndex].image" 
               @error="handleImageError"
               loading="eager"
               class="w-full h-full object-cover will-change-transform"
               :style="{ 
                   transform: `scale(1.2) translate3d(0, -${scrollOffset * 0.2}px, 0)`,
                   objectPosition: 'center center'
               }"
               alt="Background" />
          
          <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/40 to-transparent"></div>
        </div>
      </transition>
    </div>

    <!-- Navigation -->
    <button @click="prev" class="absolute left-6 top-1/2 -translate-y-1/2 hidden lg:flex w-14 h-14 rounded-full bg-white/10 backdrop-blur-md border border-white/20 items-center justify-center text-white hover:bg-primary hover:text-secondary group transition-all z-20 shadow-xl">
      <svg class="w-6 h-6 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
    </button>
    
    <button @click="next" class="absolute right-6 top-1/2 -translate-y-1/2 hidden lg:flex w-14 h-14 rounded-full bg-white/10 backdrop-blur-md border border-white/20 items-center justify-center text-white hover:bg-primary hover:text-secondary group transition-all z-20 shadow-xl">
      <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
    </button>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-6 sm:px-12 lg:px-24">
      <div class="max-w-3xl transform transition-all duration-1000 text-left"
           :class="isVisible ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
        
        <transition name="slide-fade" mode="out-in">
          <div :key="currentIndex">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-[1.15] tracking-tight drop-shadow-2xl">
              {{ slides[currentIndex].title }} <br/>
              <span class="text-primary">{{ slides[currentIndex].highlight }}</span>
            </h1>
            
            <p class="text-white/90 text-sm sm:text-base md:text-lg lg:text-xl mb-10 leading-relaxed max-w-2xl font-medium drop-shadow-sm">
              {{ slides[currentIndex].desc }}
            </p>
            
            <div class="flex flex-col sm:flex-row gap-5">
              <PrimaryButton class="shadow-2xl">
                Get Started
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
              </PrimaryButton>
              <SecondaryButton>
                View Solutions
              </SecondaryButton>
            </div>
          </div>
        </transition>
      </div>
    </div>

    <div v-show="scrollOffset < 100" 
         class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-3 text-white transition-opacity duration-500 z-20">
       <span class="text-[10px] uppercase tracking-[0.3em] font-bold opacity-70">Scroll</span>
       <div class="w-6 h-10 border-2 border-white/30 rounded-full relative flex justify-center p-1.5">
           <div class="w-1.5 h-1.5 bg-primary rounded-full animate-bounce-fade"></div>
       </div>
    </div>

    <div class="absolute bottom-12 right-12 hidden md:flex flex-col gap-4 z-20">
       <button v-for="(_, index) in slides" :key="index" @click="goTo(index)" 
               :class="['w-1 rounded-full transition-all duration-500', currentIndex === index ? 'h-10 bg-primary shadow-lg shadow-primary/20' : 'h-3 bg-white/30 hover:bg-white']">
       </button>
    </div>
  </section>
</template>

<style scoped>
.fade-enter-active {
  transition: opacity 1.2s ease-in-out;
}
.fade-leave-active {
  transition: opacity 1s ease-in-out;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}

.slide-fade-enter-active {
  transition: all 0.8s ease-out;
}
.slide-fade-leave-active {
  transition: all 0.5s cubic-bezier(1, 0.5, 0.8, 1);
}
.slide-fade-enter-from {
  transform: translateX(40px);
  opacity: 0;
}
.slide-fade-leave-to {
  transform: translateX(-40px);
  opacity: 0;
}

img {
    backface-visibility: hidden;
    transform-style: preserve-3d;
}
</style>
