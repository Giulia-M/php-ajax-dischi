const app = new Vue ({
    el: "#app",
    data: {
        listaDischi: {},

    },

    methods: {
        fetchData() {
            axios.get("server.php")

            .then(resp => {
                this.listaDischi = resp.data;

            })

            .catch(er => {
                console.log(er);
                alert("a causa di un errore l'operazione non è andata a buon fine")
            })
        }
            
    },

    //all'avvio della pagina mi fa la chimaata subito
    mounted() {
        this.fetchData();
    }
})