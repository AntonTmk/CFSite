

function car(name, model){
	return{
		name, model
	}
}

const cars =[car( 'cake1.jpg', 'nknll')]

new Vue({
el: '#app',
data:{
cars: cars
}
})