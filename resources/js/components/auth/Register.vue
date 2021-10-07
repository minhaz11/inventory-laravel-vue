<template>
    <div>
    <section class="section">
        <div class="container mt-5">
          <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
              <div class="login-brand">
                <img src="" alt="logo" width="100" class="shadow-light rounded-circle">
              </div>

              <div class="card card-primary">
                <div class="card-header"><h4>Register</h4></div>
                <div class="card-body">
                  <form @submit.prevent="register">
                    <div class="row">
                      <div class="form-group col-6">
                        <label for="first_name">Name</label>
                        <input id="first_name" v-model="form.name" type="text" class="form-control" name="first_name" autofocus>
                      </div>
                     
                    </div>

                    <div class="form-group">
                      <label for="email">Email</label>
                      <input id="email" v-model="form.email" type="email" class="form-control" name="email">
                      <div class="invalid-feedback">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-6">
                        <label for="password" class="d-block">Password</label>
                        <input id="password" v-model="form.password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                        <div id="pwindicator" class="pwindicator">
                          <div class="bar"></div>
                          <div class="label"></div>
                        </div>
                      </div>
                      <div class="form-group col-6">
                        <label for="password2" class="d-block">Password Confirmation</label>
                        <input id="password2" v-model="form.password_confirmation" type="password" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Register
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="simple-footer">
                Copyright &copy; Stisla 2018
              </div>
            </div>
          </div>
        </div>
    </section>
    </div>
</template>

<script>
    export default {
       created(){
            if(User.loggedIn()){
                 this.$router.push({name:'dashboard'})
            }
        },
        data() {
          return {
            form:{
              name:null,
              email:null,
              passowrd:null,
              password_confirmation:null
            }
          }
        },
        methods:{
          register(){
            axios.post('api/auth/register',this.form)
            .then((result) => {
              console.log(result.data);
            }).catch((err) => {
              
            });
          }
        }
    }
</script>

<style  scoped>

</style>