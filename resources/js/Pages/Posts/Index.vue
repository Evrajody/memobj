<script setup lang="ts">

import { Head, Link } from '@inertiajs/vue3'

defineProps<{
    posts: Object
}>()


</script>

<template>
    <Head title="Posts" />


    <div class="max-w-7xl mx-auto my-10 space-y-4 ">

        <h2 class="text-4xl text-center font-semibold text-blue-800">Mes articles</h2>

        <div class="max-w-2xl mx-auto">
            <Link :href="route('posts.create')" class="text-white font-bold px-2 bg-blue-400 py-3 rounded shadow-lg"> Creer un article </Link>
        </div>


        <article v-for="post in posts.data" class="flex shadow max-w-2xl mx-auto" :key="post.id">

            <div class="">
                <img src="https://via.placeholder.com/150" alt="une">
            </div>
            <div class="bg-gray-50 w-full p-5">
                <h2 class="text-xl font-semibold text-indigo-500"> {{ post.intitule }} </h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias deleniti ex excepturi explicabo fugit id quia quod reprehenderit tenetur totam? </p>
            </div>

        </article>


    </div>




</template>

<style scoped>

</style>
