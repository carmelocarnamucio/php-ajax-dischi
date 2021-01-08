var app = new Vue({
    el: '#app',
    data: {
        cds: [],
    },
    mounted: function () {
      axios
      .get("data.php")
      .then((result) => {
          this.cds = result.data;
      });
    },
})
