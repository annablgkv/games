<template>
	<div>
		<h3>Личная информация:</h3>
		<table>
			<tr>
				<td>id</td>
				<td>{{ currentUser.id }}</td>
			</tr>
			<tr>
				<td>Имя</td>
				<td>{{ currentUser.name }}</td>
			</tr>
			<tr>
				<td>Почта</td>
				<td>{{ currentUser.email }}</td>
			</tr>
			<tr>
				<td>Зарегистрировался</td>
				<td>{{ currentUser.created_at }}</td>
			</tr>
		</table>
	</div>
</template>


 <script>
 export default {
  computed: {
    currentUser() {
      return this.$store.getters.currentUser
    }
  } 
 }
 </script>