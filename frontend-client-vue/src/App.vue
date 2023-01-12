<script setup>
import axios from 'axios';
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
