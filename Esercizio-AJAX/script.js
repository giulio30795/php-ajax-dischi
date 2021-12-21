new Vue({
    el: "#app",

    data: {
        database: [],
    },

    created() {
        this.getData();
    },

    methods: {
        getData() {
            axios
                .get("http://localhost:8888/php-ajax-dischi/Esercizio-AJAX/database2.php")
                .then(function (response) {
                    this.database = response.data
                    console.log(response.data);
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
        },
    },
});
