<script setup>
defineProps({
  type: {
    type: String,
    default: 'button'
  },
  href: {
    type: String,
    default: null
  }
})
</script>

<template>
  <component 
    :is="href ? 'a' : 'button'" 
    :type="!href ? type : null"
    :href="href"
    class="inline-flex items-center justify-center px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-full transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl hover:bg-white hover:text-secondary active:scale-95 cursor-pointer backdrop-blur-sm tracking-wide"
  >
    <slot />
  </component>
</template>
