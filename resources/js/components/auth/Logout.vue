<template>
    <div>
  
    </div>
</template>

<script>
    export default {
        created(){
           axios.post('api/auth/logout').then((result) => {
               
           }).catch((err) => {
               
           });

            localStorage.removeItem('token')
            localStorage.removeItem('user')
            this.$router.push({name:'login'})
          
        }
   
    }
</script>

<style  scoped>

</style>