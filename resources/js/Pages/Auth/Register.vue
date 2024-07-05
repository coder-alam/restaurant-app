<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const form = useForm({
  name: "",
  email: "",
  password: "",
  password_confirmation: "",
});

const submit = () => {
  form.post(route("register"), {
    onFinish: () => form.reset("password", "password_confirmation"),
  });
};
</script>

<template>
  <GuestLayout>
    <Head title="Register" />

    <!-- <form @submit.prevent="submit">
            <div>
                <InputLabel for="name" value="Name" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />

                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    :href="route('login')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Already registered?
                </Link>

                <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>
        </form> -->
     <div class="d-table">
      <div class="d-table-cell">
        <div
          class="card border-0 box-shadow border-radius-10 mb-4 w-100"
          style="max-width: 500px; margin: auto"
        >
          <div class="card-body p-30">
            <div class="text-center mb-4">
              <h4 class="fs-20 fw-semibold mb-2">Sign Up</h4>
              <p class="fs-14 text-body">
                Already have an account?
                <Link :href="route('login')" class="text-primary text-decoration-none">
                  Sign In
                </Link>
              </p>
            </div>
            <form @submit.prevent="submit">
              <div class="form-group mb-4">
                <label class="label">Your Name</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="form.name"
                  required
                  autofocus
                  autocomplete="name"
                />
              </div>
              <div class="form-group mb-4">
                <label class="label">Email Address</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="form.email"
                  required
                  autocomplete="username"
                />
              </div>
              <div class="form-group mb-4">
                <label class="label">Your Password</label>
                <div class="password-wrapper position-relative">
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    value="password"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                  />
                  <i
                    style="color: #919aa3; font-size: 16px; right: 15px !important"
                    class="ri-eye-off-line password-toggle-icon translate-middle-y top-50 end-0 position-absolute"
                    aria-hidden="true"
                  ></i>
                </div>
              </div>
              <div class="form-group mb-4">
                <label class="label">Confirm Password</label>
                <div class="password-wrapper position-relative">
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    value="password"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                  />
                  <i
                    style="color: #919aa3; font-size: 16px; right: 15px !important"
                    class="ri-eye-off-line password-toggle-icon translate-middle-y top-50 end-0 position-absolute"
                    aria-hidden="true"
                  ></i>
                </div>
              </div>
              <div class="form-group mb-4">
                <div class="c-form-check form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label
                    class="form-check-label fs-14 text-body ms-0"
                    for="flexCheckDefault"
                  >
                    I accept the
                    <a href="#" class="text-decoration-none text-primary"
                      >Terms and Conditions</a
                    >
                  </label>
                </div>
              </div>
              <div class="form-group mb-4">
                <button
                  type="submit"
                  class="default-btn w-100 d-block"
                  :class="{ 'opacity-25': form.processing }"
                  :disabled="form.processing"
                >
                  Sign Up
                </button>
              </div>
              <div class="form-group mb-4">
                <span class="or text-center d-block"
                  ><span class="fs-18 fw-medium text-dark">OR</span></span
                >
              </div>
              <div class="form-group mb-0">
                <button
                  type="submit"
                  class="default-btn w-100 d-block"
                  style="background-color: #dd4b39"
                >
                  <i class="ri-google-fill"></i> Sign in with Google
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </GuestLayout>
</template>
