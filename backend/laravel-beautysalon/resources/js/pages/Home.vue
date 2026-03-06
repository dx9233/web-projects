<script setup>
import Hero from "@/components/Hero.vue";
import ExperienceSection from "@/components/ExperienceSection.vue";
import Services from "@/components/Services.vue";
import Testimonials from "@/components/Testimonials.vue";
import Subscribe from "@/components/Subscribe.vue";
import HeroServices from "@/components/HeroServices.vue";

import MainLayout from '@/Layouts/MainLayout.vue'

defineOptions({
  layout: MainLayout
})
</script>

<template>
  <main>
    <Hero />
    <HeroServices />
    <ExperienceSection />
    <Services />
    <Testimonials />
    <Subscribe />
  </main>
</template>
