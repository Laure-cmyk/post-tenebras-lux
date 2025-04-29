<script setup>

</script>

<template>
  <div class="page-container">
    <div class="image-section">
      <img src="your-image-path.jpg" alt="Chapter image" class="chapter-image">
    </div>
    <div class="content-section">
      <h1 class="title">Your Title Here</h1>
      <p class="description">
        Your text content goes here. This can be a longer description or any other content you want to display.
      </p>
      <div class="button-group">
        <button class="btn primary">Primary Button</button>
        <button class="btn secondary">Secondary Button</button>
      </div>
    </div>
  </div>
</template>

<style scoped>
.page-container {
  display: flex;
  min-height: 100vh;
  padding: 2rem;
  gap: 2rem;
}

.image-section {
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: center;
}

.chapter-image {
  max-width: 100%;
  height: auto;
  object-fit: cover;
}

.content-section {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 1.5rem;
}

.title {
  font-size: 2rem;
  font-weight: bold;
  margin: 0;
}

.description {
  font-size: 1.1rem;
  line-height: 1.6;
}

.button-group {
  display: flex;
  gap: 1rem;
}

.btn {
  padding: 0.75rem 1.5rem;
  border-radius: 0.375rem;
  cursor: pointer;
  font-weight: 500;
  border: none;
}

.btn.primary {
  background-color: #4a5568;
  color: white;
}

.btn.secondary {
  background-color: #e2e8f0;
  color: #2d3748;
}

.btn:hover {
  opacity: 0.9;
}
</style>