var app = new Vue({
    el: '#app',
    data: {
        cds: [],
        authors: []
    },
    methods:{
      //funzione per filtro album
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
      }
    },
    mounted: function() {
      //chiamata axios per mostrare tutti gli album al caricamento pagina
      axios
      .get('data.php', {
        params: {
          'author' : 'all'
        }
      })
      .then(response =>{
        this.cds = response.data;
        //pusho nell'array "authors" i nomi degli autori
        for(i=0;i<this.cds.length;i++){
          this.authors.push(this.cds[i].author);
        }
      });
    }
})
