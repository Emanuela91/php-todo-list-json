<script>
import axios from 'axios';
// chiamata dell'api per il server
const API_URL = "http://localhost/";


export default {
  name: "App",
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
          // vedo gli array in console prima di creare il ciclo
          // console.log(data)
          this.todoList = data;
        });
    },
    // evento che crea il nuovo task e stampa in pagina
    formSubmit(e) {
      // evita che la pagina venga ricaricata
      e.preventDefault();
      // do un parametro con cui creo il collegamento al backend
      const params = {
        params: {
          'newTodo': this.newTodo,
        }
      };
      // faccio la chiamata al BE alla pagina che crea il nuovo task 
      axios.get(API_URL + "api-create-todo.php", params)
        // invio tutto alla funzione getAllData
        .then(() => {
          this.getAllData();
        }
        );
    },

  },
  mounted() {
    this.getAllData();
  }
};
</script>

<template>
  <div>
    <h1>TODO LIST</h1>
    <!-- lista delle cose da fare, con ciclo per le varie voci -->
    <ul>
      <li v-for="(todoElem, ind) in todoList" :key="ind">
        {{ todoElem.text }}
        {{ todoElem.completed }}
      </li>
    </ul>
    <!-- form per inserire nuovi task   -->
    <form @submit="formSubmit">
      <input type="text" name="newTodo" v-model="newTodo">
      <input type="submit" value="CREATE">
    </form>
  </div>

</template>

<style lang="scss" scoped>
.done {
  text-decoration: overline;
}
</style>
