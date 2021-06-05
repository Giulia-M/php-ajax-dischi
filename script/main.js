const app = new Vue ({
    el: "#app",
    data: {
        listaDischi: {},
        input: "",

        filteredForGenre: [],
    },

    methods: {

        
        fetchData() {
            axios.get(`http://localhost/php-ajax-dischi/server.php?genre=${this.input}`)


            .then(resp => {
                this.listaDischi = resp.data;


                for (let i = 0; i < this.listaDischi.length; i++) {
                    const element = this.listaDischi[i];

                    let currentGenre = element["genre"];
                    if( !this.filteredForGenre.includes(currentGenre)) {
                        this.filteredForGenre.push(currentGenre)
                    }
                    
                }

            })



            .catch(er => {
                console.log(er);
                alert("a causa di un errore l'operazione non è andata a buon fine")
            })
        },

        

            
    },
    
   
    //all'avvio della pagina mi fa la chiamata subito
    mounted() {
        this.fetchData();
    }
})