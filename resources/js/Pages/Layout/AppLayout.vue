<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <AppNavbar/>
        <!-- Sidebar -->
        <AppSidebar/>

        <main class="md:ml-64 min-h-dvh h-auto pt-20">
           <slot/>
        </main>
    </div>
</template>

<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import AppNavbar from '../Components/AppNavbar.vue';
import AppSidebar from '../Components/AppSidebar.vue';

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})
</script>