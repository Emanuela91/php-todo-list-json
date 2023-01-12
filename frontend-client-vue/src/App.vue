<script>
import axios from 'axios';
// chiamata dell'api per il server
const API_URL = "http://localhost/";


export default {
  data() {
    // aggiunta di nuovi task dal form alla todo list
    return {
      newTodo: "",
      todoList: []
    }
  },

  methods: {
    // chiamata axios per collegarsi al server alla pagina api.php 
    getAllData() {

      axios.get(API_URL + "api.php")
        .then(res => {

          const data = res.data;

          this.todoList = data;
        });
    }
  },
  mounted() {
    this.getAllData();
  }
};
</script>

<template>
  <div>
    <h1>TODO LIST</h1>
    <!-- lista delle cose da fare -->
    <ul>
      <li></li>
    </ul>
    <!-- form per inserire nuovi task   -->
    <form @submit="formSubmit">
      <input type="text" name="newTodo" v-model="newTodo">
      <input type="submit" value="CREATE">
    </form>
  </div>

</template>

<style scoped>

</style>
