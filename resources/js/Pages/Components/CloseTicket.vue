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
			swal.fire({
				title: "Chamado #" + ticketId,
				icon: "warning",
				showCancelButton: true,
				confirmButtonColor: "#3085d6",
				cancelButtonColor: "#d33",
				confirmButtonText: "Sim",
				cancelButtonText: "Cancelar",
			});
		}

		return {
			ticket,
			onCellClickOpenTicket
		}
	}
}
</script>
