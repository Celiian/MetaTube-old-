<template>
    <ul>
        <li><a class="active" >  <router-link to="/">Home</router-link></a></li>
        <li><a > <router-link to="/register">Register</router-link></a></li>
    </ul>
</template>

<script></script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
