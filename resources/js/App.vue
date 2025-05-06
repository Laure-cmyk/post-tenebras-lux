<script setup>
  import { ref } from 'vue';
  import PageLanding from './pages/PageLanding.vue';
  import TheFooter from '@/components/TheFooter.vue';
  import { currentPage } from '../stores/routes';
</script>

<template>
  <div class="app-container">
    <main>
      <component :is="currentPage" />
     <!--  <PageLanding /> -->
    </main>
    <TheFooter />
  </div>
</template>

<style scoped>
.app-container {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

main {
  flex-grow: 1;
  display: flex;
  flex-direction: column;
}
</style>