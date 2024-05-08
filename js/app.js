const { createApp } = Vue

createApp({
  data() {
    return {
      message: 'Hello Vue!'
    }
  },
  methods: {
    fetchData() {
      //axios
    }
  }
}).mount('#app')