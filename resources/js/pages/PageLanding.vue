<script setup>
import { ref } from 'vue'
  //may need to add a watcher
import { useFetchJson } from '@/composables/useFetchJson'

const handleClick = () => {
  console.log('Button clicked!');
};
//to call the api
/* const { data: test } = useFetchJson('test') */
</script>

<template>
  <button>Hello</button>
  <button>Bye</button>
  <button @click="handleClick">Click Me</button>
</template>


<style scoped>
  
</style>