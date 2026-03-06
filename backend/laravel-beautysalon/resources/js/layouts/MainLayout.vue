<script setup lang="ts">
import Footer from '@/components/Footer.vue';
import Header from '@/components/Header.vue';

</script>

<template>
  <div>
    <Header />

    <main>
      <slot />
    </main>

    <Footer />
  </div>
</template>