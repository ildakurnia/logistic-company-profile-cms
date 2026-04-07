<script setup>
import { onMounted, ref } from 'vue';

const isVisible = ref(false);

onMounted(() => {
  const observer = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting) {
      isVisible.value = true;
    }
  }, { threshold: 0.1 });

  const el = document.querySelector('#welcome-section');
  if (el) observer.observe(el);
});
</script>

<template>
  <section id="welcome-section" class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-6">
      <div class="text-center transition-all duration-1000 transform"
           :class="isVisible ? 'translate-y-0 opacity-100' : 'translate-y-8 opacity-0'">
        
        <!-- Minimalist Headline -->
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-secondary mb-6 tracking-tight">
          Welcome To <span class="text-primary">Great Group Indonesia</span>
        </h2>

        <!-- Standard Sub-headline -->
        <p class="text-lg md:text-xl text-secondary/80 font-medium mb-8 max-w-3xl mx-auto leading-relaxed">
          where we harmonize industry-leading practices with environmental and social responsibility.
        </p>

        <!-- Clean Mission Statements (Italics Only) -->
        <div class="space-y-6 max-w-3xl mx-auto">
          <p class="text-gray-600 text-base md:text-lg italic leading-relaxed">
            "As a key player in the palm oil and derivatives, agricultural, and logistic sectors we are committed to delivering value through innovative products, sustainable solutions, and unparalleled customer service."
          </p>

          <p class="text-gray-600 text-base md:text-lg italic leading-relaxed">
            "We embrace innovation, sustainability, and customer satisfaction as the pillars of our success."
          </p>
        </div>

        <!-- Minimalist Divider -->
        <div class="mt-8 w-16 h-1 bg-primary/20 mx-auto rounded-full"></div>
      </div>
    </div>
  </section>
</template>

<style scoped>
/* Keeping it simple and clean */
</style>
