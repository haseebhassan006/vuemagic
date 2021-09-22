<template>
   <div>
       <div class="card">
            <div class="card-header pb-0">
                <h5>Add Permissions</h5>
            </div>
            <div class="card-body">
                <form class="theme-form mega-form" v-on:submit.prevent="addPermission">
                             <h6>Account Information</h6>
                        <div class="mb-3">
                            <label class="col-form-label">Permission</label>
                            <input class="form-control" type="text" placeholder="your Name" v-model="permission.name">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Roles</label>
                            <multiselect v-model="selectedRole" :options="roles" label="name" track-by="id" :searchable="false" :close-on-select="false" :show-labels="true" placeholder="Select Roles" :multiple="true" :preselect-first="true"> </multiselect>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>

                </form>
            </div>

        </div>
    </div>
</template>
<script>
export default{

data(){
    return {
        roles:[],
         selectedRole:[],
         permission:{}
    }
},
methods:{

    addPermission(){

        var formData = new FormData();
           let roleBox=[];


      for (let index = 0; index < this.selectedRole.length; index++) {
          const element = this.selectedRole[index].id;
        roleBox.push(element);
      }
      formData.append("roles",roleBox);
      formData.append('name',this.permission.name)


      axios.post('/management/permission',formData)
      .then((response)=>{

        console.log(response)

      })
      .catch((error)=>{
        console.log(error)

      })


    }

},
created(){
     axios.get('management/role').then((response)=>{
                  this.roles = response.data.roles.data
                  console.log(response.data.roles.data)
              }).catch((error)=>{
                  console.log(error)
              })
}
}
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
