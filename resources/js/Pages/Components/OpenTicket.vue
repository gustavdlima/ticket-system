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
				html: `
					<div>
						<p>
							Setor: <b>${ticket.setor}</b> <br>
							Nome: ${ticket.nome} <br>
							Equipamento: ${ticket.equipamento} <br>
							N° Tombamento: ${ticket.n_tombamento} <br>
						</p>
						<p>Defeito: <b>${ticket.defeito}</b></p>
					</div>
				`,
				position: 'center',
			});
		}

		return {
			ticket,
			onCellClickOpenTicket
		}
	}
}
</script>
