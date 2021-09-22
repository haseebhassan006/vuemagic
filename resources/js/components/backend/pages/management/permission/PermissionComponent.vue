<template>
  <div>
      <Breadcrumb activename="Users Management" ></Breadcrumb>

        <div class="row">
            <div class="col-12">
                   <div class="card">
                  <div class="card-header pb-0">
                    <h5>Permission</h5><span>List of Permissions opend by customers</span>

                  </div>
 <div class="float-right">
     <router-link to="/create/permissions" class="btn btn-primary">Add Permission</router-link>
 </div>
                  <div class="card-body">
                   <Permissiontable :getPermissions="getPermissions" :permissions="permissions"></Permissiontable>

                  </div>
            </div>
        </div>
        </div>

  </div>

</template>

<script>
import Breadcrumb from "../../../components/BreadcrumbComponent.vue";
import Permissiontable from "./PermissionTable";
export default {
    components:{
        Breadcrumb,
        Permissiontable


    },
    data(){ return{
          permissions:{},
            query:"",
            form:{
                name:"",
            },
            page_num:1,

    }},
      mounted(){
        this.getPermissions();


    },
     methods:{
           async getPermissions(page=1){
                 const url="/management/permission?page=" + page + "&query=" + this.query;
                 this.page_num = page;
               await axios.get(url).then((res)=>{
                   this.permissions = res.data.permissions.data;
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
