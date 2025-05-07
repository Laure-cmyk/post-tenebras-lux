<script setup>
import { onMounted } from "vue";
import { useQuasar } from "quasar";
import { useJsonStorage } from "@/composables/useJsonStorage";
import { useFetchJson } from "@/composables/useFetchJson";

const { data: stories, loading: storyLoading, error: storyError } = useFetchJson("stories");

const $q = useQuasar();
const { data: isDark } = useJsonStorage("isDark", null);

function toggleDarkMode() {
    isDark.value = !isDark.value;
    $q.dark.set(isDark.value);
}
onMounted(() => {
    if (isDark.value === null) {
        isDark.value = window.matchMedia(
            "(prefers-color-scheme: dark)"
        ).matches;
    }
    $q.dark.set(isDark.value);
});
</script>

<template>
    <footer>
        <q-btn
            flat
            :icon="isDark ? 'dark_mode' : 'light_mode'"
            aria-label="Toggle Dark Mode"
            @click="toggleDarkMode"
        />
        <p v-if="storyError">Error loading author information</p>
        <p v-else-if="storyLoading">{{ storyLoading }}</p>
        <p v-else>Written, photoshoped and coded by {{ stories[0].author_name}}</p>
        <p>This game was made for a course at the HEIG-VD</p>
    </footer>
</template>

<style scoped></style>
