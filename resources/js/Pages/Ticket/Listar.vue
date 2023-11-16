<template>
	<h2>Chamados Abertos</h2>
	<!-- <div v-for="ticket in tickets" :key="ticket.id">
		{{ ticket.setor }} {{ ticket.nome }} {{ ticket.email }} {{ ticket.equipamento }} {{ ticket.n_tombamento }} {{
			ticket.defeito }}
	</div> -->
	<ag-grid-vue style="width: 800px; height: 720px" class="ag-theme-alpine-dark" :columnDefs="columnDefs"
		:rowData="tickets" :animateRows="true"
		@cell-double-clicked="onRowDataCloseTicket"
		@grid-ready="onGridReady"
		rowSelection="single">
	</ag-grid-vue>
</template>

<script>
import { AgGridVue } from 'ag-grid-vue3'
import { ref } from 'vue'
import "ag-grid-community/styles/ag-grid.css";
import "ag-grid-community/styles/ag-theme-alpine.css";
import CloseTicket from '@/Pages/Components/CloseTicket.vue'
import { router } from '@inertiajs/vue3'

export default {
	name: 'Index',
	components: {
		AgGridVue
	},
	props: {
		tickets: Array,
	},
	methods: {
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

		// const onCellClickOpenTicket = (event) => {
		// 	const ticketId = event.data.id;
		// 	router.get("/ticket/" + ticketId, event.data);
		// }

		const onGridReady = params => {
			gridApi.value = params.api;
			// getRowId = params.data.id;
		};

		return {
			columnDefs: [
				{ field: 'status', sortable: true, filter: true, width: 37 },
				{ field: 'setor', sortable: true, filter: true, width: 150 },
				{ field: 'nome', sortable: true, filter: true, width: 200 },
				{ field: 'defeito', sortable: true, filter: true, width: 300},
				{ field: '', sortable: true, filter: true, cellRenderer: CloseTicket },
			],
			onGridReady,
			CloseTicket,
			// onCellClickOpenTicket,
			onRowDataCloseTicket,
		};
	}
}
</script>
