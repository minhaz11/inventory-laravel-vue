<template>
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-body">
                         <form @submit.prevent="formSubmit" enctype="multipart/form-data">
                             <div class="form-group">
                               <label for="">Name</label>
                               <input type="text" v-model="form.name" class="form-control" placeholder="" aria-describedby="helpId">
                               
                             </div>
                             <div class="form-group">
                               <label for="">Email</label>
                               <input type="text" v-model="form.email" class="form-control" placeholder="" aria-describedby="helpId">
                               
                             </div>
                             <div class="form-group">
                               <label for="">Address</label>
                               <input type="text" v-model="form.address" class="form-control" placeholder="" aria-describedby="helpId">
                               
                             </div>
                             <div class="form-group">
                               <label for="">Salary</label>
                               <input type="text" v-model="form.salary" class="form-control" placeholder="" aria-describedby="helpId">
                               
                             </div>
                             <div class="form-group">
                               <label for="">Join Date</label>
                               <input type="date" v-model="form.join_date" class="form-control" placeholder="" aria-describedby="helpId">
                               
                             </div>
                             <div class="form-group">
                               <label for="">NID</label>
                               <input type="text" v-model="form.nid" class="form-control" placeholder="" aria-describedby="helpId">
                               
                             </div>
                             <div class="form-group">
                               <label for="">Image</label>
                               <input type="file"  class="form-control-file" placeholder="" aria-describedby="helpId" @change="upload">
                                <span><img :src="form.image" style="width:50px; height:50px"></span>
                             </div>
                             <div class="form-group">
                              
                              <button class="btn btn-primary w-100" type="
                              submit">Submit</button>
                               
                             </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
       
    </section>
</template>

<script>
    export default {
        created() {
            if(!User.loggedIn){
                this.$router.push({name:'login'})
            }
        },
        data() {
            return {
                form:{
                    name:null,
                    address:null,
                    email:null,
                    salary:null,
                    join_date:null,
                    nid:null,
                    image:null,
                }
            }
        },
        methods: {
            formSubmit(){

            },
            upload(event){
                let file = event.target.files[0];
                let read = new FileReader()
                read.onload = event => {
                    this.form.image = event.target.result
                   
                }
                read.readAsDataURL(file)
            }
        },
    }
</script>

<style  scoped>

</style>