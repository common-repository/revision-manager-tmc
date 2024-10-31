<template>
    <h2 class="nav-tab-wrapper">
        <NavigationTabsEntry tab-slug="general" v-model="value">
            General settings
        </NavigationTabsEntry>
        <NavigationTabsEntry tab-slug="pro" v-model="value">
            API Key
            <span v-if="hasCode() && !isCodeActive()" class="dashicons dashicons-lock" style="color: #da7979;"></span>
            <span v-if="!hasCode() && !isCodeActive()" class="dashicons dashicons-lock" style="color: #a6a6a6;"></span>
            <span v-if="isCodeActive()" class="dashicons dashicons-unlock" style="color: #2ecc71;"></span>
        </NavigationTabsEntry>
    </h2>
</template>

<script lang="ts" setup>
    import {computed} from "vue";
    import NavigationTabsEntry from "./NavigationTabsEntry.vue"
    import {isCodeActive, hasCode} from "../../settings";

    const emits = defineEmits(['update:modelValue']);

    const props = defineProps({
        modelValue: String
    });

    const value = computed({
        get(){
            return props.modelValue;
        },
        set(val){
            emits('update:modelValue', val);
        }
    });
</script>

<style scoped>

</style>