<template>
  <form @submit.prevent="submit">
    <default-form>
      <div class="mt-4">
        <jet-label for="name" value="Nome" />
        <jet-input
          id="name"
          type="text"
          class="mt-1 block w-full"
          v-model="form.name"
          required
          autofocus
        />
      </div>
      <div class="mt-4">
        <jet-label for="price" value="Preço" />
        <jet-input
          id="price"
          type="number"
          class="mt-1 block w-full"
          v-model="form.price"
          required
        />
      </div>
      <div class="flex items-center justify-end mt-4">
        <jet-button
          class="ml-4"
          :class="{ 'opacity-25': form.processing }"
          :disabled="form.processing"
        >
          {{ product ? "Alterar" : "Cadastrar" }}
        </jet-button>
      </div>
    </default-form>
  </form>
</template>

<script>
import JetButton from "@/Jetstream/Button.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetCheckbox from "@/Jetstream/Checkbox.vue";
import JetLabel from "@/Jetstream/Label.vue";
import JetValidationErrors from "@/Jetstream/ValidationErrors.vue";
import DefaultForm from "@/Components/Forms/Default.vue";

export default {
  components: {
    JetButton,
    JetInput,
    JetCheckbox,
    JetLabel,
    JetValidationErrors,
    DefaultForm,
  },
  props: {
    product: {
      type: Object,
      default: null,
    },
  },
  data() {
    return {
      form: this.$inertia.form({
        ...this.getClearForm(),
        ...this.product?.data,
      }),
    };
  },
  methods: {
    submit() {
      this.product
        ? this.form.put(this.route("products.update", this.product.data))
        : this.form.post(this.route("products.store"));
    },
    getClearForm() {
      return {
        name: null,
        price: null,
      };
    },
  },
};
</script>