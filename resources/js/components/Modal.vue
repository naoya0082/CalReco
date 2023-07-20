<template>
    <div class="modal">
      <h2>Modal Window</h2>
      <p>This is a modal window.</p>
      <button @click="$emit('close')">Close</button>
    </div>
  </template>
  
  <script>
  export default {
    name: 'Modal'
  }
  </script>
  
  <style scoped>
  .modal {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    z-index: 999;
  }
  </style>
  