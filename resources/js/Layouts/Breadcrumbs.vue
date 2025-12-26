<script setup>
defineProps({
	root: {
		type: Object,
		default: "",
	},
	current: {
		type: String,
		default: "",
	},
	before: {
		type: Object,
		default: "",
	},
});
</script>
<template>
	<div class="section-header">
		<h1>{{ current }}</h1>
		<div class="section-header-breadcrumb">
			<div class="breadcrumb-item"><a :href="root.link ?? ''">{{ root.text ?? '' }}</a></div>
			<div class="breadcrumb-item"><a :href="before.link ?? ''">{{ before.text ?? '' }}</a></div>
			<div class="breadcrumb-item">{{ current }}</div>
		</div>
	</div>
</template>
