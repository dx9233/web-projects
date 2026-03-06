<script setup lang="ts">
import Footer from '@/components/Footer.vue';
import Header from '@/components/Header.vue';
// import AppLayout from '@/layouts/app/AppSidebarLayout.vue';
// import type { BreadcrumbItem } from '@/types';

/* type Props = {
    breadcrumbs?: BreadcrumbItem[];
};

withDefaults(defineProps<Props>(), {
    breadcrumbs: () => [],
}); */
</script>

<template>
    <Header />
        <slot />
    <Footer />
</template>
