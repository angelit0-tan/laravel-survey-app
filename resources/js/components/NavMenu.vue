<template>
  <nav class="p-4 text-white">
    <!-- <div class="flex justify-between items-center"> -->
      <!-- <h1 class="text-xl font-bold">Menu</h1> -->

      <!-- Menu Toggle Button -->
      <!-- <button type="button" @click="toggleMenu" class="">
        <img src="/images/menu.png" alt="Open Menu" class="w-8 h-8">
      </button>
    </div> -->

    <!-- Navigation Links -->
    <!-- <ul
      :class="isOpen ? 'block' : 'hidden'"
      class="mt-2 space-y-2 md:flex md:space-x-4 md:mt-0 md:block"
    >
      <li><a href="#willkommen" class="block p-2 hover:bg-blue-700 rounded">Willkommen</a></li>
      <li><a href="#szenario" class="block p-2 hover:bg-blue-700 rounded">Szenario</a></li>
      <li><a href="#umfrage" class="block p-2 hover:bg-blue-700 rounded">Umfrage</a></li>
    </ul> -->
  </nav>
</template>

<script setup>
import { ref } from "vue";

const isOpen = ref(false);

const toggleMenu = () => {
  isOpen.value = !isOpen.value;
};
</script>
