<template>
    <div class="">
        <div class="flex justify-between">
            <div 
                class="">
                <img src="/images/enquete-hulst-2.png" class="m-10 lg:w-96 w-64" />
            </div>
            <!-- Menu Toggle Button -->
            <button type="button" class="lg:hidden z-50 mr-6" @click="toggleMenu">
                <img src="/images/menu-2.png" alt="Open Menu" class="w-12">
            </button>
        </div>
        <div class="container self-center">
            <nav class="flex justify-end ">
                <div class="">
                <!-- Navigation Links -->
                <ul
                class="hidden lg:flex absolute bg-white font-bold lg-menu"
                >
                <li><a @click="toggleMenu" href="#willkommen">Waar gaat het over?</a></li>
                <li><a @click="toggleMenu" href="#szenario">Scenario</a></li>
                <li><a @click="toggleMenu" href="#umfrage">6 vragen</a></li>
                </ul>

                <ul
                v-show="isOpen"
                class="lg:hidden absolute bg-white font-bold z-50 mt-8 sm-menu"
                >
                <a @click="toggleMenu" href="#willkommen"><li>Waar gaat het over?</li></a>
                <a @click="toggleMenu" href="#szenario"><li>Scenario</li></a>
                <a @click="toggleMenu" href="#umfrage"><li>6 vragen</li></a>
                </ul>
                </div>
            </nav>
        </div>
        <div class="relative">
          <img src="/images/header-hulst-new.jpg" class="h-60 lg:h-auto object-cover w-screen sm:w-full "/>
          <img src="/images/bubble-new-2.png" class="bubble absolute w-1/2 xl:w-1/3"/>
        </div>
        
    </div>
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
    color: var(--main-color);
    background: white;
    right: 0px;
    top: 70px;
    font-size: 1.5rem;
    padding-bottom: 10px;
    font-variant: small-caps;
  }

  .lg-menu li {
    padding-right: 5.25rem;

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
.bubble {
  right: 20%;
  bottom: -12%;
}
</style>