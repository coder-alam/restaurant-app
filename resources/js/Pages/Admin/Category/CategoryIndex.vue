<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import feather from 'feather-icons';
const icons = Object.keys(feather.icons);
import { onMounted, ref, defineProps } from "vue";
const props = defineProps({
    errors: Object,
    flash: {
        success: String,
        failed: String,
    },
    categories: Object,
});

// Data Table Section
onMounted(() => {
    //   let items = props?.categories;
    $("#example2").DataTable({
        // scrollY: items.length > 5 ? 400 : "",
        order: false,
        paging: true,
        searching: true,
        lengthChange: true,
        // lengthMenu: [5, 10, 20, 50],
        lengthMenu: [
            [5, 10, 25, 50, 100, -1],
            [5, 10, 25, 50, 100, "All"],
        ],
        responsive: true
    });
    $(".dataTables_length").addClass("bs-select");
});


</script>


<template>

    <Head title="Category" />
    <AdminLayout>
        <div class="card-title d-flex justify-content-between align-items-center mb-3">
            <h3 class="fw-medium fs-18 mb-0">Categories</h3>

            <div class="offcanvas-header fs-18">
                <!-- <button type="button" class="btn btn-secondary">Add Category</button> -->
                <Link :href="route('product.category.create')" as="button" type="submit" class="btn btn-secondary">Add
                Category</Link>
            </div>
        </div>


        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="card border-0 box-shadow border-radius-10 mb-4">
                    <div class="card-body p-4">
                        <div class="all-table table-responsive-sm ">
                            <table id="example2" class="table align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-dark fw-medium pb-2 fs-14" scope="col">SL</th>
                                        <th class="text-dark fw-medium pb-2 fs-14" scope="col">Image</th>
                                        <th class="text-dark fw-medium pb-2 fs-14" scope="col">Title</th>
                                        <th class="text-dark fw-medium pb-2 fs-14" scope="col">Slug</th>
                                        <th class="text-dark fw-medium pb-2 fs-14" scope="col">Status</th>
                                        <th class="text-dark fw-medium pb-2 fs-14" scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr v-for="(category, index) in categories" :key="index">
                                        <td>{{ index + 1 }}</td>
                                        <td>
                                          
                                            <img :src="'/storage/uploads/category/' + category.image" style="height: 50px; width: 70px"
                                                class="" alt="Category Image">
                                            <!-- <img style="height: 40px; width: 60px" class="rounded" alt="Category Image" /> -->
                                        </td>

                                        <td>{{ category.name }}</td>
                                        <td>{{ category.slug }}</td>
                                        <td>



                                            <p style="font-size: 0.9rem">
                                                <span v-if="category.status == 1"
                                                    class="badge badge-lg bg-success">ACTIVE</span>
                                                <span v-else class="badge badge-lg bg-danger">INACTIVE</span>
                                            </p>
                                        </td>

                                        <td>
                                            <i data-feather="circle"></i>
                                            <Link class="custom-btn">
                                            <vue-feather class="btn btn-sm btn-outline-success mx-1" type="edit-3"
                                                stroke="blue"></vue-feather>
                                            </Link>
                                            <Link class="custom-btn" preserve-scroll>
                                            <vue-feather class="btn btn-sm btn-outline-danger mx-1" type="trash-2"
                                                stroke="black"></vue-feather>
                                            </Link>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </AdminLayout>
</template>
<style>
.form-control {
    /* background-color: #F4F6FA !important; */
    background-color: #fff !important;
    border: 1px solid #ced4da !important;
    height: 34px !important;
    /* color: var(--bodyColor) !important;
    font-size: 15px !important;
    padding: 10px 15px !important; */
    /* width: 100%;
  transition: var(--transition);
  border-radius: 5px; */
}

.custom-btn {
    /* font-size: 5px !important; */
}
</style>
