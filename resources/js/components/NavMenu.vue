<template>
  <nav class="flex justify-end ">
    <div class="">

    <!-- Menu Toggle Button -->
    <button type="button" class="lg:hidden z-50 mr-6" @click="toggleMenu">
      <img src="/images/menu.png" alt="Open Menu" class="w-10 h-10">
    </button>

    <!-- Navigation Links -->
    <ul
      class="hidden lg:flex absolute bg-white font-bold lg-menu"
    >
      <li><a @click="toggleMenu" href="#willkommen">Worum es Geht</a></li>
      <li><a @click="toggleMenu" href="#szenario">Szenario</a></li>
      <li><a @click="toggleMenu" href="#umfrage">6 Fragen</a></li>
    </ul>

    <ul
      v-show="isOpen"
      class="lg:hidden absolute bg-white font-bold z-50 mt-5 sm-menu"
    >
      <a @click="toggleMenu" href="#willkommen"><li>Worum es Geht</li></a>
      <a @click="toggleMenu" href="#szenario"><li>Szenario</li></a>
      <a @click="toggleMenu" href="#umfrage"><li>6 Fragen</li></a>
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
    font-size: 1.5rem;
    padding-bottom: 10px;
    font-variant: small-caps;
  }

  .lg-menu li {
    padding-right: 5.5rem;

  }

  .lg-menu a:hover {
    text-decoration-line: underline;
    color:#185e76;
  }

  .sm-menu li:hover {
    background-color:#a1d9ec;
  }

  .sm-menu a li {
    padding: 10px;
  }
</style>