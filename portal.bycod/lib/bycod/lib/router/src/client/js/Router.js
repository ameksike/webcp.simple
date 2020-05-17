var Bycod = Bycod || {};
Bycod.router = Bycod.router  || {};
Bycod.router = {
	url: function(index=false){
		return window.location.pathname.substring(0, window.location.pathname.lastIndexOf('index.php') + (index ? 9 : 0));
	},
	module: function(module){
		return this.url() + module;
    },
    action: function(module){
		return this.url(true) + "/" + module;
	}
}
