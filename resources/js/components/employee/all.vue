<template>
  
         <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-body">
                            <table class="table table-striped table-inverse table-responsive">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Salary</th>
                                        <th>Join Date</th>
                                        <th>NID</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="employee in employees" :key="employee.id">
                                            <td>{{employee.name}}</td>
                                            <td>{{employee.email}}</td>
                                            <td>{{employee.address}}</td>
                                            <td>{{employee.salary}}</td>
                                            <td>{{employee.join_date}}</td>
                                            <td>{{employee.nid}}</td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
         </section>
  
</template>

<script>
    export default {
        data() {
            return {
                employees:null
            }
        },
        created() {
            axios.get('api/employee').then((result) => {
                this.employees = result.data;
                console.log(this.employees);
            }).catch((err) => {
                
            });
        },
    }
</script>

<style  scoped>

</style>