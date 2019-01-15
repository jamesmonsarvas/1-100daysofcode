<template>
  <div class="test">

    <!-- <input type="text" v-model="title"><br /> -->
    
    <h1>{{title}}</h1>
    <p v-if="showName">{{user.firstName}}</p>
    <p v-if="showName">{{user.lastName}}</p>
    <p v-else>Nobody</p>

    <ul>
      <li v-for="item in items">{{item.title}}</li>
    </ul>

    <button v-on:click="greet('Hi There!')">Say greeting</button>

    <input type="text" v-on:keyup="pressKey" v-on:keyup.enter="enterHit"><br />

    <hr>
    <label for="first-name">First Name: </label>
    <input type="text" v-model="user.firstName"> <br />
    <label for="first-name">Last Name: </label>
    <input type="text" v-model="user.lastName"> <br />
    <h3>{{fullName}}</h3>

    <h2>{{msg}}</h2>
  </div>
</template>

<script>
export default {

  name: 'test',
  props: {
    msg: {
      type: String,
      dafault: 'Foobar',
    }
  },
  // Returning Data to DOM
  data() {
    
    return {
      title: 'Hello World',
      user: {
        firstName: 'John',
        lastName: 'Doe',
      },
      showName: true,
      items: [
        {title: 'Item one'},
        {title: 'Item two'},
        {title: 'Item three'},
      ]
    }

  },
  // Methods and Functions
  methods: {

    greet: function(msg) {
      alert(msg);
    },
    pressKey: function(e) {
      console.log(e.target.value);
    },
    enterHit: function() {
      console.log('You hit enter');
    }

  },
  // Computed Property
  computed: {
    fullName: function () {
      return this.user.firstName + " " + this.user.lastName;
    }
  }

}
</script>

<style scoped>

</style>

