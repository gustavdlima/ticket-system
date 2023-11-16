<template>
	<div>
		<button v-on:click="onCellClickOpenTicket" >Abrir</button>
	</div>
</template>

<script>
import { router } from '@inertiajs/vue3'
import { onMounted, inject } from 'vue';

export default {
	setup(props) {
		let ticket = props.params.data;
		const swal = inject('$swal');

		async function onCellClickOpenTicket() {
			console.log(ticket);
			const ticketId = ticket.id;
			swal.fire(ticket.nome, ticket.defeito + ' - ' + ticket.id);
		}
		// const onCellClickOpenTicket = (event) => {
		// 	const ticketId = ticket.id;
		// 	router.get("/ticket/" + ticketId, event.data);
		// }

		return {
			ticket,
			onCellClickOpenTicket
		}
	}
}
</script>
