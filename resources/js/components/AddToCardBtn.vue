<template>
  <div>
    <div class="text-center mt-2" @click="addToCarttt()">
        <button class="btn btn-warning" >Add to Cart</button>
      
    </div>
  </div>
</template>

<script>
export default {

  data(){
    return{
        
    }
  },
  props:['product_id','user_id'],
  methods:{
    addToCarttt(){
console.log(this.product_id, this.user_id);
        if(this.user_id == 0){
          this.$toast.error({
              title:'Error',
              message:'You need to login first'
          })
        }
    }
  }
};
</script>
