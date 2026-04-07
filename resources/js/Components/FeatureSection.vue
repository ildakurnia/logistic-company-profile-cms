<script setup>
import { defineProps } from 'vue';

const props = defineProps({
  features: Array
});
</script>

<template>
  <section class="py-20 bg-surface">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-3xl font-bold text-secondary mb-3">Why Great Group Indonesia</h2>
        <div class="w-20 h-1 bg-primary mx-auto rounded"></div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div v-for="(feat, index) in features" :key="index" 
             class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow flex items-start gap-6 border-l-4 border-transparent hover:border-primary">
          <div class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary">
            <!-- Simulating Icon -->
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
          </div>
          <div>
            <h3 class="text-xl font-bold text-secondary mb-3">{{ feat.title }}</h3>
            <p class="text-gray-600">{{ feat.desc }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
