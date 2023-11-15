<template>
	<h2>Chamados Abertos</h2>
	<!-- <div v-for="ticket in tickets" :key="ticket.id">
		{{ ticket.setor }} {{ ticket.nome }} {{ ticket.email }} {{ ticket.equipamento }} {{ ticket.n_tombamento }} {{
			ticket.defeito }}
	</div> -->
	<ag-grid-vue style="width: 800px; height: 720px" class="ag-theme-alpine-dark" :columnDefs="columnDefs"
		:rowData="tickets" :animateRows="true" @cell-clicked="onRowDataCloseTicket" @grid-ready="onGridReady"
		rowSelection="single">
	</ag-grid-vue>
</template>

<script>
import { AgGridVue } from 'ag-grid-vue3'
import { ref } from 'vue'
import "ag-grid-community/styles/ag-grid.css";
import "ag-grid-community/styles/ag-theme-alpine.css";
import CloseTicket from '@/Pages/Components/CloseTicket.vue'

export default {
	name: 'Index',
	components: {
		AgGridVue
	},
	props: {
		tickets: Array,
	},
	methods: {
		async changeTicketStatus(event) {
			// console.log(event.data);
			let status = event.data.status;
			console.log(status);
			status = false;
			console.log(status);
		}
	},
	setup() {
		const gridApi = ref(null);
		const rowData = ref(null);
		// const getRowId = ref(null);
		// const rowSelection = ref(null);

		const onRowDataCloseTicket = (event) => {
			const rowNode = gridApi.value.getRowNode(event.rowIndex);
			const ticket = event.data;
			ticket.status = true;
			rowNode.setData(ticket);
		}

		const onGridReady = params => {
			gridApi.value = params.api;
			// getRowId = params.data.id;
		};




		return {
			columnDefs: [
				{ field: 'status', sortable: true, filter: true, width: 100 },
				{ field: 'setor', sortable: true, filter: true },
				{ field: 'nome', sortable: true, filter: true },
				{ field: 'defeito', sortable: true, filter: true},
				{ field: '', sortable: true, filter: true, cellRenderer: CloseTicket },
			],
			onGridReady,
			CloseTicket,
			onRowDataCloseTicket
		};
	}
}
</script>
