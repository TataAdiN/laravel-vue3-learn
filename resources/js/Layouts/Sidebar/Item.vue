<script setup>
defineProps({
    to: {
        type: String,
        required: true,
    },
    text: {
        type: String,
        required: true,
    },
    icon: {
        type: String,
        required: false,
    },
    isSub : {
        type: Boolean,
        required: true
    }
});
</script>
<template>
    <li>
        <a class="nav-link" :href="to">
            <i :class="icon" v-show="!isSub"></i>
            <span>{{ text }}</span>
        </a>
    </li>
</template>
