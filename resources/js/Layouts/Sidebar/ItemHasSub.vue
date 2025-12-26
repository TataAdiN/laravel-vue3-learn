<script setup>
defineProps({
    text: {
        type: String,
        required: true,
    },
    icon: {
        type: String,
        required: true,
    },
});
</script>
<template>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown">
            <i :class="icon"></i> <span>{{ text }}</span>
        </a>
        <ul class="dropdown-menu">
            <slot></slot>
        </ul>
    </li>
</template>