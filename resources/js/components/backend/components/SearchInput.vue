
<template>
  <div>
    <div class="input-group search-area">
     <vs-input color="rgb(121, 81, 170)" gradient :placeholder="label" v-model="query" v-on:keyup="searchQuery" />
      <span class="input-group-text" v-if="name"><a role="button" @click="searchQuery">
          <i class="fas fa-search"></i></a>
    </span>
    </div>
  </div>
</template>

<script>
export default {
props:['label','name','apiurl'],
 data() {
    return {
      query: "",
    };
  },
  methods: {
    //asyncdata
    searchQuery: _.debounce(
      function () {
        this.$emit("loading", true);
        setTimeout(() => {
            this.search();
        }, 700);
      },
      500 // 500 milliseconds
    ),
   async search() {
      if (this.query.length > 2) {
       await axios.get(this.apiurl + "&query=" + this.query)
          .then((response) => {
            this.$emit("loading", false);
            this.$emit("filterList", response.data);
            this.$emit("query", this.query);
          });
      } else {
        this.query = "";
        this.$emit("query", this.query);
        this.$emit("reload");
      }
    },
  },
  watch: {
    query() {
      if (this.query == "") {
        this.query = "";
        this.$emit("query", this.query);
        this.$emit("reload");
      }
    },
  },
}
</script>

<style>
 .vs-input {
    border: 2px solid transparent;
    background: rgba(var(--vs-gray-2), 1);
    color: rgba(var(--vs-text), 1);
    padding: 7px 13px;
    border-radius: inherit;
    -webkit-transition: all 0.25s ease;
    transition: all 0.25s ease;
    padding-left: 10px;
    width: 100%;
}
</style>
