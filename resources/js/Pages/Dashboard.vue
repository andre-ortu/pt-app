<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { CheckCircleIcon } from "@heroicons/vue/20/solid";
import Toast from "@/Components/Toast.vue";
import {ref, useAttrs} from "vue";
import axios from "axios";

const attrs = useAttrs();
const user = attrs.auth.user;
console.log('here');
console.log(user);
const cardRerenderKey = ref(0);
const toast = ref({
    show: false,
    exerciseName: ''
});

const days = attrs.days;
let locationHashDay = location.hash.replace('#', '') || 1;
let gymCards = attrs.gymCards.data;
const successfulCard = (exercise) => {
    console.log(exercise);
    axios.post('/api/gym-card/' + exercise.id + '/successful')
        .then(({data}) => {
            gymCards = data.gymCards.data;
            ++cardRerenderKey.value;
            toast.value.show = true;
            setTimeout(function() {
                toast.value.show = false;
            }, 2000);
            toast.value.exerciseName = exercise.name
        })
    //todo add catch
};

const showDay = (day) => {
    locationHashDay = location.hash = day;
    ++cardRerenderKey.value;
}

const goToPage = (exerciseId) => {
    location.href = `/card/${exerciseId}#${locationHashDay}`
}
</script>

<template>
    <AuthenticatedLayout :key="cardRerenderKey">
        <template #header>
            Ciao, {{ $page.props.auth.user.name }}
        </template>
        <toast
            v-if="toast.show"
            :body="`${toast.exerciseName} Completato`"
        ></toast>

        <div class="mb-4 border-b border-gray-200 dark:border-gray-700 max-w-7xl mx-auto sm:px-6 lg:px-8 p-4">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400" id="tabExample" role="tablist">
                <li class="mr-2" role="presentation" v-for="day in days">
                    <button @click="showDay(day)" :class="locationHashDay == day ? 'text-blue-600' : ''" class=" hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-400 border-blue-600 dark:border-blue-500" :id="`tab-day-${day}`" type="button" role="tab" :aria-controls="`day-${day}`" aria-selected="false">Giorno {{ day }}</button>
                </li>
            </ul>
        </div>
        <div id="tabContentExample">
            <div v-for="day in days" :class="locationHashDay != day ? 'hidden' : ''" class="p-4 rounded-lg bg-gray-50 dark:bg-gray-800" :id="`day-${day}`" role="tabpanel" :aria-labelledby="`tab-day-${day}`">
                <div v-for="gymCard in gymCards[day-1]" class="m-2" >
                    <div v-for="exercise in gymCard">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div :class="exercise.successful ? 'bg-green-400' : 'bg-white'" class="overflow-hidden shadow-sm rounded-lg flex justify-between m-1">
                                <div class="flex flex justify-between w-full" @click="goToPage(exercise.id)">
                                    <div :class="exercise.successful ? 'text-gray-600 px-2' : 'text-gray-500'" class="p-2">{{ exercise.name }}</div>
                                    <div>
                                        <small :class="exercise.successful ? 'text-gray-600 px-2' : 'text-gray-400'" class="text-xs py-2 my-auto"><span v-if="exercise.sets">{{ exercise.sets}}x</span>{{ exercise.reps }} reps</small>

                                        <div v-if="exercise.type">
                                            <div
                                                class="mb-2 text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 bg-green-200 text-green-700 rounded-full"
                                            >
                                                {{ exercise.type }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-gray-900">
                                    <div v-if="! exercise.successful" class="p-2" @click="successfulCard(exercise)">
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
            </div>
        </div>
    </AuthenticatedLayout>
</template>
