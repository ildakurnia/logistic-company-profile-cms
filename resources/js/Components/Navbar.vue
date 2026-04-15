<script setup>
import { ref, onMounted, onUnmounted, watch } from 'vue';

const isScrolled = ref(false);
const isMenuOpen = ref(false);

const handleScroll = () => {
    isScrolled.value = window.scrollY > 50;
};

const toggleMenu = () => {
    isMenuOpen.value = !isMenuOpen.value;
};

// Fix the toggleMenu logic
const toggleMobileMenu = () => {
    isMenuOpen.value = !isMenuOpen.value;
};

// Lock scroll when mobile menu is open
watch(isMenuOpen, (val) => {
    if (val) {
        document.body.style.overflow = 'hidden';
    } else {
        document.body.style.overflow = '';
    }
});

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});
</script>

<template>
  <nav :class="[
    'fixed top-0 w-full z-50 transition-all duration-500 px-6 md:px-12 flex justify-between items-center',
    isScrolled || isMenuOpen
      ? 'py-4 bg-white/70 backdrop-blur-xl shadow-sm border-b border-gray-200/30 text-secondary' 
      : 'py-6 bg-transparent text-white border-b border-white/20'
  ]">
    <!-- Logo -->
    <div :class="[
      'font-bold text-2xl tracking-wider flex items-center gap-2 group cursor-pointer relative z-[60] transition-all duration-300',
      !isScrolled && !isMenuOpen ? 'drop-shadow-md' : ''
    ]">
      <div :class="[
        'w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300',
        isScrolled || isMenuOpen ? 'bg-primary text-secondary shadow-md' : 'bg-primary/20 backdrop-blur'
      ]">
        <span :class="['font-black transition-colors duration-300', isScrolled || isMenuOpen ? 'text-secondary' : 'text-primary']">G</span>
      </div>
      <span class="group-hover:text-primary transition-colors">GREAT</span>
    </div>

    <ul class="hidden md:flex gap-10 text-sm font-bold tracking-wide">
      <li v-for="item in ['Home', 'Our Business', 'News', 'Sustainability', 'About Us', 'Contact Us']" :key="item" 
          :class="[
            'relative py-2 group cursor-pointer transition-all duration-300 hover:text-primary',
            !isScrolled && !isMenuOpen ? 'drop-shadow-[0_2px_4px_rgba(0,0,0,0.5)]' : ''
          ]">
          {{ item }}
        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
      </li>
    </ul>

    <!-- Hamburger Button (Mobile) -->
    <button @click="toggleMobileMenu" 
            class="md:hidden relative z-[60] w-10 h-10 flex flex-col items-center justify-center gap-1.5 focus:outline-none group">
        <span :class="['w-6 h-0.5 bg-current transition-all duration-300', isMenuOpen ? 'rotate-45 translate-y-2' : '']"></span>
        <span :class="['w-6 h-0.5 bg-current transition-all duration-300', isMenuOpen ? 'opacity-0' : '']"></span>
        <span :class="['w-6 h-0.5 bg-current transition-all duration-300', isMenuOpen ? '-rotate-45 -translate-y-2' : '']"></span>
    </button>

    <!-- Mobile Menu Overlay -->
    <transition name="slide-fade">
      <div v-if="isMenuOpen" 
           class="fixed inset-0 bg-white z-50 md:hidden flex flex-col pt-32 px-10 gap-8 min-h-screen">
          <ul class="flex flex-col gap-8">
              <li v-for="(item, idx) in ['Home', 'Our Business', 'News', 'Sustainability', 'About Us', 'Contact Us']" 
                  :key="item"
                  @click="isMenuOpen = false"
                  class="text-3xl font-bold text-secondary hover:text-primary transition-colors transform"
                  :style="{ transitionDelay: idx * 50 + 'ms' }">
                  {{ item }}
              </li>
          </ul>
          
          <div class="mt-auto pb-20 flex flex-col gap-4">
              <p class="text-sm text-gray-500 font-bold uppercase tracking-widest">Connect with us</p>
              <div class="flex gap-6">
                <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center text-secondary hover:bg-primary hover:text-white transition-all cursor-pointer">In</div>
                <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center text-secondary hover:bg-primary hover:text-white transition-all cursor-pointer">Tw</div>
                <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center text-secondary hover:bg-primary hover:text-white transition-all cursor-pointer">Ig</div>
              </div>
          </div>
      </div>
    </transition>
  </nav>
</template>

<style scoped>
.slide-fade-enter-active {
  transition: all 0.5s cubic-bezier(0.85, 0, 0.15, 1);
}
.slide-fade-leave-active {
  transition: all 0.4s cubic-bezier(0.85, 0, 0.15, 1);
}
.slide-fade-enter-from,
.slide-fade-leave-to {
  transform: translateX(100%);
  opacity: 0;
}
</style>
