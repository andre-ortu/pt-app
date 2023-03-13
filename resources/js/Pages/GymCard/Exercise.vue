<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import {ref, useAttrs} from "vue";
import Timeline from "@/Components/Timeline.vue";
import Toast from "@/Components/Toast.vue";
const attrs = useAttrs();
let exercise = attrs.exercise.data;
const toast = ref({show: false})
const form = ref({body: ''});
const cardRerenderKey = ref(0);

const locationHash = location.hash;
const addNote = () => {
    axios.post(`/api/gym-card/${exercise.id}/note/`, {
        body: form.value.body
    })
        .then(function({data})  {
            exercise = data.exercise;
            cardRerenderKey.value = Date.now();
            toast.value.show = true;
            form.value.body = '';

    })
}
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout :key="cardRerenderKey">
        <div class="p-2">
            <toast body="Nota aggiunta" v-if="toast.show"></toast>
            <a :href="`/dashboard${locationHash}`" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Torna Indietro</a>
            <h1 class="text-xl">Esercizio: {{ exercise.name }}</h1>
            <hr>
            <div class="mt-3">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Aggiungi Nota</label>
                <textarea v-model="form.body" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Aggiungi nota..."></textarea>
                <button @click="addNote" type="submit" class="my-2 inline-flex items-right px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                    Aggiungi Nota
                </button>
            </div>
            <hr>
            <div class="mt-4">
                <h3 class="text-md">Note: </h3>
                <timeline :notes="exercise.notes"></timeline>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
