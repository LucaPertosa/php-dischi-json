const { createApp } = Vue;

createApp({
  data() {
    return {
      dischi: [],
    };
  },
  mounted() {
    axios
      .get("http://localhost:8888/Boolean/php-dischi-json/server.php")
      .then((resp) => {
        this.dischi = resp.data.results;
      });
  },
}).mount("#app");