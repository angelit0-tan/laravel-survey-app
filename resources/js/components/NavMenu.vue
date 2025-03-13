<template>
  <nav class="">
    <div class="flex justify-between ">
      <h1 class="text-xl font-bold"></h1>

      <!-- Menu Toggle Button -->
      <!-- <button type="button" @click="toggleMenu">
        <img src="/images/menu.png" alt="Open Menu" class="w-8 h-8">
      </button> -->

    <!-- Navigation Links -->
    <ul
      class="flex absolute bg-white font-bold"
    >
      <li><a @click="toggleMenu" href="#willkommen">Worum Es Geht</a></li>
      <li><a @click="toggleMenu" href="#szenario">Szenario</a></li>
      <li><a @click="toggleMenu" href="#umfrage">6 Fragen</a></li>
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
    font-family: 'Saria', sans-serif;
    color: #007ca6;
    background: white;
    right: 0px;
    top: 70px;
    font-size: 1.6rem;
    padding-bottom: 10px;
    font-variant: small-caps;
  }

  li {
    padding-right: 5.5rem;

  }

  a:hover {
    text-decoration-line: underline;
    color:#185e76;
  }
</style>