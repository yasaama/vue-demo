<template>
    <div class="container">
        <logo size="small"></logo>
        <div class="container" style="max-width: 55%">
            <div class="row">
                <div class="col-sm-12">
                    <div class="single-item">
                        <div class="single-item-header" v-bind:style="'background-image: url(' + product.image + ')'">
                            <a href="/"><i class="fas fa-caret-left"></i></a>
                        </div>
                        <div class="single-item-body">
                            <h1 class="single-item-body__title">{{ product.name }}</h1>
                            <div class="single-item-body__description">
                                {{ product.description }}
                            </div>
                            <div class="add-to-basket">
                                <form action="/checkout" method="get">
                                    <div class="form-container">
                                        <label>Choose an Option</label>
                                        <select name="option">
                                            <option>{{ "£"+product.price }}</option>
                                        </select>
                                    </div>
                                    <div class="form-container">
                                        <label>Quantity</label>
                                        <input type="number" name="quantity" value="1" min="1" />
                                    </div>
                                    <input type="hidden" name="itemId" v-bind:value="product.id" />
                                    <button>Checkout</button>
                                </form>
                            </div>
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
        name: "ItemPage",
        components: {Logo},
        data() {
            return {
                request_product_id: this.$route.params.id,
                product: {}
            }
        },
        mounted() {
            this.getProduct();
        },
        methods: {
            getProduct() {
                axios.get('/api/items/'+this.request_product_id).then(response => {
                    this.product = response.data;
                    console.log(this.product)
                }).catch(error => {
                    console.log(error)
                })
            }
        }
    }
</script>

<style scoped>

</style>
