<script setup>
import { defineProps } from 'vue';

const props = defineProps({
  items: Array
});

// Fail-safe image handler
const handleImageError = (e) => {
    // If an image fails to load, switch to a guaranteed working industrial photo
    e.target.src = 'https://images.unsplash.com/photo-1494412651409-8963ce7935a7?auto=format&fit=crop&w=1200';
    console.warn('Business Image failed to load, using fail-safe.');
};
</script>

<template>
  <section class="py-16 bg-background">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-20">
        <h2 class="text-4xl font-bold text-secondary mb-4 tracking-tight">What Our Group Do</h2>
        <div class="w-16 h-1 bg-primary mx-auto rounded-full"></div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <div v-for="(item, index) in items" :key="index" 
             class="group rounded-3xl overflow-hidden bg-white shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100 flex flex-col h-full">
          <!-- Image Container with Fail-safe -->
          <div class="h-64 overflow-hidden relative bg-gray-200">
            <img :src="item.image" 
                 :alt="item.title" 
                 @error="handleImageError"
                 class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" />
            
            <div class="absolute inset-0 bg-gradient-to-t from-secondary/90 via-secondary/20 to-transparent flex items-end p-8">
               <h3 class="text-2xl font-bold text-white drop-shadow-md">{{ item.title }}</h3>
            </div>
          </div>
          
          <div class="p-8 flex flex-col flex-grow">
            <p class="text-gray-600 mb-8 leading-relaxed text-lg flex-grow">{{ item.description }}</p>
            
            <a href="#" class="text-primary font-bold flex items-center group-hover:underline transition-all gap-2 text-base">
              Discover More 
              <svg class="w-5 h-5 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
