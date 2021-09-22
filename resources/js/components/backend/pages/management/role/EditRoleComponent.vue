<template>
  <div>
          <Breadcrumb activename="Add Role" ></Breadcrumb>
      <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header pb-0">
                        <h5>Edit Role</h5><span> <a href="#"></a></span>
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
  export default{

      data(){
          return{
              role:{}
          }
      },
      mounted(){
           axios.get('/management/role'+this.$route.params.id)
      .then((response)=>{

this.role = response.data.roles.data
        console.log(response)

      })
      .catch((error)=>{
        console.log(error)

      })

      }

  }
</script>