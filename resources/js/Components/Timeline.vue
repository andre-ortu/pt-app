<script setup>
defineProps({
    notes: {
        type: Object,
        required: true
    }
})
</script>

<template>
    <ol class="relative border-l border-gray-400 dark:border-gray-700 ml-3">
        <li class="mb-10 ml-4" v-for="note in notes.data">
            <div class="absolute w-3 h-3 bg-gray-400 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-600">{{  note.date  }}</time>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ note.body }}</h3>
        </li>
    </ol>
</template>
