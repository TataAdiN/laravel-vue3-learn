<script setup>
import Header from "@/Layouts/Header.vue";
import Menu from "@/Layouts/Sidebar/Menu.vue";
import Breadcrumbs from "@/Layouts/Breadcrumbs.vue";
import Footer from "@/Layouts/Footer.vue";
import { Head, usePage } from "@inertiajs/vue3";
import { provide } from "vue";

const user = usePage().props.auth.user;
provide("user", user);

const props = defineProps({
    title: String,
});

const root = {
    link: "http://laravel-vue3-learn.test",
    text: "Dashboard",
};
const link_before = {
    link: "https://tataadin.id",
    text: "Web",
};
</script>

<template>
    <Head :title="props.title"></Head>
    <Header />
    <Menu />
    <div class="main-content">
        <section class="section">
            <Breadcrumbs
                :root="root"
                :current="'Blank Page'"
                :before="link_before"
            />
            <slot name="breadcrumbs" />
            <slot name="content" />
        </section>
    </div>
    <Footer />
</template>
