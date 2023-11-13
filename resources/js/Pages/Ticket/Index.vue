<template>
  <Layout>
    <Head title="Welcome" />
    <h1>Welcome {{ tickets }} </h1>
  </Layout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'

defineProps({
  tickets: Array
})

</script>

