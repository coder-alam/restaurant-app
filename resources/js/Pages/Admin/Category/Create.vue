<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

import { toast } from "vue3-toastify";
import { Link, Head, router, useForm, usePage } from "@inertiajs/vue3";
import { ref, onMounted, computed, defineProps, watch } from "vue";


const props = defineProps({
    errors: Object,
    flash: {
        success: String,
        failed: String,
    },
});
const toast_options = {
    position: toast.POSITION.TOP_RIGHT,
    theme: "colored",
    "type": "default",
    "dangerouslyHTMLString": true
};
let flashSuccess = computed(() => usePage().props.flash.success);
let flashFailed = computed(() => usePage().props.flash.failed);

const form = useForm({
    name: '',
    slug: '',
    image: '',
    meta_title: '',
    meta_keywords: '',
    meta_description: '',
    meta_image: '',
    status: '',
});

const submit = (() => {
    form.post(route("product.category.store"), {
        preserveScroll: true,
        onSuccess: () => {
            if (usePage().props.flash.success) {
                toast.success(flashSuccess, toast_options);
                form.reset();
            } else if (usePage().props.flash.failed) {
                toast.error(flashFailed, toast_options);
            } else {
                console.log("Something Went Wrong!");
            }
        },
    });
})

onMounted(() => {
    // toast.success("Hello! Wow so easy!", toast_options);
})
</script>


<template>

    <Head title="Create" />
    <AdminLayout>

        <div class="card-title d-flex justify-content-between align-items-center mb-3">
            <h3 class="fw-medium fs-18 mb-0">Add New Category</h3>

            <!-- <div class="offcanvas-header fs-18">
                <Link :href="route('product.category.index')" as="button" type="button" class="btn btn-secondary">Go
                Back</Link>
            </div> -->
        </div>


        <div class="row d-flex justify-content-center">
            <div class="col-lg-7">
                <div class="card border-0 box-shadow border-radius-10 mb-4">
                    <div class="card-body p-4">
                        <div class="card-title mb-3">
                            <h3 class="fw-medium fs-18 mb-0">Add Product Category</h3>
                        </div>
                        <form @submit.prevent="submit">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <InputLabel for="name" value="Name" />
                                        <TextInput id="name" v-model="form.name" placeholder="Category name" autofocus
                                            type="text" />
                                        <InputError class="mt-2" :message="form.errors.name" />
                                    </div>
                                    <div class="mb-3">
                                        <InputLabel for="slug" value="Slug" />
                                        <TextInput id="slug" v-model="form.slug" placeholder="Slug" autofocus
                                            type="text" />
                                        <InputError class="mt-2" :message="form.errors.slug" />
                                    </div>

                                    <div class="mb-3">
                                        <InputLabel for="image" value="Image" />
                                        <TextInput type="file" id="image" @input="form.image = $event.target.files[0]"
                                            autofocus />
                                        <InputError class="mt-2" :message="form.errors.image" />
                                    </div>
                                    <div class="mb-3">
                                        <InputLabel for="meta_title" value="Meta title" />
                                        <TextInput id="meta_title" v-model="form.meta_title" placeholder="Meta title"
                                            autofocus type="text" />
                                        <InputError class="mt-2" :message="form.errors.meta_title" />
                                    </div>
                                    <div class="mb-3">
                                        <InputLabel for="meta_keywords" value="Meta Keywords" />
                                        <TextInput id="meta_keywords" v-model="form.meta_keywords"
                                            placeholder="Meta keywords" autofocus type="text" />
                                        <InputError class="mt-2" :message="form.errors.meta_keywords" />
                                    </div>
                                    <div class="mb-3">
                                        <InputLabel for="meta_description" value="Meta Description" />
                                        <TextInput id="meta_description" v-model="form.meta_description"
                                            placeholder="Meta description" autofocus type="text" />
                                        <InputError class="mt-2" :message="form.errors.meta_description" />
                                    </div>
                                    <div class="mb-3">
                                        <InputLabel for="name" value="Meta Image" />
                                        <TextInput type="file" @input="form.meta_image = $event.target.files[0]"
                                            autofocus />
                                        <InputError class="mt-2" :message="form.errors.meta_image" />
                                    </div>

                                    <div class="mb-3">
                                        <InputLabel for="name" value="Status" />
                                        <select v-model="form.status" class="form-select">
                                            <option value="1" selected>Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                        <InputError class="mt-2" :message="form.errors.status" />
                                    </div>
                                    <div class="mb-3">
                                        <Link :href="route('product.category.index')" as="button" type="button"
                                            class="btn btn-secondary">Go
                                        Back</Link>
                                        <PrimaryButton :class="{ 'opacity-25': form.processing }"
                                            :disabled="form.processing" class="ms-2">
                                            Create Category
                                        </PrimaryButton>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>
<style>
.form-control {
    /* background-color: #F4F6FA !important; 
    border: 1px solid #ced4da !important;
    height: 34px !important;    */

    /* background-color: #fff !important; */
    /*  border: 1px solid #e1d7d7 !important; */
}

.custom-btn {
    /* font-size: 5px !important; */
}
</style>
