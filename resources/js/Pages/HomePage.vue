<script setup>
import { ref } from 'vue';

// Section Components
import Navbar from '../Components/Navbar.vue';
import HeroSection from '../Components/HeroSection.vue';
import WelcomeSection from '../Components/WelcomeSection.vue';
import BusinessSection from '../Components/BusinessSection.vue';
import FeatureSection from '../Components/FeatureSection.vue';
import PartnerSection from '../Components/PartnerSection.vue';
import SustainabilitySection from '../Components/SustainabilitySection.vue';
import AboutSection from '../Components/AboutSection.vue';
import ContactSection from '../Components/ContactSection.vue';
import FooterSection from '../Components/FooterSection.vue';

// Using ONLY PROVEN IDs from the user's last screenshot to ensure 100% visibility
const businessItems = ref([
  {
    title: 'Palm Oil Derivatives',
    description: 'State-of-the-art refineries producing high-quality derivatives for global food, cosmetic, and energy industries.',
    image: 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=1200'
  },
  {
    title: 'Agricultural Innovation',
    description: 'Leveraging precision agriculture and automated harvesting technologies to ensure sustainable and high-yield production.',
    image: 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?auto=format&fit=crop&w=1200'
  },
  {
    title: 'Global Logistics Solutions',
    description: 'Integrated logistics network featuring advanced container tracking and efficient maritime transport for global trade.',
    image: 'https://images.unsplash.com/photo-1494412651409-8963ce7935a7?auto=format&fit=crop&w=1200'
  }
]);

const featuresData = ref([
  { title: 'Eco Friendly', desc: 'Minimizing our carbon footprint by implementing eco-friendly processing technologies.' },
  { title: 'Fair Trade', desc: 'At Great Group Indonesia, we commit that fair trade is essential to sustainable growth.' },
  { title: 'Direct Sourcing', desc: 'Our products come directly from local farmers who share our commitment to sustainability.' },
  { title: 'Ethical Harvesting', desc: 'Our ethical harvesting methods ensure that our products are truly high quality.' }
]);

const partnerData = ref([
  { alt: 'Great Port', src: 'https://images.unsplash.com/photo-1494412651409-8963ce7935a7?auto=format&fit=crop&w=800' },
  { alt: 'Industry Lab', src: 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=800' },
  { alt: 'Maritime Hub', src: 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=800' },
  { alt: 'Agri Research', src: 'https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=800' }
]);
</script>

<template>
  <div class="min-h-screen bg-white selection:bg-primary selection:text-secondary font-sans overflow-x-hidden">
    
    <!-- App Navigation -->
    <Navbar />

    <!-- Landing Content -->
    <main>
      <HeroSection />
      
      <!-- Content Sections with consistent padding -->
      <div class="space-y-0">
          <WelcomeSection />
          <BusinessSection :items="businessItems" />
          <FeatureSection :features="featuresData" />
          <PartnerSection :partners="partnerData" />
          <SustainabilitySection />
          <AboutSection />
          
          <!-- Contact Us Section -->
          <ContactSection />
      </div>
    </main>

    <!-- App Footer -->
    <FooterSection />

  </div>
</template>

<style>
/* Global Smooth Scroll */
html {
  scroll-behavior: smooth;
}
</style>
