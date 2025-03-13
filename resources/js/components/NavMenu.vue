<template>
  <nav class="p-4 relative">
    <div class="flex justify-between ">
      <h1 class="text-xl font-bold"></h1>

      <!-- Menu Toggle Button -->
      <button type="button" @click="toggleMenu">
        <img src="/images/menu.png" alt="Open Menu" class="w-8 h-8">
      </button>

    <!-- Navigation Links -->
    <ul
      :class="isOpen ? 'block' : 'hidden'"
      class="absolute bg-white color-blue"
    >
      <li><a @click="toggleMenu" href="#willkommen" class="block p-2 hover:bg-blue-700 rounded">Willkommen</a></li>
      <li><a @click="toggleMenu" href="#szenario" class="block p-2 hover:bg-blue-700 rounded">Szenario</a></li>
      <li><a @click="toggleMenu" href="#umfrage" class="block p-2 hover:bg-blue-700 rounded">Umfrage</a></li>
    </ul>
    </div>
  </nav>
</template>

<script setup>
import { ref } from "vue";

const isOpen = ref(false);

const toggleMenu = () => {
  isOpen.value = !isOpen.value;
};
</script>

<style scoped>
  ul {
    color: #007ca6;
    background: white;
    right: 0px;
    top: 70px;
    font-size: 1.25rem;
  }
</style>