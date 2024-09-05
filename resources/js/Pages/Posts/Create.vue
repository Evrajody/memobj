<script setup lang="ts">

import {Head, Link, useForm} from "@inertiajs/vue3";
import {onMounted, ref} from "vue";


const postCreateForm = useForm({
    intitule: "",
    contenu: "",
})


const submitAction = () => {
    postCreateForm.post(route('posts.store'), {

    })
}



</script>

<template>

    <Head title="Posts" />


    <div class="max-w-7xl mx-auto my-10 space-y-10 ">

        <h2 class="text-4xl text-center font-semibold text-blue-800"> Formulaire de création </h2>

        <div class="max-w-2xl mx-auto">
            <Link :href="route('posts.create')" class="text-white font-bold px-2 bg-blue-400 py-3 rounded shadow-lg"> Retour </Link>
        </div>


        <form @submit.prevent="submitAction"  action="" class="flex flex-col space-y-5 max-w-2xl mx-auto">

            <div class="bg-red-300 py-5" v-if="postCreateForm.hasErrors">
                {{ postCreateForm.errors }}
            </div>

            <div class="form-group flex flex-col w-full gap-2">
                <label for="title">Titre</label>
                <input v-model="postCreateForm.intitule" type="text"  class="">
            </div>

            <div class="form-group flex flex-col w-full gap-2">
                <label for="content">Contenu</label>
                <textarea v-model="postCreateForm.contenu" name="" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="max-w-2xl ">
                <button  type="submit" class="text-white font-bold px-2 bg-blue-800 py-3 rounded shadow-lg"> Creer le post </button>
            </div>

        </form>


    </div>

</template>

<style scoped>

</style>
