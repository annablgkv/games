<template>
	<div>
		<h3>Регистрация</h3>
		<form class="form" @submit.prevent="register">
	    <p class="error">
        {{regError}}
			</p>
			<input type="text" v-model="formRegister.name" placeholder="Имя" required>
			<input type="email" v-model="formRegister.email" placeholder="Почта" required>
			<input type="password" v-model="formRegister.password" placeholder="Пароль" required>
			<input type="submit" value="Зарегистрироватся">
		</form>
	</div>
</template>


<script>
import { registerUser } from '../../helpers/auth'

export default {
	data() {
    return {
	    formRegister: {
	      name: '',
	      email: '',
	      password: ''
	    },

    	error: null
    }
	},

	computed: {
	  regError() {
      return this.$store.getters.regError
	  }
	},

	methods: {
	  register() {
      registerUser(this.formRegister)
	      .then(res => {
	        console.log(res);
          this.$store.commit("registerSuccess", res);
          this.$router.push({path: '/login'});
	      })
	      .catch(error => {
          this.$store.commit("registerFailed", {error});
	      })
	  }
	},

}
</script>