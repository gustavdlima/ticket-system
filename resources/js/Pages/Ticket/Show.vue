<template>
	<div>
		<h1>Chamado</h1>
		<ListTicket :ticket="tickets" />
	</div>
</template>

<script setup>
import ListTicket from '@/Pages/Components/ListTicket.vue'

defineProps({
	tickets: Object,
})
</script>

