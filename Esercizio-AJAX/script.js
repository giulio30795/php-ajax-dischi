new Vue({
    el: "#app",

    data: {
        dischi: null,
    },

    created() {
        this.getData();
    },

    methods: {
        getData() {
            axios
                .get(
                    "http://localhost:8888/php-ajax-dischi/Esercizio-AJAX/database2.php"
                )
                .then((response) => {
                    this.dischi = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
});
