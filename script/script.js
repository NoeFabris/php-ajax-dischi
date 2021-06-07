const app = new Vue({
    el: '#app',
    data: {
        albums: [],
    },
    methods: {

        fetchData() {
            axios.get('server.php')
                .then(resp => {
                    this.albums = resp.data;
            })
        }


    },

    mounted() {
        this.fetchData();
    }
})