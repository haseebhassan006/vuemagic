<template>
  <div>
       <Breadcrumb activename="Add Role" ></Breadcrumb>
      <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header pb-0">
                        <h5>Create Role</h5><span>Add New Role <a href="#"></a></span>
                      </div>
                      <div class="card-body">
                        <form class="theme-form" v-on:submit.prevent="addRole">
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputEmail1">Role</label>
                            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Role" v-model="role.role" >
                          </div>
                        
                         <button class="btn btn-primary" type='submit'>Submit</button>
                        </form>
                      </div>
                  
                    </div>
                  </div>
  </div>
</template>
<script>
import Breadcrumb from "../../../components/BreadcrumbComponent.vue";
export default{
    components:{
        Breadcrumb,
    },
    data(){
        return {
            role:{}
        }
    },
    methods:{
        addRole(){
             var formData = new FormData();
            formData.append("role",this.role.role);


 
   axios.post('/management/role',formData)
      .then((response)=>{

        console.log(response)

      })
      .catch((error)=>{
        console.log(error)

      })



        }
    }

}
</script>