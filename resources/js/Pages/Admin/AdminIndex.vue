<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import {Head} from '@inertiajs/vue3';
import MainFooter from '@/Layouts/MainFooter.vue';
</script>

<template>
    <Head title="Dashboard"/>
    <AdminLayout>
        <div class="e-commerce-card-area">
        <div class="row justify-content-center">
          <div class="col-xxl-6">
            <h3>Welcome Dashboard Page</h3>
            <p>logged in</p>
          </div>
          <div class="col-xxl-6">
            <!-- <TotalSalesChart /> -->
          </div>
        </div>
      </div>
      <!-- <MainFooter /> -->
    </AdminLayout>
</template>
