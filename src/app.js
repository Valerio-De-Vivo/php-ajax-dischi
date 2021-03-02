var app = new Vue({
    el: '#app',
    data: {
        vinili: [],
        artist: 'all'
    },
    mounted() {
        axios
            .get('server.php')
            .then((res) => {
                this.vinili = res.data;
            })
    }
});