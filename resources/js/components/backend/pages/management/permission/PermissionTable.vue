<template>

  <div>
      <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead class="table-primary">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Permission</th>
                          <th scope="col">Roles</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr v-for="permission in permissions">
                          <th scope="row">{{permission.id}}</th>
                          <td>{{permission.name}}</td>
                          <td><p v-for="role in permission.roles">{{role.name}}</p></td>
                          <td>
                              <a><i class="fa  fa-edit text-primary" ></i></a> | <a role="button" v-on:click="dltPermission(permission.id)"><i class="fa  fa-trash text-danger"></i></a>
                          </td>
                        </tr>


                      </tbody>
                    </table>
                    </div>
  </div>
</template>
<script>
export default {
    props:['permissions','getPermission'],
     methods:{
        dltPermission(id){

         axios.delete('management/permission/'+id)
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
