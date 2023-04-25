<script setup>
import { ref, useAttrs } from 'vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import NavBar from "@/Components/NavBar.vue";
const showingNavigationDropdown = ref(false);

</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <NavBar></NavBar>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
