<template>
	<div>
		<button href="/ticket + ticket.id">Abrir</button>
	</div>
</template>

<script>
export default {
	setup(props) {
		let ticket = props.params;

		return {
			ticket,
		}
	}
}
</script>
