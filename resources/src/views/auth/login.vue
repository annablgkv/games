<template>
	<div>
		<form class="form-signin" @submit.prevent="authenticate">
      <h1 class="h3 mb-3 font-weight-normal">Авторизация</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" v-model="formLogin.email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" v-model="formLogin.password" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Авторизоваться</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
    </form>
	</div>
</template>


<script>
import { loginUser } from '../../helpers/auth'

export default {
	data() {
		return {
			formLogin: {
				email: '',
				password: ''
			},

			error: null
		}
	},

	computed: {
    authError() {
      return this.$store.getters.authError
    },

    registeredUser() {
      return this.$store.getters.registeredUser
    }
  },

	methods: {
		authenticate() {
			this.$store.dispatch('login')
			
			loginUser(this.formLogin)
				.then(res => {
				  this.$store.commit("loginSuccess", res)
				  this.$router.push({path: '/secret'})
				})
				.catch(error => {
				  this.$store.commit("loginFailed", {error})
				})
		},
	},
}
</script>