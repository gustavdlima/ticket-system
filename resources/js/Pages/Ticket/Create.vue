<template>
	<h2>Formulario de Chamado</h2>
	<form @submit.prevent="create">

		<label>Setor:</label><br>
		<select v-model="form.setor">
			<option disabled value="">Escolha o seu setor</option>"
			<option value="AEE">AEE</option>
			<option value="AJU">AJU</option>
			<option value="ALMOXARIFADO">ALMOXARIFADO</option>
			<option value="ASCOM">ASCOM</option>
			<option value="CAD">CAD</option>
			<option value="CAP">CAP</option>
			<option value="CAS">CAS</option>
			<option value="CIL">CIL</option>
			<option value="CODAFI">CODAFI</option>
			<option value="CODAM">CODAM</option>
			<option value="CODAPA">CODAPA</option>
			<option value="CODAVI">CODAVI</option>
			<option value="CODEI">CODEI</option>
			<option value="COMAP">COMAP</option>
			<option value="CORAD">CORAD</option>
			<option value="CORDI">CORDI</option>
			<option value="CORFIN">CORFIN</option>
			<option value="CREM">CREM</option>
			<option value="CRH">CRH</option>
			<option value="DE">DE</option>
			<option value="DT">DT</option>
			<option value="EAP">EAP</option>
			<option value="GABINETE">GABINETE</option>
			<option value="NAAS">NAAS</option>
			<option value="NED">NED</option>
			<option value="NVA">NVA</option>
			<option value="PASSE-LIVRE">PASSE-LIVRE</option>
			<option value="PATRIMONIO">PATRIMÔNIO</option>
			<option value="PROTOCOLO">PROTOCOLO</option>
			<option value="REFEITORIO">REFEITÓRIO</option>
			<option value="SUS">SUS</option>
			<option value="USPLAN">USPLAN</option>
		</select><br>

		<label>Nome:</label><br>
		<input type="text" v-model="form.nome"><br>

		<label>E-mail:</label><br>
		<input type="email" v-model="form.email"><br>

		<label>Equipamento:</label><br>
		<input type="text" v-model="form.equipamento"><br>

		<label>Nº Tombamento:</label><br>
		<input type="text" v-model="form.n_tombamento"><br>

		<label>Defeito:</label><br>
		<input type="text" v-model="form.defeito"><br>

		<button type="submit">Enviar</button>
	</form>
</template>

<style scoped>
label {
	margin-right: 2em;
}

div {
	padding: 2px;
}
</style>

<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
	setor: null,
	nome: null,
	email: null,
	equipamento: null,
	n_tombamento: null,
	defeito: null,
});

const create = () => form.post('/ticket', form);

</script>
