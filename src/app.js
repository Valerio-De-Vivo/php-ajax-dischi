var app = new Vue({
    el: '#app',
    data: {
        vinili: [],
        artist: 'all'
    },
    mounted() {
        axios
            .get('http://localhost:8888/php-ajax-dischi/server.php')
            .then((res) => {
                this.vinili = res.data;
            })
    }
});