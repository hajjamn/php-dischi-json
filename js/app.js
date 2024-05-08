const { createApp } = Vue

createApp({
  data() {
    return {
      message: 'Hello Vue!',
      records: [],
      highlightedRecord: null,
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
    },
    albumModal(album) {
      this.highlightedRecord = album;
    },
    closeAlbumModal() {
      this.highlightedRecord = null;
    }
  },
  created() {
    this.fetchData()
  }
}).mount('#app')