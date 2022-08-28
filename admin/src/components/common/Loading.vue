<script setup>
    const props = defineProps({
        dark: Boolean,
    });
</script>

<template>
    <span>
        <div class="lds-ellipsis">
            <div v-bind:style="dark ? 'background:#000' : 'background:var(--font_color_dark)'"></div>
            <div v-bind:style="dark ? 'background:#000' : 'background:var(--font_color_dark)'"></div>
            <div v-bind:style="dark ? 'background:#000' : 'background:var(--font_color_dark)'"></div>
            <div v-bind:style="dark ? 'background:#000' : 'background:var(--font_color_dark)'"></div>
        </div>
    </span>
</template>
