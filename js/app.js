const { createApp } = Vue

createApp({
  data() {
    return {
      message: 'Hello Vue!',
      records: [
        {
          title: "New Jersey",
          author: "Bon Jovi",
          year: 1988,
          poster: "https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg",
          genre: "Rock"
        },
        {
          title: "New Jersey",
          author: "Bon Jovi",
          year: 1988,
          poster: "https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg",
          genre: "Rock"
        }
      ]
    }
  },
  methods: {
    fetchData() {
      //axios
    }
  }
}).mount('#app')