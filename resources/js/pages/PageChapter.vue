<script setup>
const handleClick = () => {
  console.log('Chapter button clicked!')
}
</script>

<template>
  <div class="flex column lg:row bg-primary text-white">
    <div class="image-container">
      <q-img
        src="https://placeholder.com/800"
        :ratio="1"
        class="full-width"
      />
    </div>
    <div class="content-container q-pa-md flex flex-center">
      <div class="content-inner q-pa-lg">
        <h2 class="text-h3 q-mb-md">Chapter Title</h2>
        <p class="text-body1 q-mb-lg">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <q-btn
          color="secondary"
          label="Read More"
          @click="handleClick"
          size="lg"
          unelevated
        />
      </div>
    </div>
  </div>
</template>

<style scoped>
.image-container,
.content-container {
  flex: 1;
  min-width: 300px;
}

.content-inner {
  max-width: 600px;
}

@media (max-width: 1023px) {
  .image-container {
    max-width: 100%;
  }
}
</style>