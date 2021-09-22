<template>
 <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead class="table-primary">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Roles</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="role in roles">
                          <th scope="row">{{role.id}}</th>
                          <td>{{role.name}}</td>
                          <td>
                            <router-link :to="{name: 'EditRoles', params: { id: role.id }}"><i class="fa  fa-edit text-primary" ></i></router-link> | <a role="button" v-on:click="dltRole(role.id)"><i class="fa  fa-trash text-danger"></i></a>
                          </td>
                        </tr>


                      </tbody>
                    </table>
                    </div>
</template>
<script>
export default {
    props:['roles','getroles'],
     methods:{
        dltRole(id){

         axios.delete('management/role/'+id)
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
