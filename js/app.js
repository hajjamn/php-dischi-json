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
      axios
        .get('./server.php')
        .then((res) => {
          console.log(res.data)
          this.records = res.data.results
        })
    }
  },
  created() {
    this.fetchData()
  }
}).mount('#app')