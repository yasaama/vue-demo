<template>
    <div class="single-product">
        <div class="single-product-header" v-bind:style="'background-image: url(' + itemImage + ')'">
            <div class="single-product-header__content">
                <div class="single-product-header__title">{{ itemTitle }}</div>
                <div class="single-product-header__price">{{ itemPrice }}</div>
            </div>
        </div>
        <div class="single-product-body">
            <div class="single-product-body__description">{{ itemDescription }}</div>
            <div class="single-product-body__button">
                <a v-bind:href="'/item/'+itemId">Select</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "SingleProduct",
        props: ["itemId", "itemImage", "itemTitle", "itemPrice", "itemDescription"]
    }
</script>

<style scoped>

</style>
