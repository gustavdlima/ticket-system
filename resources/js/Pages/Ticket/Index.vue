<template>
  <h1>Inicio</h1>
  <Link :href="'/ticket/create'">Criar ticket</Link><br>
  <Link :href="'/ticket/listar'">Listar ticket</Link><br>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import ListTicket from '@/Pages/Components/ListTicket.vue'

defineProps({
  tickets: Array,
})

</script>
