const { createApp } = Vue;

createApp({
  data() {
    return {
      dischi: [],
      curr_disk: "",
    };
  },
  mounted() {
    axios
      .get("http://localhost:8888/Boolean/php-dischi-json/server.php")
      .then((resp) => {
        this.dischi = resp.data.results;
      });
  },
  methods: {
    get_diskinfo(disk) {
        this.curr_disk = disk;
        document.body.style.overflow = 'hidden';
        console.log(disk);
    },
    close_diskinfo() {
        this.curr_disk = "";
        document.body.style.overflow = 'auto';
    }
  },
}).mount("#app");