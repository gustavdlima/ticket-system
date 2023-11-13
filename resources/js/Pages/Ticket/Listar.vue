<template>
	<h1>Inicio</h1>
	<div v-for="ticket in tickets" :key="ticket.id">
	  <Link :href="`/ticket/${ticket.id}`">
		<ListTicket :ticket="ticket" />
	  </Link>
	  <button @click="ticket.status = 'false'">Close</button>
	</div>
  </template>

  <script setup>
  import { Link } from '@inertiajs/vue3'
  import ListTicket from '@/Pages/Components/ListTicket.vue'
  defineProps({
	tickets: Array,
  })

  </script>
