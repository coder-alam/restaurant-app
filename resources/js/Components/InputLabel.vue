<script setup>
defineProps({
    value: {
        type: String,
    },
});
</script>

<template>
    <label class="form-label">
        <span class="text-danger">*</span>
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
