<template>
    <section class="flex flex-col justify-center antialiased bg-gray-50 text-gray-600 min-h-screen p-4">
    <div class="h-full" >
        <!-- Card -->
        <div class="max-w-xs mx-auto">
            <div class="flex flex-col h-full bg-white shadow-lg rounded-lg overflow-hidden">
                <!-- Image -->
                <a class="block focus:outline-none focus-visible:ring-2" href="#0">
                    <figure class="relative h-0 pb-[56.25%] overflow-hidden">
                        <img class="absolute inset-0 w-full h-full object-cover transform hover:scale-105 transition duration-700 ease-out" src="https://dummyimage.com/640x640" width="320" height="180" alt="Course">
                    </figure>
                </a>
                <!-- Card Content -->
                <div class="flex-grow flex flex-col p-5">
                    <!-- Card body -->
                    <div class="flex-grow">
                        <!-- Header -->
                        <header class="mb-3">
                            <a class="block focus:outline-none focus-visible:ring-2" href="#0">
                                <!-- <h3 class="text-[22px] text-gray-900 font-extrabold leading-snug" v-text="detailproduct.name"></h3> -->
                            </a>
                        </header>
                        <!-- Content -->
                        <div class="mb-8">
                            <p>The JavaScript course for everyone! Master JavaScript with projects, challenges and theory.</p>
                        </div>
                    </div>
                    <!-- Card footer -->
                    <div class="flex justify-end space-x-2">
                        <a class="font-medium text-sm inline-flex items-center justify-center px-3 py-1.5 rounded leading-5 text-gray-500 hover:underline focus:outline-none focus-visible:ring-2" href="#0">Cancel</a>
                        <a class="font-semibold text-sm inline-flex items-center justify-center px-3 py-1.5 border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out bg-indigo-50 focus:outline-none focus-visible:ring-2 hover:bg-indigo-100 text-indigo-500" href="#0">Preview</a>
                        <a @click="productsFETCH()" class="font-semibold text-sm inline-flex items-center justify-center px-3 py-1.5 border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out bg-indigo-500 focus:outline-none focus-visible:ring-2 hover:bg-indigo-600 text-white" href="#0">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</template>

<script>
import axios from 'axios'

export default ({
    data() {
         return {
            products: {}
        }
    },

    methods: {
        productsFETCH() {
                axios.get('http://127.0.0.1:8000/api/products').then((response) => {
                    // this.products = response.data
                    this.products = response.data
                })
        },
        detailProduct() {
                return this.productsFETCH.find(product => product.slug === this.$route.params.slug)
        }
    }
})
</script>
