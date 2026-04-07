<script setup>
import { ref } from 'vue';
import PrimaryButton from './UI/PrimaryButton.vue';

const form = ref({
    name: '',
    email: '',
    subject: '',
    message: ''
});

const isSubmitting = ref(false);

const sendMessage = () => {
    isSubmitting.value = true;
    // Simulate API call
    setTimeout(() => {
        alert('Thank you! Your message has been sent successfully.');
        form.value = { name: '', email: '', subject: '', message: '' };
        isSubmitting.value = false;
    }, 1500);
};
</script>

<template>
  <section id="contact-us" class="py-24 bg-surface relative overflow-hidden">
    <!-- Background Accents -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-primary/5 rounded-full blur-3xl translate-x-1/2 -translate-y-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
        
        <!-- Left: Contact Details -->
        <div class="space-y-12">
          <div>
            <span class="inline-block px-4 py-1.5 rounded-full bg-primary/10 text-primary text-sm font-bold tracking-widest uppercase mb-6">
              Connect With Us
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-6 leading-tight">
              Let's Discuss Your <br />
              <span class="text-primary">Logistic Solutions.</span>
            </h2>
            <p class="text-gray-600 text-lg max-w-md leading-relaxed">
              Our team is ready to answer any questions and provide the support you need for your global trade requirements.
            </p>
          </div>

          <!-- Offices Stack -->
          <div class="space-y-8">
            <!-- Marketing Office -->
            <div class="flex gap-6 group">
              <div class="shrink-0 w-14 h-14 rounded-2xl bg-white shadow-sm border border-gray-100 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all duration-300">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
              </div>
              <div>
                <h4 class="text-lg font-bold text-secondary mb-2">Marketing Office & Regional HQ</h4>
                <p class="text-gray-500 leading-relaxed text-sm">
                  Graha Pena Building, 8th Floor, Suite 805-1AD,<br />
                  Jl. Raya Batam Center, Batam 29444, Indonesia
                </p>
              </div>
            </div>

            <!-- Warehouse -->
            <div class="flex gap-6 group">
              <div class="shrink-0 w-14 h-14 rounded-2xl bg-white shadow-sm border border-gray-100 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all duration-300">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
              </div>
              <div>
                <h4 class="text-lg font-bold text-secondary mb-2">Main Warehouse Facility</h4>
                <p class="text-gray-500 leading-relaxed text-sm">
                  Komplek Ruko Permata Niaga, Blok C No.2,<br />
                  Tanjung Piayu, Batam 29437, Indonesia
                </p>
              </div>
            </div>

            <!-- Direct Contact -->
            <div class="flex flex-wrap gap-8 pt-4">
              <a href="tel:+62778460090" class="flex items-center gap-3 text-secondary hover:text-primary font-bold transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                (62) 778 460090
              </a>
              <a href="mailto:info@greatgroup.id" class="flex items-center gap-3 text-secondary hover:text-primary font-bold transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                info@greatgroup.id
              </a>
            </div>
          </div>
        </div>

        <!-- Right: Contact Form Card -->
        <div class="bg-white rounded-[2.5rem] shadow-2xl p-8 md:p-12 border border-gray-100">
           <form @submit.prevent="sendMessage" class="space-y-6">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                  <label class="text-xs font-bold uppercase tracking-widest text-gray-500 ml-1">Full Name</label>
                  <input v-model="form.name" type="text" placeholder="John Doe" required
                         class="w-full px-6 py-4 rounded-2xl bg-gray-50 border-none focus:ring-2 focus:ring-primary/20 transition-all placeholder:text-gray-300" />
                </div>
                <div class="space-y-2">
                  <label class="text-xs font-bold uppercase tracking-widest text-gray-500 ml-1">Email Address</label>
                  <input v-model="form.email" type="email" placeholder="john@example.com" required
                         class="w-full px-6 py-4 rounded-2xl bg-gray-50 border-none focus:ring-2 focus:ring-primary/20 transition-all placeholder:text-gray-300" />
                </div>
              </div>

              <div class="space-y-2">
                  <label class="text-xs font-bold uppercase tracking-widest text-gray-500 ml-1">Subject</label>
                  <input v-model="form.subject" type="text" placeholder="How can we help?" required
                         class="w-full px-6 py-4 rounded-2xl bg-gray-50 border-none focus:ring-2 focus:ring-primary/20 transition-all placeholder:text-gray-300" />
              </div>

              <div class="space-y-2">
                  <label class="text-xs font-bold uppercase tracking-widest text-gray-500 ml-1">Message</label>
                  <textarea v-model="form.message" rows="4" placeholder="Tell us about your project..." required
                         class="w-full px-6 py-4 rounded-2xl bg-gray-50 border-none focus:ring-2 focus:ring-primary/20 transition-all placeholder:text-gray-300 resize-none"></textarea>
              </div>

              <PrimaryButton :disabled="isSubmitting" class="w-full justify-center py-5 shadow-lg shadow-primary/20">
                <span v-if="!isSubmitting">Send Message</span>
                <span v-else class="flex items-center gap-2">
                    <svg class="animate-spin h-5 w-5 text-white" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                    Sending...
                </span>
              </PrimaryButton>
           </form>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
input:focus, textarea:focus {
    outline: none;
    background-color: white;
    box-shadow: 0 0 0 4px rgba(139, 195, 74, 0.1);
}
</style>
