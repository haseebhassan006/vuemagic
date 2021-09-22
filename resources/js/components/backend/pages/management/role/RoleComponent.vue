<template>
  <div>
      <Breadcrumb activename="Users Management" ></Breadcrumb>

        <div class="row">
            <div class="col-12">
                   <div class="card">
                  <div class="card-header pb-0">
                    <h5>Roles</h5><span>List of roles opend by customers</span>

                  </div>
                  <div class="float-left">
                    <router-link class="btn btn-primary" to="/create/roles">Add Role</router-link>
                  </div>

                  <div class="card-body">
                   <RoleTable :getRoles="getRoles" :roles="roles"></RoleTable>
                  </div>
            </div>
        </div>
        </div>

  </div>

</template>

<script>
import Breadcrumb from "../../../components/BreadcrumbComponent.vue";
import RoleTable from "./RoleTable.vue";
export default {

    components:{
        Breadcrumb,
        RoleTable


    },
     data(){
            return {
            roles:{},
            }

     },
     mounted(){
       this.getRoles();
     

     },
        methods:{
           async getRoles(){
                 const url="/management/role";
           
               await axios.get(url).then((res)=>{
                   this.roles = res.data.roles.data;
                   console.log(res.data.roles.data);
               
               }).catch((err)=>{
                     this.$root.alertErrorMessage(err.response.status,err.response.data);
                //    console.log("erro",err.response.data.message);

               });
            },

       
    }



}
</script>

<style>

</style>
