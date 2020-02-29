function get_url() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
}
function kirim_data(method_type, url, data) {
	return fetch(url, {
		method: method_type,
		body: new URLSearchParams(data),
		headers: new Headers({
			'Content-type': 'application/x-www-form-urlencoded; charset=UTF-8'
		})
	})
	.then(response => response.json())
}
function get_data(url, data) {
	return fetch(url, {
		method: 'GET',
		headers: new Headers({
			'Content-type': 'application/x-www-form-urlencoded; charset=UTF-8'
		})
	})
	.then(response => response.json())
}