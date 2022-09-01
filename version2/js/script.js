console.log('ok', Vue);

Vue.config.devtools = true;

const root = new Vue({
    el: '#root',
    data: {
        discs: []
    },
    methods:{
        mounted() {
            axios.get("http://localhost/php-ajax-dischi/api/discs").then((res) => {
                this.discs.push(res.data)
            })
        }
    }
})