<template>
	<span>
		{{ ticket.setor }} {{ ticket.nome }} {{ ticket.equipamento }}
		{{ ticket.status }}
	</span>
</template>

<script setup>
defineProps({
	ticket: Object,
})
</script>

