var app = new Vue({
    el:'#app',
    data:{
        albums:[],
    },
    mounted(){
		axios
		.get('http://localhost/01-03-21/php-ajax-dischi/server.php')
		.then((result)=>{
			this.albums = result.data.response;

		})
    }
});