<script setup>
import { RouterLink, RouterView } from "vue-router";
// import HelloWorld from './components/HelloWorld.vue'
</script>

<template>
    <header>
        <!-- <img alt="Vue logo" class="logo" src="@/assets/logo.svg" width="125" height="125" /> -->

        <div class="max-w-7xl mx-auto">
            <!-- <HelloWorld msg="You did it!" /> -->

            <nav class="p-2">
                <RouterLink
                    class="px-4 py-2 mr-4 bg-indigo-600 hover:bg-indigo-800 rounded text-white"
                    to="/"
                    >Home</RouterLink
                >
                <RouterLink
                    to="/skills"
                    class="px-4 py-2 mr-4 bg-indigo-600 hover:bg-indigo-800 rounded text-white"
                    >Skills</RouterLink
                >
            </nav>
        </div>
    </header>

    <!-- <RouterView /> -->
    <main class="max-w-7xl mx-auto min-h-screen">
        <RouterView />
    </main>
</template>
