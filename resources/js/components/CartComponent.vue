<template>
    <div class="cartMenu">
        <a data-scroll-nav="0" href="/checkout">Cart({{ cartCount }})</a>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        data(){
            return{
                cartCount: ''
            }
        },
        mounted() {
           this.$root.$on('countCartProduct', (item) => {
                this.getCartCount()
           })
        },
        methods:{
            getCartCount(){
                axios.get('/total-cart-item')
               .then((res) => {
                    this.cartCount = res.data.cartItem
               })
               .catch((err) => {

               })
            }
        },
        created(){
            this.getCartCount()
        }
    }
</script>
