<script setup>
import LayoutMain from "@/Layouts/LayoutMain.vue";

const props = defineProps({
    title: String,
});
</script>

<template>
    <LayoutMain :title="props.title">
        <template #content>
            {{ props.title }}
        </template>
    </LayoutMain>
</template>
