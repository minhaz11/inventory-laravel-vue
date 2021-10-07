<template>
    <div>
    <section class="section">
        <div class="container mt-5">
            <div class="row justify-content-center">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="card card-primary">
                <div class="card-header"><h4>Login</h4></div>

                <div class="card-body">
                    <form class="needs-validation" @submit.prevent="login">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" v-model="form.email" type="email" class="form-control" name="email" tabindex="1"  autofocus>
                        <!-- <div class="invalid-feedback" v-if="errors.email">
                            {{errors.email[0]}}
                        </div> -->
                    </div>

                    <div class="form-group">
                        <div class="d-block">
                            <label for="password"  class="control-label">Password</label>
                        <div class="float-right">
                            <a href="auth-forgot-password.html" class="text-small">
                            Forgot Password?
                            </a>
                        </div>
                        </div>
                        <input id="password" v-model="form.password" type="password" class="form-control" name="password" tabindex="2" >
                        <!-- <div class="invalid-feedback" v-if="errors.password">
                             {{errors.password[0]}}
                        </div> -->
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Login
                        </button>
                    </div>
                    </form>
                    <div class="text-center mt-4 mb-3">
                    <div class="text-job text-muted">Login With Social</div>
                    </div>
                    <div class="row sm-gutters">
                    <div class="col-6">
                        <a class="btn btn-block btn-social btn-facebook">
                        <span class="fab fa-facebook"></span> Facebook
                        </a>
                    </div>
                    <div class="col-6">
                        <a class="btn btn-block btn-social btn-twitter">
                        <span class="fab fa-twitter"></span> Twitter
                        </a>
                    </div>
                    </div>

                </div>
                </div>
                <div class="mt-5 text-muted text-center">
                Don't have an account? <a href="auth-register.html">Create One</a>
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
                    email:null,
                    password:null
                },
                errors :{}
            }
        },

        methods:{
            login(){
                axios.post('/api/auth/login',this.form)
                .then(res => {
                    User.responseAfterLogin(res)
                    this.$router.push({name:'dashboard'})
                    })

                .catch(error => {
                    console.log(error);
                    
                

                })   
            }
        }
    }
</script>

<style  scoped>

</style>