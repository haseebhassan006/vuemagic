<template>
<avatar :username="name" v-if="!thumbnail"></avatar>

  <vs-avatar badge badge-color="primary" v-else>
    <img :src="thumbnail" alt="">
        <!-- <img :src="thumbnail" alt="" v->
        class="img-radius align-top m-r-15 rounded-circle"  -->
    </vs-avatar>
</template>

<script>
import Avatar from 'vue-avatar'
export default {
components:{
Avatar,
},
props:['name','thumbnail'],
name:"Avatar Component"
}
</script>

<style>

</style>
