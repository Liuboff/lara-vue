<template>
	<div>
		<h2>Edit User</h2>
		<form action="/users" class="form-horizontal" method="post">
			<div class="form-group">
				<label for="name" class="control-label col-sm-2">Name:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" v-model="name">
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="control-label col-sm-2">Email:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" v-model="email">
				</div>
			</div>	
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button class="btn btn-default" type="button" v-on:click="updateUser()">Edit</button>
				</div>
			</div>	
		</form>
	</div>
</template>

<script>
	export default{
		props: ['id'],
		data(){
			return {
					name: '',
					email: '',
					password: ''
			}
		},
		mounted() {
			axios.get('/api/users/'+this.id).then(response => {
				var user = response.data;
				this.name = user.name;
				this.email = user.email;
			}).catch(error => {
				console.log(error);
			})
		},
		
		methods: {
			updateUser() {

				axios.put('/api/users/'+this.id, {
					name: this.name,
					email: this.email,
				}).then(response => {
					console.log(response)

					// this.name = "",
					// this.email = "",
				}).catch(error => {
					console.log(error)
				})
			}
		}
	}
</script>

<style>
</style>