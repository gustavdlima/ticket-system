<template>
	<div>
		<button @click="alertClick">Fechar Chamado</button>


	</div>
</template>

<script>
export default {
	setup(props) {
		let ticket = props.params;
		function alertClick() {
			let status = false;
			ticket.data.status = status;
			console.log(ticket.data.status);
		}
		return {
			ticket,
			alertClick
		}
	}
}
</script>
