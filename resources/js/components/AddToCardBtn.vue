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
  props:['product_id','user_id','price'],
  methods:{
    async addToCarttt(){

        if(this.user_id == 0){
          this.$toast.error({
              title:'Error',
              message:'You need to login first'
          })
          
        }else{
          await axios.post('/add-to-cart', {
            productId : this.product_id,
            userId : this.user_id,
            price: this.price
          })
        
          .then((res) => {
              this.$toast.success({
                  title: res.data.title,
                  message: res.data.msg
              })
              this.$root.$emit('countCartProduct', res.data.items)
          })
          .catch((err) => {
            console.log(err);
          })
        }
    }
  }
};
</script>
