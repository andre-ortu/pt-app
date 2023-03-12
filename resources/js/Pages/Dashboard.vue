<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { CheckCircleIcon } from "@heroicons/vue/20/solid";
import {ref, useAttrs} from "vue";
import axios from "axios";
const attrs = useAttrs();
const user = attrs.auth.user;
const navRerenderKey = ref(0)
let gymCards = attrs.gymCards.data;
console.log("gymCards");
console.log(gymCards);
const successfulCard = (exerciseId) => {
    axios.post('/api/gym-card/' + exerciseId + '/successful')
        .then(({data}) => {
            gymCards = data.gymCards.data;
            navRerenderKey.value = Date.now();
        })
    //todo add catch
};

const goToPage = () => {
    alert('goToPage');
}
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout :key="navRerenderKey">
        <div v-for="gymCard in gymCards" class="m-2" >
            <div v-for="exercise in gymCard">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div :class="exercise.successful ? 'bg-green-400' : 'bg-white'" class="overflow-hidden shadow-sm rounded-lg flex justify-between m-1">
                        <div class="flex flex justify-between w-full" @click="goToPage">
                            <div class="p-2 text-gray-900">{{ exercise.name }}</div>
                            <small :class="exercise.successful ? 'text-black px-2' : 'text-gray-400'" class="text-xs py-2 my-auto">{{ exercise.reps }} reps</small>
                        </div>
                        <div class="text-gray-900">
                            <div v-if="! exercise.successful" class="p-2" @click="successfulCard(exercise.id)">
                                <CheckCircleIcon class="h-6 w-6 text-gray-400"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <small v-if="gymCard[0].recovery" class="text-xs text-gray-400 text-center">Recupero: {{ gymCard[0].recovery }}</small>
            </div>
            <hr>
        </div>
    </AuthenticatedLayout>
</template>
