<template>
  <Modal v-for="item in UserData" v-show="isModalVisible" @close="closeModal">
    <template v-slot:header>
      <p>Naam: {{ item.name }} {{ item.surname }}</p>
    </template>
    <template v-slot:body>
      <p>Adres: {{ item.address.address }}</p>
      <p>Postcode: {{ item.address.postal_code }}</p>
      <p>Woonplaats: {{ item.address.residence }}</p>
      <p>Email: {{ item.email }}</p>
      <p>Telefoonnummer:{{ item.address.phone }}</p>
      <p>Geboortedatum: {{ item.date_of_birth }}</p>
      <p>Geslacht: {{ item.gender }}</p>
    </template>
  </Modal>
  <table class="table">
    <p v-if="FormData.length < 1"> Er zijn geen vrijwilligers </p>
    <thead v-if="FormData.length > 0">
      <tr>
        <th scope="col">Voornaam</th>
        <th scope="col">Achternaam</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody v-for="item in FormData">
      <tr>
        <td>{{ item.name }}</td>
        <td>{{ item.surname }}</td>
        <td>{{ item.email }}</td>
        <td><button v-on:click="showMore(item.id)">Meer info</button></td>
        <td><button v-on:click="deleteMember(item.id)">Verwijder</button></td>
      </tr>
    </tbody>
  </table>
</template>

<script>
import Modal from '@/views/lidWorden/components/Modal.vue'

export default {
  data() {
    return {
      isModalVisible: false,
      FormData: [{}],
      UserData: {},
      imgHeader: "",
    }
  },
  methods: {
    deleteMember(id) {
      if (confirm("Weet je zeker dat je het wilt verwijderen?")) {
        this.axios.get('/v1/volunteer/delete/' + id);
        this.$router.go();
      }
    },
    async showMore(id) {
      this.UserData = (await this.axios.get('/v1/volunteer/show/' + id)).data;
      this.showModal();
    },
    showModal() {
      this.isModalVisible = true;
    },
    closeModal() {
      this.isModalVisible = false;
    },
  },
  components: {
    Modal
  },
  async created() {
    this.FormData = (await this.axios.get('/v1/volunteer/get')).data;
  },
}

</script>

<style scoped>
.table {
  color: white
}
</style>
