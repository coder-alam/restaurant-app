<script setup>
import Checkbox from "@/Components/Checkbox.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
  canResetPassword: {
    type: Boolean,
  },
  status: {
    type: String,
  },
});

const form = useForm({
  email: "",
  password: "",
  remember: false,
});

const submit = () => {
  form.post(route("login"), {
    onFinish: () => form.reset("password"),
  });
};
</script>

<template>
  <GuestLayout>
    <Head title="Log in" />

    <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
      {{ status }}
    </div>
    <!--
        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
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
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ms-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Forgot your password?
                </Link>

                <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>
        </form> -->

    <div class="h-80vh">
      <div class="d-table">
        <div class="d-table-cell">
          <div
            class="card border-0 box-shadow border-radius-10 mb-4 w-100"
            style="max-width: 500px; margin: auto"
          >
            <div class="card-body p-30">
              <div class="text-center mb-4">
                <h4 class="fs-20 fw-semibold mb-2">Sign In</h4>
                <p class="fs-14 text-body">
                  Don’t have an account yet?
                  <Link :href="route('register')" class="text-primary text-decoration-none">
                    Sign Up
                  </Link>
                </p>
              </div>
              <form @submit.prevent="submit">
                <div class="form-group mb-4">
                  <label class="label">Email Address</label>
                  <input
                    type="text"
                    class="form-control"
                    v-model="form.email"
                    required
                    autofocus
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
                      v-model="form.password"
                      required
                      autocomplete="current-password"
                    />
                    <i
                      style="color: #919aa3; font-size: 16px; right: 15px !important"
                      class="ri-eye-off-line password-toggle-icon translate-middle-y top-50 end-0 position-absolute"
                      aria-hidden="true"
                    ></i>
                  </div>
                </div>
                <div class="form-group mb-4 d-flex justify-content-between">
                  <div class="c-form-check form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      name="remember"
                      id="flexCheckDefault"
                      v-model="form.remember"
                    />
                    <label
                      class="form-check-label fs-14 text-body ms-0"
                      for="flexCheckDefault"
                    >
                      Remember me
                    </label>
                  </div>
                  <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="text-primary fs-14 text-decoration-none"
                  >
                    Forget you password?
                  </Link>
                </div>
                <div class="form-group mb-4">
                  <button type="submit" class="default-btn w-100 d-block" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Sign In</button>
                </div>
                <div class="form-group mb-4">
                  <span class="or text-center d-block">
                    <span class="fs-18 fw-medium text-dark">OR</span>
                  </span>
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
    </div>
  </GuestLayout>
</template>
