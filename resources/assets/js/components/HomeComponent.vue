<template>
    <div>
      <a data-target="modal" href="#modelId">menu</a>
  
   <div id="modal">
     <modelMol></modelMol>
   </div>
    </div>
</template>
<script>
Vue.component("modelMol", require("./home.vue"));
export default {};
</script>
<style scoped>
</style>
