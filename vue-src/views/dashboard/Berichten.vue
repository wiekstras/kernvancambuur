<template>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<div v-for="item in FormData">
{{item.name}}
{{item.message}}</div>

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
        this.FormData = (await this.axios.get('/v1/contact/get')).data;
    }
}

</script>

<style scoped>

</style>