<script setup>
import MainHeader from "@/Components/MainHeader.vue";
import MainSidebar from "@/Components/MainSidebar.vue";
import stateStore from "../utils/store";
import { ref, onMounted, computed, defineProps, watch } from "vue";


let stateStoreInstance = computed(() => stateStore);

</script>
<template>
    <MainHeader />
    <div :class="[
        'main-content expanded js-container',
        { collapsed: stateStoreInstance.open },
    ]">
        <MainSidebar />
        <div class="container-fluid">
            <div class="inner-main-content">
                <slot />
            </div>
        </div>
        <!-- <SettingsOption />
            <SettingsModal /> -->
    </div>

</template>
