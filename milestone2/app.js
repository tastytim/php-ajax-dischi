Vue.config.devtools = true;

new Vue({
    el: "#VueApp",
    data: {
      cdarray: [],
    },
    mounted() {
      axios.get("http://localhost/php-ajax-dischi/php-ajax-dischi/api/cd.php").then((resp) => {
        this.cdarray = resp.data.cdList;
      });
      
    },
  });