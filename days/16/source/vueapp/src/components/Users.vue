<template>
  <div class="users">
    <h1>Users</h1>

    <form v-on:submit="addUser">
      <input type="text" id="name" v-model="newUser.name" placeholder="Enter Name"><br />
      <input type="text" id="email" v-model="newUser.email" placeholder="Enter Email"><br />
      <input type="submit" value="Submit">
    </form>

    <ul>
      <li v-for="user in users">
        <input type="checkbox" class="toggle" v-model="user.contacted">
        <span :class="{contacted: user.contacted}">
          {{ user.name }}: {{ user.email }} <button v-on:click="deleteUser(user)">X</button>
        </span>
      </li>
    </ul>

  </div>
</template>

<script>
export default {

  name: 'users',
  // Returning Data to DOM
  data() {
    
    return {
      newUser: {},
      users: [
        
      ],
    }

  },
  // Methods and Functions
  methods: {
    addUser: function (e) {
      this.users.push({
        name: this.newUser.name,
        email: this.newUser.email,
        contacted: false,
      });
      e.preventDefault();
    },
    deleteUser: function (user) {
      this.users.splice(this.users.indexOf(user), 1);
    }
  },
  created: function () {
    this.$http.get('https://jsonplaceholder.typicode.com/users')
      .then(function(response) {
        this.users = response.data;
      });
  }

}
</script>

<style scoped>
  .contacted {
    text-decoration: line-through;
  }
</style>

