<template>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Voornaam</th>
      <th scope="col">Achternaam</th>
      <th scope="col">Email</th>
      <th scope="col">Telefoonnummer</th>
    </tr>
  </thead>
  <tbody v-for="item in FormData">
    <tr>
<td>{{item.name}}</td>
<td>{{item.surname}}</td>
<td>{{item.email}}</td>
<td>{{item.address.phone}}</td>
    </tr>
  </tbody>
</table>
</template>

<script>
export default {
    data() {
        return {
            FormData: [{}],
            imgHeader: "",
        }
    },
    async created() {
        this.FormData = (await this.axios.get('/v1/volunteer/get')).data;
    }
}

</script>

<style scoped>
.table {color:white}
</style>