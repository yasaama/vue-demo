<template>
    <div class="container">
        <logo size="small"></logo>
        <div class="container" style="max-width: 75%">
            <div class="row">
                <div class="col-sm-12">
                    <div class="checkout">
                        <h1>Checkout</h1>
                        <div class="basket-item">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="basket-cell">
                                        <p class="basket-cell__title">Item Name</p>
                                        <p class="basket-cell__value">{{ product.name }}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="basket-cell-container">
                                        <div class="basket-cell">
                                            <p class="basket-cell__title">Quantity</p>
                                            <p class="basket-cell__value">{{ request_qunatity }}</p>
                                        </div>
                                        <div class="basket-cell">
                                            <p class="basket-cell__title">Price</p>
                                            <p class="basket-cell__value">{{ "£"+product.price }}</p>
                                        </div>
                                        <div class="basket-cell">
                                            <p class="basket-cell__title">Delivery</p>
                                            <p class="basket-cell__value">Email</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 text-right">
                                    <div class="basket-cell">
                                        <p class="basket-cell__title">Total</p>
                                        <p class="basket-cell__value">{{ "£"+total }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-form">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-container">
                                            <label>First Name</label>
                                            <input type="text" name="first_name" v-model="first_name" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-container">
                                            <label>Last Name</label>
                                            <input type="text" name="first_name" v-model="last_name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-container">
                                            <label>Email</label>
                                            <input type="text" name="email" v-model="email" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-container">
                                            <label>Card Number</label>
                                            <input type="text" name="card_number" v-model="card_number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-container">
                                            <label>Expiry Date</label>
                                            <input type="text" name="expiry_date" v-model="expiry_date" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-container">
                                            <label>CSV</label>
                                            <input type="text" name="csv" v-model="csv" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button>Checkout</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Logo from "./parts/Logo";
    export default {
        name: "CheckoutPage",
        components: {Logo},
        data() {
            return {
                request_qunatity: this.$route.query.quantity,
                request_itemId: this.$route.query.itemId,
                product: {},
                total: 0,
                first_name: null,
                last_name: null,
                email: null,
                card_number: null,
                expiry_date: null,
                csv: null
            }
        },
        mounted() {
            this.getProduct();
        },
        methods: {
            getProduct(){
                axios.get('/api/items/'+this.request_itemId).then(response => {
                    this.product = response.data;
                    this.total   = parseFloat(this.product.price) * parseInt(this.request_qunatity);
                }).catch(error => {
                    console.log(error);
                })
            }
        }
    }
</script>

<style scoped>

</style>
