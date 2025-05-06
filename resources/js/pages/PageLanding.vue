<script setup>
import { ref } from "vue";
import { useFetchJson } from "@/composables/useFetchJson";
import { anchor } from "../../stores/routes";

const handleClick = () => {
    anchor.value = 'story';
    window.location.hash = 'story';
};

const { data: stories, loading: storyLoading, error: storyError } = useFetchJson("stories");
</script>

<template>
    <div class="flex flex-center column q-pa-md full-height">
        <p v-if="storyError">{{ storyError }}</p>
        <p v-else-if="storyLoading">
            <q-spinner-dots
                class="q-mb-md"
                size="50px"
                color="primary"
            />{{ storyLoading }}
        </p>
        <template v-else>        
            <h1 class="landing-title text-h2 text-weight-bold q-mb-md text-center q-mx-md">
                {{ stories[0].title }}
            </h1>
            <h2 class="landing-subtitle text-h5 q-mb-lg text-center q-mx-md">
                {{ stories[0].summary }}
            </h2>
            <q-btn label="Get Started" @click="handleClick" size="lg" unelevated />
        </template>
    </div>
</template>

<style scoped>
@media screen and (max-width: 599px) {
    .landing-title {
        font-size: 3rem !important;
        line-height: 3rem !important;
        text-align: center !important;
    }
    .landing-subtitle {
        font-size: 1rem !important;
        line-height: 1.5rem !important;
    }
}


h2 {
    max-width: 50%;
}
</style>
