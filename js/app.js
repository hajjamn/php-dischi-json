const { createApp } = Vue

createApp({
  data() {
    return {
      message: 'Hello Vue!',
      records: []
    }
  },
  methods: {
    fetchData() {
      //axios
    }
  }
}).mount('#app')