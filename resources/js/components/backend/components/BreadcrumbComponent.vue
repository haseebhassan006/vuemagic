<template>
  <div>
      <div class="col-sm-6">
                  <h3>{{activename}}</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><router-link  to="/" data-bs-original-title="" title="">Home</router-link></li>
                    <li class="breadcrumb-item active" v-for="item in previous" :key="item.id" >
                        <router-link :to="item.link">{{item.name}}</router-link>
                    </li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">{{activename}}</a></li>
                  </ol>
     </div>

  </div>
</template>

<script>
export default {
props:['activename','previous'],
name:"Breadcrumb"

}
</script>

<style>

</style>
