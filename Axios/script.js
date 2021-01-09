var app = new Vue({
    el: '#app',
    data: {
        cds: [],
        authors: [],
    },
    methods:{
      album: function (author) {
        axios
        .get('data.php', {
          params: {
            'author' : author
          }
        })
        .then((albums) => {
        this.cds = albums.data;
        });
      },
      author: function () {
        axios
        .get('data.php', {
          params: {
          'author' : 'all'
          }
        })
        .then(response =>{
          this.cds = response.data;
          for(i=0;i<this.cds.length;i++){
            this.authors.push(this.cds[i].author);
          }
        });
      },
    },
    mounted: function() {
      this.author();
      axios
      .get('data.php', {
        params: {
        'author' : 'all'
        }
      })
      .then((result) => {
        this.cds = result.data;
      });
    },
})
