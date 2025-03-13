<template>
    <div class="">
        <div class="flex justify-between my-5 mt-0" 
           >
            <div 
                class="">
                <img src="/images/logo.png" class="w-96" />
            </div>
            <div class="container">
                <nav-menu></nav-menu>
            </div>
        </div>
        <div>
          <img src="/images/header-hulst.jpg" class="w-screen"/>
        </div>
        
    </div>
</template>
<!-- <style scoped>
@keyframes arrow-pulse {
  0% {
    opacity: 1;
  }

  50% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

@keyframes pulse { 
to {
    opacity: 1;
  }
}

@keyframes move {
  25% {
    opacity: 1;
 
  }
  33% {
    opacity: 1;
    transform: translateY(26px);
  }
  67% {
    opacity: 1;
    transform: translateY(32px);
  }
  100% {
    opacity: 0;
    transform: translateY(44px) scale3d(0.5, 0.5, 0.5);
  }
}

.chevron {
  position: absolute;
  top: -16px;
  width: 20px;
  height: 4px;
  opacity: 0;
  transform: scale3d(0.5, 0.5, 0.5);
  animation: move 3s ease-out infinite;
}

.chevron:before,
.chevron:after {
  @apply bg-mine-shaft;
  content: ' ';
  position: absolute;
  top: 0;
  height: 100%;
  width: 51%;
}
 
.chevron:before {
  left: 0;
  transform: skew(0deg, 30deg);
}
 
.chevron:after {
  right: 0;
  width: 50%;
  transform: skew(0deg, -30deg);
}

.chevron:first-child {
  animation: move 3s ease-out 1s infinite;
}
 
.chevron:nth-child(2) {
  animation: move 3s ease-out 2s infinite;
}

.arrow-container {
  @apply z-10;
  font-size: 16px;
  position: absolute;
  bottom: 100px;
  left: 50%;
  transform: translateX(-50%);
  @media (min-width: 1024px) {
    bottom: 40px;
  }
}
.arrow-pulse {
  position: relative;
}

@media (min-width: 1024px) {
  .bg-container {
    background-position-x: 0;
  }

  .sr-logo-1 {
    font-size: 4.8rem; 
    line-height: 0.9;
  }

  .sr-logo-2 {
    font-size: 2.1rem;
  }
}

</style> -->