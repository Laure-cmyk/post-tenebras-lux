<script setup>
import { ref } from "vue";
//may need to add a watcher
import { useFetchJson } from "@/composables/useFetchJson";

const handleClick = () => {
    console.log("Button clicked!");
};

const { data: story } = useFetchJson("story");
</script>

<template>
    <div class="flex flex-center column q-pa-md full-height">
        <h1 class="text-h2 text-weight-bold q-mb-md text-center" style="max-width: 20%"> 
            {{ story.title }}
        </h1>
        <h2 class="text-h4 q-mb-lg text-center" style="max-width: 50%">{{ story.summary }}</h2>
        <q-btn label="Get Started" @click="handleClick" size="lg" unelevated />
    </div>
</template>

<style scoped>

</style>
