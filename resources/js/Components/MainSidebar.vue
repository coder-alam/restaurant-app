<script setup>
import { Link, usePage, router } from "@inertiajs/vue3";
import { onMounted, ref } from "vue";

const active_menu = ref("");
onMounted(() => {
    if (usePage().url == "/product/category") {
        active_menu.value = "menu-sub collapse show";
    } else {
        active_menu.value = "menu-sub collapse";
    }
});
</script>

<template>
    <div id="SidebarLightMode" class="sidebar-area">
        <div id="accordionExample" class="layout-menu menu-vertical menu bg-menu-theme scroll-bar active hv-100">
            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner">
                <li class="menu-item">
                    <a aria-controls="collapse1" aria-expanded="true" class="menu-link menu-toggle"
                        data-bs-target="#collapse1" data-bs-toggle="collapse" href="javascript:void(0);">
                        <vue-feather class="menu-icon tf-icons" type="grid"></vue-feather>
                        <span class="title">Dashboard </span>
                    </a>

                    <ul id="collapse1" class="menu-sub collapse show" data-bs-parent="#accordionExample">
                        <li class="menu-item">
                            <Link class="menu-link" :href="route('admin.index')"> Home </Link>
                        </li>
                    </ul>
                </li>
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text fs-14 text-white">Apps</span>
                </li>

                <li class="menu-item">
                    <a aria-controls="collapse2" :aria-expanded="usePage().url == '/product/category' ?? true"
                        class="menu-link menu-toggle collapsed" data-bs-target="#collapse2" data-bs-toggle="collapse"
                        href="javascript:void(0);">
                        <!-- <vue-feather class="menu-icon tf-icons" type="file-text"></vue-feather> -->
                        <vue-feather type="shopping-cart" class="menu-icon tf-icons"></vue-feather>
                        <span class="title">Manage Product</span>
                    </a>
                    <ul id="collapse2" :class="active_menu" data-bs-parent="#accordionExample">
                        <li class="menu-item">
                            <Link class="menu-link" :href="route('product.category.index')">
                            Category
                            </Link>
                        </li>
                    </ul>
                </li>


                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text fs-14 text-white">Pages</span>
                </li>

                <li class="menu-item">
                    <router-link class="menu-link" to="/starter">
                        <vue-feather class="menu-icon tf-icons" type="star"></vue-feather>
                        <span class="title">Blank</span>
                    </router-link>
                </li>


                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text fs-14 text-white">Modules</span>
                </li>

                <li class="menu-item">
                    <a aria-controls="collapse11" aria-expanded="false" class="menu-link menu-toggle collapsed"
                        data-bs-target="#collapse11" data-bs-toggle="collapse" href="javascript:void(0);">
                        <vue-feather class="menu-icon tf-icons" type="message-circle"></vue-feather>
                        <span class="title">Form</span>
                    </a>
                    <ul id="collapse11" class="menu-sub collapse" data-bs-parent="#accordionExample">
                        <li class="menu-item">
                            <router-link class="menu-link" to="/form-layout"> Blank </router-link>
                        </li>

                    </ul>
                </li>


            </ul>
        </div>
    </div>
</template>
