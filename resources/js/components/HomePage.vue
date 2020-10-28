<template>
    <div class="container" style="max-width: 60%">
        <logo size="large"></logo>

        <div class="products-archive">
            <div class="row">
                <div class="col-sm-6" v-for="item in items">
                    <SingleProduct
                        v-bind:item-id="item.id"
                        v-bind:item-title="item.name"
                        v-bind:item-description="item.short_description"
                        v-bind:item-price="'£'+item.price.toFixed(2)"
                        v-bind:item-image="item.image"
                    ></SingleProduct>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    import Logo from "./parts/Logo";
    import SingleProduct from "./assets/SingleProduct";
    export default {
        name: "HomePage",
        components: {SingleProduct, Logo},
        data() {
            return {
                items : {}
            }
        },
        mounted() {
            this.getItems();
        },
        methods: {
            getItems() {
                axios.get('/api/items').then(response => {
                    this.items = response.data;
                    console.log(this.items)
                }).catch(error => {
                   console.log(error);
                });
            }
        }
    }
</script>

<style scoped>

</style>
