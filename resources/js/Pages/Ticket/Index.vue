<template>
  <h1>Index</h1>
      <div v-for="ticket in tickets" :key="ticket.id">
        {{ ticket.setor }}
      </div>
</template>

<script setup>
defineProps({
  tickets: Array,
})

</script>
