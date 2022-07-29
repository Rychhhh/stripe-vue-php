<template>
    <div>
             <div class="bg-white">
            <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Welcome </h2>

                <div v-if="!products.length">
                    <h1 class="min-h-screen text-center py-20 text-3xl font-bold">Loading...</h1>
                </div>

                <!-- <div > -->
                    <div v-else class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                        <div class="group relative" v-for="product in products" v-bind:key="product.id">
                            <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                <img src="https://picsum.photos/id/1/200/300" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                            </div>
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0 text-3xl font-bold" v-text="product.name"></span>

                                        </a>
                                        </h3>

                                        <div>
                                            <h3>Categori : </h3>
                                            <p class="mt-1 text-sm text-gray-500" v-for="categori in product.kategori" v-bind:key="categori.id" v-text="categori.name"></p>
                                        </div>
                                    </div>

                                        <div>
                                            Price :
                                            <p class="text-sm font-medium text-gray-900" v-text="formatUang(product.price)"></p>
                                        </div>
                                </div>
                        </div>
                    </div>
                <!-- </div> -->
                <!-- More products... -->
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'

    export default {
        data() {
            return {
                products: {}
            }
        },
        methods: {
            getProduct() {
                axios.get('http://127.0.0.1:8000/api/products').then((response) => {
                    this.products = response.data
                })
            },

            formatUang(price) {
                price = (price /  1000);

                return price.toLocaleString('id-ID', { style: 'currency', currency: 'IDR'})
            }
        },
        created() {
            this.getProduct()
        }
    }
</script>