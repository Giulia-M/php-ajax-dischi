const app = new Vue ({
    el: "#app",
    data: {
        listaDischi: {},
        input: "",
    },

    methods: {

        
        fetchData() {
            axios.get(`http://localhost/php-ajax-dischi/server.php?genre=${this.input}`)


            .then(resp => {
                this.listaDischi = resp.data;

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