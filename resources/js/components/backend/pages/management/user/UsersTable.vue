<template>
    <div>
        <div  v-if="selected_items.length>0">
               <strong class="ml-4">Selected Items ({{selected_items.length}}) </strong>
              <vs-button icon danger :active="true" @click="alldeleteItems">
                                 Remove Items
            </vs-button>

        </div>

          <div class="table-responsive">
                        <table class="table table-bordernone">
                        <thead >
                            <tr>
                            <th scope="col">

                            <vs-checkbox   @click="selectAllItems">
                            </vs-checkbox>
                            </th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                             <th scope="col">User Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Create By</th>
                            <th scope="col">Created</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr  v-if="users.data.length<1">
                                  <td class="py-2" colspan="6">
                                    <h1 class="text-center text-warning">Users are not found</h1>
                                </td>
                            </tr>
                            <tr v-for="user in users.data" :key="user.id" v-else>
                                <td>
                                <vs-checkbox :val="user.id" v-model="selected_items">
                                </vs-checkbox>
                                </td>
                                <td class="bd-t-none u-s-tb">
                                <Avatar :name="user.name" :thumbnail="user.thumbnail"></Avatar>
                                <router-link :to="{name: 'update-user', params: { id: user.id }}">
                                <div class="align-middle image-sm-size">
                                    <div class="d-inline-block">
                                    <h6>{{user.name}} <span class="text-muted"></span></h6>
                                    </div>
                                </div>
                                </router-link>
                                </td>
                                <td>
                                <div class="row">
                                    <div class="col">
                                        <a :href="`mailto:${user.email}`" target="_blank"> {{user.email}}
                                        <vs-avatar class="btn-plane">
                                        <i class=" far fa-paper-plane"></i>
                                        </vs-avatar>
                                        </a>
                                    </div>
                                </div>
                                </td>
                                <td>{{user.user_name}}</td>
                                <td>{{user.phone}}</td>
                                <td>Admin</td>
                                <td>{{user.created_at | timeformat}}</td>

                                <td><router-link :to="{name: 'update-user', params: { id: user.id }}"><i class="fa  fa-edit text-primary"></i></router-link> |  <a role="button"  @click="deleteItem(user)"><i class="fa  fa-trash text-danger"></i></a></td>
                            </tr>

                        </tbody>
                        </table>
                    </div>

                    <ul class="pagination pagination-primary mt-4">
                        <pagination :data="users" :limit="5" @pagination-change-page="getUsers"></pagination>
                    </ul>

    </div>
</template>

<script>
import Avatar from "../../../components/AvatarComponent.vue";

export default {
    props:['users','getUsers'],
     components:{
        Avatar,
    },
    data(){ return{
        selected_items:[],
    };
    },
    methods:{
     alldeleteItems(){
          Swal.fire({
              title: "Are you sure?",
              text: "You won't be able to revert this!",
              icon: "warning",
              showCancelButton: true,
              confirmButtonColor: "#3085d6",
              cancelButtonColor: "#d33",
              confirmButtonText: "Yes, delete it!",
            }).then((result) => {
              if (result.isConfirmed) {
                  let form_data= new FormData();
                  let ids=JSON.stringify(this.selected_items)
                  form_data.append("brand_ids",ids);
                axios.post("/management/remove-all/users",form_data).then((res) => {
                    Swal.fire("Deleted!", "Your file has been deleted.", "success");
                      this.getBrands();

                  }).catch((err)=>{
                        this.$root.alertNotificationMessage(err.response.status,err.response.data);
                   //    console.log("erro",err.response.data.message);

                  });
              }
            });
     },
     selectAllItems(){

         if(this.selected_items.length>1)
         {
             this.selected_items=[];
         }
         else {

              this.selected_items=this.users.data.map(x=>x.id);
         }
     },
      deleteItem: function (item) {
                  return this.$emit("deleteItem", item);
              },
        editItem: function (item) {
                  return this.$emit("editItem", item);
              }


        }


}
</script>

<style>
.vs-avatar-content.btn-plane.vs-change-color-badge{
    margin-left: auto;
    position: relative;
    top: -30px;
}

</style>
