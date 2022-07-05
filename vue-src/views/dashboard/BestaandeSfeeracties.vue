<template>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<table class="table">
  				<thead>
    				<tr>
      					<th scope="col">ID</th>
      					<th scope="col">Titel</th>
      					<th scope="col">Datum</th>
      					<th scope="col">Acties</th>
    				</tr>
  				</thead>
  				<tbody v-for="event in eventData">
    				<tr>
      					<th scope="row">{{event.id}}</th>
      					<td>{{event.title}}</td>
      					<td>{{event.created_at}}</td>
      					<td>{{event.updated_at}}</td>
      					<td>
      						<button @click="edit(event.id)">Aanpassen</button>
      						<button @click="destroy(event.id)">Verwijderen</button>	
      					</td>
    				</tr>
  				</tbody>
				</table>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	name: "BestaandeSfeeracties",
	data() {
		return {
			eventData: {},
		};
	},
	async created() {
		this.eventData = (await this.axios.get('/v1/dashboard/sfeeracties')).data.message
        console.log(this.eventData);
	},
	methods: {
		edit(id) {
             this.$router.push(`/dashboard/nieuw-bericht/${id}`);
        },
        async destroy(id) {
        	await this.axios.delete(`/v1/dashboard/nieuw-bericht/${id}`);
        	this.$router.go(0);
        }
	}

}
</script>
