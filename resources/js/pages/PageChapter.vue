<script setup>
import { ref } from 'vue';
import { useFetchJson } from '@/composables/useFetchJson';
import { useQuasar } from 'quasar';

const { data: chapter, loading: chapterLoading, error: chapterError } = useFetchJson(`stories/1/chapters/1`);
const handleClick = (chapterId) => {
  console.log('Chapter button clicked!', chapterId)
}

const $q = useQuasar();
</script>

<template>
  <div :class="['chapter-container', $q.dark.isActive ? 'bg-dark text-white' : 'bg-grey-2 text-dark']">
  <p v-if="chapterError">{{ chapterError }}</p>
  <p v-else-if="chapterLoading">
    <q-spinner-dots
      class="q-mb-md"
      size="50px"
      color="primary"/>
    {{ chapterLoading }}
  </p>
  <template v-else>
    <div class="image-container">
      <q-img
        src="https://placehold.co/600x400"
        :ratio="1"
      />
    </div>
    <div class="content-container q-pa-md">
      <div class="content-inner q-pa-lg">
        <h2 class="text-h3 q-mb-md">{{ chapter.title }}</h2>
        <p class="text-body1 q-mb-lg">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div class="choices-container">
          <q-btn
            :class="$q.dark.isActive ? 'theme-btn-dark' : 'theme-btn-light'"
            :label="choice.choice_content"
            @click="handleClick(choice.next_chapter_id)"
            size="lg"
            unelevated
            v-for="choice in chapter.choices"
            :key="choice.id"
          />
        </div>
      </div>
    </div>
  </template>
  </div>
</template>

<style scoped>
.chapter-container {
  display: flex;
  flex-direction: row;
  height: calc(100vh - 100px);
}

.image-container {
  flex: 1;
  min-width: 0;
}

.image-container :deep(.q-img) {
  height: 100%;
  object-fit: cover;
}

.content-container {
  flex: 1;
  display: flex;
  align-items: center;
  padding: 2rem;
}

.content-inner {
  width: 100%;
  max-width: 600px;
}

@media (max-width: 1023px) {
  .chapter-container {
    flex-direction: column;
  }
  
  .image-container,
  .content-container {
    flex: none;
    width: 100%;
  }
}

.theme-btn-dark {
  background: #1d1d1d !important;
  color: white !important;
  border: 2px solid #ffffff !important;
}

.theme-btn-light {
  background: #ffffff !important;
  color: #1d1d1d !important;
  border: 2px solid #1d1d1d !important;
}

.theme-btn-dark:hover, .theme-btn-light:hover {
  opacity: 0.9;
}

.choices-container {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  width: 50%;
  margin: 0 auto;
}

.theme-btn-dark, .theme-btn-light {
  text-transform: none !important;
}
</style>